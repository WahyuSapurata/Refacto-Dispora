<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGaleriRequest extends FormRequest
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
            'uuid_album' => 'required',
            'nama_galeri' => 'required',
            'ket' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'uuid_album.required' => 'Kolom nama album harus di isi.',
            'nama_galeri.required' => 'Kolom nama galeri harus di isi.',
            'ket.required' => 'Kolom keterangan harus di isi.',
            'status.required' => 'Kolom status harus di isi.',
        ];
    }
}
