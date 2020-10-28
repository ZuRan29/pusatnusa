<?php

namespace App\Http\Controllers;

use App\Anggota;
use App\Kecamatan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Validator,Redirect,Response,File;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $list_anggota = DB::table('users')
        ->join('anggota', 'users.id', '=', 'anggota.users_id')
        ->select('id','idanggota','name','nama_anggota')
        ->get();

        $user = DB::table('users')->get();
        return view('dashboard.anggota.index', compact('list_anggota','user'));
    }

    public function ShowAnggota($id)
    {
        $ShowUser = DB::table('users')->where('id', $id)->get();
        $ShowAnggota = DB::table('anggota')->where('users_id',$id)->get();
        $ShowOrganisasi = DB::table('organisasi')->where('users_id', $id)->get();
        $ShowUsaha = DB::table('usaha')->where('users_id', $id)->get();

        $ShowAnggota1 = DB::table('anggota')->where('users_id',$id)
                              ->join('kabupaten', 'kabupaten.id', '=', 'anggota.kabupaten_id')
                              ->join('kecamatan', 'kecamatan.id', '=', 'anggota.kecamatan_id')
                              ->join('kelurahan', 'kelurahan.id', '=', 'anggota.kelurahan_id')
                              ->get();

        $ShowAnggota2 = DB::table('anggota')->where('users_id',$id)
                              ->join('provinsi', 'provinsi.id', '=', 'anggota.provinsi_id')
                              ->get();

        return view('dashboard.anggota.show', compact(
            'ShowUser',
            'ShowAnggota',
            'ShowAnggota1',
            'ShowAnggota2',
            'ShowOrganisasi',
            'ShowUsaha'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // Menampilkan Data ENUM Agama
        $agm1 = ['agama'=>'Islam'];
        $agm2 = ['agama'=>'Kristen'];
        $agm3 = ['agama'=>'Hindu'];
        $agm4 = ['agama'=>'Budha'];
        $agm5 = ['agama'=>'Konghucu'];
        $agm = [$agm1,$agm2,$agm3,$agm4,$agm5];


        // Kepemilikan Usaha
        $kpm0 = ['kepemilikan_usaha'=>'Tidak Memiliki Usaha'];
        $kpm1 = ['kepemilikan_usaha'=>'Sendiri'];
        $kpm2 = ['kepemilikan_usaha'=>'Mitra'];
        $kpm3 = ['kepemilikan_usaha'=>'Pengelola'];
        $kpm = [$kpm1,$kpm2,$kpm3,$kpm0];

        // Omset Usaha
        $omt1 = ['omset_usaha'=>'100 Ribu - 500 Ribu'];
        $omt2 = ['omset_usaha'=>'500 Ribu - 1 Juta'];
        $omt3 = ['omset_usaha'=>'1 Juta - 3 Juta'];
        $omt4 = ['omset_usaha'=>'3 Juta - 5 Juta'];
        $omt5 = ['omset_usaha'=>'5 Juta - 10 Juta'];
        $omt6 = ['omset_usaha'=>'Diatas > 10 Juta'];
        $omt7 = ['omset_usaha'=>'Tidak Memiliki Usaha'];
        $omt = [$omt1,$omt2,$omt3,$omt4,$omt5,$omt6,$omt7];

        // Menampilkan Data Jumlah Karyawan
        $krw0 = ['karyawan'=>'Tidak Memiliki Usaha'];
        $krw2 = ['karyawan'=>'1 Orang - 9 Orang'];
        $krw3 = ['karyawan'=>'10 Orang - 19 Orang'];
        $krw4 = ['karyawan'=>'20 Orang - 49 Orang'];
        $krw5 = ['karyawan'=>'50 Orang - 99 Orang'];
        $krw6 = ['karyawan'=>'Diatas > 100 Orang'];
        $krw = [$krw2,$krw3,$krw4,$krw5,$krw6,$krw0];

        // Menampilkan Data Dana Usaha
        $dnu0 = ['dana_usaha'=>'Tidak Memiliki Usaha'];
        $dnu1 = ['dana_usaha'=>'Dana Pribadi'];
        $dnu2 = ['dana_usaha'=>'Pinjaman Bank'];
        $dnu3 = ['dana_usaha'=>'Non Bank'];
        $dnu = [$dnu1,$dnu2,$dnu3,$dnu0];

        $provinsi = DB::table('provinsi')->get();

        return view("landingpage.anggota.create", compact('agm','kpm','omt','krw','dnu','provinsi'));
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
        //Untuk Validasi Form
        $this -> validate($request, [
            'nik' => 'required',
            'nama' => 'required',
            'tmp_lahir' => 'required',
            'tgl_lahir' => 'required',
            'jenis_kelamin' => 'required',
            'agama' => 'required',
            'alamat' => 'required',
            'provinsi' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'kelurahan' => 'required',
            'hp' => 'required',
            'email' => 'required'
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'nik.required' => 'Isikan Nomor Induk Kependudukan Anda',
            'nama.required' => 'Isikan Nama Anda',
            'tmp_lahir.required' => 'Isikan Tempat Lahir Anda',
            'tgl_lahir.required' => 'Pilih Tanggal Lahir Anda',
            'jenis_kelamin.required' => 'Pilih Jenis Kelamin Anda',
            'agama.required' => 'Pilih Agama Anda',
            'alamat.required' => 'Isikan Alamat Anda',
            'provinsi.required' => 'Pilih Provinsi Anda',
            'kabupaten.required' => 'Pilih Kabupaten Anda',
            'kecamatan.required' => 'Pilih Kecamatan Anda',
            'kelurahan.required' => 'Pilih Kelurahan Anda',
            'hp.required' => 'Isikan Nomor HP Anda',
            'email.required' => 'Isikan Email Aktif Anda',

        ]);
        // Insert Data ke Dalam Database Table
        DB::table('anggota')->insert([
            'users_id' => $request->users_id,
            'nik' => $request->nik,
            'nama_anggota' => $request->nama,
            'tempat_lahir' => $request->tmp_lahir,
            'tanggal_lahir' => $request->tgl_lahir,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'agama'=> $request->agama,
            'alamat'=> $request->alamat,
            'provinsi_id'=> $request->provinsi,
            'kabupaten_id'=> $request->kabupaten,
            'kecamatan_id'=> $request->kecamatan,
            'kelurahan_id'=> $request->kelurahan,
            'nomor_telp'=> $request->hp,
            'email'=> $request->email,
            'organisasi'=> $request->organisasi,
            'jabatan_organisasi'=> $request->jabatan_organisasi,
            'nama_usaha'=> $request->nama_usaha,
            'alamat_usaha'=> $request->alamat_usaha,
            'tahun_berdiri'=> $request->tahun_berdiri,
            'bidang_usaha'=> $request->bidang_usaha,
            'kepemilikan_usaha'=> $request->kepemilikan_usaha,
            'omset_usaha'=> $request->omset_usaha,
            'karyawan'=> $request->karyawan,
            'dana_usaha'=> $request->dana_usaha
        ]);

        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        // $anggota = DB::table('users')
        // ->join('anggota', 'users.id', '=', 'anggota.users_id')
        // ->where('users.id', $getidanggota)
        // ->get();

        // $organisasi = DB::table('users')
        // ->join('organisasi', 'users.id', '=', 'organisasi.users_id')
        // ->where('users.id', $getidanggota)
        // ->get();

        // $usaha = DB::table('users')
        // ->join('usaha', 'users.id', '=', 'usaha.users_id')
        // ->where('users.id', $getidanggota)
        // ->get();

         $getidanggota = Auth::user()->id;
         $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
         $tampilorganisasi = DB::select("SELECT * FROM users INNER JOIN organisasi ON users.id = organisasi.users_id WHERE users.id = '$getidanggota'");
         $tampilusaha = DB::select("SELECT * FROM users INNER JOIN usaha ON users.id = usaha.users_id WHERE users.id = '$getidanggota'");

        return view('landingpage.anggota.index')->with([
            'tampilanggota' => $tampilanggota,
            'tampilorganisasi' => $tampilorganisasi,
            'tampilusaha' => $tampilusaha,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function ProfilAnggota()
    {
        //
        $agm1 = ['agama'=>'Islam'];
        $agm2 = ['agama'=>'Kristen'];
        $agm3 = ['agama'=>'Hindu'];
        $agm4 = ['agama'=>'Budha'];
        $agm5 = ['agama'=>'Konghucu'];
        $agm = [$agm1,$agm2,$agm3,$agm4,$agm5];

        $jenkel1 = ['jenis_kelamin' => 'Laki-Laki'];
        $jenkel2 = ['jenis_kelamin' => 'Perempuan'];
        $jenkel = [$jenkel1, $jenkel2];

        $pend_terakhir1 = ['pend_terakhir' => 'SD'];
        $pend_terakhir2 = ['pend_terakhir' => 'SMP'];
        $pend_terakhir3 = ['pend_terakhir' => 'SMA / SMK / MA'];
        $pend_terakhir4 = ['pend_terakhir' => 'Sarjana'];
        $pend_terakhir = [$pend_terakhir1,$pend_terakhir2,$pend_terakhir3,$pend_terakhir4];

        $getidanggota = Auth::user()->id;
        $anggota = DB::table('users')
        ->join('anggota', 'users.id', '=', 'anggota.users_id')
        ->where('users.id', $getidanggota)
        ->get();

        // $provinsi = DB::table('provinsi')->pluck("nama", "id");
        $provinsi = DB::table('provinsi')->get();

        return view('landingpage.anggota.edit', compact(
            'anggota',
            'agm',
            'jenkel',
            'provinsi',
            'getidanggota',
            'pend_terakhir'));
    }

    public function getKabupaten($id)
    {
        $states  = DB::table('kabupaten')->where("provinsi_id", $id)->pluck("nama", "id");
        return json_encode($states);
        return response()->json($states);
    }

    public function getKecamatan($id)
    {
        // $camat = new Kecamatan;
        // $camatan = $camat->where("kabkot_id", $id)->get();
        $kecamatan  = DB::table('kecamatan')->where("kabkot_id", $id)->pluck("kecamatan", "id");
        return json_encode($kecamatan);
        // return response()->json($camatan);
    }

    public function getKelurahan($id)
    {
        $kelurahan  = DB::table('kelurahan')->where("kecamatan_id", $id)->pluck("kelurahan", "id");
        return json_encode($kelurahan);
        // return response()->json($kecamatan);
    }

    public function SimpanProfilAnggota(Request $request)
    {
       //Untuk Validasi Form
       $this -> validate($request, [
        'nik' => 'required',
        'nama_anggota' => 'required',
        'tempat_lahir' => 'required',
        'tanggal_lahir' => 'required',
        'jenis_kelamin' => 'required',
        'agama' => 'required',
        'alamat' => 'required',
        'country' => 'required',
        'state' => 'required',
        'kecamatan' => 'required',
        'kelurahan' => 'required',
        'hp' => 'required',
        'email' => 'required',
        'pend_terakhir' => 'required'
    ],
    [
    // Untuk Menampilkan Pesan Jika Belum Di Isi
        'nik.required' => 'Isikan Nomor Induk Kependudukan Anda',
        'nama_anggota.required' => 'Isikan Nama Anda',
        'tempat_lahir.required' => 'Isikan Tempat Lahir Anda',
        'tanggal_lahir.required' => 'Pilih Tanggal Lahir Anda',
        'jenis_kelamin.required' => 'Pilih Jenis Kelamin Anda',
        'agama.required' => 'Pilih Agama Anda',
        'alamat.required' => 'Isikan Alamat Anda',
        'provinsi_id.required' => 'Pilih Provinsi Anda',
        'kabupaten_id.required' => 'Pilih Kabupaten Anda',
        'kecamatan_id.required' => 'Pilih Kecamatan Anda',
        'kelurahan_id.required' => 'Pilih Kelurahan Anda',
        'hp.required' => 'Isikan Nomor HP Anda',
        'email.required' => 'Isikan Email Aktif Anda',
        'pend_terakhir.required' => 'Isikan Pendidikan Terakhir Anda'
    ]);
    $getidanggota = Auth::user()->id;
    $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");

    if(!empty($request->foto)){
        $request->validate(['foto' => 'required|image|mimes:jpeg,png,jpg',]);
        $namafile = 'Anggota '.$request->nama_anggota.'.'.$request->foto->extension();
        $request->foto->move(public_path('images/anggota'), $namafile); }
    else{
        $namafile=null;
    }

    if (empty($tampilanggota)) {
            DB::table('anggota')->insert([
                'users_id' => $request->users_id,
                'nik' => $request->nik,
                'npwp_anggota' => $request->npwp_anggota,
                'nama_anggota' => $request->nama_anggota,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'agama'=> $request->agama,
                'alamat'=> $request->alamat,
                'provinsi_id'=> $request->country,
                'kabupaten_id'=> $request->state,
                'kecamatan_id'=> $request->kecamatan,
                'kelurahan_id'=> $request->kelurahan,
                'nomor_telp'=> $request->hp,
                'email'=> $request->email,
                'pend_terakhir'=> $request->pend_terakhir,
                'foto' => $namafile
            ]);
        }else {
            DB::table('anggota')->where('users_id', '=', $getidanggota)->update([
                'users_id' => $request->users_id,
                'nik' => $request->nik,
                'npwp_anggota' => $request->npwp_anggota,
                'nama_anggota' => $request->nama_anggota,
                'tempat_lahir' => $request->tempat_lahir,
                'tanggal_lahir' => $request->tanggal_lahir,
                'jenis_kelamin'=> $request->jenis_kelamin,
                'agama'=> $request->agama,
                'alamat'=> $request->alamat,
                'provinsi_id'=> $request->country,
                'kabupaten_id'=> $request->state,
                'kecamatan_id'=> $request->kecamatan,
                'kelurahan_id'=> $request->kelurahan,
                'nomor_telp'=> $request->hp,
                'email'=> $request->email,
                'pend_terakhir'=> $request->pend_terakhir,
                'foto' => $namafile
            ]);
        }

        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    // View Form Organisasi Anggota
    public function OrganisasiAnggota()
    {
        $getidanggota = Auth::user()->id;$getidanggota = Auth::user()->id;
        $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
        return view('landingpage.anggota.organisasi', compact('tampilanggota'));
    }

    // Save Organisasi Anggota Ke Database
    public function SimpanOrganisasiAnggota(Request $request)
    {
        //Untuk Validasi Form
       $this -> validate($request, [
        'nama_organisasi' => 'required',
        'jabatan_organisasi' => 'required'
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'nama_organisasi.required' => 'Isikan Nama Organisasi Anda',
            'jabatan_organisasi.required' => 'Isikan Jabatan Organisasi Anda',
        ]);

        DB::table('organisasi')->insert([
            'users_id' => $request->users_id,
            'nama_organisasi' => $request->nama_organisasi,
            'jabatan_organisasi' => $request->jabatan_organisasi
        ]);

        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');

    }

    // View Form Edit Organisasi Anggota
    public function EditOrganisasiAnggota($id)
    {
        $getidanggota = Auth::user()->id;
        $getidanggota = Auth::user()->id;
        $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
        $tampilorganisasi = DB::select("SELECT * FROM users INNER JOIN organisasi ON users.id = organisasi.users_id WHERE users.id = '$getidanggota'");
        $tampilorganisasi1 = DB::table('organisasi')->where('id_organisasi', $id)->get();
        return view('landingpage.anggota.edit-organisasi', compact(
            'tampilanggota',
            'tampilorganisasi',
            'tampilorganisasi1'));
    }

    public function SimpanEditOrganisasiAnggota(Request $request, $id)
    {
        //Untuk Validasi Form
       $this -> validate($request, [
        'nama_organisasi' => 'required',
        'jabatan_organisasi' => 'required'
    ],
    [
    // Untuk Menampilkan Pesan Jika Belum Di Isi
        'nama_organisasi.required' => 'Isikan Nama Organisasi Anda',
        'jabatan_organisasi.required' => 'Isikan Jabatan Organisasi Anda',
    ]);

    DB::table('organisasi')->where('id_organisasi', $id)->update([
        'nama_organisasi' => $request->nama_organisasi,
        'jabatan_organisasi' => $request->jabatan_organisasi
    ]);

    return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    public function HapusOrganisasi($id)
    {
        DB::table('organisasi')->where('id_organisasi', $id)->delete();
        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    public function UsahaAnggota()
    {
        // Kepemilikan Usaha
        $kpm1 = ['kepemilikan_usaha'=>'Pribadi'];
        $kpm2 = ['kepemilikan_usaha'=>'Mitra'];
        $kpm3 = ['kepemilikan_usaha'=>'Pengelola'];
        $kpm = [$kpm1,$kpm2,$kpm3];

        // Omset Usaha
        $omt0 = ['omset_usaha'=>'Dibawah < 10 Juta'];
        $omt1 = ['omset_usaha'=>'10 Juta - 50 Juta'];
        $omt2 = ['omset_usaha'=>'50 Juta - 80 Juta'];
        $omt3 = ['omset_usaha'=>'80 Juta  - 100 Juta'];
        $omt4 = ['omset_usaha'=>'100 Juta - 200 Juta'];
        $omt5 = ['omset_usaha'=>'200 Juta - 500 Juta'];
        $omt6 = ['omset_usaha'=>'Diatas > 500 Juta'];
        $omt = [$omt0,$omt1,$omt2,$omt3,$omt4,$omt5,$omt6];

        // Menampilkan Data Jumlah Karyawan
        $krw1 = ['karyawan'=>'Tidak Memiliki Karyawan'];
        $krw2 = ['karyawan'=>'1 Orang - 9 Orang'];
        $krw3 = ['karyawan'=>'10 Orang - 19 Orang'];
        $krw4 = ['karyawan'=>'20 Orang - 49 Orang'];
        $krw5 = ['karyawan'=>'50 Orang - 99 Orang'];
        $krw6 = ['karyawan'=>'Diatas > 100 Orang'];
        $krw = [$krw1,$krw2,$krw3,$krw4,$krw5,$krw6];

        // Menampilkan Data Dana Usaha
        $dnu1 = ['dana_usaha'=>'Dana Pribadi'];
        $dnu2 = ['dana_usaha'=>'Pinjaman Bank'];
        $dnu3 = ['dana_usaha'=>'Non Bank'];
        $dnu = [$dnu1,$dnu2,$dnu3];

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

        $getidanggota = Auth::user()->id;$getidanggota = Auth::user()->id;
        $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");

        return view('landingpage.anggota.usaha', compact(
            'kpm','omt','krw','dnu','tampilanggota','bdus'
        ));
    }

    public function SimpanUsahaAnggota(Request $request)
    {
        //Untuk Validasi Form
       $this -> validate($request, [
        'nama_usaha' => 'required',
        'alamat_usaha' => 'required',
        'tahun_berdiri' => 'required',
        'bidang_usaha' => 'required',
        'detailbidang_usaha' => 'required',
        'kepemilikan_usaha' => 'required',
        'omset_usaha' => 'required',
        'karyawan' => 'required',
        'dana_usaha' => 'required',
    ],
    [
    // Untuk Menampilkan Pesan Jika Belum Di Isi
        'nama_usaha.required' => 'Isikan Nama Usaha Anda',
        'alamat_usaha.required' => 'Isikan Alamat Usaha Anda',
        'tahun_berdiri.required' => 'Isikan Tahun Berdiri Anda',
        'bidang_usaha.required' => 'Isikan Bidang Usaha Anda',
        'detailbidang_usaha.required' => 'Isikan Detail Bidang Usaha Anda',
        'kepemilikan_usaha.required' => 'Isikan Kepemilikan Usaha Anda',
        'omset_usaha.required' => 'Isikan Omset Usaha Anda',
        'karyawan.required' => 'Isikan Jumlah Karyawan Anda',
        'dana_usaha.required' => 'Isikan Sumber Dana Anda'
    ]);

    DB::table('usaha')->insert([
        'users_id' => $request->users_id,
        'npwp_usaha' => $request->npwp_usaha,
        'izin_usaha' => $request->izin_usaha,
        'nama_usaha' => $request->nama_usaha,
        'alamat_usaha' => $request->alamat_usaha,
        'tahun_berdiri' => $request->tahun_berdiri,
        'bidang_usaha' => $request->bidang_usaha,
        'detailbidang_usaha' => $request->detailbidang_usaha,
        'kepemilikan_usaha' => $request->kepemilikan_usaha,
        'omset_usaha' => $request->omset_usaha,
        'karyawan' => $request->karyawan,
        'dana_usaha' => $request->dana_usaha,
    ]);

    return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');

    }

    public function EditUsahaAnggota($id)
    {
        $getidanggota = Auth::user()->id;$getidanggota = Auth::user()->id;
        $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
        $tampilusaha = DB::select("SELECT * FROM users INNER JOIN usaha ON users.id = usaha.users_id WHERE users.id = '$getidanggota'");
        $tampilusaha1 = DB::table('usaha')->where('idusaha', $id)->get();

         // Kepemilikan Usaha
         $kpm1 = ['kepemilikan_usaha'=>'Pribadi'];
         $kpm2 = ['kepemilikan_usaha'=>'Mitra'];
         $kpm3 = ['kepemilikan_usaha'=>'Pengelola'];
         $kpm = [$kpm1,$kpm2,$kpm3];

         // Omset Usaha
         $omt0 = ['omset_usaha'=>'Dibawah < 10 Juta'];
         $omt1 = ['omset_usaha'=>'10 Juta - 50 Juta'];
         $omt2 = ['omset_usaha'=>'50 Juta - 80 Juta'];
         $omt3 = ['omset_usaha'=>'80 Juta  - 100 Juta'];
         $omt4 = ['omset_usaha'=>'100 Juta - 200 Juta'];
         $omt5 = ['omset_usaha'=>'200 Juta - 500 Juta'];
         $omt6 = ['omset_usaha'=>'Diatas > 500 Juta'];
         $omt = [$omt0,$omt1,$omt2,$omt3,$omt4,$omt5,$omt6];

         // Menampilkan Data Jumlah Karyawan
         $krw1 = ['karyawan'=>'Tidak Memiliki Karyawan'];
         $krw2 = ['karyawan'=>'1 Orang - 9 Orang'];
         $krw3 = ['karyawan'=>'10 Orang - 19 Orang'];
         $krw4 = ['karyawan'=>'20 Orang - 49 Orang'];
         $krw5 = ['karyawan'=>'50 Orang - 99 Orang'];
         $krw6 = ['karyawan'=>'Diatas > 100 Orang'];
         $krw = [$krw1,$krw2,$krw3,$krw4,$krw5,$krw6];

         // Menampilkan Data Dana Usaha
         $dnu1 = ['dana_usaha'=>'Dana Pribadi'];
         $dnu2 = ['dana_usaha'=>'Pinjaman Bank'];
         $dnu3 = ['dana_usaha'=>'Non Bank'];
         $dnu = [$dnu1,$dnu2,$dnu3];

        return view('landingpage.anggota.edit-usaha', compact(
            'tampilanggota',
            'tampilusaha',
            'tampilusaha1',
            'kpm','omt','krw','dnu'
        ));
    }

    public function SimpanEditUsahaAnggota(Request $request, $id)
    {

        //Untuk Validasi Form
        $this -> validate($request, [
            'nama_usaha' => 'required',
            'alamat_usaha' => 'required',
            'tahun_berdiri' => 'required',
            'bidang_usaha' => 'required',
            'kepemilikan_usaha' => 'required',
            'omset_usaha' => 'required',
            'karyawan' => 'required',
            'dana_usaha' => 'required',
        ],
        [
        // Untuk Menampilkan Pesan Jika Belum Di Isi
            'nama_usaha.required' => 'Isikan Nama Organisasi Anda',
            'alamat_usaha.required' => 'Isikan Jabatan Organisasi Anda',
            'tahun_berdiri.required' => 'Isikan Jabatan Organisasi Anda',
            'bidang_usaha.required' => 'Isikan Jabatan Organisasi Anda',
            'kepemilikan_usaha.required' => 'Isikan Jabatan Organisasi Anda',
            'omset_usaha.required' => 'Isikan Jabatan Organisasi Anda',
            'karyawan.required' => 'Isikan Jabatan Organisasi Anda',
            'dana_usaha.required' => 'Isikan Jabatan Organisasi Anda'
        ]);
        DB::table('usaha')->where('idusaha', $id)->update([
            'nama_usaha' => $request->nama_usaha,
            'npwp_usaha' => $request->npwp_usaha,
            'izin_usaha' => $request->izin_usaha,
            'alamat_usaha' => $request->alamat_usaha,
            'tahun_berdiri' => $request->tahun_berdiri,
            'bidang_usaha' => $request->bidang_usaha,
            'kepemilikan_usaha' => $request->kepemilikan_usaha,
            'omset_usaha' => $request->omset_usaha,
            'karyawan' => $request->karyawan,
            'dana_usaha' => $request->dana_usaha,
        ]);
        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    public function HapusUsaha($id)
    {
        DB::table('usaha')->where('idusaha', $id)->delete();
        return redirect('dashboard/user')->with('sukses','Data Berhasil Disimpan');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
