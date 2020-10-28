@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Mitra Baru</h2>
    </div>
    <br><br>
<div class="container-fluid col-md-12">
    <form class="" role="form" method="POST" action="{{route('mitra.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationTooltip01">Nama Mitra</label>
                <input type="text" class="form-control" name="nama_mitra" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip02">Alamat Mitra</label>
                <textarea cols="30" rows="3" class="form-control" name="alamat_mitra"></textarea>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip03">Foto Mitra</label>
                <input type="file" class="form-control" name="foto_mitra">
            </div>
        </div>
        <br>
        <div class="form-row">
            <div class="col-md-3 mb-3">
                <button class="btn btn-primary" name="submit" type="submit">Submit</button>
            </div>
        </div>
    </form>
</div>
@endsection
