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
            'nama_fasilitas' => 'required',
            'alamat' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_fasilitas.required' => 'Kolom nama fasilitas olahraga harus di isi.',
            'alamat.required' => 'Kolom alamat harus di isi.',
            'kecamatan.required' => 'Kolom kecamatan harus di isi.',
            'kelurahan.required' => 'Kolom kelurahan harus di isi.',
        ];
    }
}
