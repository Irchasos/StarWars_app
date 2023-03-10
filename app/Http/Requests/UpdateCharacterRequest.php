<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'gender' => 'required|max:255',
            'hair_color' => 'required|max:255',
            'height' => 'required|max:255',
            'mass' => 'required|max:255',
            'starships' => 'required|array',
            'starships.*' => 'sometimes|numeric',
            'homeworld' => 'required|numeric'
        ];
    }
}
