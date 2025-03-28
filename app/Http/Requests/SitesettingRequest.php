<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SitesettingRequest extends FormRequest
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
            'meta_key' => '',
            'meta_value' => '',
            'type' => '',
            'group' => '',
            'slug' => '',
            'position' => '',


    ];
    }
}
