@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>List Opini</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('opini.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br><br>
    <div class="table-responsive" >
    <table class="table table-bordered table-striped text-center" >
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Tanggal Terbit</th>
                <th scope="col">Penulis</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tbl_opini as $opini)
            <tr>
                <td>{{$opini->idopini}}</td>
                <td>{{$opini->judul}}}</td>
                <td>{{$opini->tanggal}}}</td>
                <td>{{$opini->author}}}</td>
                <td><img src="{{asset('images/opini')}}/{{$opini->foto}}" style="width: 150px; height:150px;"></td>
                <th>
                    <input type="button" class="btn btn-secondary" value="Edit">
                    <form action="{{route('opini.destroy', $opini->idopini)}}" method="post">
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
@endif
@endsection
