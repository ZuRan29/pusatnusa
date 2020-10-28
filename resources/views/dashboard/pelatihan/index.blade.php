@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>List Pelatihan</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('pelatihan.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="bg-primary text-light">
                    <tr>
                        <th scope="col">Nama Pelatihan</th>
                        <th scope="col">Penyelenggara</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tbl_pelatihan as $pelatihan)
                    <tr>
                        <td>{{$pelatihan->nama_pelatihan}}</td>
                        <td>{{$pelatihan->penyelenggara}}</td>
                        <td>{{$pelatihan->harga}}</td>
                        <td><img src="{{asset('images/pelatihan')}}/{{$pelatihan->foto}}" style="width: 100px; height:100px;"></td>
                        <td>
                            <input type="button" class="btn btn-secondary btn-sm" value="Edit">
                            <form action="{{route('pelatihan.destroy', $pelatihan->id_pelatihan)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success" value="Hapus">Hapus</button>
                            </form>
                            <input type="button" class="btn btn-success btn-sm" value="Show">
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection
