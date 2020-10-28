<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title')</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Favicons -->
  <link href="{{ asset('style/assets/img/pusatnusa1.png')}}" rel="user">
  <link href="{{ asset('style/assets/img/pusatnusa1.png')}}" rel="user">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/icofont/icofont.min.css') }}">
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/animate.css/animate.min.css') }}">
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/venobox/venobox.css') }}" >
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/aos/aos.css') }}" >
  <link  rel="stylesheet" href="{{ asset('style/assets/vendor/remixicon/remixicon.css') }}" >

  <link href="{{asset('style/assets/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>


  <!-- Template Main CSS File -->
<link href="{{ asset('style/assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

              <h1 class="logo mr-auto"><a href="{{url('/')}}">PUSAT<span>NUSA</span></a></h1>
              <!-- Uncomment below if you prefer to use an image logo -->
              <!-- <a href="index.blade.php" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

              <nav class="nav-menu d-none d-lg-block">
                <ul>
                  <li class="active"><a href="{{route('Landing.index')}}">Home</a></li>
                  <li class="drop-down"><a href="{{route('Landing.profile')}}" >Tentang Kami</a>
                    <ul>
                      <li><a href="{{route('Landing.profile')}}">Profil</a></li>
                      <li><a href="{{route('Landing.pengurus')}}">Pengurus</a></li>
                      <li><a href="{{route('Landing.mitra')}}">Mitra Kami</a></li>
                    </ul>
                  </li>

                  <li class="drop-down"><a href="" aria-disabled="true">Program</a>
                    <ul>
                        <li><a href="{{route('Landing.pertanian')}}">Pertanian</a></li>
                        <li><a href="{{route('Landing.perikanan')}}">Perikanan</a></li>
                        <li><a href="#">Peternakan</a></li>
                        <li><a href="#">Perkebunan</a></li>
                        <li><a href="#">Industri</a></li>
                        <li><a href="#">Industri Kreatif</a></li>
                        <li><a href="#">Logistik</a></li>
                        <li><a href="#">Transportasi</a></li>
                        <li><a href="#">Pertambangan</a></li>
                        <li><a href="#">Perminyakan</a></li>
                    </ul>
                  </li>
                  <li><a href="{{route('Landing.pelatihan')}}">Pelatihan</a></li>

                  {{-- <li><a href="{{route('Landing.blog')}}">Opini</a></li> --}}
                  <li><a href="{{route('Landing.pasarrakyat')}}">Pasar Rakyat</a></li>

                  <li class="drop-down"><a href="" aria-disabled="true">PUSAT INFO</a>
                    <ul>
                        <li><a href="https://beritanusa.id/">Berita</a></li>
                        <li><a href="{{route('Landing.siaranpers')}}">Siaran Pers</a></li>
                        <li><a href="https://beritanusa.id/category/topad/">Opini</a></li>
                        <li><a href="{{route('Landing.kegiatan')}}">Foto & Video</a></li>
                    </ul>
                  </li>

                  {{-- @php
                  if (Auth::check()) {
                        $getidanggota = Auth::user()->id;
                        $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
                        $tampilorganisasi = DB::select("SELECT * FROM users INNER JOIN organisasi ON users.id = organisasi.users_id WHERE users.id = '$getidanggota'");
                        $tampilusaha = DB::select("SELECT * FROM users INNER JOIN usaha ON users.id = usaha.users_id WHERE users.id = '$getidanggota'");
                  }
                  @endphp

                  @if (!empty($tampilanggota) && !empty($tampilusaha) && !empty($tampilusaha)) --}}
                    <li><a href="{{route('Landing.modal')}}">Modal</a></li>
                    {{-- @else
                  @endif --}}

                  @if (! Auth::user())
                    <li class="drop-down"><a href="" aria-disabled="true">Anggota</a>
                      <ul>
                          <li><a href="{{route('Landing.syarat-anggota')}}">Persyaratan dan Ketentuan</a></li>
                          <li><a href="{{ route('register')}}">Pendaftaran Anggota</a></li>
                          <li><a href="{{ route('login')}}">Login Anggota</a></li>
                          {{-- <li><a href="https://beritanusa.id/category/topad/">Daftar Anggota</a></li> --}}
                      </ul>
                    </li>
                  {{-- <li class="get-started-daftar"><a href="{{ route('register')}}">Daftar</a></li> --}}
                  @else
                    @if (Auth::user()->hasRole("admin"))
                        <li class="get-started-daftar"><a href="{{ route('Dashboard.index')}}">Dashboard Admin</a></li>
                    @elseif(Auth::user()->hasRole("user"))
                    <li class="get-started-daftar"><a href="{{ route('Anggota.show')}}">Dashboard</a></li>
                  @endif
                  @endif


              </nav><!-- .nav-menu -->
            </div>
          </header><!-- End Header -->
