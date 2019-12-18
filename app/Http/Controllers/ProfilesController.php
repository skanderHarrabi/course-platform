<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\StoreFormationsRequest;
use App\Http\Requests\Admin\UpdateFormationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;
class ProfilesController extends Controller
{use FileUploadTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.users.profile')->with('user',Auth::user());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
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


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
