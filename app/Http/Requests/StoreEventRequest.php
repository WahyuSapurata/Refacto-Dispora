<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'nama_event' => 'required',
            'kategori' => 'required',
            'konten' => 'required',
            'lokasi' => 'required',
            'tanggal' => 'required',
            'status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'nama_event.required' => 'Kolom nama event harus di isi.',
            'kategori.required' => 'Kolom kategori harus di isi.',
            'konten.required' => 'Kolom konten harus di isi.',
            'lokasi.required' => 'Kolom lokasi harus di isi.',
            'tanggal.required' => 'Kolom tanggal harus di isi.',
            'status.required' => 'Kolom status harus di isi.',
        ];
    }
}
