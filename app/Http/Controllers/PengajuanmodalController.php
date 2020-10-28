<?php

namespace App\Http\Controllers;

use App\Pengajuanmodal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator,Redirect,Response,File;

class PengajuanmodalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuan_modal = DB::table('users')
        ->join('pengajuan_modal', 'users.id', '=', 'pengajuan_modal.users_id')
        ->select('id', 'idpengajuanmodal','name','nama_pengaju')
        ->get();
        return view('dashboard.pengajuanmodal.index', compact('pengajuan_modal'));
    }

    public function CreateModal()
    {
        $getidanggota = Auth::user()->id;
        $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
        $tampilusaha = DB::select("SELECT * FROM users INNER JOIN usaha ON users.id = usaha.users_id WHERE users.id = '$getidanggota'");

        $jenkel1 = ['jenis_kelamin' => 'Laki - Laki'];
        $jenkel2 = ['jenis_kelamin' => 'Perempuan'];
        $jenkel = [$jenkel1, $jenkel2];

        $provinsi = DB::table('provinsi')->get();

        $bdus0 = ['bidang_usaha' => 'Bidang Retail'];
        $bdus1 = ['bidang_usaha' => 'Bidang Kuliner'];
        $bdus2 = ['bidang_usaha' => 'Bidang Fashion'];
        $bdus3 = ['bidang_usaha' => 'Bidang Furniture'];
        $bdus4 = ['bidang_usaha' => 'Bidang Jasa'];
        $bdus5 = ['bidang_usaha' => 'Bidang Elektronik'];
        $bdus6 = ['bidang_usaha' => 'Bidang Otomotif'];
        $bdus7 = ['bidang_usaha' => 'Bidang Teknologi'];
        $bdus8 = ['bidang_usaha' => 'Bidang Kecantikan'];
        $bdus9 = ['bidang_usaha' => 'Bidang Pertanian'];
        $bdus10 = ['bidang_usaha' => 'Bidang Perikanan'];
        $bdus11 = ['bidang_usaha' => 'Bidang Peternakan'];
        $bdus12 = ['bidang_usaha' => 'Bidang Perkebunan'];
        $bdus13 = ['bidang_usaha' => 'Bidang Industri'];
        $bdus14 = ['bidang_usaha' => 'Bidang Industri Kreatif'];
        $bdus15 = ['bidang_usaha' => 'Bidang Logistik'];
        $bdus16 = ['bidang_usaha' => 'Bidang Transportasi'];
        $bdus17 = ['bidang_usaha' => 'Bidang Pertambangan'];
        $bdus18 = ['bidang_usaha' => 'Bidang Perminyakan'];
        $bdus19 = ['bidang_usaha' => 'Bidang Lainnya'];
        $bdus = [$bdus0,$bdus1,$bdus2,$bdus3,$bdus4,$bdus5,
                  $bdus6,$bdus7,$bdus8,$bdus9,$bdus10,$bdus11,
                  $bdus12,$bdus13,$bdus14,$bdus15,$bdus16,
                  $bdus17,$bdus18,$bdus19];

        $bdus20 = [$bdus0,$bdus1,$bdus2,$bdus3,$bdus4,$bdus5,
                  $bdus6,$bdus7,$bdus8,$bdus9,$bdus10,$bdus11,
                  $bdus12,$bdus13,$bdus14,$bdus15,$bdus16,
                  $bdus17,$bdus18,$bdus19];


        return view('landingpage.modal.create', compact('tampilanggota',
                                                        'provinsi',
                                                        'bdus',
                                                        'bdus20',
                                                        'tampilusaha',
                                                        'jenkel'));
    }

    public function SimpanCreateModal(Request $request)
    {

        //Untuk Validasi Form
       $this -> validate($request, [
        'users_id' => 'required',
        'nama_pengaju' => 'required',
        'nik_pengaju' => 'required',
        'nokk_pengaju' => 'required',
        'npwp_pengaju' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'country' => 'required',
        'state' => 'required',
        'kecamatan' => 'required',
        'kelurahan' => 'required',
        'alamat_pengaju' => 'required',
        'email_pengaju' => 'required',
        'notelp_pengaju' => 'required',
        'fotodiri_pengaju' => 'required',
        'fotoktp_pengaju' => 'required',
        'datausaha_pengaju' => 'required',
        'namausaha_pengaju' => 'required',
        'alamatusaha_pengaju' => 'required',
        'npwpusaha_pengaju' => 'required',
        'izinusaha_pengaju' => 'required',
        'bidangusaha_pengaju' => 'required',
        'detailbidangusaha_pengaju' => 'required',
        'jumlahmodal_pengaju' => 'required',
        'alasanmodal_pengaju' => 'required'
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'users_id.required' => 'Isikan Nama Users Anda',
            'nama_pengaju.required' => 'Isikan Nama Anda',
            'nik_pengaju.required' => 'Isikan Nomor Induk Kependudukan Anda',
            'nokk_pengaju.required' => 'Isikan Nomor Kartu Keluarga Anda',
            'npwp_pengaju.required' => 'Isikan Nomor Pokok Wajib Pajak Anda',
            'tempat_lahir.required' => 'Isikan Tempat Lahir Anda',
            'tanggal_lahir.required' => 'Pilih Tanggal Lahir Anda',
            'jenis_kelamin.required' => 'Pilih Jenis Kelamin Anda',
            'country.required' => 'Pilih Provinsi Anda',
            'state.required' => 'Pilih Kabupaten Anda',
            'kecamatan.required' => 'Pilih Kecamatan Anda',
            'kelurahan.required' => 'Pilih Kelurahan Anda',
            'alamat_pengaju.required' => 'Isikan Alamat Lengkap Anda',
            'email_pengaju.required' => 'Isikan Email Aktif Anda',
            'notelp_pengaju.required' => 'Isikan Nomor Telepon Aktif Anda',
            'fotodiri_pengaju.required' => 'Upload Foto Diri Anda',
            'fotoktp_pengaju.required' => 'Upload Foto KTP Anda',
            'datausaha_pengaju.required' => 'Pilih Data Usaha Anda',
            'namausaha_pengaju.required' => 'Isikan Nama Usaha Anda',
            'alamatusaha_pengaju.required' => 'Isikan Alamat Usaha Anda',
            'npwpusaha_pengaju.required' => 'Isikan NPWP Usaha Anda',
            'izinusaha_pengaju.required' => 'Isikan Izin Usaha Anda',
            'bidangusaha_pengaju.required' => 'Pilih Bidang Usaha Anda',
            'detailbidangusaha_pengaju.required' => 'Isikan Detail Bidang Usaha Anda',
            'jumlahmodal_pengaju.required' => 'Isikan Jumlah Pengajuan Modal Anda',
            'alasanmodal_pengaju.required' => 'Isikan Alasan Pengajuan Modal Anda',
        ]);


        // Upload Foto
        if(!empty($request->fotodiri_pengaju)){
            $request->validate(['fotodiri_pengaju' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
            $fotodiri = 'Foto Diri '.'Pengajuan Modal '. $request->nama_pengaju.'.'.$request->fotodiri_pengaju->extension();
            $request->fotodiri_pengaju->move(public_path('images/pengajuan-modal/'.$request->nama_pengaju.'/Data Diri'), $fotodiri); }
        else{
            $fotodiri=null;
        }

        // Upload KTP
        if(!empty($request->fotoktp_pengaju)){
            $request->validate(['fotoktp_pengaju' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
            $fotoktp = 'Foto KTP '.'Pengajuan Modal '. $request->nama_pengaju.'.'.$request->fotoktp_pengaju->extension();
            $request->fotoktp_pengaju->move(public_path('images/pengajuan-modal/'.$request->nama_pengaju.'/Data Diri'), $fotoktp); }
        else{
            $fotoktp=null;
        }

        if(!empty($request->doknpwpusaha_pengaju)){
            $request->validate(['doknpwpusaha_pengaju' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
            $fotonpwpusaha = 'Foto NPWP Usaha '.'Pengajuan Modal '. $request->nama_pengaju.'.'.$request->doknpwpusaha_pengaju->extension();
            $request->doknpwpusaha_pengaju->move(public_path('images/pengajuan-modal/'.$request->nama_pengaju.'/Data Usaha'), $fotonpwpusaha); }
        else{
            $fotonpwpusaha=null;
        }

        if(!empty($request->dokizinusaha_pengaju)){
            $request->validate(['dokizinusaha_pengaju' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
            $fotoizinusaha = 'Foto Izin Usaha '.'Pengajuan Modal '. $request->nama_pengaju.'.'.$request->dokizinusaha_pengaju->extension();
            $request->dokizinusaha_pengaju->move(public_path('images/pengajuan-modal/'.$request->nama_pengaju.'/Data Usaha'), $fotoizinusaha ); }
        else{
            $fotoizinusaha =null;
        }

        // if(!empty($request->doknpwpusaha_pengaju2)){
        //     $request->validate(['doknpwpusaha_pengaju2' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
        //     $fotonpwpusaha2 = 'Foto NPWP Usaha '.'Pengajuan Modal '. $request->nama_pengaju.'.'.$request->doknpwpusaha_pengaju2->extension();
        //     $request->doknpwpusaha_pengaju2->move(public_path('images/pengajuan-modal/'.$request->nama_pengaju.'/Data Usaha'), $fotonpwpusaha2); }
        // else{
        //     $fotonpwpusaha2=null;
        // }

        // if(!empty($request->dokizinusaha_pengaju2)){
        //     $request->validate(['dokizinusaha_pengaju2' => 'required|mimes:jpeg,png,jpg,pdf,xlx,docx,doc',]);
        //     $fotoizinusaha2 = 'Foto Izin Usaha '.'Pengajuan Modal '. $request->nama_pengaju.'.'.$request->dokizinusaha_pengaju2->extension();
        //     $request->dokizinusaha_pengaju2->move(public_path('images/pengajuan-modal/'.$request->nama_pengaju.'/Data Usaha'), $fotoizinusaha2 ); }
        // else{
        //     $fotoizinusaha2 =null;
        // }



        DB::table('pengajuan_modal')->insert([
            'users_id' => $request->users_id,
            'nama_pengaju' => $request->nama_pengaju,
            'nik_pengaju' => $request->nik_pengaju,
            'nokk_pengaju' => $request->nokk_pengaju,
            'npwp_pengaju' => $request->npwp_pengaju,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir'=> $request->tanggal_lahir,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'provinsi_id'=> $request->country,
            'kabupaten_id'=> $request->state,
            'kecamatan_id'=> $request->kecamatan,
            'kelurahan_id'=> $request->kelurahan,
            'alamat_pengaju'=> $request->alamat_pengaju,
            'email_pengaju'=> $request->email_pengaju,
            'notelp_pengaju'=> $request->notelp_pengaju,
            'fotodiri_pengaju'=> $fotodiri,
            'fotoktp_pengaju'=> $fotoktp,
            'datausaha_pengaju'=> $request->datausaha_pengaju,
            'namausaha_pengaju'=> $request->namausaha_pengaju,
            'alamatusaha_pengaju'=> $request->alamatusaha_pengaju,
            'npwpusaha_pengaju'=> $request->npwpusaha_pengaju,
            'izinusaha_pengaju'=> $request->izinusaha_pengaju,
            'doknpwpusaha_pengaju'=> $fotonpwpusaha,
            'dokizinusaha_pengaju'=> $fotoizinusaha,
            'bidangusaha_pengaju'=> $request->bidangusaha_pengaju,
            'detailbidangusaha_pengaju'=> $request->bidangusaha_pengaju,
            'jumlahmodal_pengaju'=> $request->jumlahmodal_pengaju,
            'alasanmodal_pengaju'=> $request->alasanmodal_pengaju
        ]);

        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $ShowUser = DB::table('users')->where('id', $id)->get();
        $ShowPengajuanModal = DB::table('pengajuan_modal')->where('users_id',$id)
                            //   ->join('provinsi', 'provinsi.id', '=', 'pengajuan_modal.provinsi_id')
                              ->join('kabupaten', 'kabupaten.id', '=', 'pengajuan_modal.kabupaten_id')
                              ->join('kecamatan', 'kecamatan.id', '=', 'pengajuan_modal.kecamatan_id')
                              ->join('kelurahan', 'kelurahan.id', '=', 'pengajuan_modal.kelurahan_id')
                              ->get();

        $ShowPengajuanModal1 = DB::table('pengajuan_modal')->where('users_id',$id)
                              ->join('provinsi', 'provinsi.id', '=', 'pengajuan_modal.provinsi_id')
                            //   ->join('kabupaten', 'kabupaten.id', '=', 'pengajuan_modal.kabupaten_id')
                            //   ->join('kecamatan', 'kecamatan.id', '=', 'pengajuan_modal.kecamatan_id')
                            //   ->join('kelurahan', 'kelurahan.id', '=', 'pengajuan_modal.kelurahan_id')
                              ->get();


        return view('dashboard.pengajuanmodal.show', compact('ShowPengajuanModal',
                                                             'ShowUser',
                                                             'ShowPengajuanModal1'));
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
    }
}
