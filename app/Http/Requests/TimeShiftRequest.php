<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimeShiftRequest extends FormRequest
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
            'Name'=>'Required','BranchId'=>'Required','FoodAllowance'=>'Required|min:0','TimeAllowance'=>'Required|min:0'
        ];
    }
}
