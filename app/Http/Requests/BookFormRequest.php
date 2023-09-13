<?php

namespace App\Http\Requests;

use App\Models\Book;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Axiom\Rules\ISBN;
use Illuminate\Validation\Rule;

class BookFormRequest extends FormRequest
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
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'publication_year' => 'required',
            'isbn' => [
                'required',
                'string',
                Rule::unique('books')->ignore($this->id),
                new ISBN,
            ],
        ];
    }
}
