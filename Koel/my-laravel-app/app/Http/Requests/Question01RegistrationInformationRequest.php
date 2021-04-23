<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Question01RegistrationInformationRequest extends FormRequest
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
            'name'    => 'required',
            'comment' => 'required'
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     */
    public function messages() {
        return [
          'name.required'    => "Name can't be blank",
          'comment.required' => "Comment can't be blank"
        ];
      }

}
