@extends('template')
@section('title', 'Foto Kegiatan PUSATNUSA')

    @section('main')
                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>Foto Kegiatan</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Foto Kegiatan</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->

          <!-- ======= Kegiatan Section ======= -->
<section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">
            @foreach ($fotokegiatan as $kegiatan)
                <article class="entry" data-aos="fade-up">

                    <div class="entry-img">
                        <a href="{{route('Landing.show-kegiatan', $kegiatan->id_foto)}}"><img src="{{asset('dashboard/fotokegiatan')}}/{{$kegiatan->thumbnail_fotokegiatan}}"  class="img-fluid"></a>
                    </div>

                    <h2 class="entry-title">
                    <a href="#">{{$kegiatan->nama_kegiatan}}</a>
                    </h2>

                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><a href="{{route('Landing.show-kegiatan', $kegiatan->id_foto)}}">{{$kegiatan->tanggal_fotokegiatan}}</a></li>
                    </ul>
                    </div>

                    <div class="entry-content">
                    <p>
                        {{$kegiatan->deskripsi_fotokegiatan}}
                    </p>
                    <div class="read-more">
                        <a href="{{route('Landing.show-kegiatan', $kegiatan->id_foto)}}">Selengkapnya &nbsp; <i class="fas fa-arrow-right"></i></a>
                    </div>
                    </div>

                </article><!-- End blog entry -->
            @endforeach

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar" data-aos="fade-left">

            <h3 class="sidebar-title">Search</h3>
            <div class="sidebar-item search-form">
              <form action="">
                <input type="text">
                <button type="submit"><i class="icofont-search"></i></button>
              </form>

            </div><!-- End sidebar search formn-->

            <h3 class="sidebar-title">Kategori</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="{{route('Landing.siaranpers')}}">Siaran Pers</a></li>
                <li><a href="https://beritanusa.id/">Berita</a></li>
                <li><a href="https://beritanusa.id/category/topad/">Opini</a></li>
                <li><a href="#">Foto & Video</a></li>
              </ul>

            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title" style="margin-bottom: 30px;">Foto Kegiatan Terbaru</h3>
            <div class="sidebar-item recent-posts">
                @foreach ($fotokegiatan as $kegiatan)
                    <div class="post-item clearfix">
                        <a href="{{route('Landing.show-kegiatan', $kegiatan->id_foto)}}"><img src="{{asset('dashboard/fotokegiatan')}}/{{$kegiatan->thumbnail_fotokegiatan}}"  class="img2" style="width: 50px; height: 50px; margin-right: 10px;"></a>
                        <h4><a href="{{route('Landing.show-kegiatan', $kegiatan->id_foto)}}">{{$kegiatan->nama_kegiatan}}</a></h4>
                        <time datetime="2020-01-01">{{$kegiatan->tanggal_fotokegiatan}}</time>
                    </div>
                @endforeach
            </div><!-- End sidebar recent posts-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
</section><!-- End Kegiatan Section -->

    @endsection
