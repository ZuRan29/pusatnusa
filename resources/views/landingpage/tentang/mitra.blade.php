@extends('template')
@section('title', 'Mitra PUSATNUSA')
@php
    $mitra = App\Mitra::all();
@endphp

    @section('main')
                    <!-- ======= Breadcrumbs ======= -->
          <section id="breadcrumbs" class="breadcrumbs">
            <div class="container">

              <div class="d-flex justify-content-between align-items-center">
                <h2>MITRA</h2>
                <ol>
                  <li><a href="{{route('Landing.index')}}">Home</a></li>
                  <li>Mitra</li>
                </ol>
              </div>
            </div>
          </section><!-- End Breadcrumbs -->

          <br/>

        <section id="mitra">
            <div class="container">
            <div class="section-title">
              <h2>Mitra Kami</h2>
            </div>

            <div class="owl-carousel clients-carousel">
                @foreach ($mitra as $m)
                  <img src="{{asset('images/mitra')}}/{{$m->foto_mitra}}"  class="img2" style="width: 150px; height:150px; margin-left: 15px;">
                @endforeach
              {{-- <img src="assets/img/clients/client-1.png" class="img2" alt="">
              <img src="assets/img/clients/client-2.png" class="img2" alt="">
              <img src="assets/img/clients/client-3.png" class="img2" alt="">
              <img src="assets/img/clients/client-4.png" class="img2" alt="">
              <img src="assets/img/clients/client-5.png" class="img2"alt="">
              <img src="assets/img/clients/client-6.png" class="img2" alt="">
              <img src="assets/img/clients/client-7.png" class="img2" alt="">
              <img src="assets/img/clients/client-8.png" class="img2" alt=""> --}}
            </div>
        </section>

    @endsection
