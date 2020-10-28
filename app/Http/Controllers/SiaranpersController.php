<?php

namespace App\Http\Controllers;

use App\Siaranpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response,File;
class SiaranpersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $siaran_pers = DB::table('siaran_pers')->get();
        return view('dashboard.siaranpers.index', compact('siaran_pers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.siaranpers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'judul_siaranpers' => 'required',
            'deskripsi_siaranpers' => 'required',
            'tanggal_siaranpers' => 'required',
            'dokumen_siaranpers' => 'required',
            'youtube_siaranpers' => 'required'
        ], [
            'judul_siaranpers.required' => 'Isikan Judul Siaran Pers',
            'deskripsi_siaranpers.required' => 'Isikan Deskripsi Siaran Pers',
            'tanggal_siaranpers.required' => 'Isikan Tanggal Rilis Siaran Pers',
            'dokumen_siaranpers.required' => 'Upload Dokumen Siaran Pers',
            'youtube_siaranpers.required' => 'Isikan Link Youtube Siaran Pers',
        ]);

        if(!empty($request->dokumen_siaranpers)){
            $request->validate(['dokumen_siaranpers' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
            $namafile = $request->judul_siaranpers.'.'.$request->dokumen_siaranpers->extension();
            $request->dokumen_siaranpers->move(public_path('dashboard/siaranpers'), $namafile); }
        else{
            $namafile=null;
        }

        DB::table('siaran_pers')->insert([
            'judul_siaranpers' => $request->judul_siaranpers,
            'deskripsi_siaranpers' => $request->deskripsi_siaranpers,
            'tanggal_siaranpers' => $request->tanggal_siaranpers,
            'dokumen_siaranpers' => $namafile,
            'youtube_siaranpers' => $request->youtube_siaranpers
        ]);

        return redirect()->route('siaran-pers.index')->with('Siaran Pers Baru Berhasil Di Input');
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
        $data = Siaranpers::where('idsiaranpers', $id)->first();
        File::delete('dashboard/siaranpers/'.$data->dokumen_siaranpers);

        DB::table('siaran_pers')->where('idsiaranpers',$id)->delete();
        return redirect()->route('siaran-pers.index')->with('hapus','');
    }
}
