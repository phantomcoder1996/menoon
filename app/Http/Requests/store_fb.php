<?php

namespace menoon\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class store_fb extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
          return true;

       // return $this->user->can('store');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
        'content'=>'required|max:5000'
        ];
    }


    public function messages()
{
    return [
        'content.required' => 'Please write something',
      
    ];
}
}
