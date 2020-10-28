@extends('template')
@section('title', 'Mitra PUSATNUSA')
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
    <br/><br/><br/><br/>
    <div class="container emp-profile">
        @foreach ($tampilorganisasi1 as $organisasi1)
        <form method="POST" action="{{route('Anggota.organisasi-edit.simpan', $organisasi1->id_organisasi)}}" enctype="multipart/form-data">
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

                        @foreach ($tampilorganisasi1 as $organisasi)
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <label>Nama Organisasi</label>
                                        </div>
                                        <div class="col-md-6" >
                                            <input type="text" class="form-control" name="nama_organisasi" value="{{$organisasi->nama_organisasi}}">
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 10px;">
                                        <div class="col-md-6">
                                            <label>Jabatan Organisasi</label>
                                        </div>
                                        <div class="col-md-6" >
                                            <input type="text" class="form-control" name="jabatan_organisasi" value="{{$organisasi->jabatan_organisasi}}">
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
    @endsection
