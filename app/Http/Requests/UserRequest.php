<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'required|string',
			'lastname' => 'required|string',
			'firstname' => 'required|string',
			'middlename' => 'string',
			'email' => 'required|string',
			'matriculation_number' => 'required|string',
			'vocations' => 'required|string',
			'level' => 'required|string',
			'academic_session' => 'required|string',
			'college' => 'required|string',
			'department' => 'required|string',
			'gender' => 'required|string',
			'status' => 'required',
			'enrolment' => 'string',
			'general' => 'string',
			'admin' => 'required',
        ];
    }
}
