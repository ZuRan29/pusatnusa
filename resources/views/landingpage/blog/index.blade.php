@extends('template')
@section('title', 'Konsultasi PUSATNUSA')

    @section('main')

            <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

          <div class="d-flex justify-content-between align-items-center">
            <h2>Blog</h2>
            <ol>
              <li><a href="{{url('/')}}">Home</a></li>
              <li>Blog</li>
            </ol>
          </div>

        </div>
      </section><!-- End Breadcrumbs -->
<br/><br/>
      <div class="section-title" data-aos="fade-up">
        <h2><strong>Opini</strong></h2>

      </div>
    {{-- <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <br><br><br><br><br/><br/>
            <div class="section-title">

            <h2><strong>COMING SOON</strong></h2>
            </div>



             <center>   <h2>Mohon Maaf, Menu ini akan tersedia saat Launching Resmi PUSATNUSA</h2></center><br/><br/>
             <center>   <h3>Nantikan Launching Kami!!</h3></center>
           <br/><br/><br/>
           <div class="form-group">
            <a href="{{url('/')}}"><input type="submit" name="submit" id="submit" class="form-submit" value="BACK TO HOME"/></a>
        </div><br/><br/><br/><br/>

        </div>
        </section><!-- End Services Section --> --}}

<!-- ======= Blog Section ======= -->

<section id="blog" class="blog">
    <div class="container">

      <div class="row">

        <div class="col-lg-8 entries">
            @foreach ($blog as $b)

          <article class="entry" data-aos="fade-up">

            <div class="entry-img">
              <img src="{{asset('images/opini')}}/{{$b->foto}}" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">{{$b->judul}}</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">{{$b->author}}</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html">{{$b->tanggal}}</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
               {{Str::limit($b->isi, 388, '...')}}
              </p>
              <div class="read-more">
                <a href="{{$b->youtube}}">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->


          {{-- <article class="entry" data-aos="fade-up">

            <div class="entry-img">
              <img src="assets/img/blog-2.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Nisi magni odit consequatur autem nulla dolorem</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Incidunt voluptate sit temporibus aperiam. Quia vitae aut sint ullam quis illum voluptatum et. Quo libero rerum voluptatem pariatur nam.
                Ad impedit qui officiis est in non aliquid veniam laborum. Id ipsum qui aut. Sit aliquam et quia molestias laboriosam. Tempora nam odit omnis eum corrupti qui aliquid excepturi molestiae. Facilis et sint quos sed voluptas. Maxime sed tempore enim omnis non alias odio quos distinctio.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" data-aos="fade-up">

            <div class="entry-img">
              <img src="assets/img/blog-3.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Possimus soluta ut id suscipit ea ut. In quo quia et soluta libero sit sint.</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Aut iste neque ut illum qui perspiciatis similique recusandae non. Fugit autem dolorem labore omnis et. Eum temporibus fugiat voluptate enim tenetur sunt omnis.
                Doloremque est saepe laborum aut. Ipsa cupiditate ex harum at recusandae nesciunt. Ut dolores velit.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry -->

          <article class="entry" data-aos="fade-up">

            <div class="entry-img">
              <img src="assets/img/blog-4.jpg" alt="" class="img-fluid">
            </div>

            <h2 class="entry-title">
              <a href="blog-single.html">Non rem rerum nam cum quo minus. Dolor distinctio deleniti explicabo eius exercitationem. Veniam eius velit ab ipsa quidem rem.</a>
            </h2>

            <div class="entry-meta">
              <ul>
                <li class="d-flex align-items-center"><i class="icofont-user"></i> <a href="blog-single.html">John Doe</a></li>
                <li class="d-flex align-items-center"><i class="icofont-wall-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">Jan 1, 2020</time></a></li>
                <li class="d-flex align-items-center"><i class="icofont-comment"></i> <a href="blog-single.html">12 Comments</a></li>
              </ul>
            </div>

            <div class="entry-content">
              <p>
                Aspernatur rerum perferendis et sint. Voluptates cupiditate voluptas atque quae. Rem veritatis rerum enim et autem. Saepe atque cum eligendi eaque iste omnis a qui.
                Quia sed sunt. Ea asperiores expedita et et delectus voluptates rerum. Id saepe ut itaque quod qui voluptas nobis porro rerum. Quam quia nesciunt qui aut est non omnis. Inventore occaecati et quaerat magni itaque nam voluptas. Voluptatem ducimus sint id earum ut nesciunt sed corrupti nemo.
              </p>
              <div class="read-more">
                <a href="blog-single.html">Read More</a>
              </div>
            </div>

          </article><!-- End blog entry --> --}}

          {{-- <div class="blog-pagination">
            <ul class="justify-content-center">
              <li class="disabled"><i class="icofont-rounded-left"></i></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="icofont-rounded-right"></i></a></li>
            </ul>
          </div> --}}

        </div><!-- End blog entries list -->

        <div class="col-lg-4">

          <div class="sidebar" data-aos="fade-left">

            <h3 class="sidebar-title">Categories</h3>
            <div class="sidebar-item categories">
              <ul>
                <li><a href="https://beritanusa.id/category/nasional/">Berita Nasional<span>(25)</span></a></li>
                <li><a href="https://beritanusa.id/bisnis/">Bisnis <span>(12)</span></a></li>
                <li><a href="https://beritanusa.id/category/umkm/">UMKM <span>(12)</span></a></li>
                <li><a href="https://beritanusa.id/category/opini/">Opini <span>(5)</span></a></li>
              </ul>

            </div><!-- End sidebar categories-->

            <h3 class="sidebar-title">Post Terakhir</h3>
            <div class="sidebar-item recent-posts">
              <div class="post-item clearfix">
                <img src="{{asset('images/opini')}}/{{$b->foto}}" alt="">
                <h4><a href="blog-single.html">{{$b->judul}}</a></h4>
                <time datetime="2020-01-01">{{$b->tanggal}}</time>
              </div>



            </div><!-- End sidebar recent posts-->

          </div><!-- End sidebar -->

        </div><!-- End blog sidebar -->

      </div>
      @endforeach
    </div>
  </section><!-- End Blog Section -->

@endsection
