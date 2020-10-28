@extends('template')
@section('title', 'Pengajuan Modal')

    @section('main')
                        <!-- ======= Breadcrumbs ======= -->
              <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                  <div class="d-flex justify-content-between align-items-center">
                    <h2>Pengajuan</h2>
                    <ol>
                      <li><a href="{{route('Landing.index')}}">Home</a></li>
                      <li>Pengajuan</li>
                    </ol>
                  </div>
                </div>
              </section><!-- End Breadcrumbs -->

              <head>
                <!-- Font Icon -->
                <link rel="stylesheet" href="{{asset('styleform/fonts/material-icon/css/material-design-iconic-font.min.css') }} ">

                <!-- Main css -->
                <link rel="stylesheet" href="{{asset('styleform/css/style.css')}}">
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
                </head>
            </head>
            <body>
            @foreach ($tampilanggota as $anggota)
                <div class="main">
                    <section class="signup">
                        <div class="container">
                            <div class="signup-content">
                            <form role="form" method="POST" action="{{route('Landing.modal-simpan')}}" class="signup-form" enctype="multipart/form-data">
                                    @csrf
                                    {{ csrf_field() }}
                                    <h2 class="form-title">Daftar Anggota</h2>
                                    <h3 class="form-title">Data Diri</h3>


                                            <center><label for="validationDefault01" >Nama User</label></center>
                                            <select class="custom-select" name="users_id" required>
                                                <option value="{{$anggota->id}}">{{$anggota->name}}</option>
                                            </select>

                                        <br/><br/>

                                        {{-- Nama Lengkap Pengaju --}}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama_pengaju" value="{{$anggota->nama_anggota}}"  placeholder="Tempat Lahir" required>
                                            </div>

                                        {{-- Nomor Induk Kependudukan Pengaju --}}
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">Nomor Induk Kependudukan</label>
                                                <input type="text" class="form-control" name="nik_pengaju"  value="{{$anggota->nik}}" required>
                                            </div>
                                        </div>

                                        {{-- Nomor Kartu Keluarga Pengaju --}}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">Nomor Kartu Keluarga</label>
                                                <input type="text" class="form-control" name="nokk_pengaju" placeholder="Masukan Nomor Kartu Keluarga" required>
                                            </div>

                                        {{--  Nomor Pokok Wajib Pajak Pengaju --}}
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">Nomor Pokok Wajib Pajak (Lewati Jika Tidak Ada)</label>
                                                <input type="text" class="form-control" name="npwp_pengaju" value="{{$anggota->npwp_anggota}}" >
                                            </div>
                                        </div>

                                        {{-- Tempat Lahir --}}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">Tempat Lahir</label>
                                                <input type="text" class="form-control" name="tempat_lahir"  value="{{$anggota->tempat_lahir}}" required>
                                            </div>

                                        {{-- Tanggal Lahir --}}
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault02">Tanggal Lahir</label>
                                                <input type="date" class="form-control" name="tanggal_lahir" value="{{$anggota->tanggal_lahir}}" placeholder="Tempat Lahir" required>
                                            </div>
                                        </div>

                                        {{-- Jenis Kelamin --}}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">Jenis Kelamin</label>
                                                <select name="jenis_kelamin" class="custom-select" required>
                                                    <option value="">Pilih Jenis Kelamin</option>
                                                    @foreach ($jenkel as $jk)
                                                    <option value="{{$jk['jenis_kelamin'] }}">{{ $jk['jenis_kelamin'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                        {{-- Provinsi --}}
                                            <div class="col-md-3 mb-3">
                                                <label for="validationDefault02">Provinsi</label>
                                                <select name="country" class="custom-select" id="country" required>
                                                    <option value="">Pilih Provinsi</option>
                                                    @foreach ($provinsi as $prov)
                                                    <option value="{{$prov->id }}">{{ $prov->nama }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            {{-- Kabupaten --}}
                                            <div class="col-md-3 mb-3">
                                                <label for="validationDefault04">Kabupaten / Kota</label>
                                                <select name="state" id="kabupaten" class="custom-select" required >
                                                    <option>Pilih Kabupaten</option>
                                                </select>
                                            </div>
                                        </div>

                                        {{-- Kecamatan --}}
                                        <div class="form-row">
                                            <div class="col-md-3 mb-3">
                                                <label for="validationDefault04">Kecamatan</label>
                                                <select name="kecamatan" id="kecamatan" class="custom-select" required >
                                                    <option>Pilih Kecamatan</option>
                                                </select>
                                            </div>

                                        {{-- Kode Pos --}}
                                            <div class="col-md-3 mb-3">
                                                <label for="validationDefault04">Kelurahan</label>
                                                <select name="kelurahan" class="custom-select" required>
                                                    <option>Pilih Kelurahan</option>
                                                </select>
                                            </div>

                                        {{-- Alamat Lengkap Pengaju--}}
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault03">Alamat Tempat Tinggal</label>
                                                <textarea class="form-control" name="alamat_pengaju" rows="2" required>{{$anggota->alamat}}</textarea>
                                            </div>

                                        </div>

                                        {{--Email Pengaju --}}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault06">Email</label>
                                                <input type="email" class="form-control" name="email_pengaju" value="{{$anggota->email}}" required>
                                            </div>

                                        {{-- No Telp Pengaju --}}
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault04">Nomor Telepon (Termasuk Whatsapp)</label>
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text"><i class="fas fa-phone-alt"></i></div>
                                                    </div>
                                                    <input type="text" class="form-control" id="inlineFormInputGroup" name="notelp_pengaju" value="{{$anggota->nomor_telp}}" required>
                                                </div>
                                            </div>

                                        </div>

                                        {{-- Upload Foto Diri --}}
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltip03">Upload Foto Diri</label>
                                                <input type="file" class="form-control" name="fotodiri_pengaju" required>
                                            </div>

                                        {{-- Upload Foto KTP --}}
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltip03">Upload Foto KTP</label>
                                                <input type="file" class="form-control"  name="fotoktp_pengaju" required>
                                            </div>
                                        </div>

                                        <br/><br/><br/>
                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationTooltip03">Usaha Anda? </label>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <select class="custom-select" id="usaha" name="datausaha_pengaju">
                                                    <option value="">Pilih</option>
                                                    <option value="Baru" >Baru</option>
                                                    <option value="Sudah Ada" >Sudah Ada</option>
                                                </select>
                                            </div>
                                        </div>



                                    <div id="usahamodalbaru" style="display: none;">
                                        <h3 class="form-title" style="padding-top: 30px">Data Usaha</h3>
                                            {{-- Nama Usaha --}}
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault01">Nama Usaha</label>
                                                    <input type="text" class="form-control" name="namausaha_pengaju"  placeholder="Isikan Nama Usaha Anda">
                                                </div>
                                            {{-- Alamat Usaha --}}
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Alamat Usaha</label>
                                                    <input type="text" class="form-control" name="alamatusaha_pengaju" placeholder="Isikan Alamat Usaha Anda">
                                                </div>
                                            </div>

                                            <br/>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationTooltip03">Apakah Anda Memiliki Dokumen Resmi? </label>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <select class="custom-select" id="usahadokresmi1" >
                                                        <option value="">Pilih</option>
                                                        <option value="Ya" >Ya</option>
                                                        <option value="Tidak" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- NPWP Usaha --}}
                                            <div class="form-row" style="display: none;" id="dokresmi1">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault01">NPWP Usaha</label>
                                                    <input type="text" class="form-control" name="npwpusaha_pengaju"  placeholder="Isikan NPWP Usaha Anda">
                                                </div>
                                            {{-- Izin Usaha --}}
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Izin Usaha</label>
                                                    <input type="text" class="form-control" name="izinusaha_pengaju" placeholder="Isikan Izin Usaha Anda">
                                                </div>
                                            </div>

                                            {{-- Upload Foto NPWP USAHA --}}
                                            <div class="form-row" style="display: none;" id="uploaddokresmi1">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationTooltip03">Upload Foto /  Scan NPWP Usaha</label>
                                                    <input type="file" class="form-control" name="doknpwpusaha_pengaju">
                                                </div>

                                            {{-- Upload Foto IZIN USAHA --}}
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationTooltip03">Upload Foto /  Scan Izin Usaha</label>
                                                    <input type="file" class="form-control"  name="dokizinusaha_pengaju">
                                                </div>
                                            </div>

                                            {{-- Bidang Usaha --}}
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Bidang Usaha</label>
                                                    <select class="custom-select" name="bidangusaha_pengaju">
                                                        <option value="">Pilih</option>
                                                        @foreach ($bdus as $bdus)
                                                        <option value="{{$bdus['bidang_usaha']}}" >{{$bdus['bidang_usaha']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Detail Bidang Usaha</label>
                                                    <input type="text" class="form-control" name="detailbidangusaha_pengaju" placeholder="Isikan Detail Bidang Usaha Anda">
                                                </div>
                                            </div>
                                    </div>

                                    <div id="usahamodallama" style="display: none;">
                                        @foreach ($tampilusaha as $usaha)
                                        <h3 class="form-title" style="padding-top: 30px">Data Usaha</h3>
                                            {{-- Nama Usaha --}}
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault01">Nama Usaha</label>
                                                    <input type="text" class="form-control" name="namausaha_pengaju" value="{{$usaha->nama_usaha}}">
                                                </div>
                                            {{-- Alamat Usaha --}}
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Alamat Usaha</label>
                                                    <input type="text" class="form-control" name="alamatusaha_pengaju" value="{{$usaha->alamat_usaha}}">
                                                </div>
                                            </div>

                                            <br/>
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationTooltip03">Apakah Anda Memiliki Dokumen Resmi? </label>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <select class="custom-select" id="usahadokresmi" >
                                                        <option value="">Pilih</option>
                                                        <option value="Ya" >Ya</option>
                                                        <option value="Tidak" >Tidak</option>
                                                    </select>
                                                </div>
                                            </div>

                                            {{-- NPWP Usaha --}}
                                            <div class="form-row" style="display: none;" id="dokresmi">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault01">NPWP Usaha</label>
                                                    <input type="text" class="form-control" name="npwpusaha_pengaju"  placeholder="Isikan NPWP Usaha Anda">
                                                </div>
                                            {{-- Izin Usaha --}}
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Izin Usaha</label>
                                                    <input type="text" class="form-control" name="izinusaha_pengaju" placeholder="Isikan Izin Usaha Anda">
                                                </div>
                                            </div>

                                            {{-- Upload Foto NPWP USAHA --}}
                                            <div class="form-row" style="display: none;" id="uploaddokresmi">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationTooltip03">Upload Foto /  Scan NPWP Usaha</label>
                                                    <input type="file" class="form-control" name="doknpwpusaha_pengaju">
                                                </div>

                                            {{-- Upload Foto IZIN USAHA --}}
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationTooltip03">Upload Foto /  Scan Izin Usaha</label>
                                                    <input type="file" class="form-control"  name="dokizinusaha_pengaju">
                                                </div>
                                            </div>



                                            {{-- Bidang Usaha --}}
                                            <div class="form-row">
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Bidang Usaha</label>
                                                    <select class="custom-select" name="bidangusaha_pengaju">
                                                        <option value="">Pilih</option>
                                                        @foreach ($bdus20 as $bdus20)
                                                        <option value="{{$bdus20['bidang_usaha']}}">{{$bdus20['bidang_usaha']}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="col-md-6 mb-3">
                                                    <label for="validationDefault02">Detail Bidang Usaha</label>
                                                    <input type="text" class="form-control" name="detailbidangusaha_pengaju" value="{{$usaha->detailbidang_usaha}}">
                                                </div>
                                            </div>
                                            @endforeach
                                    </div>

                                    <div id="pengajuanmodal" style="display: none;">
                                        <h3 class="form-title" style="padding-top: 30px">Data Pengajuan Modal</h3>

                                        <div class="form-row">
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault01">Jumlah Pengajuan Modal (Masukan Angka)</label>
                                                <input type='currency' class="form-control" name="jumlahmodal_pengaju" placeholder='Masukan Jumlah Pengajuan Modal' />
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label for="validationDefault03">Alasan Pengajuan Modal</label>
                                                <textarea class="form-control" name="alasanmodal_pengaju" rows="4" placeholder="Berikanlah Kami Alasan Kuat Untuk Pendanaan Alasan Anda"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                        <label for="agree-term" class="label-agree-term"><span><span></span></span>Saya Setuju dengan  <a href="#" class="term-service">Syarat dan Ketentuan</a></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="submit" id="submit" class="form-submit" value="Daftar Anggota"/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            @endforeach


                <script src="{{asset('styleform/vendor/jquery/jquery.min.js')}}"></script>
                <script src="{{asset('styleform/js/main.js')}}"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
                <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>


                <script type="text/javascript">
                    $(function () {
                        $("#usaha").change(function () {
                            if ($(this).val() == "Baru") {
                                $("#usahamodalbaru").show();
                                $("#usahamodallama").hide();
                                $("#pengajuanmodal").show();
                            } else if ($(this).val() == "Sudah Ada") {
                                $("#usahamodalbaru").hide();
                                $("#usahamodallama").show();
                                $("#pengajuanmodal").show();
                            }
                            else {

                            }
                        });

                        $("#usahadokresmi").change(function () {
                            if ($(this).val() == "Ya") {
                                $("#dokresmi").show();
                                $("#uploaddokresmi").show();
                            } else if ($(this).val() == "Tidak") {
                                $("#dokresmi").hide();
                                $("#uploaddokresmi").hide();
                            }
                            else {

                            }
                        });

                        $("#usahadokresmi1").change(function () {
                            if ($(this).val() == "Ya") {
                                $("#dokresmi1").show();
                                $("#uploaddokresmi1").show();
                            } else if ($(this).val() == "Tidak") {
                                $("#dokresmi1").hide();
                                $("#uploaddokresmi1").hide();
                            }
                            else {

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

                <script>
                    var currencyInput = document.querySelector('input[type="currency"]')
                    var currency = 'IDR' // https://www.currency-iso.org/dam/downloads/lists/list_one.xml

                    // format inital value
                    onBlur({target:currencyInput})

                    // bind event listeners
                    currencyInput.addEventListener('focus', onFocus)
                    currencyInput.addEventListener('blur', onBlur)


                    function localStringToNumber( s ){
                    return Number(String(s).replace(/[^0-9.-]+/g,""))
                    }

                    function onFocus(e){
                    var value = e.target.value;
                    e.target.value = value ? localStringToNumber(value) : ''
                    }

                    function onBlur(e){
                    var value = e.target.value

                    var options = {
                        maximumFractionDigits : 2,
                        currency              : currency,
                        style                 : "currency",
                        currencyDisplay       : "symbol"
                    }

                    e.target.value = value
                        ? localStringToNumber(value).toLocaleString(undefined, options)
                        : ''
                    }
                </script>
    @endsection
