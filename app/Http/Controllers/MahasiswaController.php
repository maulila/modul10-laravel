<?php

namespace App\Http\Controllers;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Syadza Maulila Najwa',
            'Nakisha Selfina',
            'Naila Syafa'
        ];

        return view('pages.mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}
