@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Program Baru</h2>
    </div>
    <br><br>
    <div class="container-fluid col-md-12">
        <form class="" role="form" method="POST" action="{{route('siaran-pers.store')}}" enctype="multipart/form-data">
            {{ csrf_field() }}
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Judul Siaran Pers</label>
                    <input type="text" class="form-control" name="judul_siaranpers" placeholder="Masukan Judul Siaran Pers" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Deskripsi Siaran Pers</label>
                    <textarea class="form-control" cols="30" rows="2" name="deskripsi_siaranpers"></textarea>
                </div>
            </div>
            <div class="form-row" style="margin-top: 15px;">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Tanggal Rilis Siaran Pers</label>
                    <input type="date" class="form-control" name="tanggal_siaranpers" required>
                </div>
            </div>
            <div class="form-row" style="margin-top: 15px;">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Upload Dokumen Siaran Pers</label>
                    <input type="file" class="form-control" name="dokumen_siaranpers" required>
                </div>
            </div>
            <div class="form-row" style="margin-top: 15px;">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Youtube Rilis Siaran Pers</label>
                    <input type="text" class="form-control" name="youtube_siaranpers" placeholder="Isikan Link Youtube" required>
                </div>
            </div><br>
            <div class="form-row">
                <div class="col-md-3 mb-3">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
            </form>
        </div>
    @endsection
