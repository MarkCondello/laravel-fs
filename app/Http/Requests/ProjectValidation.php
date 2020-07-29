<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectValidation extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:4|max:255',
            'description' => 'required|min:10'
        ];
    }

    public function messages()
    {
    return [
        'title.required' => 'A title is required for a project...',
        'title.min'     => 'A title must be a minimum of 4 characters',
        'description.required'  => 'A message is required for a project',
        'description.min'     => 'A descrition must be a minimum of 10 characters',
    ];
}
}
