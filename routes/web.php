<?php

use App\Http\Controllers\AnggotaController;
use App\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/blog', function () {
//     return view('landingpage.blog.index');
// });
// Route::get('/register/anggota', function () {
//     return view('landingpage.anggota.create');
// });


Auth::routes();
Route::get('/admin', 'AdminController@index')->middleware('auth');
Route::get('/user', 'UserController@index')->middleware('auth');
Route::get('/keluar', 'HomeController@logout')->name('keluar')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');

// Landing Page
    // Home
    Route::get('/', 'LandingController@index')->name('Landing.index');
    // Profile
    Route::get('/profile', 'LandingController@profile')->name('Landing.profile');
    // Pengurus
    Route::get('/pengurus', 'LandingController@pengurus')->name('Landing.pengurus');
    // Mitra
    Route::get('/mitra', 'LandingController@mitra')->name('Landing.mitra');
    // Pusat
    Route::get('/pusat', 'LandingController@pusat')->name('Landing.pusat');
    // Pelatihan
    Route::get('/pelatihan', 'LandingController@pelatihan')->name('Landing.pelatihan');
    // Konsultasi
    Route::get('/konsultasi', 'LandingController@konsultasi')->name('Landing.konsultasi');
    // Pertanian
    Route::get('/pertanian', 'LandingController@pertanian')->name('Landing.pertanian');
    // Blog
    Route::get('blog','LandingController@blog')->name('Landing.blog');
    // Show Blog
    // Route::get('blog/show/{$id}','LandingController@Showblog')->name('Landing.showblog');
    // Perikanan
    Route::get('perikanan','LandingController@perikanan')->name('Landing.perikanan');
    // Pasar Rakyat
    Route::get('pasar-rakyat','LandingController@pasarrakyat')->name('Landing.pasarrakyat');
    // Foto Kegiatan
        Route::get('kegiatan-pusatnusa', 'LandingController@FotoKegiatan')->name('Landing.kegiatan');
        // Show Foto Kegiatan
        Route::get('kegiatan-pusatnusa/{id}', 'LandingController@ShowFotoKegiatan')->name('Landing.show-kegiatan');

    // Pengajuan Modal
        Route::get('dashboard/bantuan-usaha', 'LandingController@Modal')->name('Landing.modal');
        // Create Modal
        Route::get('dashboard/bantuan-usaha/pengajuan', 'PengajuanmodalController@CreateModal')->name('Landing.modal-create')->middleware('auth');
        Route::post('dashboard/bantuan-usaha/pengajuan-simpan', 'PengajuanmodalController@SimpanCreateModal')->name('Landing.modal-simpan')->middleware('auth');
        // Route::post('dashboard/bantuan-usaha/pengajuan-simpan', 'PengajuanmodalController@SimpanCreateModal')->name("Landing.modal-save")->middleware("auth");

        // Siaran Pers
        // Index
        Route::get('siaran-pers', 'LandingController@siaranpers')->name('Landing.siaranpers');
        // Show
        Route::get('siaran-pers/{id}', 'LandingController@ShowsSiaranPers')->name('Landing.siaranpers-show');

    // Persyaratan Anggota
    Route::get('persyaratan-anggota','LandingController@SyaratAnggota')->name('Landing.syarat-anggota');

    // PROFILE KARYAWAN
        // TOPAD
        Route::get('pengurus/direktur', 'LandingController@topad')->name('Landing.topad');


