@extends('template')
@section('title', 'Edit Usaha')
    @section('main')
    <head>
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
.profile-img img{
    width: 70%;
    height: 100%;
}
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
.profile-tab p{
    font-weight: 600;
    color: #118f1b;
}
        </style>
    </head>
    <br/><br/>
    <div class="container emp-profile">
        @foreach ($tampilusaha1 as $usaha1)
        <form method="POST" action="{{route('Anggota.usaha-edit.simpan', $usaha1->idusaha)}}" enctype="multipart/form-data">
            @endforeach
            {{ csrf_field() }}
            @csrf
            @method('POST')
                    <div class="row">
                        <div class="col-md-4">
                            @foreach ($tampilanggota as $anggota1)
                            @if ($anggota1->foto === "" || $anggota1->foto === null)
                            <img src="{{asset('images/anggota/default.png')}}" width="180px" height="200px" alt="Foto Profil"/>
                            @else
                            <img src="{{asset('images/anggota')}}/{{$anggota1->foto}}" width="180px" height="200px" alt="Foto Profil"/>
                            @endif
                            @endforeach
                        </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                        <h4>
                                            Nama Akun
                                        </h4>
                                        <h5>
                                            {{ Auth::user()->name }}
                                        </h5>
                                        <h6>
                                            {{ Auth::user()->email }}
                                        </h6>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a onclick="history.back(-1)" class="link-button link-back-button">Kembali</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-work">

                            </div>
                        </div>

                        @foreach ($tampilusaha1 as $usaha)
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nama Usaha</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="nama_usaha" value="{{$usaha->nama_usaha}}">
                                                </div>
                                            </div>
                                            @if (empty($usaha->npwp_usaha) && empty($usaha->izin_usaha))
                                                <div class="row" style="margin-bottom: 10px;">
                                                    <div class="col-md-6">
                                                        <label>Apakah Usaha Anda Memiliki Dokumen Resmi ?</label>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select select class="custom-select" id="usahadokresmi">
                                                            <option value="">Pilih</option>
                                                            <option value="Ya">Ya</option>
                                                            <option value="Tidak">Tidak</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px; display:none;" id="npwpusaha">
                                                    <div class="col-md-6">
                                                        <label>Nomor Pokok Wajib Pajak Perusahaan</label>
                                                    </div>
                                                    <div class="col-md-6" >
                                                    <input type="text" class="form-control" name="npwp_usaha" placeholder="Nomor Pokok Wajib Pajak Perusahaan">
                                                    </div>
                                                </div>
                                                <div class="row" style="margin-bottom: 10px; display:none;" id="izinusaha">
                                                    <div class="col-md-6">
                                                        <label>Nomor Izin Usaha</label>
                                                    </div>
                                                    <div class="col-md-6" >
                                                    <input type="text" class="form-control" name="izin_usaha" placeholder="Nomor Izin Usaha">
                                                    </div>
                                                </div>
                                            @else
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nomor Pokok Wajib Pajak Perusahaan</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="npwp_usaha" value="{{$usaha->npwp_usaha}}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nomor Izin Usaha</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="izin_usaha" value="{{$usaha->izin_usaha}}">
                                                </div>
                                            </div>
                                            @endif
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Alamat Usaha</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <textarea class="form-control" name="alamat_usaha" rows="3" required>{{$usaha->alamat_usaha}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Tahun Berdiri</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="date" class="form-control" name="tahun_berdiri" value="{{$usaha->tahun_berdiri}}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Bidang Usaha</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="bidang_usaha" value="{{$usaha->bidang_usaha}}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kepemilikan Usaha</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <select select class="custom-select" name="kepemilikan_usaha" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($kpm as $kpm)
                                                            <option value="{{$kpm['kepemilikan_usaha']}}"
                                                            @if ($usaha->kepemilikan_usaha)
                                                                selected
                                                            @endif >{{$kpm['kepemilikan_usaha']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Omset Usaha/Tahun</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <select select class="custom-select" name="omset_usaha" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($omt as $omt)
                                                            <option value="{{$omt['omset_usaha']}}"
                                                            @if ($usaha->omset_usaha)
                                                                selected
                                                            @endif >{{$omt['omset_usaha']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Jumlah Karyawan</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <select select class="custom-select" name="karyawan" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($krw as $krw)
                                                            <option value="{{$krw['karyawan']}}"
                                                            @if ($usaha->karyawan)
                                                                selected
                                                            @endif >{{$krw['karyawan']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Sumber Dana Usaha</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <select select class="custom-select" name="dana_usaha" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($dnu as $dnu)
                                                            <option value="{{$dnu['dana_usaha']}}"
                                                            @if ($usaha->dana_usaha)
                                                                selected
                                                            @endif >{{$dnu['dana_usaha']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <center><input type="submit" class="profile-edit-btn" name="submit" style="margin-top: 20px;" value="Simpan"/></center>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(function () {
                    $("#usahadokresmi").change(function () {
                        if ($(this).val() == "Ya") {
                            $("#npwpusaha").show();
                            $("#izinusaha").show();
                        } else {
                            $("#npwpusaha").hide();
                            $("#izinusaha").hide();
                        }
                    });
                });
            </script>
    @endsection
