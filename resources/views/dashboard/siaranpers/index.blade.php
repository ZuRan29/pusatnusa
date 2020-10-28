@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>List Program</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
                <a href="{{route('siaran-pers.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
            </div>
        </div>

    <br>
    <br><br>
    <div  class="table-responsive">
    <table class="table table-bordered table-striped text-center" style="margin-left: 20px; margin-right: 0px">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No ID</th>
                <th scope="col">Judul Siaran Pers</th>
                <th scope="col">Tanggal Rilis Siaran Pers</th>
                <th scope="col">Dokumen Siaran Pers</th>
                <th scope="col">Youtube Siaran Pers</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siaran_pers as $pers)
            <tr>
                <td>{{$pers->idsiaranpers}}</td>
                <td>{{$pers->judul_siaranpers}}</td>
                <td>{{$pers->tanggal_siaranpers}}</td>
                <td>{{$pers->dokumen_siaranpers}}</td>
                <td>{{$pers->youtube_siaranpers}}</td>
                <td>
                    <input type="button" class="btn btn-secondary" value="Edit">
                    <form action="{{route('siaran-pers.destroy', $pers->idsiaranpers)}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-danger" value="Delete">
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
