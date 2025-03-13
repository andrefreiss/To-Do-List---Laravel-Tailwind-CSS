<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TodoRequest extends FormRequest
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
            'task' => 'required|string|min:3|max:255',
        ];
    }

    public function messages(): array
    {
        return [
            'task.required' => 'The task field is required.',
            'task.string' => 'The task field must be a string.',
            'task.min' => 'The task field must be at least 3 characters.',
            'task.max' => 'The task field must not exceed 255 characters.',
        ];
    }
}
