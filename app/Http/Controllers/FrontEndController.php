<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Categorie;
use App\Formation;
use App\User;
use App\Profile;
use App\Tag;
use App\Notifications\Discussion as Discuss;
use App\Cart;
use App\Order;
use App\reply;
use App\Discussion;
use Session;
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
class FrontEndController extends Controller
{
  public function index()
  {   

      return view('index')
      ->with('title',Setting::first()->site_name)
      ->with('categories',Categorie::all())
      ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
      ->with('teachers',User::all()->where('role_id',2))
      ->with('formateurs',User::where('role_id',2)->take(3)->get())
      ->with('settings',Setting::first())
      ->with('students',User::where('role_id',3)->count())
      ->with('cources',Formation::count())
      ->with('t',User::where('role_id',2)->count());


    //  $formateur=DB::table('users')->pluck('name','name' )->prepend(trans('quickadmin.qa_please_select'), '');
    }

 public function formationsingle($slug)
 {
   $formation=Formation::where('slug',$slug)->first();
   return view('formation_detail')->with('f',$formation)
                                  ->with('title',Setting::first()->site_name)
                                  ->with('settings',Setting::first())
                                  ->with('categories',Categorie::all()) 
                                  ->with('formateurs',User::where('role_id',2)->take(3)->get())
                                  ->with('teachers',User::where('role_id',2)->take(5)->get())
                                  ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
                                  ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
     

 }
public function getcources()
{ $orders=Auth::user()->orders;
  $orders->transform(function($order,$key)
{
  $order->cart = unserialize($order->cart);
  return $order;
});
  return view('mycources') ->with('title',Setting::first()->site_name)
  ->with('settings',Setting::first())
  ->with('categories',Categorie::all()) 
  ->with('formateurs',User::where('role_id',2)->take(3)->get())
  ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
  ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
  ->with('user',Auth::user())
  ->with('orders',$orders);
}

 public function showregister()
 {
   return view('register')
   ->with('title',Setting::first()->site_name)
   ->with('settings',Setting::first())
   ->with('categories',Categorie::all()) 
   ->with('formateurs',User::where('role_id',2)->take(3)->get())
   ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
   ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
 }
 public function register(Request $request)
 { 
$this->validate($request,
[
  'name'=>'required|max:255',
  'email'=>'required|email|unique:users|max:255',
  'password'=>'required|confirmed|max:255',
]);
$user=User::create($request->all());
$user->role_id=3;
$user->save();
$profile=Profile::create([
  'user_id'=>$user->id,
  'avatar'=>'uploads/avatars/2.png'
]);
$notification = array(
  'message' => 'Successfully registred !! you are loged in automatically!',
  'alert-type' => 'success'
);
Auth::login($user);
return redirect()->route('front.login')->with($notification);
 }

