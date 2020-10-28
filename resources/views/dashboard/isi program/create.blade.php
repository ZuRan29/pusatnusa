@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Isi Program</h2>
    </div>

<table class="table table-bordered table-striped">
<div class="container-fluid col-md-12">
    <form class="">
        <div class="form-row">
            <div class="col-md-12 mb-12">
                <label for="validationTooltip01">Program</label>
                <input type="text" class="form-control" name="id_program" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip02">Judul</label>
                <input type="text" class="form-control" name="judul" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip03">Content</label>
                <input type="text" class="form-control" name="content" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip04">Youtube</label>
                <input type="text" class="form-control" name="youtube" required>
            </div>
            <div class="col-md-12 mb-12">
                <label for="validationTooltip05">Dokumen</label>
                <input type="file" class="form-control" name="dokumen" required>
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
