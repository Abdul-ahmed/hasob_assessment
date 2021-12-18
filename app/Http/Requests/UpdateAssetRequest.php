<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateAssetRequest extends FormRequest
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
            'type'=>'required',
            'serial_number'=>'required',
            'description'=>'required',
            'fixed_or_Movable'=>'required',
            'picture_path'=>'required',
            'purchase_date'=>'required',
            'start_use_date'=>'required',
            'purchase_price'=>'required',
            'warranty_expiry_date'=>'required',
            'degradation_in_years'=>'required',
            'current_value_in_naira'=>'required',
            'location'=>'required'
        ];
    }
}
