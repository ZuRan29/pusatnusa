@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Isi Program</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
        </div>
    </div>
    <br><br>
    <div class="table-responsive" >
    <table class="table table-bordered table-striped text-center" >
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">Program</th>
                <th scope="col">Judul</th>
                <th scope="col">Content</th>
                <th scope="col">Youtube</th>
                <th scope="col">Dokumen</th>
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
@endif
@endsection
