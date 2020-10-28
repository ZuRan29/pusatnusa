@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Terdaftar Anggota</h2>
    </div>

    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('karyawan.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br><br>
<div class="container">
    <div class="table-responsive" >
        <table class="table table-bordered table-striped text-center" >
            <thead class="bg-primary text-light">
                <tr>
                    <th scope="col">Nama User</th>
                    <th scope="col">Nama Anggota</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($list_anggota as $anggota)
                <tr>
                    <td>{{$anggota->name}}</td>
                    <td>{{$anggota->nama_anggota}}</td>
                    <th>
                        <a href="{{route('Dashboard.show-anggota', $anggota->id)}}"><input type="button" class="btn btn-success" value="Show"></a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
