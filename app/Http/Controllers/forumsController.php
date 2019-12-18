<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Discussion;
use App\Formation;
use App\Setting;
use App\Categorie;
use App\User;
use App\Profile;
use App\Tag;
use App\Order;
use Auth;
class forumsController extends Controller
{
   public function index()
   {
       $discussions = Discussion::orderBy('created_at','desc')->paginate(3);
       return view('forum',['discussions'=>$discussions]);
   }

   public function formation($slug)
   {
       $formation=Formation::where('slug',$slug)->first();
       return view('formation_discussion')->with('discussions',$formation->discussions()->paginate(5))
       ->with('formatio',$formation);
   }
   public function mydiscussions()
   {
    $discussions = Discussion::where('user_id',Auth::id())->paginate(3);
    return view('mydiscussion',['discussions'=>$discussions])->with('title',Setting::first()->site_name)
    ->with('settings',Setting::first())
    ->with('categories',Categorie::all()) 
    ->with('formateurs',User::where('role_id',2)->take(3)->get())
    ->with('formations',Formation::orderBy('created_at','desc')->take(3)->get())
    ->with('cources',Formation::orderBy('created_at','desc')->take(8)->get())
    ->with('user',Auth::user());
   }
}
