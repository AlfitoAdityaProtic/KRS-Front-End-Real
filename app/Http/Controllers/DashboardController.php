<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index(){
        $mahasiswa = Http::get('http://localhost:8080/api/mahasiswa');
        $prodi = Http::get('http://localhost:8080/api/prodi');
        // dd($prodi->json()['data_prodi']);
        $mahasiswa = count($mahasiswa->json()['data_mahasiswa']);
        $prodi = count($prodi->json()['data_prodi']);
        
        return view('index', compact('mahasiswa', 'prodi'));
    }
}
