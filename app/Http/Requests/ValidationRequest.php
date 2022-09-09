<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidationRequest extends FormRequest
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


     /** Determinate the validation rules for the attributes */
    public function rules()
    {
        return [
            //the title is obligatory and can't be more than 100 characteres.
            'title' =>'required|max:100',
            'description' => 'required',
            'editorial' => 'required',
            //the year_published is obligatory and need to be a numeric value.
            'year_published' => 'required|numeric',

        ];
    }
}
