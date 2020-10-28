@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Pelatihan</h2>
    </div>

<table class="table table-bordered table-striped">
<div class="container-fluid col-md-12">
    <form class="" enctype="multipart/form-data" method="POST" action="{{route('pelatihan.store')}}">
        @csrf
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationTooltip01">Nama Pelatihan</label>
                <input type="text" class="form-control" name="nama_pelatihan" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip02">Penyelenggara</label>
                <input type="text" class="form-control" name="penyelenggara" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip03">Lokasi</label>
                <input type="text" class="form-control" name="lokasi" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip04">Waktu</label>
                <input type="text" class="form-control" name="waktu" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip05">Harga</label>
                <input type="text" class="form-control" name="harga" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip06">Materi</label>
                <input type="text" class="form-control" name="id_materi" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip06">Deskripsi</label>
                <textarea cols="30" rows="3" class="form-control" name="deskripsi" required></textarea>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip06">Link Pendaftaran</label>
                <input type="text" class="form-control" name="link_pendaftaran" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip07">Foto</label>
                <input type="file" class="form-control" name="foto" required>
            </div>
        </div>
        <br><br>
        <div class="form-row">
            <div class="col-md-12 mb-12">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
