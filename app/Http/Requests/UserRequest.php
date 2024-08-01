<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

   
     
    public function rules()
    {
        return [
            'id' => 'required|unique:users|max:11',
            'name' => 'required|min:3|max:255',
            'email' => 'required|min:3|max:255',
            'role' => 'required|min:3',
            'password' => 'required|min:3',
           
          
        ];
    }
}
