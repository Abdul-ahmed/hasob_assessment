<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
// use Hash;

class UserValidationRequest extends FormRequest
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
            'first_name'=>'required',
            'middle_name'=>'required',
            'last_name'=>'required',
            'email'=>'required|email|unique:users,email',
            'phone'=>'required',
            'pic_url'=>'required',
            'password'=>'required',
            'is_disabled'=>'required'
        ];
    }

    // public function getValidation() {
    //     // $this->validated();
    //     if($this->rules() == false) {
    //         return ['msg'=>'One or more field is empty'];
    //     } else {
            
    //         return array_merge(
    //             $this->only(['first_name', 'middle_name', 'last_name', 'email', 'phone', 'pic_url', 'password', 'is_disabled']),
    //             ['password' => Hash::make($this->get('password'))],
    //         );
    //     }
        
    // }

    public function failedValidation(\Illuminate\Contracts\Validation\Validator $validator)
    {
        $this->validator = $validator;
        // $response = new Response(['error' => $validator->errors()->first()], 422);
        // throw new ValidationException($validator, $response);
    }

    
    
}
