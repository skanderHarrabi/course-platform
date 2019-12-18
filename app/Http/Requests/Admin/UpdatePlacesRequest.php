<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePlacesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            
            'nom' => 'max:255|required',
            'nombre_de_place' => 'max:2147483647|required|numeric',
            'disponibilite' => 'required',
            'localisation_address'=>'required',
            'localisation_latitude'=>'required',
            'localisation_longitude'=>'required',
        ];
    }
}
