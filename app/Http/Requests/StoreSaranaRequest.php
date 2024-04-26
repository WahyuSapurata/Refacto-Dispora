<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaranaRequest extends FormRequest
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
            'nama_sarana' => 'required',
            'kategori' => 'required',
            'konten' => 'required',
            'lokasi' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_sarana.required' => 'Kolom nama sarana harus di isi.',
            'kategori.required' => 'Kolom kategori harus di isi.',
            'konten.required' => 'Kolom konten harus di isi.',
            'lokasi.required' => 'Kolom lokasi harus di isi.',
            'status.required' => 'Kolom status harus di isi.',
        ];
    }
}
