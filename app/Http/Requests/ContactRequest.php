<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'title_contact' => 'required|max:255',
            'mail_contact' => 'required',
            'body_contact' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title_contact.required' => 'Musisz wypełnić pole tytuł!',
            'mail_contact.required' => 'Musisz wypełnić pole e-mail!',
            'body_contact.required' => 'Musisz wypełnić pole treść!'
        ];
    }
}
