@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="container-fluid">
        <div class="float-right">
            <input type="button" class="btn btn-outline-primary font-weight-bold" value="+">
        </div>
    </div>
    <br><br>
    <div class="table-responsive" >
    <table class="table table-bordered table-striped text-center" >
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pelatihan</th>
                <th scope="col">Penyelenggara </th>
                <th scope="col">Lokasi</th>
                <th scope="col">Waktu</th>
                <th scope="col">Harga</th>
                <th scope="col">Materi</th>
                <th scope="col">Tambahan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <input type="button" class="btn btn-secondary" value="Edit">
                    <input type="button" class="btn btn-danger" value="Delete">
                    <input type="button" class="btn btn-success" value="Show">
                </th>
            </tr>
        </tbody>
    </table>
</div>

@endsection
