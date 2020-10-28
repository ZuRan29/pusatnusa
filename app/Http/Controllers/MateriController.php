<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbl_materi = DB::table('tbl_program')
        ->join('tbl_materi','tbl_program.id_program', '=', 'tbl_materi.program_id')
        ->select(
            'id_materi',
            'nama_program',
            'nama_materi'
        )
        ->get();
        return view('dashboard.materi.index', compact('tbl_materi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.materi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Untuk Validasi Form
        $this -> validate($request, [
            'id_program' => 'required',
            'nama_materi' => 'required'
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'id_program.required' => 'Pilih Program Untuk Materi',
            'nama_materi.required' => 'Isikan Nama Materi',
        ]);

        DB::table('tbl_materi')->insert([
            'program_id' => $request->id_program,
            'nama_materi' => $request->nama_materi,
        ]);

        return redirect()->route('materi.index')->with('Sukses', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        DB::table('tbl_materi')->where('id_materi',$id)->delete();
        return redirect()->route('materi.index')->with('hapus','');
    }
}
