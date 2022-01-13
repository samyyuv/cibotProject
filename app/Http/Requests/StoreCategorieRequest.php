<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategorieRequest extends FormRequest
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
        if (request()->routeIs('admin.categories.store')) {
            $imageRule = 'mimes:jpeg,jpg,png,gif|required|max:10000';
        } elseif (request()->routeIs('admin.categories.update')) {
            $imageRule = 'mimes:jpeg,jpg,png,gif|sometimes|max:10000';
        }

        return [
            'titre' => 'required',
            'description' => 'required',
            'sous_titre' => 'required',
            'photo' => $imageRule,
        ];
    }
}
