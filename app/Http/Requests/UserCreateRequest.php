<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            
                'name' => 'required:unique',
                'email' => 'unique:usuarios,username,' .$this->user.'|required',
                'password' => 'required|min:5|max:12'
        
            
        ];
    }
}
