<?php

namespace App\Http\Controllers;

use App\Siaranpers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Validator,Redirect,Response,File;

class LandingController extends Controller
{
    //
    public function index()
    {
        return view('homepage');
    }

    public function profile()
    {
        return view('landingpage.tentang.profile');
    }

    public function pengurus()
    {
        return view('landingpage.tentang.pengurus');
    }

    public function mitra()
    {
        $mitra = DB::table('tbl_mitra')->get();
        return view('landingpage.tentang.mitra', compact('mitra'));
    }

    public function pusat()
    {
        // return redirect('blog');
        return view('landingpage.pusat.pusat');
    }

    public function blog()
    {
        // return redirect('blog');
        $blog = DB::table('tbl_opini')->get();
        return view('landingpage.blog.index', compact('blog'));
    }
    // public function Showblog($id)
    // {
    //     $showblog = DB::table('tbl_opini')
    //     ->where('$idopini', $id)
    //     ->get();
    //     return view('landingpage.blog.show', compact('showblog'));
    // }

    public function pelatihan()
    {
        $tbl_pelatihan = DB::table('tbl_pelatihan')->get();
        return view('landingpage.pelatihan.pelatihan', compact('tbl_pelatihan'));
    }

    public function konsultasi()
    {
        return view('landingpage.konsultasi.konsultasi');
    }

    public function pertanian()
    {
        return view('landingpage.sektor.pertanian.index');
    }

    public function perikanan()
    {
        return view('landingpage.sektor.perikanan.index');
    }

    public function topad()
    {
        return view('landingpage.background.topad');
    }

    public function pasarrakyat()
    {
        return view('landingpage.pasarrakyat.index');
    }

    public function siaranpers()
    {
        $siaranpers = DB::table('siaran_pers')->get();
       return view('landingpage.pusat.siaranpers', compact('siaranpers'));
    }

    public function ShowsSiaranPers($id)
    {
        $siaranpers = DB::table('siaran_pers')->where('idsiaranpers', $id)->get();
        return view('landingpage.pusat.showsiaranpers', compact('siaranpers'));
    }

    // public function DownloadSiaranPers($id)
    // {
    //    $model_file = File::find($id);
    //    return Storage::download($model_file->)
    //    $model_file = DB::table('siaran_pers')->where('idsiaranpers', $id)->get();
    //    $file = public_path() . '/dashboard/siaranpers/' . $model_file->dokumen_siaranpers;
    //    return response()->download($file, $model_file->dokumen_siaranpers);
    // }

    public function SyaratAnggota()
    {
        return view('landingpage.anggota.syaratanggota');
    }

    public function FotoKegiatan()
    {
        $fotokegiatan = DB::table('tbl_fotokegiatan')->get();
        return view('landingpage.pusat.fotokegiatan', compact('fotokegiatan'));
    }

    public function ShowFotoKegiatan($id)
    {
        $showfotokegiatan = DB::table('tbl_fotokegiatan')->where('id_foto', $id)->get();
       return view('landingpage.pusat.showfotokegiatan', compact('showfotokegiatan'));
    }

    public function Modal()
    {
        return view('landingpage.modal.index');
    }



    // public function CreateModal()
    // {
    //     $getidanggota = Auth::user()->id;
    //     $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
    //     $provinsi = DB::table('provinsi')->get();
    //     return view('landingpage.modal.create', compact('tampilanggota','provinsi'));
    // }
}
