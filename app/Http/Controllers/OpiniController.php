<?php

namespace App\Http\Controllers;

use App\Opini;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response,File;

class OpiniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbl_opini = DB::table('tbl_opini')->get();
        return view('dashboard.opini.index', compact('tbl_opini'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.opini.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Untuk Validasi Form
        $this -> validate($request, [
            'judul' => 'required',
            'kategori' => 'required',
            'author' => 'required',
            'isi' => 'required',
            'tanggal' => 'required',
            'foto' => 'required'
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'judul.required' => 'Isikan Judul Opini',
            'kategori.required' => 'Isikan Kategori Opini',
            'author.required' => 'Isikan Author Opini',
            'isi.required' => 'Isikan Isi Opini',
            'tanggal.required' => 'Pilih Tanggal Opini',
            'foto.required' => 'Pilih Foto Opini'
        ]);

        if(!empty($request->foto)){
            $request->validate(['foto' => 'required|image|mimes:jpeg,png,jpg',]);
            $namafile = $request->author. $request->kategori.time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images\opini'), $namafile); }
        else{
            $namafile=null;
        }

        DB::table('tbl_opini')->insert([
            'judul' => $request->judul,
            'kategori' => $request->kategori,
            'author' => $request->author,
            'isi'=> $request->isi,
            'tanggal'=> $request->tanggal,
            'youtube'=> $request->youtube,
            'foto'=> $namafile
        ]);
        return redirect()->route('opini.index')->with('Data Berhasil Disimpan');



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
        $data = Opini::where('idopini', $id)->first();
        File::delete('images/opini/'.$data->foto);

        DB::table('tbl_opini')->where('idopini',$id)->delete();
        return redirect()->route('opini.index')->with('hapus','');
    }
}
