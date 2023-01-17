<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CatatanPerjalanan;

class CatatanPerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        // menampilkan semua data
        $datas = CatatanPerjalanan::all();
        return view('index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // menampilkan form tambah data
        return view('input');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // logic tambah data
        // cara simple
        $store = CatatanPerjalanan::create($request->all());

        // cara manual
        // $data = CatatanPerjalanan::create([
        //     'tanggal' => $request->tanggal,
        //     'waktu' => $request->waktu,
        //     'lokasi' => $request->lokasi,
        //     'suhu_tubuh' => $request->suhu_tubuh
        // ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // menampilkan data tertentu
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // menampilkan form ubah data
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // logic ubah data
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // menghapus data
    }
}
