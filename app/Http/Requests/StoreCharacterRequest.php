<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
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
            'name' => 'required|unique:characters,name|max:255',
            'gender' => 'required|max:255',
            'hair_color' => 'required|max:255',
            'height' => 'required|max:255',
            'mass' => 'required|max:255',
            'kind' => 'required|max:255',
            'birth_year' => 'required|max:255',
            'eye_color' => 'required|max:255',
            'skin_color' => 'required|max:255',
            'homeworld' => 'required|numeric',
            'starships' => 'required|array',
            'starships.*' => 'sometimes|numeric'
        ];
    }
}
