@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Foto Kegiatan</h2>
    </div>

    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('fotokegiatan.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br><br>
    <div class="container">
        <div class="table-responsive" >
            <table class="table table-bordered table-striped text-center" >
                <thead class="bg-primary text-light">
                    <tr>
                        <th scope="col">Nama Kegiatan</th>
                        <th scope="col">Thumbnail Foto</th>
                        <th scope="col">Foto 1</th>
                        <th scope="col">Foto 2</th>
                        <th scope="col">Foto 3</th>
                        <th scope="col">Foto 4</th>
                        <th scope="col">Foto 5</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tbl_fotokegiatan as $fotokegiatan)
                    <tr>
                        <td>{{$fotokegiatan->nama_kegiatan}}</td>
                        <td><img src="{{asset('dashboard/fotokegiatan')}}/{{$fotokegiatan->thumbnail_fotokegiatan}}" style="width: 50px; height:50px;"></td>
                        <td><img src="{{asset('dashboard/fotokegiatan')}}/{{$fotokegiatan->foto1}}" style="width: 50px; height:50px;"></td>
                        <td><img src="{{asset('dashboard/fotokegiatan')}}/{{$fotokegiatan->foto2}}" style="width: 50px; height:50px;"></td>
                        <td><img src="{{asset('dashboard/fotokegiatan')}}/{{$fotokegiatan->foto3}}" style="width: 50px; height:50px;"></td>
                        <td><img src="{{asset('dashboard/fotokegiatan')}}/{{$fotokegiatan->foto4}}" style="width: 50px; height:50px;"></td>
                        <td><img src="{{asset('dashboard/fotokegiatan')}}/{{$fotokegiatan->foto5}}" style="width: 50px; height:50px;"></td>
                        <th>
                            <input type="button" class="btn btn-secondary" value="Edit">
                            <form action="{{route('fotokegiatan.destroy', $fotokegiatan->id_foto)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-success" value="Hapus">Hapus</button>
                            </form>
                            <input type="button" class="btn btn-success" value="Show">
                        </th>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endif
@endsection
