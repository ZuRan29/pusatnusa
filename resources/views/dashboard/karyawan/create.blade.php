@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Karyawan</h2>
    </div>


<table class="table table-bordered table-striped">
<div class="container-fluid col-md-12">
    <form class="" method="POST" action="{{route('karyawan.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationTooltip01">Nomor Induk Pegawai </label>
                <input type="text" class="form-control" name="nip" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip02">Nomor Induk Kependudukan</label>
                <input type="text" class="form-control" name="nik" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip03">Nama Karyawan</label>
                <input type="text" class="form-control" name="nama_karyawan" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip04">Jenis Kelamin</label>
                <select class="custom-select" name="jenis_kelamin" id="validationTooltip01" required>
                    <option value="">Pilih</option>
                    @foreach ($jenkel as $j)
                        <option value="{{$j['jenis_kelamin']}}">{{$j['jenis_kelamin']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip05">Agama</label>
                <select class="custom-select" name="agama" id="validationTooltip01" required>
                    <option value="">Pilih</option>
                    @foreach ($agama as $a)
                        <option value="{{$a['agama']}}">{{$a['agama']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip06">Tanggal Lahir</label>
                <input type="date" class="form-control" name="tanggal_lahir" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip07">Tempat Lahir</label>
                <input type="text" class="form-control" name="tempat_lahir" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip08">Alamat</label>
                <textarea cols="30" rows="3" class="form-control" name="alamat"></textarea>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip09">No Telepon</label>
                <input type="text" class="form-control" name="no_telp" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip09">Email</label>
                <input type="email" class="form-control" name="email" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip10">Jabatan</label>
                <input type="text" class="form-control" name="jabatan" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip11">Status</label>
                <select class="custom-select" name="status" id="validationTooltip01" required>
                    <option value="">Pilih</option>
                    @foreach ($status as $s)
                        <option value="{{$s['status']}}">{{$s['status']}}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-md-12 mb-12">
                <label for="validationTooltip12">Instagram</label>
                <input type="text" class="form-control" name="instagram">
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip13">Facebook</label>
                <input type="text" class="form-control" name="facebook">
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip14">Twitter</label>
                <input type="text" class="form-control" name="twitter">
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip14">whatsapp</label>
                <input type="text" class="form-control" name="whatsapp">
            </div>
            <div class="col-md-12 mb-12">
                <label>Pilih Foto</label>
                <input type="file" class="form-control" name="foto">
            </div>
        <br><br>
        <div class="form-row"><br>
            <div class="col-md-12 mb-12"><br>
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
