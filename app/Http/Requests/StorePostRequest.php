<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            'title' => 'required|max:200',
            'content' => 'required|min:50',
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Title not valid!',
            'title.max' => 'Title not valid!',
            'content.min' => 'Content not min 1000 words!',
            'content.required' => 'Content not valid!',

        ];
    }
}
