@extends('template')
@section('title', 'Dashboard Anggota')
    @section('main')
    <style>
    body{
    background: -webkit-linear-gradient(left, #1e1e1e, #1bbd36);
}
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
 }
/* .profile-img img{
    width: 70%;
    height: 100%;
} */
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5 h4{
    color: #333;
}
.profile-head h6{
    color: #1bbd36;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #118f1b;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work {
    text-decoration: none;
    color: #1bbd36;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p {
    font-weight: 600;
    color: #118f1b;
}

.action-organisasi {
    color: #fff;
}

.hapus-anggota{
    background: #1bbd36;
    border: 0;
    color: #fff;
    border-radius: 4px;
  }
  .hapus-anggota:hover {
    background: #2ae149;
  }
  .style-action-button-a{
      float: right;
  }
  .style-action-button-b{
      float: right;
  }

  @media screen and (max-device-width: 480px) {
        .container-akun{
        text-align: center;
        }

        .style-action-button-a{
        margin-left: 40px;
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .style-action-button-b{
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .garis {
        margin-top: 40px;
    }
  }
    </style>
    <br/><br/><br/><br/>

<div class="container emp-profile">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">

                            @foreach ($tampilanggota as $anggota1)
                            @if ($anggota1->foto === "" || $anggota1->foto === null)
                            <img src="{{asset('images/anggota/default.png')}}" width="180px" height="200px" alt="Foto Profil"/>
                            @else
                            <img src="{{asset('images/anggota')}}/{{$anggota1->foto}}" width="180px" height="200px" alt="Foto Profil"/>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                            <div class="container-akun">
                                    <h4>
                                        Nama Akun
                                    </h4>
                                    <h5>
                                        {{ Auth::user()->name }}
                                    </h5>
                                    <h6>
                                        {{ Auth::user()->email }}
                                    </h6>
                                    <div class="col-md-6">
                                        <a href="{{route('keluar')}}"><button class="profile-edit-btn" name="btnAddMore">Log Out</button></a> </div>
                                </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data Diri</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="organisasi-tab" data-toggle="tab" href="#organisasi" role="tab" aria-controls="usaha" aria-selected="false">Organisasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#usaha" role="tab" aria-controls="usaha" aria-selected="false">Data Usaha</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    {{-- <div class="col-md-2">
                        <a href="{{route('keluar')}}"><button class="profile-edit-btn" name="btnAddMore">Log Out</button></a>
                    </div> --}}
                </div>

                <div class="row">
                    <div class="col-md-4">
                    </div>

                    {{-- Jika Profile, Organisasi, Usaha Tidak Ada Data --}}
                    @if (empty($tampilanggota) && empty($tampilorganisasi) && empty($tampilusaha))
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nomor Induk Kependudukan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nomor Pokok Wajib Pajak</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tempat, Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Agama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat Rumah</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nomor HP</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pendidikan Terakhir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                            </div>
                            <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Organisasi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Organisasi Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jabatan Organisasi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Organisasi Anda</p>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;">
                                <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>
                            </div>
                            <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat Perusahaan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tahun Berdiri</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bidang Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kepemilikan Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Omset Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jumlah Karyawan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sumber Pendanaan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <hr style="border: 1px solid grey;" class="garis">
                                        <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                            </div>
                        </div>
                    </div>

                    {{-- Jika Profile Ada Data, Tetapi Organisasi dan Usaha Tidak Ada Data --}}
                    @elseif (!empty($tampilanggota) && empty( $tampilorganisasi) && empty($tampilusaha))
                    @foreach ($tampilanggota as $anggota)
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Induk Kependudukan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nik}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Pokok Wajib Pajak</label>
                                    </div>
                                    @if (empty($anggota->npwp_anggota))
                                    <div class="col-md-6">
                                        <p>Tidak Mempunyai NPWP</p>
                                    </div>
                                    @elseif (!empty($anggota->npwp_anggota))
                                    <div class="col-md-6">
                                        <p>{{$anggota->npwp_anggota}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nama_anggota}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tempat, Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->tempat_lahir}}, {{$anggota->tanggal_lahir}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->jenis_kelamin}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->agama}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Rumah</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->alamat}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor HP</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nomor_telp}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pendidikan Terakhir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->pend_terakhir}}</p>
                                    </div>
                                </div>
                                <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                            </div>
                            <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Organisasi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Tambahkan Organisasi Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jabatan Organisasi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Tambahkan Jabatan Organisasi Anda</p>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;" class="garis">
                                <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>

                            </div>
                            <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Perusahaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tahun Berdiri</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Bidang Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kepemilikan Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Omset Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jumlah Karyawan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Sumber Pendanaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;" class="garis">
                                <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    {{-- Jika Organisasi Ada, Tetapi Profile dan Usaha Tidak Ada --}}
                    @elseif (empty($tampilanggota) && !empty( $tampilorganisasi) && empty($tampilusaha))
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor Induk Kependudukan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor Pokok Wajib Pajak</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tempat, Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Agama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Alamat Rumah</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor HP</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Pendidikan Terakhir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                                </div>

                                <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                    @foreach ($tampilorganisasi as $organisasi)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Organisasi</label>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{$organisasi->nama_organisasi}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Jabatan Organisasi</label>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{$organisasi->jabatan_organisasi}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="style-action-button-a">
                                                <form action="{{route('Anggota.organisasi-hapus', $organisasi->id_organisasi)}}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                                </form>
                                            </div>
                                            <div class="style-action-button-b">
                                                <button class="hapus-anggota"><a href="{{route('Anggota.organisasi-edit', $organisasi->id_organisasi)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    @endforeach
                                    <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>
                                </div>

                                <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Alamat Perusahaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tahun Berdiri</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Bidang Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Kepemilikan Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Omset Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jumlah Karyawan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Sumber Pendanaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Lengkapi Data Usaha Anda</p>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                                </div>
                            </div>
                        </div>


                    {{-- Jika Usaha Ada, Tetapi Profile dan Organisasi Tidak Ada --}}
                    @elseif (empty($tampilanggota) && empty( $tampilorganisasi) && !empty($tampilusaha))
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor Induk Kependudukan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor Pokok Wajib Pajak</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tempat, Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Agama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Alamat Rumah</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor HP</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Pendidikan Terakhir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                                </div>

                                <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Organisasi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Tambahkan Organisasi Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jabatan Organisasi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Tambahkan Jabatan Organisasi Anda</p>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>

                                </div>

                                <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                    @foreach ($tampilusaha as $usaha)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->nama_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor Pokok Wajib Pajak Usaha</label>
                                        </div>
                                        @if (empty($usaha->npwp_usaha))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai NPWP</p>
                                        </div>
                                        @elseif (!empty($usaha->npwp_usaha))
                                        <div class="col-md-6">
                                            <p>{{$usaha->npwp_usaha}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Izin Usaha</label>
                                        </div>
                                        @if (empty($usaha->izin_usaha))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai Izin Usaha</p>
                                        </div>
                                        @elseif (!empty($usaha->izin_usaha))
                                        <div class="col-md-6">
                                            <p>{{$usaha->izin_usaha}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Alamat Perusahaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->alamat_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tahun Berdiri</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->tahun_berdiri}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Bidang Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->bidang_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Kepemilikan Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->kepemilikan_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Omset Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->omset_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jumlah Karyawan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->karyawan}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Sumber Pendanaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->dana_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="style-action-button-a">
                                                <form action="{{route('Anggota.usaha-hapus', $usaha->idusaha)}}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                                </form>
                                            </div>
                                            <div class="style-action-button-b">
                                                <button class="hapus-anggota"><a href="{{route('Anggota.usaha-edit', $usaha->idusaha)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    @endforeach
                                    <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                                </div>
                            </div>
                        </div>

                    {{-- Jika Profile dan Organisasi Ada Data, Tetapi Usaha Tidak Ada Data --}}
                    @elseif (!empty($tampilanggota) && !empty( $tampilorganisasi) && empty($tampilusaha))
                    @foreach ($tampilanggota as $anggota)
                    {{-- @foreach ($tampilorganisasi as $organisasi) --}}
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Induk Kependudukan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nik}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Pokok Wajib Pajak</label>
                                    </div>
                                    @if (empty($anggota->npwp_anggota))
                                    <div class="col-md-6">
                                        <p>Tidak Mempunyai NPWP</p>
                                    </div>
                                    @elseif (!empty($anggota->npwp_anggota))
                                    <div class="col-md-6">
                                        <p>{{$anggota->npwp_anggota}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nama_anggota}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tempat, Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->tempat_lahir}}, {{$anggota->tanggal_lahir}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->jenis_kelamin}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->agama}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Rumah</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->alamat}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor HP</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nomor_telp}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pendidikan Terakhir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->pend_terakhir}}</p>
                                    </div>
                                </div>
                                <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                            </div>
                            <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                @foreach ($tampilorganisasi as $organisasi)
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Organisasi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$organisasi->nama_organisasi}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Jabatan Organisasi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$organisasi->jabatan_organisasi}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="style-action-button-a">
                                            <form action="{{route('Anggota.organisasi-hapus', $organisasi->id_organisasi)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                            </form>
                                        </div>
                                        <div class="style-action-button-b">
                                            <button class="hapus-anggota"><a href="{{route('Anggota.organisasi-edit', $organisasi->id_organisasi)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;" class="garis">
                                @endforeach
                                <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>
                            </div>
                            <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Perusahaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tahun Berdiri</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Bidang Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kepemilikan Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Omset Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jumlah Karyawan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Sumber Pendanaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Usaha Anda</p>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;" class="garis">
                                <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    {{-- Jika Profile dan Usaha Ada, Tetapi Data Organisasi Kosong --}}
                    @elseif (!empty($tampilanggota) && !empty( $tampilusaha) && empty($tampilorganisasi))
                    @foreach ($tampilanggota as $anggota)
                    {{-- @foreach ($tampilorganisasi as $organisasi) --}}
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor Induk Kependudukan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->nik}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor Pokok Wajib Pajak</label>
                                        </div>
                                        @if (empty($anggota->npwp_anggota))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai NPWP</p>
                                        </div>
                                        @elseif (!empty($anggota->npwp_anggota))
                                        <div class="col-md-6">
                                            <p>{{$anggota->npwp_anggota}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Lengkap</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->nama_anggota}}</p>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tempat, Tanggal Lahir</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->tempat_lahir}}, {{$anggota->tanggal_lahir}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jenis Kelamin</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->jenis_kelamin}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Agama</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->agama}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Alamat Rumah</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->alamat}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor HP</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->nomor_telp}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Pendidikan Terakhir</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$anggota->pend_terakhir}}</p>
                                        </div>
                                    </div>
                                    <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                                </div>

                                <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Organisasi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Tambahkan Organisasi Anda</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jabatan Organisasi</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>Tambahkan Jabatan Organisasi Anda</p>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>

                                </div>

                                <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                    @foreach ($tampilusaha as $usaha)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->nama_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor Pokok Wajib Pajak Usaha</label>
                                        </div>
                                        @if (empty($usaha->npwp_usaha))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai NPWP</p>
                                        </div>
                                        @elseif (!empty($usaha->npwp_usaha))
                                        <div class="col-md-6">
                                            <p>{{$usaha->npwp_usaha}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Izin Usaha</label>
                                        </div>
                                        @if (empty($usaha->izin_usaha))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai Izin Usaha</p>
                                        </div>
                                        @elseif (!empty($usaha->izin_usaha))
                                        <div class="col-md-6">
                                            <p>{{$usaha->izin_usaha}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Alamat Perusahaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->alamat_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tahun Berdiri</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->tahun_berdiri}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Bidang Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->bidang_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Kepemilikan Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->kepemilikan_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Omset Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->omset_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jumlah Karyawan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->karyawan}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Sumber Pendanaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->dana_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="style-action-button-a">
                                                <form action="{{route('Anggota.usaha-hapus', $usaha->idusaha)}}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                                </form>
                                            </div>
                                            <div class="style-action-button-b">
                                                <button class="hapus-anggota"><a href="{{route('Anggota.usaha-edit', $usaha->idusaha)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    @endforeach
                                    <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Jika Usaha dan Organisasi Ada, Tetapi Data Profile Tidak Ada --}}
                    @elseif (empty($tampilanggota) && !empty( $tampilusaha) && !empty($tampilorganisasi))
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor Induk Kependudukan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor Pokok Wajib Pajak</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Tempat, Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Agama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Alamat Rumah</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nomor HP</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Pendidikan Terakhir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p>Lengkapi Data Diri Anda</p>
                                                </div>
                                            </div>
                                            <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                                </div>

                                <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                    @foreach ($tampilorganisasi as $organisasi)
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Nama Organisasi</label>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{$organisasi->nama_organisasi}}
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Jabatan Organisasi</label>
                                        </div>
                                        <div class="col-md-4">
                                            <p>{{$organisasi->jabatan_organisasi}}</p>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="style-action-button-a">
                                                <form action="{{route('Anggota.organisasi-hapus', $organisasi->id_organisasi)}}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                                </form>
                                            </div>
                                            <div class="style-action-button-b">
                                                <button class="hapus-anggota"><a href="{{route('Anggota.organisasi-edit', $organisasi->id_organisasi)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    @endforeach
                                    <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>
                                </div>

                                <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                    @foreach ($tampilusaha as $usaha)
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nama Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->nama_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Nomor Pokok Wajib Pajak Usaha</label>
                                        </div>
                                        @if (empty($usaha->npwp_usaha))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai NPWP</p>
                                        </div>
                                        @elseif (!empty($usaha->npwp_usaha))
                                        <div class="col-md-6">
                                            <p>{{$usaha->npwp_usaha}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Izin Usaha</label>
                                        </div>
                                        @if (empty($usaha->izin_usaha))
                                        <div class="col-md-6">
                                            <p>Tidak Mempunyai Izin Usaha</p>
                                        </div>
                                        @elseif (!empty($usaha->izin_usaha))
                                        <div class="col-md-6">
                                            <p>{{$usaha->izin_usaha}}</p>
                                        </div>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Alamat Perusahaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->alamat_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Tahun Berdiri</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->tahun_berdiri}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Bidang Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->bidang_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Kepemilikan Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->kepemilikan_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Omset Usaha</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->omset_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Jumlah Karyawan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->karyawan}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label>Sumber Pendanaan</label>
                                        </div>
                                        <div class="col-md-6">
                                            <p>{{$usaha->dana_usaha}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="style-action-button-a">
                                                <form action="{{route('Anggota.usaha-hapus', $usaha->idusaha)}}" method="POST">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                                </form>
                                            </div>
                                            <div class="style-action-button-b">
                                                <button class="hapus-anggota"><a href="{{route('Anggota.usaha-edit', $usaha->idusaha)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border: 1px solid grey;" class="garis">
                                    @endforeach
                                    <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                                </div>
                            </div>
                        </div>

                    {{-- @elseif (!empty($tampilanggota && $tampilorganisasi) && empty($tampilusaha))
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Lengkap</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tempat, Tanggal Lahir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jenis Kelamin</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Agama</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat Rumah</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nomor HP</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Pendidikan Terakhir</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Diri Anda</p>
                                            </div>
                                        </div>
                                        <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                            </div>
                            <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Organisasi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Organisasi Anda</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jabatan Organisasi</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>Lengkapi Data Organisasi Anda</p>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;">


                            </div>
                            <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nama Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Alamat Perusahaan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Tahun Berdiri</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Bidang Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Kepemilikan Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Omset Usaha</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Jumlah Karyawan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Sumber Pendanaan</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>Lengkapi Data Usaha Anda</p>
                                            </div>
                                        </div>
                                        <hr style="border: 1px solid grey;">
                            </div>
                        </div>
                    </div> --}}

                    {{-- Jika Profile, Organisasi, Usaha Memiliki Data--}}
                    @else
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            @foreach ($tampilanggota as $anggota)
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Induk Kependudukan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nik}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Pokok Wajib Pajak</label>
                                    </div>
                                    @if (empty($anggota->npwp_anggota))
                                    <div class="col-md-6">
                                        <p>Tidak Mempunyai NPWP</p>
                                    </div>
                                    @elseif (!empty($anggota->npwp_anggota))
                                    <div class="col-md-6">
                                        <p>{{$anggota->npwp_anggota}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Lengkap</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nama_anggota}}</p>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tempat, Tanggal Lahir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->tempat_lahir}}, {{$anggota->tanggal_lahir}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jenis Kelamin</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->jenis_kelamin}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Agama</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->agama}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Rumah</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->alamat}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor HP</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->nomor_telp}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Pendidikan Terakhir</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$anggota->pend_terakhir}}</p>
                                    </div>
                                </div>
                                <center><a href="{{route('Anggota.edit')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/></a></center>
                            </div>
                            @endforeach

                            <div class="tab-pane fade" id="organisasi" role="tabpanel" aria-labelledby="organisasi-tab">
                                @foreach ($tampilorganisasi as $organisasi)
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Nama Organisasi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$organisasi->nama_organisasi}}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <label>Jabatan Organisasi</label>
                                    </div>
                                    <div class="col-md-4">
                                        <p>{{$organisasi->jabatan_organisasi}}</p>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="style-action-button-a">
                                            <form action="{{route('Anggota.organisasi-hapus', $organisasi->id_organisasi)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                            </form>
                                        </div>
                                        <div class="style-action-button-b">
                                            <button class="hapus-anggota"><a href="{{route('Anggota.organisasi-edit', $organisasi->id_organisasi)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;" class="garis">
                                @endforeach
                                <center><a href="{{route('Anggota.organisasi')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Organisasi "/></a></center>
                            </div>

                            <div class="tab-pane fade" id="usaha" role="tabpanel" aria-labelledby="profile-tab">
                                @foreach ($tampilusaha as $usaha)
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nama Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->nama_usaha}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Nomor Pokok Wajib Pajak Usaha</label>
                                    </div>
                                    @if (empty($usaha->npwp_usaha))
                                    <div class="col-md-6">
                                        <p>Tidak Mempunyai NPWP</p>
                                    </div>
                                    @elseif (!empty($usaha->npwp_usaha))
                                    <div class="col-md-6">
                                        <p>{{$usaha->npwp_usaha}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Izin Usaha</label>
                                    </div>
                                    @if (empty($usaha->izin_usaha))
                                    <div class="col-md-6">
                                        <p>Tidak Mempunyai Izin Usaha</p>
                                    </div>
                                    @elseif (!empty($usaha->izin_usaha))
                                    <div class="col-md-6">
                                        <p>{{$usaha->izin_usaha}}</p>
                                    </div>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Alamat Perusahaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->alamat_usaha}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Tahun Berdiri</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->tahun_berdiri}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Bidang Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->bidang_usaha}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Kepemilikan Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->kepemilikan_usaha}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Omset Usaha</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->omset_usaha}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Jumlah Karyawan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->karyawan}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Sumber Pendanaan</label>
                                    </div>
                                    <div class="col-md-6">
                                        <p>{{$usaha->dana_usaha}}</p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="style-action-button-a">
                                            <form action="{{route('Anggota.usaha-hapus', $usaha->idusaha)}}" method="POST">
                                                @csrf
                                                @method('POST')
                                                <button type="submit" class="hapus-anggota" style="margin-left: 5px;"><i class="fas fa-trash-alt action-organisasi"></i></button>
                                            </form>
                                        </div>
                                        <div class="style-action-button-b">
                                            <button class="hapus-anggota"><a href="{{route('Anggota.usaha-edit', $usaha->idusaha)}}"><i class="fas fa-edit action-organisasi"></i></a></button>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border: 1px solid grey;" class="garis">
                                @endforeach
                                <center><a href="{{route('Anggota.usaha')}}"><input type="submit" class="profile-edit-btn" name="btnAddMore" value="Tambah Data Usaha "/></a></center>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
        </div>
    @endsection
