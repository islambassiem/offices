<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEntityRequest extends FormRequest
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
            'entity_type_id' => 'required|exists:entity_types,id',
            'section_id' => 'required|exists:sections,id',
            'number' => 'required|max:255',
            'singularity' => 'required_if:entity_type_id,1',
            'keys_count' => 'required',
            'description' => 'nullable|max:255',
        ];
    }
}
