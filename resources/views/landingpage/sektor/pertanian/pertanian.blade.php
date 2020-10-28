@extends('template')
@section('title', 'Pertanian PUSATNUSA')

    @section('main')
                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>PERTANIAN</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Pertanian</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->

          <section>
            <div class="container">
              <div class="row justify-content-center">

              <div class="row text-center">

                <div class="col" data-aos="fade-left">
                      <a href=""><img src="" class="img-thumbnail" width="100"></a>
                    <a href=""><h4>Pangan</h4></a>
                </div>

                <div class="col" data-aos="fade-left">
                    <a href=""><img src="" class="img-thumbnail" width="100"></a>
                  <a href=""><h4>Hortikultural</h4></a>
                </div>

                <div class="col" data-aos="fade-left">
                  <a href=""><img src="" class="img-thumbnail" width="100"></a>
                  <a href=""><h4>Olahan</h4></a>
                </div>

                </div>
              </div>
            </div>
          </section>

    @endsection
