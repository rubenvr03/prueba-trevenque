<?php

namespace App\Http\Requests;

use Carbon\Carbon;
use Illuminate\Foundation\Http\FormRequest;

class StoreAlumnosRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'surname' => 'required',
            'year_born' => ['required', 'date', 'before_or_equal:' . Carbon::now()->subYears(17)->format('Y-m-d')],
        ];
    }
    public function messages()
{
    return [
        'year_born.before_or_equal' => 'El alumno debe tener al menos 17 años.',
    ];
}
}
