@extends('template')
@section('title', 'Profil PUSATNUSA')
@php
    $karyawan = App\Karyawan::all();
@endphp
    @section('main')
    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section id="breadcrumbs" class="breadcrumbs">
          <div class="container">

            <div class="d-flex justify-content-between align-items-center">
              <h2>PROFIL</h2>
              <ol>
                <li><a href="{{route('Landing.index')}}">Home</a></li>
                <li>Profil</li>
              </ol>
            </div>

          </div>
        </section><!-- End Breadcrumbs -->

        <!-- ======= About Us Section ======= -->
        <section id="about-us" class="about-us">
          <div class="container" data-aos="fade-up">

            <div class="row content">
              <div class="col-lg-6" data-aos="fade-right">
                <h2>Profil PUSATNUSA</h2>
                <h3>PUSATNUSA adalah singkatan dari Perkumpulan Pengusaha Rakyat Nusantara</h3>
                <p>Beranggotakan seluruh lapisan masyarakat Indonesia dari Sabang Sampai Merauke, dari Miangas hingga Rote.</p>
                <br/><br/>
                <div class="wrap">
                    <br/>
                    <a href="{{route('register')}}"><button class="button-anggota">Daftar Anggota</button></a><br/>
                </div>
              </div>

              <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" style="margin-top: 40px">
                <p class="text-justify">
                    <b> PUSATNUSA </b>
                    <br/>
                    <br/>
                    Menyatukan seluruh rakyat Indonesia dalam satu wadah yang dapat berinteraksi dan melestarikan budaya gotong royong warisan leluhur.
                    <br/>
                    Wadah ini akan menyatukan seluruh masyarakat Indonesia yang akan membangun hubungan antar warga sebagai pengguna dan produsen, produsen dengan donatur,
                    produsen dengan pemodal, produsen dengan tenaga ahli ( IT, Website, Arsitektur, Desain Interior, Kontraktor, Pajak dan Pembukuan, Hukum), konsumen atau produsen
                    dengan jasa transportasi, calon pekerja atau calon pengusahan untuk dilatih tenaga pelatihan.
                    <br/>
                    Pasar Nusantara memfasilitasi pemasaran produk UKM dan non UKM dari berbagai jenis kebutuhan. Barang akan lebih segar, karena konsumen langsung berhubungan
                    kepada petani yang langsung memetik hasil panennya ketika dipesan. Demikian untuk memesan ternak mulai dari ayam kampung sampai dengan sapi akan dimudahkan dan
                    jika menginginkan ternak tersebut diolah sesuai dengan selera masakan daerah dapat difasilitasi oleh anggota yang ada di daerah yang diinginkan.
                    <br/>
                    Transaksi pembayaran dan pengiriman aman, karena personal yang bertransaksi sudah terdaftar sebagai anggota dan menandatangani perjanjian.
                    Pengurus masing-masing wilayah dan daerah berperan untuk melakukan pengawasan atas anggota yang ada di wilayah masing-masing.


                </p>
                {{-- <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                </ul>
                <p class="font-italic">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                  magna aliqua.
                </p> --}}
              </div>
            </div>
          </div>
          <br/>
          <section id="about-us" class="about-us">
            <div class="container" data-aos="fade-up">

              <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                  <h2>VISI & MISI</h2>
                  <br/><br/>
                  <div class="wrap">
                    </div>
                </div>

                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" style="margin-top: 40px">
                  <p class="text-justify">
                      <b> VISI </b>
                      <br/><br/>
                      Mewujudkan ekonomi kerakyatan oleh pelaku rakyat nusantara dengan teknologi kekinian di era digital 4.0
                  </p>
                </div>
              </div>
            </div>

            <section id="about-us" class="about-us">
              <div class="container" data-aos="fade-up">
            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                  <div class="wrap">
                    </div>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" style="margin-top:-30px">
                  <p class="text-justify">
                      <b> MISI </b>
                      <br/><br/>
                      1. Wadah yang mampu menyatukan rakyat nusantara hidup berdampingan melestarikan budaya gotong royong.
                      <br/>
                      2. Wadah modern yang didukung dengan sistem komputerisasi yang mampu menjangkau seluruh wilayah Nusantara dan mempermudah rakyat untuk memperoleh kebutuhan pokoknya langsung dari hasil produksi sesama rakyat.
                      <br/>
                      3. Organisasi yang mampu memfasilitasi kebutuhan anggota baik permodalan, peralatan, pemasaran dan pelatihan yang diperoleh dari donator, lembaga bank dan kementrian terkait.
                      <br/>
                      4. Mewujudkan organisasi yang mampu melindungi dan mengawal anggotanya untuk dapat beroperasi dengan normal.
                      <br/>
                      5. Menyediakan informasi yang dibutuhkan dan dapat diakses dengan mudah oleh semua pihak di seluruh nusantara.
                      <br/>
                      6. Organisasi didukung dengan regulasi internal yang dapat mencegah timbulnya persaingan yang tidak sehat sesama anggota UKM yang dapat mematikan atau menjatuhkan satu sama lain.
                      <br/>
                      7. Mengembangkan UKM yang sudah berdiri dan membentuk pengusaha UKM baru yang taat hukum dan berintegritas tinggi.
                  </p>
                  {{-- <ul>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                    <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                    <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
                  </ul>
                  <p class="font-italic">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                  </p> --}}
                </div>
              </div>
            </div>
            <br/>

        </section>

        <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>QnA</h2>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">Apa itu PUSATNUSA ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                  <p>
                    Perkumpulan Pengusaha Rakyat Nusantara (PUSATNUSA) adalah organisasi berbadan hukum yang beranggotakan pengusaha berbasis ekonomi kerakyatan (ekonomi pancasila)
                        manunggal bersama rakyat pengguna dan pendukung untuk menjadi pelopor mewujudkan tujuan Negara Kesatuan Republik Indonesia (NKRI)
                        yang diamanahkan dalam Pembukaan UUD 1945.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-2" class="collapsed">Tujuan & Maksud<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-2" class="collapse" data-parent=".faq-list">
                  <p>
                    PUSATNUSA dibentuk untuk menghubungkan masyarakat pengguna, pencari kerja, calon pelaku UMKM, pengusaha UMKM yang sudah berjalan, donatur,
                    pemerintah, bank, tenaga ahli, professi dalam satu wadah hukum untuk saling berinteraksi secara digital dengan aman yang diatur dan diawasi
                    oleh kepengurusan tingkat nasional sampai tingkat desa.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-3" class="collapsed">Visi & Misi<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-3" class="collapse" data-parent=".faq-list">
                  <p>
                    Visi:
                        <br>
                        Mewujudkan ekonomi kerakyatan oleh pelaku rakyat nusantara dengan teknologi kekinian di era digital 4.0
                        <br>
                        Misi:
                        <br>
                        Menjadi wadah yang mampu menyatukan rakyat nusantara hidup berdampingan melestarikan budaya gotong royong.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" href="#faq-list-4" class="collapsed">Apa yang dilakukan PUSATNUSA ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-4" class="collapse" data-parent=".faq-list">
                  <p>
                    Mewujudkan tujuan NKRI, PUSATNUSA merencanakan, memfasilitasi, mengelola dan mengawasi:
                    <br/><br/>
                        <i class="ri-check-double-line"></i> 1.	Menyediakan wadah bagi anggota yang berasal dari semua lapisan masyarakat untuk dapat saling berinteraksi secara digital untuk mendapatkan kebutuhan, memasarkan produk, mendapatkan dukungan, mendapatkan pekerjaan, mengembangkan UMKM, mendirikan UMKM baru melalui website yang dapat diakses dari seluruh wilayah nusantara menggunakan komputer dan gadget. <br/>
                        <i class="ri-check-double-line"></i> 2.	Merumuskan dan mengimplementasikan program yang produktip untuk dapat memberdayakan peluang yang masih tersedia diseluruh wilayah nusantara.<br/>
                        <i class="ri-check-double-line"></i> 3.	Menghimpun ahli dan professi untuk dapat mengembangkan dan mendedikasikan profesinya untuk dapat melatih dan membantu rakyat miskin dan pencari kerja menjadi rakyat yang produktif menjadi pekerja UMKM dan pemilik UMKM baru.<br/>
                        <i class="ri-check-double-line"></i> 4.	Mensosialisasikan program, tujuan, wadah PUSATNUSA ke pemerintah dan lembaga lainnya untuk dapat berperan, bersinergi, bermitra, mendukung dan membantu wadah PUSATNUSA.<br/>
                  </p>
                </div>
              </li>

            </ul>
          </div>

        </div>
      </section><!-- End Frequently Asked Questions Section -->

      </main><!-- End #main -->

  @endsection
