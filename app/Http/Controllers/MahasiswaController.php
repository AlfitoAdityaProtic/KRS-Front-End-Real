<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MahasiswaController extends Controller
{
    public function index()
    {
        $response = Http::get('http://localhost:8080/api/mahasiswa');
        if ($response->successful()){
            $datas = $response->json();
            return view('mahasiswa.index', compact('datas'));
        }
        return response()->json(['error' => 'Gagal Mengambil Data Dari API'], 500);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('mahasiswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_mahasiswa' => 'required|string|max:255',
            'alamat_mahasiswa' => 'required|string|max:255',
            'id_prodi' => 'required',
        ]);
        $response = Http::post('http:localhost:8080/api/matkul',[
            'nama_mahasiswa' => $request->nama_mahasiswa,
            'alamat_mahasiswa' => $request->alamat_mahasiswa,
            'id_prodi' => $request->id_prodi,
        ]);
        if($response->successful()){
            return redirect()->route('mahasiswa.index')->with('success', 'data berhasil ditambahkan');
        }
        return back()->with('error', 'Gagal Menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('mahasiswa.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
