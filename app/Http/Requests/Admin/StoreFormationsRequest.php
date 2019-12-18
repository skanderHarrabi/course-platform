<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormationsRequest extends FormRequest
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
            'title' => 'max:255|required',
            'featured' => 'mimes:png,jpg,jpeg,gif|required',
            'category_id' => 'required',
            'date_debut_formation' => 'required|date_format:'.config('app.date_format'),
            'tag_id' => 'required',
            'tag_id.*' => 'exists:tags,id',
            'duree' => 'max:2147483647|required|numeric',
            'place_id' => 'required',
            'description' => 'required',
        ];
    }
}
