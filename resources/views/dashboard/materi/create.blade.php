@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')
@section('content')
@php
    $program = App\Program::all();
@endphp

    <div class="col-lg-6" >
        <h2>Tambah Materi Baru</h2>
    </div>
<br><br>
<table class="table table-bordered table-striped">
    <div class="container-fluid col-md-12">
        <form class="" method="POST" action="{{route('materi.store')}}">
            {{ csrf_field() }}
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Program</label>
                    <select class="custom-select" name="id_program" id="validationTooltip01" required>
                        <option value="">Pilih</option>
                        @foreach ($program as $p)
                            <option value="{{$p->id_program}}">{{$p->nama_program}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-12 mb-12"><br/>
                    <label for="validationTooltip02">Nama Materi</label>
                    <input type="text" class="form-control" name="nama_materi" required>
                </div>
            </div>

            <br>
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection
