@extends('template')
@section('title', 'Pelatihan PUSATNUSA')

    @section('main')
            {{-- <!-- Font Icon -->
            <link rel="stylesheet" href="{{asset('styleform/fonts/material-icon/css/material-design-iconic-font.min.css') }} ">

            <!-- Main css -->
            <link rel="stylesheet" href="{{asset('styleform/css/style.css')}}">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
            <style>
                /* Font */
                @import url('https://fonts.googleapis.com/css?family=Quicksand:400,700');

                /* Design */
                *,
                *::before,
                *::after {
                box-sizing: border-box;
                }

                /* body {
                color: #272727;
                font-family: 'Quicksand', serif;
                font-style: normal;
                font-weight: 400;
                /* letter-spacing: 0;
                padding: 1rem; */
                } */

                /* .main{
                max-width: 1200px;
                margin: 0 auto;
                } */

                h1 {
                    font-size: 24px;
                    font-weight: 400;
                    text-align: center;
                }

                img {
                height: auto;
                max-width: 100%;
                vertical-align: middle;
                }

                .btn {
                color: #ffffff;
                padding: 0.8rem;
                font-size: 14px;
                text-transform: uppercase;
                border-radius: 4px;
                font-weight: 400;
                display: block;
                width: 100%;
                cursor: pointer;
                border: 1px solid rgba(255, 255, 255, 0.2);
                background: transparent;
                }

                .btn:hover {
                background-color: rgba(255, 255, 255, 0.12);
                }

                .cards {
                display: flex;
                flex-wrap: wrap;
                list-style: none;
                /* margin: 0;
                padding: 0; */
                }

                .cards_item {
                display: flex;
                padding: 1rem;
                }

                @media (min-width: 40rem) {
                .cards_item {
                    width: 50%;
                }
                }

                @media (min-width: 56rem) {
                .cards_item {
                    width: 33.3333%;
                }
                }

                .card {
                background-color: white;
                border-radius: 0.25rem;
                box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
                display: flex;
                flex-direction: column;
                overflow: hidden;
                }

                .card_content {
                /* padding: 1rem; */
                padding: 0.5rem;
                background: linear-gradient(to bottom left, #1a8707 40%, #5eb017 100%);
                }

                .card_title {
                color: #ffffff;
                font-size: 1.1rem;
                font-weight: 700;
                letter-spacing: 1px;
                text-transform: capitalize;
                margin: 0px;
                }

                .card_text {
                color: #ffffff;
                font-size: 0.875rem;
                line-height: 1.5;
                margin-bottom: 1.25rem;
                font-weight: 400;
                }
                .made_by{
                font-weight: 400;
                font-size: 13px;
                margin-top: 35px;
                text-align: center;
                }
            </style>
            </head>

                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>PELATIHAN</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Pelatihan</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->

        <section>
            <div class="container">
              <div class="row text-center">
                <div class="section-title">
                  <h2>PELATIHAN</h2>
                    <p>Program Pelatihan ini adalah program pelatihan yang disediakan oleh PUSATNUSA kepada masyarakat luas untuk melatih dan mengembangkan kemampuan masyarakat dalam bentuk Pelatihan Tatap Muka maupun Online</p>
                </div>
              </div>
            </div>

          </section>
          <section>
            <div class="container">

              <div class="main">
                  <ul class="cards">
                    @foreach ($tbl_pelatihan as $pelatihan)
                  <li class="cards_item">
                    <div class="card">
                      <div class="card_image"><img src="{{asset('images/pelatihan')}}/{{$pelatihan->foto}}"  style="width: 270px; height: 180px"></div>
                      <div class="card_content">
                          <h6>{{$pelatihan->id_materi}}</h6>
                        <h2 class="card_title" style="margin-bottom: 10px;">{{$pelatihan->nama_pelatihan}}</h2>
                        <p class="card_text">{{Str::limit($pelatihan->deskripsi, 100)}}</p>
                        <a href="{{$pelatihan->link_pendaftaran}}"><button class="btn card_btn">Daftar</button></a>
                      </div>
                    </div>
                  </li>
                {{-- <li class="cards_item">
                    <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=5"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=11"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=14"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=17"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                    </div>
                </li>
                <li class="cards_item">
                    <div class="card">
                    <div class="card_image"><img src="https://picsum.photos/500/300/?image=2"></div>
                    <div class="card_content">
                        <h2 class="card_title">Card Grid Layout</h2>
                        <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p>
                        <button class="btn card_btn">Read More</button>
                    </div>
                    </div>
                </li> --}}
                @endforeach
                </ul>
            </div>
            </div>
          </section>

          {{-- <section id="services" class="services section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">

                <h2><strong>COMING SOON</strong></h2>
                </div>

                 <center>   <h2>Mohon Maaf, Menu ini akan tersedia saat Launching Resmi PUSATNUSA</h2></center><br/><br/>
                 <center>   <h3>Nantikan Launching Kami!!</h3></center>
               <br/><br/><br/>
               <div class="form-group">
                <a href="{{url('/')}}"><input type="submit" name="submit" id="submit" class="form-submit" value="BACK TO HOME"/></a>


            </div>
          </section> --}}
    @endsection
