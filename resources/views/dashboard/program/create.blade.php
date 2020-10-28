@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>Tambah Program Baru</h2>
    </div>
    <br><br>
    <div class="container-fluid col-md-12">
        <form class="" method="POST" action="{{route('program.store')}}">
            {{ csrf_field() }}
            @csrf
            <div class="form-row">
                <div class="col-md-12 mb-12">
                    <label for="validationTooltip01">Nama Program</label>
                    <input type="text" class="form-control" name="nama_program" required>
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
