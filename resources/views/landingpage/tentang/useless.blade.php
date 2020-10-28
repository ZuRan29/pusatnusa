<div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="accordion" class="accordion">
          <div class="card">

            <div class="card-header" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Apa itu PUSATNUSA ?
            </div>
            <div class="card-block collapse show" id="collapseOne">
              <div class="card-body">
                Perkumpulan Pengusaha Rakyat Nusantara (PUSATNUSA) adalah organisasi berbadan hukum yang berangotakan
                Pengusaha Berbasis Ekonomi Rakyat (Ekonomi Pancasila) yang dibentuk untuk menjadi pelopor perwujudan tujuan
                Negara Kesatuan Republik Indonesia (NKRI) yang sebagaimana diamanatkan dalam Pembukan UUD 1945.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  Tujuan & Maksud !
            </div>
            <div class="card-block collapse" id="collapseTwo">
              <div class="card-body">
                PUSATNUSA dibentuk dengan maksud tujuan untuk membantu mengembangkan potensi-potensi rakyat nusantara, seperti @section('name')

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            Collapsible Group Item #3
        </div>
        <div class="card-block collapse" id="collapseThree">
            <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
        </div>
    </div>
</div>


<div class="form-group">
    <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
</div>



<section id="about-us" class="about-us">
    <div class="container" data-aos="fade-up">

      <div class="row content">
        <div class="col-lg-6" data-aos="fade-right">
          <h2>Profile Kami</h2>
          <h3>Perkumpulan Pengusaha Rakyat Nusantara</h3>
        </div>

        {{-- <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
          <p>
              Perkumpulan Pengusaha Rakyat Nusantara (PUSATNUSA) adalah organisasi berbadan hukum yang berangotakan Pengusaha Ekonomi Kerakyatan.


              Perkumpulan Pengusaha Rakyat Nusantara (PUSATNUSA) adalah organisasi berbadan hukum
              beranggotakan pengusaha berbasis ekonomi kerakyatan (ekonomi pancasila)
              yang dibentuk untuk menjadi pelopor perwujutan tujuan Negara Kesatuan Republik Indonesia (NKRI)
              sebagaimana diamanatkan dalam pembukaan UUD 1945. PUSATNUSA akan menjadi kekuatan besar untuk menggiring
              dan mengawal agar seluruh rakyat diberi hak yang sama untuk berusaha, tidak ada pembatasan.
              Kemudian PUSATNUSA akan mengembangkan potensi-potensi usaha baru,
              memfasilitasi pengajuan pinjaman modal ke bank atau investor dan
              melakukan pelatihan dan pendampingan dalam rangka peningkatan kualitas dan
              kinerja anggota, memastikan agar kebijakan yang mengatur UMKM tidak menghambat laju pertumbuhan UMKM,
              mendorong anggota untuk selalu taat hukum dan mendampingi para anggota yang
              operasionalnya dihambat oleh regulasi-regulasi yang dikeluarkan pemerintah.
              <br/>
              Pendirian PUSATNUSA didorong oleh keprihatinan melihat kondisi rakyat indonesia
              yang sebagian besar hanya sebagai pekerja buruh dari perusahaan milik orang tertentu yang diekploitasi
              secara habis-habisan tanpa memikirkan kesejahteraan dan pengembangan mutu dari para buruh tersebut
              untuk dapat berkembang ke jenjang yang lebih tinggi. Mereka hanya dimanfaatkan pada masa-masa produktif
              tanpa ada program untuk melatih dan memberi ruang bagi para pekerja tersebut untuk meningkatkan keahliannya,
              apalagi memberi ruang untuk mengarahkan para pekerja tersebut untuk menjadi pelaku usaha pada bidang yang ditekuninya
              atau program untuk membina para pekerja untuk menjadi mitra pada perusahaan tempat pekerja tersebut
              dalam batas waktu tertentu.
          </p>
          <ul>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
            <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
            <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
          </ul>
          <p class="font-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p>
        </div> --}}
      </div>



  </div>




  class DropdownController extends Controller
{
    //
    public function getIndex()
    {
        // Ambil semua isi tabel tujuan dari model
        $provinsi = Provinsi::all();

        // Inisialisasi variabel daftar dengan Array
        $daftar = array('' => '');

        // Lakukan perulangan untuk provinsi
        foreach ($provinsi as $temp) {
            // Isi daftar dengan nama (Provinsi) berdasarkan ID
            $daftar[$temp->id] = $temp->nama;

            // Tampilkan halaman index beserta variabel daftar
            return view('view.name', compact('daftar'));
        }
    }

    public function postDropdown()
    {
        $set = Input::get('id');

        // Inisialisasi variabel berdasarkan masing-masing tabel dari model\
        // Dimana ID target sama dengan ID inputan
        $kabupaten = Kabupaten::where('provinsi_id', $set)->get();

        // Buat pilihan "Switch Case" berdasarkan variabel "type" dari form
        switch(Input::get('type')):
            //  Untuk kasus "Kabupaten"
            case 'kabupaten':
                // Buat Nilai Default
                return = '<option value="">Pilih Kabupaten..</option>';

                // Lakukan Perulangan untuk tabel Kabupaten lalu kirim
                foreach ($kabupaten as $temp) {
                    # Isi Nilai Return
                    $return = "<option value='$temp->id'>$temp->kabupaten_kota</option>"
                }

    }
}

