<?php

namespace App\Http\Controllers;
use App\Setting;
use App\Categorie;
use App\Formation;
use App\User;
use App\Profile;
use App\Tag;
use App\Place;
use App\Order;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home')
        ->with('cources_count',Formation::all()->count())
        ->with('categorie_count',Categorie::all()->count())
        ->with('students_count',User::where('role_id',3)->count())
        ->with('teachers_count',User::where('role_id',2)->count())
        ->with('room_count',Place::all()->count())
        ->with('reserved_cources_count',Order::all()->count());
    }
}
