<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostingRequest extends FormRequest
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
            'judul' => 'required',
            'konten' => 'required',
            'status' => 'required',
            'uuid_kategori' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'judul.required' => 'Kolom judul harus di isi.',
            'konten.required' => 'Kolom konten harus di isi.',
            'status.required' => 'Kolom status harus di isi.',
            'uuid_kategori.required' => 'Kolom kategori harus di isi.',
        ];
    }
}
