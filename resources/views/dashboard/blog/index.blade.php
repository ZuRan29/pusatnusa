@extends('dashboard.index')
@section('title', 'ADMIN PUSATNUSA')

    @section('content')
    <div class="col-lg-6" >
        <h2>List Blog</h2>
    </div>
    @if (Auth::user()->hasRole("admin"))
    <div class="container-fluid">
        <div class="float-right">
            <a href="{{route('blog.create')}}"><input type="button" class="btn btn-outline-primary font-weight-bold" value="+"></a>
        </div>
    </div>
    <br><br>
    <div  class="table-responsive">
    <table class="table table-bordered table-striped text-center">
        <thead class="bg-primary text-light">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Judul</th>
                <th scope="col">Kategori</th>
                <th scope="col">Author</th>
                <th scope="col">Isi</th>
                <th scope="col">Tanggal Post</th>
                <th scope="col">Youtube</th>
                <th scope="col">Foto</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                @foreach ($tbl_blog as $blog)
                    <td>{{$blog->id_blog}}</td>
                    <td>{{$blog->judul}}</td>
                    <td>{{$blog->kategori}}</td>
                    <td>{{$blog->author}}</td>
                    <td>{{$blog->isi}}</td>
                    <td>{{$blog->tanggal}}</td>
                    <td>{{$blog->youtube}}</td>
                    <td>{{$blog->foto}}</td>

                @endforeach
                <td>
                    <input type="button" class="btn btn-secondary" value="Edit">
                    <input type="button" class="btn btn-danger" value="Delete">
                    <input type="button" class="btn btn-success" value="Show">
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endif
@endsection
