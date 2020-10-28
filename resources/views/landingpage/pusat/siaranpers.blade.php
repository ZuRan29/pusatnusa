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
              <li><a href="{{route('Landing.siaranpers')}}">PUSATINFO</a></li>
              <li>Siaran Pers</li>
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
                <article class="entry" data-aos="fade-up">

                    <div class="entry-img">
                    </div>

                    <h2 class="entry-title">
                    <a href="#">{{$pers->judul_siaranpers}}</a>
                    </h2>

                    <div class="entry-meta">
                    <ul>
                        <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i><a href="{{route('Landing.siaranpers-show', $pers->idsiaranpers)}}">{{$pers->tanggal_siaranpers}}</a></li>
                    </ul>
                    </div>

                    <div class="entry-content">
                    <p>
                        {{$pers->deskripsi_siaranpers}}
                    </p>
                    <div class="read-more">
                        <a href="{{route('Landing.siaranpers-show', $pers->idsiaranpers)}}">Selengkapnya &nbsp; <i class="fas fa-arrow-right"></i></a>
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

            <h3 class="sidebar-title" style="margin-bottom: 30px;">Siaran Pers Terbaru</h3>
            <div class="sidebar-item recent-posts">
                @foreach ($siaranpers as $pers)
                    <div class="post-item clearfix">
                        <h4><a href="{{route('Landing.siaranpers-show', $pers->idsiaranpers)}}">{{$pers->judul_siaranpers}}</a></h4>
                        <time datetime="2020-01-01">{{$pers->tanggal_siaranpers}}</time>
                    </div>
                @endforeach


            </div><!-- End sidebar recent posts-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>

    </div>
</section><!-- End Blog Section -->

@endsection
