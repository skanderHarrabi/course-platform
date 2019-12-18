<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;

class SystemCalendarController extends Controller
{
    public function index() 
    {
        $events = []; 

        foreach (\App\Formation::all() as $formation) { 
           $crudFieldValue = $formation->getOriginal('date_debut_formation'); 
           $end=  $formation->getOriginal('date_fin_formation'); 
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
                'end'=>$end,
                'url'   => route('admin.formations.edit', $formation->id)
           ]; 
        } 


       return view('admin.calendar' , compact('events')); 
    }

}
