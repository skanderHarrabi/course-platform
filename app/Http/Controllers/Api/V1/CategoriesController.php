<?php

namespace App\Http\Controllers\Api\V1;

use App\Categorie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreCategoriesRequest;
use App\Http\Requests\Admin\UpdateCategoriesRequest;

class CategoriesController extends Controller
{
    public function index()
    {
        return Categorie::all();
    }

    public function show($id)
    {
        return Categorie::findOrFail($id);
    }

    public function update(UpdateCategoriesRequest $request, $id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->update($request->all());
        

        return $categorie;
    }

    public function store(StoreCategoriesRequest $request)
    {
        $categorie = Categorie::create($request->all());
        

        return $categorie;
    }

    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();
        return '';
    }
}
