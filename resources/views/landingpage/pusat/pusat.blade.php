@extends('template')
@section('title', 'Pusat Info PUSATNUSA')

    @section('main')
                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>PUSAT INFO</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Pusat Info</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->

            <div class="row pb-5" data-aos="fade-up">
              <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.9061621807198!2d106.87395931596969!3d-6.19775699812044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f48e5229c8e3%3A0x34ed396e7e8aa859!2sJl.%20Jenderal%20Ahmad%20Yani%2C%20RT.10%2FRW.13%2C%20Rawamangun%2C%20Kec.%20Pulo%20Gadung%2C%20Kota%20Jakarta%20Timur%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2013120!5e0!3m2!1sid!2sid!4v1593497356288!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>


            <div class="container pb-5" data-aos="fade-up">
              <div class="row justify-content-center">
                <div class="card border-success col-lg-11">
                  <h3><div class="card-header bg-transparent border-success text-center font-weight-bold">Call Services</div></h3>
                    <div class="info-wrap">
                      <div class="row text-center">
                        <div class="col-lg-4">
                          <h4><i class="icofont-google-map" style="float:left"></i> Location</h4>
                              <p class="ml-4">A. Yani Street No 16
                                <br>
                                Utan Kayu, Matraman, Jak-Tim
                              </p>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="icofont-envelope" style="float:left"></i> Email</h4>
                              <p class="ml-4">admin@gmail.com
                                <br>
                                admin@gmail.com
                              </p>
                        </div>
                        <div class="col-lg-4">
                          <h4><i class="icofont-google-map" style="float:left"></i> Call</h4>
                              <p class="ml-4">021565486 (Office)
                                <br>
                                08963626362
                              </p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


            <div class="container" data-aos="fade-up">
              <div class="row justify-content-center pb-5">
                <div class="card border-success col-lg-11">
                  <h3><div class="card-header bg-transparent border-success text-center font-weight-bold">Send Message</div></h3>
                  <form>
                    <div class="form-row pt-2">
                      <div class="form-group col-md-6">
                        <label for="inputnama">Your Name</label>
                        <input type="nama" class="form-control" id="inputnama"  placeholder="Input Your Name">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputemail">Your Email</label>
                        <input type="email" class="form-control" id="inputemail"  placeholder="Input Your Email">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputAddress2">Subject</label>
                      <input type="text" class="form-control" id="inputAddress2" placeholder="Input Subject">
                    </div>
                    <div class="form-group">
                      <label for="pesan">Message</label>
                      <textarea style="resize:none;width:100%;height:100px;" name="pesan" id="pesan" class="form-control" placeholder="Input Message"></textarea>
                    </div>
                    <button type="button" class="btn btn-outline-success">Send</button>
                  </form>
                </div>
              </div>
            </div>

