<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRuanganRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_ruangan' => [
                'required', 'string', 'max:255',
               ignore(Auth::user()->nama_ruangan)
            ],
            'gedung' => [
                'required', 'string', 'max:255',
                ignore(Auth::user()->gedung)
            ],
            'lantai' => [
                'required', 'string', 'max:255',
               ignore(Auth::user()->lantai)
            ],
            'kepala_lab' => [
                'required', 'string', 'max:255',
                ignore(Auth::user()->kepala_lab)
            ],
            'fasilitas' => [
                'required', 'string', 'max:255',
               ignore(Auth::user()->fasilitas)
            ],
            'gambar_ruangan' => [
                'required', 'string', 'max:255',
                ignore(Auth::user()->gambar_ruangan)
            ],
            'jadwal' => [
                'required', 'string', 'max:255',
               ignore(Auth::user()->jadwal)
            ],
            'denah' => [
                'required', 'string', 'max:255',
               ignore(Auth::user()->denah)
            ]
        ];
    }
}
