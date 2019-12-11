<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FraisKmRequest extends FormRequest
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
            'depart' => 'required', 'string', 'max:100',
            'arrivee' => 'required', 'string', 'max:100',
            'title' => 'string', 'max:100',
            'description' => 'string', 'max:500',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'trajets' => 'required|numeric',
            'ttc' => 'required|numeric',
        ];
    }
}
