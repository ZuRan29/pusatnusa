@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Karyawan</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('karyawan.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br>
    <div class="container-fluid">
        <div class="float-right">
        </div>
    </div>
    <br><br>
<div class="container">
    <div class="table-responsive" >
    <table class="table table-bordered table-striped text-center" >
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No. </th>
                <th scope="col">NIP</th>
                <th scope="col">NIK</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">No Telepon</th>
                <th scope="col">Jabatan</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($tbl_karyawan as $karyawan)
                <tr>
                    <td>{{$karyawan->id_karyawan}}</td>
                    <td>{{$karyawan->nip}}</td>
                    <td>{{$karyawan->nik}}</td>
                    <td>{{$karyawan->nama_karyawan}}</td>
                    <td>{{$karyawan->jenis_kelamin}}</td>
                    <td>{{$karyawan->no_telp}}</td>
                    <td>{{$karyawan->jabatan}}</td>
                    <td><img src="{{asset('images/karyawan')}}/{{$karyawan->foto}}" style="width: 150px; height:150px;"></td>
                    <td>
                        <input type="button" class="btn btn-secondary" value="Edit">
                        <form action="{{route('karyawan.destroy', $karyawan->id_karyawan)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-success" value="Hapus">Hapus</button>
                        </form>
                        <input type="button" class="btn btn-success" value="Show">
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
