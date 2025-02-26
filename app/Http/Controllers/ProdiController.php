<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class ProdiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $client = new Client();
        // $url = 'http://127.0.0.1:8080';
        // $response = $client->request('GET', $url);
        // $content = $response->getbody()->getContents();
        // $contentArray = json_decode($content,true); 
        return view('program_studi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('program_studi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $_SESSION['flash_message'] = [
            'pesan' => 'Data Program Studi Berhasil Ditambahkan',
            'type' => 'success'
        ];
        return view('program_studi.index');
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
        return view('program_studi.edit');
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
