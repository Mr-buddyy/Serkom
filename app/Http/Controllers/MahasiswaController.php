<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }
    public function pilihanBeasiswa()
    {
        return view('pages.pilihanBeasiswa');
    }
    public function hasil()
    {
        $hasil = Mahasiswa::all();
        return view('pages.hasil', compact('hasil'));
    }
    public function getIpk(Request $request)
    {
        $semester = $request->input('semester');

        // nilai IPK yang dideklarasikan manual
        $ipkValues = [
            1 => 3.4,
            2 => 2.9,
            3 => 2.9,
            4 => 3.4,
            5 => 3.4,
            6 => 2.9,
            7 => 2.9,
            8 => 3.4,
        ];

        // Ambil nilai IPK berdasarkan semester
        $ipk = $ipkValues[$semester] ?? null;

        return response()->json(['ipk' => $ipk]);
    }

    public function submit(Request $request)
    {
        $validation = $request->validate([
            'nama' => ['required'],
            'email' => ['required'],
            'nomor_hp' => ['required'],
            'semester' => ['required'],
            'ipk' => ['required'],
            'beasiswa' => ['required'],
            'berkas' => ['required']
        ]);
        Mahasiswa::create($validation);
        return redirect('/hasil');
    }
}
