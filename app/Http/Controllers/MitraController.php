<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Mitra;
use Validator,Redirect,Response,File;

class MitraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbl_mitra = DB::table('tbl_mitra')->get();
        return view('dashboard.mitra.index', compact('tbl_mitra'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.mitra.create');
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
        $this->validate($request, [
            'nama_mitra' => 'required',
            'alamat_mitra' => 'required',
            'foto_mitra' => 'required',
        ], [
            'nama_mitra.required' => 'Isikan Nama Mitra',
            'alamat_mitra.required' => 'Isikan Alamat Mitra',
            'foto_mitra.required' => 'Isikan Foto Mitra',
        ]);

        // Insert Data ke dalam Database Table
        if(!empty($request->foto_mitra)){
            $request->validate(['foto_mitra' => 'required|image|mimes:jpeg,png,jpg',]);
            $namafile = $request->nama_mitra.time('d-m-Y').'.'.$request->foto_mitra->extension();
            $request->foto_mitra->move(public_path('images/mitra'), $namafile); }
        else{
            $namafile=null;
        }

        
        DB::table('tbl_mitra')->insert([
            'nama_mitra' => $request->nama_mitra,
            'alamat_mitra' => $request->alamat_mitra,
            'foto_mitra' => $namafile
        ]);

        return redirect()->route('mitra.index')->with('Mitra Baru Berhasil Di Input');

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
        $data = Mitra::where('id_mitra', $id)->first();
        File::delete('images/mitra/'.$data->foto_mitra);

        DB::table('tbl_mitra')->where('id_mitra',$id)->delete();
        return redirect()->route('mitra.index')->with('hapus','');
    }
}
