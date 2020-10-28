@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Opini Baru</h2>
    </div>

<table class="table table-bordered table-striped">
<div class="container-fluid col-md-12">
    <form class="" method="POST" action="{{route('opini.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @csrf
        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationTooltip01">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip02">Kategori</label>
                <input type="text" class="form-control" name="kategori" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip03">Author</label>
                <input type="text" class="form-control" name="author" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip04">Isi</label>
                <textarea class="form-control" cols="30" rows="5" name="isi"></textarea>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip05">Tanggal</label>
                <input type="date" class="form-control" name="tanggal">
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip06">Youtube</label>
                <input type="text" class="form-control" name="youtube">
            </div>
            <div class="col-md-12 mb-12">
                <label>Foto</label>
                <input type="file" class="form-control" name="foto">
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
