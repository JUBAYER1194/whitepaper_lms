<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClassEventCreateRequest extends FormRequest
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
            'name'=>'required|max:40',
            'details'=>'required|max:100',
            'subject_id'=>'required',
            'color'=>'required',
            'start'=>'required',
            'end'=>'required',
        ];
    }
}
