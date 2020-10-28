<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $TotalAnggota = DB::table('users')
        ->join('anggota', 'users.id', '=', 'anggota.users_id')
        ->count();

        $TotalOrganisasi = DB::table('users')
        ->join('organisasi', 'users.id', '=', 'organisasi.users_id')
        ->count();

        $TotalUsaha = DB::table('users')
        ->join('usaha', 'users.id', '=', 'usaha.users_id')
        ->count();

        $TotalSiaranPers = DB::table('siaran_pers')->count();

        $TotalMitra = DB::table('tbl_mitra')->count();

        $TotalPengajuanModal = DB::table('pengajuan_modal')->count();

        return view('dashboard.homepage', compact(
            'TotalAnggota',
            'TotalOrganisasi',
            'TotalUsaha',
            'TotalSiaranPers',
            'TotalMitra',
            'TotalPengajuanModal'));

            
    }
}
