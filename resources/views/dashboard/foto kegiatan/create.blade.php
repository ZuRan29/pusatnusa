@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Foto Kegiatan</h2>
    </div>

<table class="table table-bordered table-striped">
<div class="container-fluid col-md-12">
    <form class="" method="POST" action="{{route('fotokegiatan.store')}}" enctype="multipart/form-data">
        @csrf
        {{ csrf_field() }}
        <div class="form-row">
            <div class="col-md-12 mb-12" style="margin-bottom: 10px; margin-top:10px;">
                <label for="validationTooltip01">Nama Kegiatan</label>
                <input type="text" class="form-control" name="nama_kegiatan" required>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip01">Deskripsi Kegiatan</label>
                <input type="text" class="form-control" name="deskripsi_fotokegiatan" required>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip01">Tanggal Kegiatan</label>
                <input type="date" class="form-control" name="tanggal_fotokegiatan" required>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip02">Thumbnail</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="thumbnail_fotokegiatan" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip02">Foto 1</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
                    </div>
                    <div class="custom-file">
                      <input type="file" name="foto1" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                      <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                  </div>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip02">Foto 2</label>
                <div class="custom-file">
                    <input type="file" name="foto2" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip02">Foto 3</label>
                <div class="custom-file">
                    <input type="file" name="foto3" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip02">Foto 4</label>
                <div class="custom-file">
                    <input type="file" name="foto4" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
            </div>
            <div class="col-md-12 mb-12" style="margin-bottom: 10px;">
                <label for="validationTooltip02">Foto 5</label>
                <div class="custom-file">
                    <input type="file" name="foto5" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
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
