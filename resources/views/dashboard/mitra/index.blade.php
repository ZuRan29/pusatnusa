@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Mitra</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('mitra.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br><br>
    <div class="table-responsive" >
    <table class="table table-bordered table-striped text-center" >
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Mitra</th>
                <th scope="col">Alamat Mitra</th>
                <th scope="col">Foto Mitra</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tbl_mitra as $mitra)
            <tr>
                    <td>{{$mitra->id_mitra}}</td>
                    <td>{{$mitra->nama_mitra}}</td>
                    <td>{{$mitra->alamat_mitra}}</td>
                    <td><img src="{{asset('images/mitra')}}/{{$mitra->foto_mitra}}" style="width: 150px; height:150px;"></td>
                    <td>
                        <input type="button" class="btn btn-secondary" value="Edit">&nbsp;
                    <form action="{{route('mitra.destroy', $mitra->id_mitra)}}" method="post">
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
@endif
@endsection
