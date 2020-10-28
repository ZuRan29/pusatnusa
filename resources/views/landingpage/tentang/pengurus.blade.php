@extends('template')
@section('title', 'Pengurus PUSATNUSA')

    @section('main')
    <main id="main">

                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>PENGURUS</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Pengurus</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->


            <!-- ======= Our Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

          <div class="section-title" data-aos="fade-up">
            <h4><strong>Ketua Umum</strong></h4>
          </div>

            <center><div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                    <img src="{{asset('style/assets/img/luhut1.jpg')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                    <h4>Parluhutan S. SE.Ak, M.Ak, CA, MA (Topad)</h4>
                    <br/>
                    <a href="{{route('Landing.topad')}}">PROFILE LENGKAP</a>
                </div>
              </div>
            </div></center>
            <br/>

        <div class="section-title" data-aos="fade-up" style="margin-top: 20px;">
            <h4 style="margin-bottom: 20px;"><strong>Ketua Bidang</strong></h4>
            <h6>Cek Eni Komalasari, S.Sos, M.Si</h6>
            <h6>Darwin Natalis, S.H</h6>
            <h6>Bertha Elvy SE, Ak.M.Ak.CA</h6>
            <h6>Noak Bnr, S.H</h6>
        </div>

        <br/>

        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="section-title" data-aos="fade-up">
                    <h4 style="margin-bottom: 20px;"><strong>Sekretaris</strong></h4>
                    <h6>Peri Supriadi</h6>
                    <h6>R. B. Nathanael </h6>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="section-title" data-aos="fade-up">
                    <h4 style="margin-bottom: 20px;"><strong>Bendahara</strong></h4>
                    <h6>Theo David</h6>
                    <h6>Widya Asmara, SE</h6>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="section-title" data-aos="fade-up">
                    <h4 style="margin-bottom: 20px;"><strong>Humas</strong></h4>
                    <h6>Yosep H, S.Sos</h6>
                </div>
            </div>
        </div>
        <br/><br/>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="section-title" data-aos="fade-up">
                    <h4 style="margin-bottom: 20px;"><strong>Tim IT</strong></h4>
                    <h6>Zulkifli Raihan</h6>
                    <h6>Fawwaz Hudzalfah Saputra</h6>
                    <h6>Revi Azriel</h6>
                    <h6>Naufal Hawari</h6>
                    <h6>Adil</h6>
                    <h6>Dwi Putra Bayu S.Kom</h6>
                    <h6>Radhea Heqamudisa S.Ikom</h6>
                    <h6>Yudhi Amd.Kom. S.Kom </h6>
                    <h6>Hans, SE. S.Kom, MT</h6>
                    <h6>Adi Wisasta, S.Kom</h6>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="section-title" data-aos="fade-up">
                    <h4 style="margin-bottom: 20px;"><strong>Teknik dan General</strong></h4>
                    <h6>Rotua Natalia</h6>
                    <h6>Muhammad Alfath Nur, S. Ars</h6>
                    <h6>Ar. Susilawati Indi Lestari, S. Ars</h6>
                    <h6>Bintang Ellita Destriani, S. Ars</h6>
                    <h6>Maghfira Putri Maulani Sarjana, S. Ars</h6>
                    <h6>Nona Amaliya Rahma, S. PWK</h6>
                    <h6>Indramawan, S.E</h6>
                    <h6>Jordy Valentio, S. Sn</h6>
                    <h6>James</h6>
                    <h6>Hotman</h6>
                    <h6>Gatot</h6>
                    <h6>Lastri</h6>
                </div>
            </div>
        </div>

        {{-- <table cellpadding="2">
            <tr>
                <th>Ketua Bidang</th>
                <th>Sekretaris</th>
                <th>Bendahara</th>
                <th>Humas</th>
                <th>IT</th>
                <th>Teknik & General</th>
            </tr>
            <tr>
                <td>Cek Eni Komalasari, S.Sos
                    <br>Darwin Natalis, S.H
                </td>
                <td>Peri Supriadi,
                    <br>R. B. Nathanael
                </td>
                <td>Theo David,
                  <br>Widya Asmara, SE
              </td>
              <td>Yosep H, S.Sos
            </td>
            <td>Yosep H, S.Sos
              <br>Hans, SE. S.Kom, MT
              <br>Adi Wisasta, S.Kom
              <br>Zulkifli Raihan
              <br>Fawwaz Hudzalfah Saputra
              <br> Revi Azriel
              <br>Muhamad Taufik
              <br>Naufal Hawari
              <br>Adil
              <br>Dwi Putra Bayu
              <br>Radhea Heqamudisa S.Ikom
              <br>Yudhi Amd.Kom. S.Kom
              <br>Dika Purnama Amd.Ab S.Ab
            </td>
            <td>Alfath, S.Ars
                <br>James
                <br>Hotman
                <br>Gatot
                <br>Lastri
            </td>

            </tr>


        </table> --}}

    </div>

            {{-- <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                    <img src="{{asset('style/assets/img/luhut2.jpg')}}" class="img-fluid" width="600px" height="600px">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-whatsapp"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/luhut3.jpg')}}" class="img-fluid" width="600px" height="600px">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/luhut4.jpg')}}" class="img-fluid" width="600px" height="600px">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>

                </div>
              </div>
            </div> --}}

          {{-- <div class="section-title" data-aos="fade-up">
            <h4><strong>Ketua Bidang</strong></h4>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Cek Eni Komalasari, S.Sos, M.Si</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Darwin Natalis, S.H</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Bertha Elvy SE, Ak.M.Ak.CA</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid"  width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Noak Bnr, S.H.</h4>
                </div>
              </div>
            </div>

          </div>

          <br/>
          <div class="section-title" data-aos="fade-up">
            <h4><strong>Bendahara</strong></h4>
          </div>
          <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Theo David</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Widya Asmara,SE</h4>
                </div>
              </div>
            </div>
          </div>

          <br/>
          <div class="section-title" data-aos="fade-up">
            <h4><strong>Sekretaris</strong></h4>
          </div>
          <div class="row justify-content-center">
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Peri Supriadi</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>R. B. Nathanael</h4>
                </div>
              </div>
            </div>
          </div>

          <br/>
          <div class="section-title" data-aos="fade-up">
            <h4><strong>Humas</strong></h4>
          </div>
        <center><div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Yosep H, S.Sos</h4>
                </div>
              </div>
          </center>

          <br/>
          <div class="section-title" data-aos="fade-up">
            <h4><strong>IT</strong></h4>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Hans,SE.S.Kom,M.T </h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Adi Wisasta, S.Kom</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Zulkifli Raihan</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid"  width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Fawwaz Hudzalfah Saputra</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Revi Azriel</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Muhamad Taufik</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Naufal Hawari</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Adil</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Dwi Putra Bayu S.Kom</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Radhea Heqamudisa S.Ikom</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Yudhi Amd.Kom,S.Kom</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Dika Purnama Amd.Ab,S.Ab</h4>
                </div>
              </div>
            </div>
          </div>

          <br/>
          <div class="section-title" data-aos="fade-up">
            <h4><strong>Teknik & General</strong></h4>
          </div>

          <div class="row">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Alfath, ST</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="100">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>James</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid" width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Hotman</h4>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="{{asset('style/assets/img/user.png')}}" class="img-fluid"  width="600px" height="600px">
                </div>
                <div class="member-info">
                  <h4>Gatot</h4>
                </div>
              </div>
            </div>
          </div> --}}

{{--
            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="200">
                <div class="member-img">
                  <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>William Anderson</h4>
                  <span>CTO</span>
                </div>
              </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
              <div class="member" data-aos="fade-up" data-aos-delay="300">
                <div class="member-img">
                  <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                  <div class="social">
                    <a href=""><i class="icofont-twitter"></i></a>
                    <a href=""><i class="icofont-facebook"></i></a>
                    <a href=""><i class="icofont-instagram"></i></a>
                    <a href=""><i class="icofont-linkedin"></i></a>
                  </div>
                </div>
                <div class="member-info">
                  <h4>Amanda Jepson</h4>
                  <span>Accountant</span>
                </div>
              </div>
            </div> --}}

          </div>

        </div>
      </section><!-- End Our Team Section -->


    @endsection
