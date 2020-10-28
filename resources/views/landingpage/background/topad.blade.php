@extends('template')
@section('title', 'Pengurus PUSATNUSA')

    @section('main')
 <!-- ======= Breadcrumbs ======= -->
 <section id="breadcrumbs" class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>Profil Ketua Umum</h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li><a href="{{route('Landing.pengurus')}}">Pengurus</a></li>
          <li>Profil</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs -->
  <br/><br/>
  <div class="section-title" data-aos="fade-up">
    <h4><strong>Profil Ketua Umum</strong></h4>
  </div>
  <center><img src="{{asset('style/assets/img/luhut1.jpg')}}" class="img-fluid" style="width: 350px; height: 500px;"></center>
  <center>Parluhutan SE, Ak, M.Ak, CA, CMA (Akrap dipanggil Pa Topad)</center>

  <br/><br/>
  <div class="container">
  <p>
    Lahir di Sumatera Utara, tepatnya di Kotamadya Kabanjahe. Mamasuki SD kelas 2 pindah sekolah ke Pematang Siantar, tinggal bersama Kakeknya, karena orangtua yang berprofesi seorang Polisi, harus berpindah tugas dari satu kota ke kota lainnya. Lulus SMP Negeri Tiga Balata, diterima di SMA Negeri 2 Pematang Siantar. Ditengah kesibukannya turut mengurusi kebun, pertanian, perikanan dan peternakan milik kakeknya, tidak ketinggalan bahwa sekolah selalu dinomor satukan, terbukti menjadi juara 1 kelas dan juara umum dan mengakhiri masa SMA di kota tersebut, meraih NEM tertinggi regional (Rangking ke 2 SMA Se SUMUT). Selanjutnya menamatkan S1 dari Fakultas Ekonomi Universitas Sumatera Utara, kemudian pernah mengikuti kuliah hukum. Meraih gelar S2, M.Ak dari program magister Universitas Indonesia (UI). Gelar CMA dari Australia setetelah mendapatkan nilai terbaik terkait managemen UI.
  </p>
  <p>
    Setahun di PT. Asaba, tahun 1993 diterima di Deloitte Touche Tohmatsu (DTTI), kantor akuntan internasional terbesar ke 2 dunia berpusat di Amerika Serikat, selama 3 tahun. Tahun 1996 bergabung ke Price Waterhouse Cooper (PWC), peringkat ke 1 dunia kantor akuntan Internasional yang juga bermarkas di Amerika Serikat dan sejak tahun 2000 bergabung ke Tunas Group (member of Jardine Group) yang bermarkas di Hongkong. Group yang ada di Indonesia ada Astra, Hotel Mandarin, WTC, Hero, Guardian, Dairy Farm, dll. Tujuh tahun (7) di Tunas Group, berpindah-pindah memimpin beberapa  dan masih turut membidani pengembangan  Tunas Rent Car dan Tunas Finance sebelum berganti nama menjadi Tunas Mandiri Finance. Sejak tahun 2007 bergabung ke Cempaka Group (group properti) dan selama tujuh tahun (7) menduduki posisi Direktur, telah membesarkan beberapa anak perusahaan pemilik tower apartement berlantai 20 di beberapa lokasi dan kemudian mendevelop manajemen pengelola gedung apartemen yang sudah layak beroperasi.
  </p>
  <p>
    Disela kesibukannya, tidak ketinggalan ikut di organisasi mulai masa SMA, Kuliah dan menetap di Jakarta. Pernah aktip di TAKO Indonesia, organisasi yang berinduk ke Federasi Olahraga Karate-Do Indonesia (FORKI), Satria Nusantara, bidang profesi IAI, IIA Internasional, ketua dibeberapa organisasi sosial budaya sampai organisasi keagamaan
  </p>
  <p>
    Sejak tahun 2012, Topad mendirikan perusahaan bergerak di bidang konstruksi, desain & build interior dan meubelair. Menyasar projek-projek pemerintahan melalui tender di LPSE, dihadapkan dengan masalah besar dan beratnya persaingan yang tidak mengacu pada professionalisme. Topad harus melepaskan jabatannya sebagai Direktur di Cempaka Group di tahun 2017 untuk dapat berkonsentrasi dan berjuang keras untuk tetap dapat mempertahankan perusahaannya  beroperasi dan berkembang.
  </p>
  <p>
    Menopang dan membentengi perusahaan, Topad mendirikan beberapa organisasi kemasyarakatan dan media online yang dimaksudkan sebagai wadah untuk mensosialisasikan pikiran-pikirannya dan pengalaman berharga yang banyak didapatkannya melalui opini. Dalam masa covid-19, Topad mengisi waktunya dengan menulis opini terkait masalah-masalah yang berkembang ditengah-tengah masyarakat dan menyumbangkan pemecahan masalah yang mungkin dapat diterapkan oleh pemerintah dan masyarakat Indonesia.
  </p>
</div>

    @endsection
