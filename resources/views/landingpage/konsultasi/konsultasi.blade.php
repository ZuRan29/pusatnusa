@extends('template')
@section('title', 'Konsultasi PUSATNUSA')

    @section('main')
                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>KONSULTASI</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Konsultasi</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->

          <section>
            <div class="container" data-aos="fade-up">
              <div class="row pt-4 mb-4">
                <div class="col text-center">
                  <div class="section-title">
                    <h2>KONSULTASI</h2>
                  </div>
                </div>
              </div>

            <div class="row justify-content-center">
              <div class="col-md-4 pr-4">

                <div class="card text-white bg-success mb-3 text-center">
                  <div class="card-body">
                    <h3 class="card-title">PERHATIAN</h3>
                    <p class="card-text">Mohon untuk di baca terlebih dahulu sebelum mengisi form</p>
                  </div>
                </div>
                <ul class="list-group text-justify">
                  <li class="list-group-item">1. Masukan data yang dibutuhkan</li>
                  <li class="list-group-item">2. Masukan bidang masalahnya apa</li>
                  <li class="list-group-item">3. Pilih teknisi yang tersedia</li>
                  <li class="list-group-item">4. Masukan detail masalah yang terjadi</li>
                  <li class="list-group-item">5. Nanti anda akan di kontak oleh kami</li>
                  <li class="list-group-item">5. Kemudian teknisi kami akan datang ke tempat anda</li>
                </ul>
              </div>

              <div class="col-md-6 ml-3">
                <form>
                  <div class="form-group">
                    <label for="email">Nama</label>
                    <input type="text" class="form-control" id="email" placeholder="Masukan Nama">
                  </div>
                  <div class="form-group">
                    <label for="telp">No Telepon</label>
                    <input type="tel" class="form-control" id="telp" placeholder="Masukan Nomor Telepon">
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Bidang</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Web Developer</option>
                      <option>Mobile Developer</option>
                      <option>Arsitek</option>
                      <option>Desain Grafis</option>
                      <option>Sipil</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Teknisi</label>
                    <select class="form-control" id="exampleFormControlSelect1">
                      <option>Bayu</option>
                      <option>Bayu</option>
                      <option>Bayu</option>
                      <option>Bayu</option>
                      <option>Bayu</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="pesan">Pesan</label>
                    <textarea style="resize:none;width:100%;height:100px;" name="pesan" id="pesan" class="form-control" placeholder="Masukan Pesan"></textarea>
                  </div>

                  <div class="form-group">
                    <button type="button" class="btn btn-primary">Kirim Pesan</button>
                  </div>

                </form>
              </div>

            </div>
            </div>
          </section>

    @endsection