// Dashboard
    Route::get('dashboard-admin', 'DashboardController@index')->name('Dashboard.index')->middleware('auth');

    // Mitra
    Route::resource('dashboard-admin/mitra', 'MitraController')->middleware('auth');

    // Blog
    Route::resource('dashboard-admin/blog', 'BlogController')->middleware('auth');

    // Materi
    Route::resource('dashboard-admin/materi', 'MateriController')->middleware('auth');

    // Opini
    Route::resource('dashboard-admin/opini', 'OpiniController')->middleware('auth');

    // Foto Kegiatan
    Route::resource('dashboard-admin/fotokegiatan', 'FotokegiatanController')->middleware('auth');

    // Pelatihan
    Route::resource('dashboard-admin/pelatihan', 'PelatihanController')->middleware('auth');

    // Karyawan
    Route::resource('dashboard-admin/karyawan', 'KaryawanController')->middleware('auth');

    // Program
    Route::resource('dashboard-admin/program', 'ProgramController')->middleware('auth');

    // Siaran Pers
    Route::resource('dashboard-admin/siaran-pers', 'SiaranpersController')->middleware('auth');

    // List Anggota
    Route::get('dashboard-admin/list-anggota', 'AnggotaController@index')->name('Dashboard.list-anggota')->middleware('auth');

    // Show Anggota
    Route::get('dashboard-admin/show-anggota/{id}', 'AnggotaController@ShowAnggota')->name('Dashboard.show-anggota')->middleware('auth');

    // Show Pengajuan Modal Anggota
    Route::get('dashboard-admin/pengajuan-modal', 'PengajuanmodalController@index')->name('dashboard.pengajuanmodal-index')->middleware('auth');

    // Show Pengajuan Modal Anggota
    Route::get('dashboard-admin/show-pengajuanmodal/{id}', 'PengajuanmodalController@show')->name('Dashboard.list-pengajuanmodal')->middleware('auth');

    // Show List User
    Route::get('dashboard-admin/list-user', 'UserController@DataUser')->name('Dashboard.list-user')->middleware('auth');

// Anggota
    // Daftar
    // Route::resource('register/anggota', 'AnggotaController');
    // Route::get('register/anggota', 'AnggotaController@create')->middleware('auth');
    // Route::post('register/anggota/post', 'AnggotaController@store')->name('Anggota.strore')->middleware('auth');
    // Route::get('register-berhasil', 'RegisberhasilController@index')->name('Anggota.berhasil')->middleware('auth');

    // Dashboard User
    Route::get('dashboard/user', 'AnggotaController@show')->name('Anggota.show')->middleware('auth');
        // Form Edit & Lengkapi Profil
        Route::get('dashboard/user/profil', 'AnggotaController@ProfilAnggota')->name('Anggota.edit')->middleware('auth');
        Route::post('dashboard/user/profil-simpan', 'AnggotaController@SimpanProfilAnggota')->name('Anggota.simpan')->middleware('auth');
        // Dependent Dropdown Provinsi, Kabupaten, Kecamatan, Kelurahan
        Route::get('/{id}', 'AnggotaController@getKabupaten');
        Route::get('/kecamatan/{id}', 'AnggotaController@getKecamatan');
        Route::get('/kelurahan/{id}', 'AnggotaController@getKelurahan');


        // ORGANISASI
            // Form Tambah Data Organisasi Anggota
            Route::get('dashboard/user/organisasi', 'AnggotaController@OrganisasiAnggota')->name('Anggota.organisasi')->middleware('auth');
            Route::post('dashboard/user/organisasi-simpan', 'AnggotaController@SimpanOrganisasiAnggota')->name('Anggota.organisasi-simpan')->middleware('auth');
            // Form Edit Data Organisasi Anggota
            Route::get('dashboard/user/organisasi/edit-{id}', 'AnggotaController@EditOrganisasiAnggota')->name('Anggota.organisasi-edit')->middleware('auth');
            Route::post('dashboard/user/organisasi/edit-simpan/{id}', 'AnggotaController@SimpanEditOrganisasiAnggota')->name('Anggota.organisasi-edit.simpan')->middleware('auth');
            // Method Delete Organisasi
            Route::post('dashboard/user/organisasi/hapus-{id}', 'AnggotaController@HapusOrganisasi')->name('Anggota.organisasi-hapus')->middleware('auth');

        // USAHA
            // Form Tambah Usaha Anggota
            Route::get('dashboard/user/usaha', 'AnggotaController@UsahaAnggota')->name('Anggota.usaha')->middleware('auth');
            Route::post('dashboard/user/usaha-simpan', 'AnggotaController@SimpanUsahaAnggota')->name('Anggota.usaha-simpan')->middleware('auth');
            // Form Edit Data Usaha Anggota
            Route::get('dashboard/user/usaha/edit-{id}', 'AnggotaController@EditUsahaAnggota')->name('Anggota.usaha-edit')->middleware('auth');
            Route::post('dashboard/user/usaha/edit-simpan/{id}', 'AnggotaController@SimpanEditUsahaAnggota')->name('Anggota.usaha-edit.simpan')->middleware('auth');
            // Method Delete Usaha
            Route::post('dashboard/user/usaha/hapus-{id}', 'AnggotaController@HapusUsaha')->name('Anggota.usaha-hapus')->middleware('auth');
