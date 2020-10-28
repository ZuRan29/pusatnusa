 <!-- ======= Footer ======= -->
 <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-4 footer-contact">
            <h3>PUSATNUSA</h3>
            <p>
              Gedung PG No. 11 <br>
              Jl. Jendral Ahmad Yani <br>
              Utan Kayu, Matraman, Jakarta Timur<br>
              DKI Jakarta <br><br>
              <strong>Telepon:</strong> <br/>
                021 8569999 | 08119307008<br>
              <strong>Email:</strong> admin@pusatnusa.com<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu Tambahan</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.profile')}}">Profile Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.pengurus')}}">Sektor Usaha</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.mitra')}}">Kemitraan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('register')}}">Daftar Anggota</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>PROGRAM KAMI</h4>
            <ul>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.pelatihan')}}">Pelatihan</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{url('/')}}">Daftar Program</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.konsultasi')}}">Konsultasi</a></li>
                <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.pasarrakyat')}}">Pasar Rakyat</a></li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>PUSAT INFO</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="https://beritanusa.id/">Berita</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.siaranpers')}}">Siaran Pers</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="https://beritanusa.id/category/topad/">Opini</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{route('Landing.kegiatan')}}">Foto & Video</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-newsletter">
            <h4>Subscribe Email</h4>
            <p>Dapatkan Informasi & Berita Terbaru tentang PUSATNUSA</p>
            <form action="" method="post">
              <input type="email" name="email" placeholder="Email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
            {{-- Created <strong><span>ZULKIFLI RAIHAN</span></strong> --}}
          &copy; Copyright <strong><span>PUSATNUSA</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- Dibuat oleh Zulkifli Raihan. -->
          <!-- Website : https://zulkifliraihan2907.blogspot.com/ -->
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/PusatNusa" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://www.facebook.com/PusatNusa-106710777794560/" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://www.instagram.com/pusatnusa/" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://api.whatsapp.com/send?phone=6282114971464" class="linkedin"><i class="bx bxl-whatsapp"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('style/assets/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('style/assets/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('style/assets/js/main.js') }}"></script>



</body>

</html>
