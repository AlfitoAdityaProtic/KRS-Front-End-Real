<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KrsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get('http://localhost:8080/api/pengisian-krs');
        if ($response->successful()) {
            $datas = $response->json();
            return view('krs.index', compact('datas'));
        }
        return response()->json(['error' => 'Gagal Mengambil Data dari API'], 500);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('krs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'timestamp' => 'required|timestamp',
            'tahun_akademik' => 'required|string|max:255',
            'NPM' => 'required|integer',
            'id_matkul' => 'required|integer',
        ]);
        $response = Http::post('http://localhost:8080/api/pengisian-krs', [
            'timestamp' => $request->timestamp,
            'tahun_akademik' => $request->tahun_akademik,
            'NPM' => $request->NPM,
            'id_matkul' => $request->id_matkul,
        ]);
        if ($response->successful()) {
            return redirect()->route('krs.index')->with('success', 'Data Berhasil Ditambahkan!');
        }

        return back()->with('error', 'Gagal Menambahkan data');
    }

    public function edit(string $id)
    {
        $response = Http::get('http://localhost:8080/api/pengisian-krs/' . $id);

        if ($response->successful()) {
            $data = $response->json();
            return view('krs.edit', ['pengisian-krs' => $data['pengisian-krs_byid']]);
        }
        return response()->json(['error' => 'gagal Fetch data'], 500);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'timestamp' => 'required|timestamp',
            'tahun_akademik' => 'required|string|max:255',
            'NPM' => 'required|integer',
            'id_matkul' => 'required|integer',
        ]);
        $response = Http::post('http://localhost:8080/api/pengisian-krs', [
            'timestamp' => $request->timestamp,
            'tahun_akademik' => $request->tahun_akademik,
            'NPM' => $request->NPM,
            'id_matkul' => $request->id_matkul,
        ]);
        if ($response->successful()) {
            return redirect()->route('krs.index')->with('success', 'Data Berhasil Ditambahkan!');
        }

        return back()->with('error', 'Gagal Menambahkan data');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $response = Http::delete('http://localhost:8080/api/pengisian-krs/' . $id);

        if ($response->successful()) {
            return redirect()->route('krs.index')->with('success', 'Data berhasil dihapus');
        }
        return back()->with('error', 'Gagal Menghapus data');
    }
}
