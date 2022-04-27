<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOeuvreRequest extends FormRequest
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
        if (request()->routeIs('admin.oeuvres.store')) {
            $imageRule = 'mimes:jpeg,jpg,png,gif|required';
        } elseif (request()->routeIs('admin.oeuvres.update')) {
            $imageRule = 'mimes:jpeg,jpg,png,gif|sometimes';
        }

        return [
            'titre' => 'required',
            'sous_titre' => 'required',
            'description' => 'required',
            'date' => 'required',
            'active' => 'nullable',
            'photos.*.photo' => $imageRule,
        ];
    }
}
