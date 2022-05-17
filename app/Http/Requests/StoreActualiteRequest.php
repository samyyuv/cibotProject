<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreActualiteRequest extends FormRequest
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
        if (request()->routeIs('admin.actualites.store')) {
            $imageRule = 'mimes:jpeg,jpg,png,gif|required|max:20000';
        } elseif (request()->routeIs('admin.actualites.update')) {
            $imageRule = 'mimes:jpeg,jpg,png,gif|sometimes|max:20000';
        }

        return [
            'titre' => 'required',
            'description' => 'required',
            'titre_seo' => 'nullable',
            'description_seo' => 'nullable',
            'active' => 'nullable',
            'photo.*.photo' => $imageRule,
        ];
    }
}
