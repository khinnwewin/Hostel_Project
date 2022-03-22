<?php

namespace App\Http\Requests\Backend;

use Illuminate\Foundation\Http\FormRequest;

class RollCallRequest extends FormRequest
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
            
            'id' => 'required',
            'student_registers_id' => 'required',
            'rollno' => 'required',
            'name' => 'required',
            'date' => 'required',
            'attendance' => 'required'
        ];
    }
}
