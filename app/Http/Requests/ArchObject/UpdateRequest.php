<?php

namespace App\Http\Requests\ArchObject;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'title' => 'string',
            'image' => 'nullable|image|max:5120',
            'director' => 'nullable|string',
            'excerpt' => 'string',
            'content' => 'string',
            'longitude' => '',
            'attitude' => '',
            'place' => 'string',
            'documents' => 'nullable|array',
            'documents.*' => 'file|mimes:pdf,doc,docx,txt|max:10240', // 10MB max
        ];
    }
}
