<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'first_name'=> 'required',
            'last_name' => 'required'
        ];
    }
    public function attributes()
    {
    return [
        'first_name' => 'First Name',
        'last_name' => 'Last Name'
    ];
    }
}
