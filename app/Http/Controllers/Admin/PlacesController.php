<?php

namespace App\Http\Controllers\Admin;

use App\Place;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StorePlacesRequest;
use App\Http\Requests\Admin\UpdatePlacesRequest;

class PlacesController extends Controller
{
    /**
     * Display a listing of Place.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('place_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('place_delete')) {
                return abort(401);
            }
            $places = Place::onlyTrashed()->get();
        } else {
            $places = Place::all();
        }

        return view('admin.places.index', compact('places'));
    }

    /**
     * Show the form for creating new Place.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('place_create')) {
            return abort(401);
        }
        return view('admin.places.create');
    }

    /**
     * Store a newly created Place in storage.
     *
     * @param  \App\Http\Requests\StorePlacesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlacesRequest $request)
    {
        if (! Gate::allows('place_create')) {
            return abort(401);
        }
        $place = Place::create($request->all());

        $notification = array(
            'message' => 'Successfully created place!',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.places.index')->with($notification);
    }


    /**
     * Show the form for editing Place.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('place_edit')) {
            return abort(401);
        }
        $place = Place::findOrFail($id);

        return view('admin.places.edit', compact('place'));
    }

    /**
     * Update Place in storage.
     *
     * @param  \App\Http\Requests\UpdatePlacesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlacesRequest $request, $id)
    {
        if (! Gate::allows('place_edit')) {
            return abort(401);
        }
        $place = Place::findOrFail($id);
        $place->update($request->all());



        return redirect()->route('admin.places.index');
    }


    /**
     * Display Place.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('place_view')) {
            return abort(401);
        }
        $formations = \App\Formation::where('place_id', $id)->get();

        $place = Place::findOrFail($id);

        return view('admin.places.show', compact('place', 'formations'));
    }


    /**
     * Remove Place from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('place_delete')) {
            return abort(401);
        }
        $place = Place::findOrFail($id);
        $place->delete();

        return redirect()->route('admin.places.index');
    }

    /**
     * Delete all selected Place at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('place_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Place::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Place from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('place_delete')) {
            return abort(401);
        }
        $place = Place::onlyTrashed()->findOrFail($id);
        $place->restore();

        return redirect()->route('admin.places.index');
    }

    /**
     * Permanently delete Place from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('place_delete')) {
            return abort(401);
        }
        $place = Place::onlyTrashed()->findOrFail($id);
        $place->forceDelete();

        return redirect()->route('admin.places.index');
    }
}
