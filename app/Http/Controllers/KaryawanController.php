<?php

namespace App\Http\Controllers;

use App\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response,File;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tbl_karyawan = DB::table('tbl_karyawan')->get();
        return view('dashboard.karyawan.index', compact('tbl_karyawan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jenkel1 = ['jenis_kelamin'=>'Laki-Laki'];
        $jenkel2 = ['jenis_kelamin'=>'Perempuan'];
        $jenkel = [$jenkel1,$jenkel2];

        $agama1 = ['agama'=>'Islam'];
        $agama2 = ['agama'=>'Kristen'];
        $agama3 = ['agama'=>'Hindu'];
        $agama4 = ['agama'=>'Budha'];
        $agama5 = ['agama'=>'Konghucu'];
        $agama = [$agama1,$agama2,$agama3,$agama4,$agama5];

        $status1 = ['status'=>'Menikah'];
        $status2 = ['status'=>'Single'];
        $status3 = ['status'=>'Bercerai'];
        $status = [$status2,$status1,$status3];

        return view('dashboard.karyawan.create', compact('jenkel','agama','status'));
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
            'nip' => 'required',
            'nik' => 'required',
            'nama_karyawan' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'tanggal_lahir' => 'required',
            'tempat_lahir' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
            'email' => 'required',
            'jabatan' => 'required',
            'status' => 'required',
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'nip.required' => 'Isikan Nomor Induk Karyawan',
            'nik.required' => 'Isikan Nomor Induk Kependudukan Karyawan',
            'nama_karyawan.required' => 'Isikan Nama Karyawan',
            'jenis_kelamin.required' => 'Pilih Jenis Kelamin Karyawan',
            'agama.required' => 'Pilih Agama Karyawan',
            'tanggal_lahir.required' => 'Isikan Tanggal Lahir Karyawan',
            'tempat_lahir.required' => 'Isikan Tempat Lahir Karyawan',
            'alamat.required' => 'Isikan Alamat Karyawan',
            'no_telp.required' => 'Isikan Nomor Telp Karyawan',
            'email.required' => 'Isikan Email Karyawan',
            'jabatan.required' => 'Isikan Jabatan HP Karyawan',
            'status.required' => 'Pilih Status Karyawan',
        ]);

        if(!empty($request->foto)){
            $request->validate(['foto' => 'required|image|mimes:jpeg,png,jpg',]);
            $namafile = $request->nama_karyawan.time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images/karyawan'), $namafile); }
        else{
            $namafile=null;
        }

        DB::table('tbl_karyawan')->insert([
            'nip' => $request->nip,
            'nik' => $request->nik,
            'nama_karyawan' => $request->nama_karyawan,
            'jenis_kelamin' => $request->jenis_kelamin,
            'agama' => $request->agama,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_lahir' => $request->tempat_lahir,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
            'email' => $request->email,
            'jabatan' => $request->jabatan,
            'status' => $request->status,
            'instagram' => $request->instagram,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'whatsapp' => $request->whatsapp,
            'foto' => $namafile

        ]);
        return redirect()->route('karyawan.index')->with('Mitra Baru Berhasil Di Input');
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
        $data = Karyawan::where('id_karyawan', $id)->first();
        File::delete('images/karyawan/'.$data->foto);

        DB::table('tbl_karyawan')->where('id_karyawan',$id)->delete();
        return redirect()->route('karyawan.index')->with('hapus','');
    }
}
