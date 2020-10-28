@extends('template')
@section('title', 'PUSATNUSA')
    @section('main')
        @php
        if (Auth::check()) {
            $getidanggota = Auth::user()->id;
            $tampilanggota = DB::select("SELECT * FROM users INNER JOIN anggota ON users.id = anggota.users_id WHERE users.id = '$getidanggota'");
            $tampilorganisasi = DB::select("SELECT * FROM users INNER JOIN organisasi ON users.id = organisasi.users_id WHERE users.id = '$getidanggota'");
            $tampilusaha = DB::select("SELECT * FROM users INNER JOIN usaha ON users.id = usaha.users_id WHERE users.id = '$getidanggota'");
            $modal = DB::select("SELECT * FROM users INNER JOIN pengajuan_modal ON users.id = pengajuan_modal.users_id WHERE users.id = '$getidanggota'");
            $tampilmodal = DB::select("SELECT * FROM users INNER JOIN pengajuan_modal ON users.id = pengajuan_modal.users_id WHERE users.id = '$getidanggota'");
        }
        @endphp
                        <!-- ======= Breadcrumbs ======= -->
              <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">

                  <div class="d-flex justify-content-between align-items-center">
                    <h2>Modal</h2>
                    <ol>
                      <li><a href="{{route('Landing.index')}}">Home</a></li>
                      <li>Modal</li>
                    </ol>
                  </div>
                </div>
              </section><!-- End Breadcrumbs -->

            <section>
                <div class="container">
                  <div class="row text-center">
                    <div class="section-title">
                      <h2>Modal</h2>
                        <p>Program Modal ini adalah Program untuk Pendanaan Modal yang disediakan oleh PUSATNUSA kepada para pelaku UMKM untuk mengembangkan usaha para anggota yang sudah terdaftar dan melengkapi data diri.</p>
                    </div>
                  </div>
                </div>
                <br/><br/><br/>
                <div class="wrap" data-target="#logoutModal">
                    <br/>
                    <a href="#" data-target="#logoutModal" data-toggle="modal"><button class="button-anggota"  data-toggle="modal" data-target="#logoutModal">Ajukan Sekarang !</button></a><br/>
                </div>
                <br/>
                <br/>

                {{-- Jika Data Profile Belum Di Isi --}}
                @if (Auth::check() && empty($tampilanggota))
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PERINGATAN !</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">Anda Belum Melengkapi Data Profile Di Menu Dashboard !</div>
                            <div class="modal-footer">

                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>

                                <a class="btn btn-primary" href="{{route('Anggota.show')}}">Lengkapi Data Diri Terlebih Dahulu</a>

                            </div>
                        </div>
                        </div>
                    </div>
                {{-- Jika Sudah Pernah Mengisi Form Modal --}}
                @elseif (!empty($tampilmodal))
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PERINGATAN !!</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">Anda Sudah Pernah Mengajukan Permohonan Modal!</div>
                            <div class="modal-footer">

                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="{{route('Anggota.show')}}">Balik Ke Dashboard</a>
                            </div>
                        </div>
                        </div>
                    </div>
                  {{-- Jika Data Profile Sudah Di Isi Maka Akan Bisa Isi Form Modal --}}
                @elseif (Auth::check() && !empty($tampilanggota))
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PERSYARATAN AWAL !!</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">Data Tidak Akan Bisa Di Ubah!</div>
                            <div class="modal-footer">

                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="{{route('Landing.modal-create')}}">Setuju</a>
                            </div>
                        </div>
                        </div>
                    </div>

                {{-- Jika Belum Login --}}
                @else
                    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">PERINGATAN !</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            </div>
                            <div class="modal-body">Anda Belum Login dan Belum Terdaftar Anggota !!</div>
                            <div class="modal-footer">

                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Batal</button>
                            <a class="btn btn-primary" href="{{route('login')}}">Setuju</a>
                            </div>
                        </div>
                        </div>
                    </div>
                @endif


              </section>
    @endsection
