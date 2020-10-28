<?php

namespace App\Http\Controllers;

use App\Pelatihan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response,File;

class PelatihanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbl_pelatihan = DB::table('tbl_pelatihan')->get();
        return view('dashboard.pelatihan.index', compact('tbl_pelatihan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.pelatihan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'nama_pelatihan' => 'required',
            'penyelenggara' => 'required',
            'lokasi' => 'required',
            'waktu' => 'required',
            'harga' => 'required',
            'id_materi' => 'required',
            'deskripsi' => 'required',
            'foto' => 'required',
        ], [
            'nama_pelatihan.required' => 'Isikan Nama Pelatihan',
            'penyelenggara.required' => 'Isikan Penyelenggara Pelatihan',
            'lokasi.required' => 'Isikan Lokasi Pelatihan',
            'waktu.required' => 'Isikan Waktu Pelatihan',
            'harga.required' => 'Isikan Harga Pelatihan',
            'id_materi.required' => 'Isikan Materi Pelatihan',
            'deskripsi.required' => 'Isikan Deskripsi Pelatihan',
            'foto.required' => 'Isikan Foto Mitra',
        ]);

        // Insert Data ke dalam Database Table
        if(!empty($request->foto)){
            $request->validate(['foto' => 'required|image|mimes:jpeg,png,jpg',]);
            $namafile = $request->nama_pelatihan.'.'.$request->foto->extension();
            $request->foto->move(public_path('images/pelatihan'), $namafile); }
        else{
            $namafile=null;
        }


        DB::table('tbl_pelatihan')->insert([
            'nama_pelatihan' => $request->nama_pelatihan,
            'penyelenggara' => $request->penyelenggara,
            'lokasi' => $request->lokasi,
            'waktu' => $request->waktu,
            'harga' => $request->harga,
            'id_materi' => $request->id_materi,
            'deskripsi' => $request->deskripsi,
            'link_pendaftaran' => $request->link_pendaftaran,
            'foto' => $namafile
        ]);

        return redirect()->route('pelatihan.index')->with('Mitra Baru Berhasil Di Input');

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

        $data = Pelatihan::where('id_pelatihan', $id)->first();
        File::delete('images/pelatihan/'.$data->foto);

        DB::table('tbl_pelatihan')->where('id_pelatihan',$id)->delete();
        return redirect()->route('pelatihan.index')->with('hapus','');

    }
}
