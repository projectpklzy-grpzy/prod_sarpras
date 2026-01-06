<?php

namespace App\Http\Requests\Api;

class StoreLahanRequest extends BaseApiRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'nama_lahan' => 'required|string|max:255',
            'luas_lahan' => 'required|numeric|min:0',
            'kepemilikan' => 'required|string|max:100',
            'harga_perolehan_lahan' => 'required|numeric|min:0'
        ];
    }

    /**
     * Get custom messages for validator errors.
     */
    public function messages(): array
    {
        return [
            'nama_lahan.required' => 'Nama lahan wajib diisi',
            'nama_lahan.max' => 'Nama lahan maksimal 255 karakter',
            'luas_lahan.required' => 'Luas lahan wajib diisi',
            'luas_lahan.numeric' => 'Luas lahan harus berupa angka',
            'luas_lahan.min' => 'Luas lahan tidak boleh negatif',
            'kepemilikan.required' => 'Status kepemilikan wajib diisi',
            'kepemilikan.max' => 'Status kepemilikan maksimal 100 karakter',
            'harga_perolehan_lahan.required' => 'Harga perolehan lahan wajib diisi',
            'harga_perolehan_lahan.numeric' => 'Harga perolehan lahan harus berupa angka',
            'harga_perolehan_lahan.min' => 'Harga perolehan lahan tidak boleh negatif'
        ];
    }
}