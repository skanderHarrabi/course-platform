<?php

namespace App\Http\Controllers\Api\V1;

use App\Place;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePlacesRequest;
use App\Http\Requests\Admin\UpdatePlacesRequest;

class PlacesController extends Controller
{
    public function index()
    {
        return Place::all();
    }

    public function show($id)
    {
        return Place::findOrFail($id);
    }

    public function update(UpdatePlacesRequest $request, $id)
    {
        $place = Place::findOrFail($id);
        $place->update($request->all());
        

        return $place;
    }

    public function store(StorePlacesRequest $request)
    {
        $place = Place::create($request->all());
        

        return $place;
    }

    public function destroy($id)
    {
        $place = Place::findOrFail($id);
        $place->delete();
        return '';
    }
}
