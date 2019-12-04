<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeLevelRequest extends FormRequest
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
            'BasicSalary'             => 'required',
            'Level'                   => 'required',
            'BasicSalaryRate'         => 'nullable',
            'BasicFoodAllowance'      => 'required',
            'BasicFuelAllowance'      => 'required',
            'BasicHouseholdAllowance' => 'required',
            'BasicAllowanceRate'      => 'nullable',
            'BasicPhoneAllowance'     => 'required',
            'BasicResponseAllowance'  => 'required',
            'Code'                    => 'required',
        ];
    }
}
