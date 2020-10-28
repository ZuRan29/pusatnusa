@extends('template')
@section('title', 'SIARAN PERS')

    @section('main')

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>PUSAT INFO</h2>
                    <ol>
                        <li><a href="{{route('Landing.index')}}">Home</a></li>
                        <li><label>PUSATINFO</label></li>
                        <li><a href="{{route('Landing.siaranpers')}}">Siaran Pers</a></li>
                    @foreach ($siaranpers as $pers)
                        <li>{{$pers->judul_siaranpers}}</li>
                    @endforeach
                </ol>
            </div>

            </div>
        </section><!-- End Breadcrumbs -->
            <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
        <div class="container">

          <div class="row">

            <div class="col-lg-8 entries">
                @foreach ($siaranpers as $pers)
                    <article class="entry entry-single" data-aos="fade-up">
                        <div class="entry-meta">
                            <ul>
                                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> {{$pers->tanggal_siaranpers}}</li>
                            </ul>
                        </div>

                        <h2 class="entry-title">
                            <label>{{$pers->judul_siaranpers}}</label>
                        </h2>

                        <div class="entry-content">
                        <p>
                           {{$pers->deskripsi_siaranpers}}
                        </p>

                        <h3 style="text-align: center;">Download Siara Pers</h3>
                        <h4 style="text-align: center; margin-bottom: 15px;">{{$pers->judul_siaranpers}}</h4>
                        <h5 style="text-align: center;">
                            <a href="{{ URL::to( '/dashboard/siaranpers/' . $pers->dokumen_siaranpers)}}"><button class="btn btn-secondary"><i class="fas fa-file-download" style="margin-right: 5px;"></i>Download</button></a></a>

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

                <h3 class="sidebar-title" style="margin-bottom: 30px;">Siaran Pers Terbaru</h3>
                <div class="sidebar-item recent-posts">
                    @foreach ($siaranpers as $pers)
                        <div class="post-item clearfix">
                            <h4><a href="blog-single.html">{{$pers->judul_siaranpers}}</a></h4>
                            <time datetime="2020-01-01">{{$pers->tanggal_siaranpers}}</time>
                        </div>
                    @endforeach
                </div><!-- End sidebar recent posts-->

            </div><!-- End blog sidebar -->

          </div>

        </div>
      </section><!-- End Blog Section -->

      @endsection
