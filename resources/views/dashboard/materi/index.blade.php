@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')

    <div class="col-lg-6" >
        <h2>List Materi</h2>
    </div>
<br><br>
@if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('materi.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>

    <br><br>
    <div class="table-responsive" >
    <table class="table table-bordered table-striped text-center" >
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Program</th>
                <th scope="col">Nama Materi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tbl_materi as $materi)
                <tr>
                    <td>{{$materi->id_materi}}</td>
                    <td>{{$materi->nama_program}}</td>
                    <td>{{$materi->nama_materi}}</td>
                    <th>
                        <input type="button" class="btn btn-secondary" value="Edit">
                        <form action="{{route('materi.destroy', $materi->id_materi)}}" method="post">
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
