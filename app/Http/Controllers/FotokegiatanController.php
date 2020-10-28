<?php

namespace App\Http\Controllers;

use App\Fotokegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response,File;

class FotokegiatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbl_fotokegiatan = DB::table('tbl_fotokegiatan')->get();
        return view('dashboard.foto kegiatan.index', compact('tbl_fotokegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.foto kegiatan.create');
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
            'nama_kegiatan' => 'required',
            'deskripsi_fotokegiatan' => 'required',
            'tanggal_fotokegiatan'=> 'required'
        ], [
            'nama_kegiatan.required' => 'Isikan Nama Kegiatan',
            'deskripsi_fotokegiatan.required' => 'Isikan Deskripsi Foto',
            'tanggal_fotokegiatan.required' => 'Isikan Tanggal Foto Kegiatan',
        ]);

        if(!empty($request->thumbnail_fotokegiatan)){
            $request->validate(['thumbnail_fotokegiatan' => 'required|image|mimes:jpeg,png,jpg',]);
            $thumbnail_fotokegiatan = $request->nama_kegiatan.' thumbnail'.'.'.$request->thumbnail_fotokegiatan->extension();
            $request->thumbnail_fotokegiatan->move(public_path('dashboard/fotokegiatan'), $thumbnail_fotokegiatan); }
        else{
            $thumbnail_fotokegiatan=null;
        }

        if(!empty($request->foto1)){
            $request->validate(['foto1' => 'required|image|mimes:jpeg,png,jpg',]);
            $foto1 = $request->nama_kegiatan.' foto1'.'.'.$request->foto1->extension();
            $request->foto1->move(public_path('dashboard/fotokegiatan'), $foto1); }
        else{
            $foto1=null;
        }

        if(!empty($request->foto2)){
            $request->validate(['foto2' => 'required|image|mimes:jpeg,png,jpg',]);
            $foto2 = $request->nama_kegiatan.' foto2'.'.'.$request->foto2->extension();
            $request->foto2->move(public_path('dashboard/fotokegiatan'), $foto2); }
        else{
            $foto2=null;
        }

        if(!empty($request->foto3)){
            $request->validate(['foto3' => 'required|image|mimes:jpeg,png,jpg',]);
            $foto3 = $request->nama_kegiatan.' foto3'.'.'.$request->foto3->extension();
            $request->foto3->move(public_path('dashboard/fotokegiatan'), $foto3); }
        else{
            $foto3=null;
        }

        if(!empty($request->foto4)){
            $request->validate(['foto4' => 'required|image|mimes:jpeg,png,jpg',]);
            $foto4 = $request->nama_kegiatan.' foto4'.'.'.$request->foto4->extension();
            $request->foto4->move(public_path('dashboard/fotokegiatan'), $foto4); }
        else{
            $foto4=null;
        }

        if(!empty($request->foto5)){
            $request->validate(['foto5' => 'required|image|mimes:jpeg,png,jpg',]);
            $foto5 = $request->nama_kegiatan.' foto5'.'.'.$request->foto5->extension();
            $request->foto5->move(public_path('dashboard/fotokegiatan'), $foto5); }
        else{
            $foto5=null;
        }

        DB::table('tbl_fotokegiatan')->insert([
            'nama_kegiatan' => $request->nama_kegiatan,
            'deskripsi_fotokegiatan' => $request->deskripsi_fotokegiatan,
            'tanggal_fotokegiatan' =>$request->tanggal_fotokegiatan,
            'thumbnail_fotokegiatan' => $thumbnail_fotokegiatan,
            'foto1' => $foto1,
            'foto2' => $foto2,
            'foto3' => $foto3,
            'foto4' => $foto4,
            'foto5' => $foto5,
        ]);

        return redirect()->route('fotokegiatan.index')->with('Mitra Baru Berhasil Di Input');

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
        $data = Fotokegiatan::where('id_foto', $id)->first();
        // Delete Foto Thumbnail
            File::delete('dashboard/fotokegiatan/'.$data->thumbnail_fotokegiatan);
        // Delete Foto Thumbnail
            File::delete('dashboard/fotokegiatan/'.$data->foto1);
        // Delete Foto Thumbnail
            File::delete('dashboard/fotokegiatan/'.$data->foto2);
        // Delete Foto Thumbnail
            File::delete('dashboard/fotokegiatan/'.$data->foto3);
        // Delete Foto Thumbnail
            File::delete('dashboard/fotokegiatan/'.$data->foto4);
        // Delete Foto Thumbnail
            File::delete('dashboard/fotokegiatan/'.$data->foto5);

        DB::table('tbl_fotokegiatan')->where('id_foto',$id)->delete();
        return redirect()->route('fotokegiatan.index')->with('hapus','');
    }
}
