<?php

namespace App\Http\Controllers\Admin;
use DB;
use App\Setting;
use App\Categorie;
use App\Formation;
use App\User;
use Auth;
use App\Order;
use App\Profile;
use App\Tag;
use Session;
use Stripe\Stripe;
use Stripe\Charge;
use App\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFormationsRequest;
use App\Http\Requests\Admin\UpdateFormationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class FormationsController extends Controller
{
    use FileUploadTrait;

    /**
     * Display a listing of Formation.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('formation_access')) {
            return abort(401);
    }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('formation_delete')) {
                return abort(401);
            }
            $formations = Formation::onlyTrashed()->get();
        } else {
            $formations = Formation::all();
        }

        return view('admin.formations.index', compact('formations'));
    }

    /**
     * Show the form for creating new Formation.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('formation_create')) {
            return abort(401);
        }
        
        $categories = \App\Categorie::get()->pluck('name', 'id')->prepend('please select', '');
        $tag_ids = \App\Tag::get()->pluck('tag', 'id');
       // $formateur=\App\User::get()->where('role_id','=',2)->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $places = \App\Place::get()->pluck('nom', 'id')->prepend('please select', '');
        $formateur=DB::table('users')->where('role_id',2)->pluck('name','name' )->prepend('please select', '');
        
        return view('admin.formations.create', compact('categories', 'tag_ids', 'places','formateur'));
    }

    /**
     * Store a newly created Formation in storage.
     *
     * @param  \App\Http\Requests\StoreFormationsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormationsRequest $request)
    {
        if (! Gate::allows('formation_create')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
       // dd($request->all());
        $formation = Formation::create($request->all());
        // $formateur->date_fin_formation=$request->date_fin_formation;
        // $formateur->save();
        $formation->slug=str_slug($request->title);
        $formation->save();
        $formation->tag_id()->sync(array_filter((array)$request->input('tag_id')));

        $notification = array(
            'message' => 'Successfully created cource!',
            'alert-type' => 'success'
        );
        return redirect()->route('admin.formations.index')->with($notification);
    }


    /**
     * Show the form for editing Formation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('formation_edit')) {
            return abort(401);
        }
        
        $categories = \App\Categorie::get()->pluck('name', 'id')->prepend(trans('quickadmin.qa_please_select'), '');
        $tag_ids = \App\Tag::get()->pluck('tag', 'id');
        $formateur=DB::table('users')->where('role_id',2)->pluck('name','name' )->prepend(trans('quickadmin.qa_please_select'), '');
        $places = \App\Place::get()->pluck('nom', 'id')->prepend(trans('quickadmin.qa_please_select'), '');

        $formation = Formation::findOrFail($id);

        return view('admin.formations.edit', compact('formation', 'categories', 'tag_ids', 'places','formateur'));
    }

    /**
     * Update Formation in storage.
     *
     * @param  \App\Http\Requests\UpdateFormationsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormationsRequest $request, $id)
    {
        if (! Gate::allows('formation_edit')) {
            return abort(401);
        }
        $request = $this->saveFiles($request);
        $formation = Formation::findOrFail($id);
        $formation->update($request->all());
        $formation->tag_id()->sync(array_filter((array)$request->input('tag_id')));



        return redirect()->route('admin.formations.index');
    }


    /**
     * Display Formation.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('formation_view')) {
            return abort(401);
        }
        $formation = Formation::findOrFail($id);

        return view('admin.formations.show', compact('formation'));
    }


    /**
     * Remove Formation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('formation_delete')) {
            return abort(401);
        }
        $formation = Formation::findOrFail($id);
        $formation->delete();

        return redirect()->route('admin.formations.index');
    }

    /**
     * Delete all selected Formation at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('formation_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Formation::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Formation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('formation_delete')) {
            return abort(401);
        }
        $formation = Formation::onlyTrashed()->findOrFail($id);
        $formation->restore();

        return redirect()->route('admin.formations.index');
    }

    /**
     * Permanently delete Formation from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('formation_delete')) {
            return abort(401);
        }
        $formation = Formation::onlyTrashed()->findOrFail($id);
        $formation->forceDelete();

        return redirect()->route('admin.formations.index');
    }

    public function getAddToCart(Request $request,$id)
    {
      $formation = Formation::find($id);
      $oldCart= Session::has('cart')?Session::get('cart'):null;
      $cart=new Cart($oldCart);
      $cart->add($formation,$formation->id);

      $request->session()->put('cart',$cart);
      return back();
    }
    public function getReduceByOne($id)
    {
      $oldCart= Session::has('cart') ? Session::get('cart') : null;
      $cart=new Cart($oldCart);
      $cart->reduceByOne($id);
     
      Session::put('cart', $cart);
      return redirect()->route('index');
    }
public function getRemoveItem($id)
{
    $oldCart= Session::has('cart') ? Session::get('cart'):null;
    $cart=new Cart($oldCart);
    $cart->removeItem($id);
    Session::put('cart',$cart);
    return back();   
}

    public function getCart()
    {
       if(!Session::has('cart'))
       {
        return view('shopping-cart') 
            ->with('title',Setting::first()->site_name)
            ->with('settings',Setting::first())
            ->with('categories',Categorie::all()) 
            ->with('formateurs',User::where('role_id',2)->take(3)->get())
            ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
            ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
        }
       $oldCart =Session::get('cart');
       $cart=new Cart($oldCart);
       return view('shopping-cart',['format'=>$cart->items,'totalPrice'=>$cart->totalPrice]) ->with('title',Setting::first()->site_name)
       ->with('settings',Setting::first())
       ->with('categories',Categorie::all()) 
       ->with('formateurs',User::where('role_id',2)->take(3)->get())
       ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
       ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
    }

    public function getCheckout()
    {
        if(!Session::has('cart'))
        {
         return view('shopping-cart') 
             ->with('title',Setting::first()->site_name)
             ->with('settings',Setting::first())
             ->with('categories',Categorie::all()) 
             ->with('formateurs',User::where('role_id',2)->take(3)->get())
             ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
             ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
         }
       $oldCart =Session::get('cart');
       $cart=new Cart($oldCart);
       $total=$cart->totalPrice;
       return view('checkout',['total'=>$total,'format'=>$cart->items]) 
                    ->with('title',Setting::first()->site_name)
                    ->with('settings',Setting::first())
                    ->with('categories',Categorie::all()) 
                    ->with('formateurs',User::where('role_id',2)->take(3)->get())
                    ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
                    ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());         
    }
   
  public function postcheckout(Request $request)
  {
    if(!Session::has('cart'))
    {
     return view('shopping-cart') 
         ->with('title',Setting::first()->site_name)
         ->with('settings',Setting::first())
         ->with('categories',Categorie::all()) 
         ->with('formateurs',User::where('role_id',2)->take(3)->get())
         ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
         ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
     }
     $oldCart =Session::get('cart');
     $cart=new Cart($oldCart);
     
     Stripe::setApiKey('sk_test_qRJLKwBtQ2bd2guBwituavSz');
     try {
        $charge= Charge::create( array(
                        "amount" => $cart->totalPrice *100,
                        "currency" => "usd",
                        "source" => "tok_mastercard",
                        "description" => "Test charge"
                ));
        $order=new Order();
        $order->cart = serialize($cart);
        $order->payment_id= $charge->id;
        Auth::user()->orders()->save($order);
     } catch(\Exception $e){
         return redirect()->route('checkout')->with('error',$e->getMessage());
     }

     Session::forget('cart');
     return redirect()->route('index')->with('success','sucessfully purchased');
  }
}
