@extends('template')
@section('title', 'Profile Anggota')
    @section('main')
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
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
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    </head>
    <br/><br/><br/><br/>
    <div class="container emp-profile">
        <form method="POST" action="{{route('Anggota.simpan')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <div class="profile-img">
                                @foreach ($anggota as $anggota1)
                                @if (empty($anggota1->foto))
                                <img src="{{asset('images/anggota/default.png')}}" width="150px" height="150px" alt="Foto Profil"/>
                                @else
                                <img src="{{asset('images/anggota')}}/{{$anggota1->foto}}" width="150px" height="150px" alt="Foto Profil"/>
                                @endif
                                @endforeach
                                <div class="file btn btn-lg btn-primary">
                                    Change Photo
                                    <input type="file" name="foto"/>
                                </div>
                            </div>
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
                        @if ($anggota->isEmpty())
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nama Akun</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <select select class="custom-select" name="users_id" id="validationDefault04"  required>
                                                        <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nomor Induk Kependudukan</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="nik" placeholder="Nomor Induk Kependudukan">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Apakah Anda Mempunyai NPWP ?</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" id="pnynpwp">
                                                        <option value="">Pilih</option>
                                                        <option value="Ya">Ya</option>
                                                        <option value="Tidak">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px; display:none;" id="npwpanggota" >
                                                <div class="col-md-6">
                                                    <label>Nomor Pokok Wajib Pajak</label>
                                                </div>
                                                <div class="col-md-6">
                                                <input type="text" class="form-control" name="npwp_anggota" placeholder="Nomor Pokok Wajib Pajak">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="nama_anggota" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Tempat Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" >
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" >
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" name="jenis_kelamin" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($jenkel as $jk)
                                                            <option value="{{$jk['jenis_kelamin']}}">{{$jk['jenis_kelamin']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Agama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" name="agama" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($agm as $agm)
                                                            <option value="{{$agm['agama']}}">{{$agm['agama']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Alamat</label>
                                                </div>
                                                <div class="col-md-6">
                                                <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" rows="3" required></textarea>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label >Provinsi</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="country" class="custom-select" id="country" required>
                                                        <option value="">Pilih Provinsi</option>
                                                        @foreach ($provinsi as $prov)
                                                        <option value="{{$prov->id }}">{{ $prov->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                    {{-- <select class="custom-select" name="provinsi"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($provinsi as $prov)
                                                            <option value="{{$prov->id}}">{{$prov->nama}}</option>
                                                        @endforeach
                                                    </select> --}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kabupaten / Kotamadya</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="state" id="kabupaten" class="custom-select" >
                                                        <option>Pilih Kabupaten</option>
                                                    </select>
                                                    {{-- <select select class="custom-select" name="kabupaten" id="validationDefault04"  required>
                                                        <option>Pilih</option>
                                                    </select> --}}
                                                    {{-- <input type="text" class="form-control" name="kabupaten_id" placeholder="Kabupaten/Kotamadya"> --}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kecamatan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="kecamatan" id="kecamatan" class="custom-select" >
                                                        <option>Pilih Kecamatan</option>
                                                    </select>
                                                    {{-- <select select class="custom-select" name="kecamatan_id" id="validationDefault04"  required>
                                                        <option>Pilih</option>
                                                    </select> --}}
                                                    {{-- <input type="text" class="form-control" name="kecamatan_id" placeholder="Kecamatan"> --}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kelurahan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="kelurahan" class="custom-select" required>
                                                        <option>Pilih Kelurahan</option>
                                                    </select>
                                                    {{-- <select select class="custom-select" name="kelurahan_id" id="validationDefault04"  required>
                                                        <option>Pilih</option>
                                                    </select> --}}
                                                    {{-- <input type="text" class="form-control" name="kelurahan_id" placeholder="Kelurahan Anda"> --}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nomor Telepon</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="hp" placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Pendidikan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" name="pend_terakhir" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($pend_terakhir as $pend)
                                                            <option value="{{$pend['pend_terakhir']}}">{{$pend['pend_terakhir']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <center><input type="submit" class="profile-edit-btn" name="submit" style="margin-top: 20px;" value="Simpan"/></center>
                                </div>
                            </div>
                        </div>
                        @else
                            @foreach ($anggota as $a)
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nama Akun</label>
                                                </div>
                                                <div class="col-md-6" >
                                                    <select select class="custom-select" name="users_id" id="validationDefault04"  required>
                                                    <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nomor Induk Kependudukan</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="nik" placeholder="Nama Lengkap" value="{{$a->nik}}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Apakah Anda Mempunyai NPWP ?</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" id="pnynpwp">
                                                        <option value="">Pilih</option>
                                                        <option value="Ya">Ya</option>
                                                        <option value="Tidak">Tidak</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px; display:none;" id="npwpanggota" >
                                                <div class="col-md-6">
                                                    <label>Nomor Pokok Wajib Pajak</label>
                                                </div>
                                                <div class="col-md-6">
                                                <input type="text" class="form-control" name="npwp_anggota" placeholder="Nomor Pokok Wajib Pajak">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nama Lengkap</label>
                                                </div>
                                                <div class="col-md-6" >
                                                <input type="text" class="form-control" name="nama_anggota" placeholder="Nama Lengkap" value="{{$a->nama_anggota}}" >
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Tempat Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" name="tempat_lahir" placeholder="Tempat Lahir" value="{{$a->tempat_lahir}}" >
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Tanggal Lahir</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="date" class="form-control" name="tanggal_lahir" placeholder="Tanggal Lahir" value="{{$a->tanggal_lahir}}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Jenis Kelamin</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" name="jenis_kelamin" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($jenkel as $jk)
                                                            <option value="{{$jk['jenis_kelamin']}}"
                                                                @if ($a->jenis_kelamin)
                                                                    selected
                                                                @endif >{{$jk['jenis_kelamin']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Agama</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" name="agama" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($agm as $agm)
                                                            <option value="{{$agm['agama']}}"
                                                            @if ($a->agama)
                                                                selected
                                                            @endif >{{$agm['agama']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Alamat</label>
                                                </div>
                                                <div class="col-md-6">
                                                <textarea class="form-control" name="alamat" placeholder="Alamat Lengkap" rows="3" required>{{$a->alamat}}</textarea>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Provinsi</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="country" class="custom-select" id="country" required>
                                                        <option value="">Pilih Provinsi</option>
                                                        @foreach ($provinsi as $prov)
                                                            <option value="{{$prov->id}}">{{$prov->nama}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kabupaten / Kotamadya</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="state" class="custom-select" >
                                                        <option>Pilih Kabupaten</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kecamatan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="kecamatan" class="custom-select" >
                                                        <option>Pilih Kecamatan</option>
                                                    </select>
                                                    {{-- <select select class="custom-select" name="kecamatan_id" id="validationDefault04"  required>
                                                        <option>Pilih</option>
                                                    </select> --}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Kelurahan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select name="kelurahan" class="custom-select" required>
                                                        <option>Pilih Kelurahan</option>
                                                    </select>
                                                    {{-- <input type="text" class="form-control" name="kelurahan_id" value="{{$a->kelurahan_id}}"> --}}
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Nomor Telepon</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" name="hp" value="{{$a->nomor_telp}}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                            <div class="row" style="margin-bottom: 10px;">
                                                <div class="col-md-6">
                                                    <label>Pendidikan</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <select select class="custom-select" name="pend_terakhir" id="validationDefault04"  required>
                                                        <option value="">Pilih</option>
                                                        @foreach ($pend_terakhir as $pend)
                                                            <option value="{{$pend['pend_terakhir']}}"
                                                            @if ($a->pend_terakhir)
                                                                selected
                                                            @endif >{{$pend['pend_terakhir']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <center><input type="submit" class="profile-edit-btn" name="submit" style="margin-top: 20px;" value="Simpan"/></center>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </form>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
            <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
            <script type="text/javascript">
                $(function () {
                    $("#pnynpwp").change(function () {
                        if ($(this).val() == "Ya") {
                            $("#npwpanggota").show();
                        } else {
                            $("#npwpanggota").hide();
                        }
                    });
                });
            </script>

            <script type="text/javascript">
                jQuery(document).ready(function ()
                {
                        jQuery('select[name="country"]').on('change',function(){
                        var countryID = jQuery(this).val();
                        if(countryID)
                        {
                            jQuery.ajax({
                                url : '/' +countryID,
                                type : "GET",
                                dataType : "json",
                                success:function(data)
                                {
                                    console.log(data);
                                    jQuery('select[name="state"]').empty();
                                    jQuery.each(data, function(key,value){
                                    $('select[name="state"]').append('<option value="'+ key +'">'+ value +'</option>');
                                    });
                                }
                            });
                        }
                        else
                        {
                            $('select[name="state"]').empty();
                        }
                        });

                        jQuery('select[name="state"]').on('change',function(){
                            var stateID = jQuery(this).val();
                            if(stateID)
                            {
                                jQuery.ajax({
                                    url : '/kecamatan/' +stateID,
                                    type : "GET",
                                    dataType : "json",
                                    success:function(data)
                                    {
                                        console.log(data);
                                        jQuery('select[name="kecamatan"]').empty();
                                        jQuery.each(data, function(key,value){
                                        $('select[name="kecamatan"]').append('<option value="'+ key +'">'+ value +'</option>');
                                        });
                                    }
                                });
                            }
                            else
                            {
                                $('select[name="kecamatan"]').empty();
                            }
                        });

                        jQuery('select[name="kecamatan"]').on('change',function(){
                            var kecamatanID = jQuery(this).val();
                            if(kecamatanID)
                            {
                                jQuery.ajax({
                                    url : '/kelurahan/' +kecamatanID,
                                    type : "GET",
                                    dataType : "json",
                                    success:function(data)
                                    {
                                        console.log(data);
                                        jQuery('select[name="kelurahan"]').empty();
                                        jQuery.each(data, function(key,value){
                                        $('select[name="kelurahan"]').append('<option value="'+ key +'">'+ value +'</option>');
                                        });
                                    }
                                });
                            }
                            else
                            {
                                $('select[name="kelurahan"]').empty();
                            }
                        });
                });
            </script>

    @endsection

