<?php

namespace App\Http\Requests\Task;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'content' => 'required|string|min:3|max:255',
            'info_file' => 'nullable|file|max:1024|mimes:pdf,docx,doc,xlsx,xls',
        ];
    }
}