 public function showlogin()
 {
   return view('login')
   ->with('title',Setting::first()->site_name)
   ->with('settings',Setting::first())
   ->with('categories',Categorie::all()) 
   ->with('formateurs',User::where('role_id',2)->take(3)->get())
   ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
   ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get());
 } 

 public function login(Request $request)
 { 
$this->validate($request,[
  'email'=>'required|email|max:255',
  'password'=>'required|max:255',
]);

if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
{   
  if(Auth::user()->role_id===3)
    return redirect()->route('profileFront');
  else
  return redirect()->route('formateurpofile');
  
}
return back()->with('error','Wrong login details') ;
 }

 public function profile()
 {
   return view('profile')  ->with('title',Setting::first()->site_name)
   ->with('settings',Setting::first())
   ->with('categories',Categorie::all()) 
   ->with('formateurs',User::where('role_id',2)->take(3)->get())
   ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
   ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
   ->with('user',Auth::user());
 }
 public function logout()
 {
   Auth::logout();
   return redirect('/Frontlogin');
 }
 public function allcource()
 {
   return view('all_cources')
                          ->with('title',Setting::first()->site_name)
                          ->with('settings',Setting::first())
                          ->with('categories',Categorie::all()) 
                          ->with('formateurs',User::where('role_id',2)->take(3)->get())
                          ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
                          ->with('tags',Tag::all())
                          ->with('cources',Formation::all())
                          ->with('teachers',User::where('role_id',2)->take(5)->get());
 }
 public function generalSetting()
 {
   return view('setting_general')
                          ->with('title',Setting::first()->site_name)
                          ->with('settings',Setting::first())
                          ->with('categories',Categorie::all()) 
                          ->with('formateurs',User::where('role_id',2)->take(3)->get())
                          ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
                          ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
                          ->with('user',Auth::user());
 }
 public function passSetting()
 {
   return view('setting_pass')
                          ->with('title',Setting::first()->site_name)
                          ->with('settings',Setting::first())
                          ->with('categories',Categorie::all()) 
                          ->with('formateurs',User::where('role_id',2)->take(3)->get())
                          ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
                          ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
                          ->with('user',Auth::user());
 }
 public function category($id){
   $category=Categorie::find($id);
   $cources=Formation::where('category_id',$category->id)->get();
   return view('all_cources') ->with('title',Setting::first()->site_name)
   ->with('settings',Setting::first())
   ->with('categories',Categorie::all()) 
   ->with('formateurs',User::where('role_id',2)->take(3)->get())
   ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
   ->with('tags',Tag::all())
   ->with('cources',$cources)
   ->with('teachers',User::where('role_id',2)->take(5)->get());
    
 }
 public function updateProfile(Request $request)
 {
    $this->validate($request,[
        'name'=>'required',
        'email'=>'required',
        'facebook'=>'required|url',
        'linkedin'=>'required|url',
  ]);
 
    $user=Auth::user();
   // $request = $this->saveFiles($request);
   
      if($request->hasFile('avatar'))
      {
          $avatar=$request->avatar;
        $avatar_new_name=time().$avatar->getClientOriginalName();
     $avatar->move('uploads/avatars',$avatar_new_name);
         $user->profile->avatar='uploads/avatars/'.$avatar_new_name;
         $user->profile->save();
     }
   
   $user->name = $request->name;
   $user->email= $request->email;
   $user->profile->facebook=$request->facebook;
   $user->profile->linkedin=$request->linkedin;
   $user->profile->about=$request->about;
   $user->save();
   $user->profile->save();
   //$user->update($request->all());
return redirect()->back();
 }
 public function categorieResult($id)
 {
  $formation=Formation::where('category_id',$id)->get();

  return view('all_cources')
                           ->with('title',\App\Setting::first()->site_name)
                           ->with('settings',\App\Setting::first())
                           ->with('categories',\App\Categorie::all()) 
                           ->with('formateurs',\App\User::where('role_id',2)->take(3)->get())
                           ->with('formations',\App\Formation::orderBy('created_at','desc')->take(3)->get())
                           ->with('tags',\App\Tag::all())
                           ->with('cources',$formation)
                           ->with('teachers',\App\User::where('role_id',2)->take(5)->get());
 }
 public function formateurprofile()
 {$orders=Order::all();
  $orders->transform(function($order,$key)
{
  $order->cart = unserialize($order->cart);
  return $order;
});
   return view('formateur.formateur_profile')->with('title',Setting::first()->site_name)
   ->with('settings',Setting::first())
   ->with('categories',Categorie::all()) 
   ->with('formateurs',User::where('role_id',2)->take(3)->get())
   ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
   ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
   ->with('user',Auth::user())
   ->with('orders',$orders);
 }
 public function formateurgeneralSetting()
 {
  return view('formateur.formateur_general')
  ->with('title',Setting::first()->site_name)
  ->with('settings',Setting::first())
  ->with('categories',Categorie::all()) 
  ->with('formateurs',User::where('role_id',2)->take(3)->get())
  ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
  ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
  ->with('user',Auth::user());
 }
 public function formateurpassSetting()
 {
  return view('formateur.formateur_pass')
  ->with('title',Setting::first()->site_name)
  ->with('settings',Setting::first())
  ->with('categories',Categorie::all()) 
  ->with('formateurs',User::where('role_id',2)->take(3)->get())
  ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
  ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
  ->with('user',Auth::user());
 }

 public function calendar()
 {
 
      $events = []; 
      $orders=Order::all();
      $orders->transform(function($order,$key)
    {
      $order->cart = unserialize($order->cart);
      return $order;
    });
    foreach($orders as $order)
    {
         foreach($order->cart->items as $item)
         {
    if($item['item']['formateur']===Auth::user()->name)
                 {
 foreach (\App\Formation::where('id',$item['item']['id'])->get() as $formation) { 
         $crudFieldValue = $formation->getOriginal('date_debut_formation'); 
         $crudFieldValue2= $formation->getOriginal('date_fin_formation');
         if (! $crudFieldValue) {
             continue;
         }

         $eventLabel     = $formation->title; 
         $prefix         = ''; 
         $suffix         = ''; 
         $dataFieldValue = trim($prefix . " " . $eventLabel . " " . $suffix); 
         $events[]       = [ 
              'title' => $dataFieldValue, 
              'start' => $crudFieldValue, 
              'end' => $crudFieldValue2, 
              'url'   => route('admin.formations.edit', $formation->id)
         ]; 
      }
                 }
                }
                }



      


     return view('formateur.calender' , compact('events'))->with('title',Setting::first()->site_name)
     ->with('settings',Setting::first())
     ->with('categories',Categorie::all()) 
     ->with('formateurs',User::where('role_id',2)->take(3)->get())
     ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
     ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
     ->with('user',Auth::user()); 
    }
    public function contact()
    {
      return view('contact');
    }
    public function message()
 {
   return view('message')
                          ->with('title',Setting::first()->site_name)
                          ->with('settings',Setting::first())
                          ->with('categories',Categorie::all()) 
                          ->with('formateurs',User::where('role_id',2)->take(3)->get())
                          ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
                          ->with('cources',Formation::all())
                          ->with('user',Auth::user());
 }
 public function discussionStore()
 {
   $r=request();
   $this->validate($r,[
       'formation_id'=>'required',
       'content'=>'required',
       'title'=>'required'
   ]);
   $discussion =Discussion::create([
     'title'=>$r->title,
     'content'=>$r->content,
     'formation_id'=>$r->formation_id,
    'user_id'=>Auth::id()
   ]);
    Session::flash('success','Discussion succefully created');
   return redirect()->route('discussionshow' , ['id'=>$discussion->id]);
 }
 public function discussionshow($id)
 {
   $discussion = Discussion::where('id',$id)->first();
   return view('discussionshow')->with('d',$discussion);
 }

 public function replay($id)
 {
   $d=Discussion::find($id);
   $replay=Reply::create([
     'user_id' =>Auth::id(),
     'discussion_id'=>$id,
     'content'=>request()->reply
   ]);

   $notification = array(
    'message' => 'Replied to discussion',
    'alert-type' => 'success'
);
  auth()->user()->notify(new Discuss($d));
  return redirect()->back()->with($notification);
 }

}
