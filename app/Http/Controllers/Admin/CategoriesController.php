<?php

namespace App\Http\Controllers\Admin;

use App\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    /**
     * Display a listing of Categorie.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! Gate::allows('categorie_access')) {
            return abort(401);
        }


        if (request('show_deleted') == 1) {
            if (! Gate::allows('categorie_delete')) {
                return abort(401);
            }
            $categories = Categorie::onlyTrashed()->get();
        } else {
            $categories = Categorie::all();
        }
 
        return view('admin.categories.index', compact('categories'));
    }

    /**
     * Show the form for creating new Categorie.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (! Gate::allows('categorie_create')) {
            return abort(401);
        }
        return view('admin.categories.create');
    }

    /**
     * Store a newly created Categorie in storage.
     *
     * @param  \App\Http\Requests\StoreCategoriesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoriesRequest $request)
    {
        if (! Gate::allows('categorie_create')) {
            return abort(401);
        }
        $categorie = Categorie::create($request->all());
        $notification = array(
            'message' => 'Successfully created Category!',
            'alert-type' => 'success'
        );


        return redirect()->route('admin.categories.index')->with($notification);
    }


    /**
     * Show the form for editing Categorie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (! Gate::allows('categorie_edit')) {
            return abort(401);
        }
        $categorie = Categorie::findOrFail($id);

        return view('admin.categories.edit', compact('categorie'));
    }

    /**
     * Update Categorie in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoriesRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoriesRequest $request, $id)
    {
        if (! Gate::allows('categorie_edit')) {
            return abort(401);
        }
        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());



        return redirect()->route('admin.categories.index');
    }


    /**
     * Display Categorie.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if (! Gate::allows('categorie_view')) {
            return abort(401);
        }
        $formations = \App\Formation::where('category_id', $id)->get();

        $categorie = Categorie::findOrFail($id);

        return view('admin.categories.show', compact('categorie', 'formations'));
    }


    /**
     * Remove Categorie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (! Gate::allows('categorie_delete')) {
            return abort(401);
        }
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Delete all selected Categorie at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if (! Gate::allows('categorie_delete')) {
            return abort(401);
        }
        if ($request->input('ids')) {
            $entries = Categorie::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }


    /**
     * Restore Categorie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function restore($id)
    {
        if (! Gate::allows('categorie_delete')) {
            return abort(401);
        }
        $categorie = Categorie::onlyTrashed()->findOrFail($id);
        $categorie->restore();

        return redirect()->route('admin.categories.index');
    }

    /**
     * Permanently delete Categorie from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perma_del($id)
    {
        if (! Gate::allows('categorie_delete')) {
            return abort(401);
        }
        $categorie = Categorie::onlyTrashed()->findOrFail($id);
        $categorie->forceDelete();

        return redirect()->route('admin.categories.index');
    }
}
