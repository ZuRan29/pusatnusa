@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Anggota Pengajuan Modal</h2>
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
                    <th scope="col">Nama Pengaju</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengajuan_modal as $pengajumodal)
                <tr>
                    <td>{{$pengajumodal->name}}</td>
                    <td>{{$pengajumodal->nama_pengaju}}</td>
                    <th>
                        <a href="{{route('Dashboard.list-pengajuanmodal', $pengajumodal->id)}}"><input type="button" class="btn btn-success" value="Show"></a>
                    </th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
