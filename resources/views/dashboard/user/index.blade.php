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
                    <th scope="col">ID User</th>
                    <th scope="col">Nama User</th>
                    <th scope="col">Email User</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($datauser as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endif
@endsection
