<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreassetassignmentRequest extends FormRequest
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
            'asset_id'=>'required',
            'assignment_date'=>'required',
            'status'=>'required',
            'is_due'=>'required',
            'due_date'=>'required',
            'assigned_user_id'=>'required',
            'assigned_by'=>'required'
        ];
    }
}
