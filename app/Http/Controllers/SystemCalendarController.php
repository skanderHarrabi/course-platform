<?php
namespace App\Http\Controllers;

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


       return view('formateur.calendar' , compact('events')); 
    }

}
