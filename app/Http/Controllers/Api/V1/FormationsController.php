<?php

namespace App\Http\Controllers\Api\V1;

use App\Formation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreFormationsRequest;
use App\Http\Requests\Admin\UpdateFormationsRequest;
use App\Http\Controllers\Traits\FileUploadTrait;

class FormationsController extends Controller
{
    use FileUploadTrait;

    public function index()
    {
        return Formation::all();
    }

    public function show($id)
    {
        return Formation::findOrFail($id);
    }

    public function update(UpdateFormationsRequest $request, $id)
    {
        $request = $this->saveFiles($request);
        $formation = Formation::findOrFail($id);
        $formation->update($request->all());
        

        return $formation;
    }

    public function store(StoreFormationsRequest $request)
    {
        $request = $this->saveFiles($request);
        $formation = Formation::create($request->all());
        

        return $formation;
    }

    public function destroy($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return '';
    }
}
