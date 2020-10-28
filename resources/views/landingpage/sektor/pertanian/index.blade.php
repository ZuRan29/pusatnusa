@extends('template')
@section('title', 'Pertanian PUSATNUSA')

    @section('main')
    <head>
        <!-- Font Icon -->
        {{-- <link rel="stylesheet" href="{{asset('styleform/fonts/material-icon/css/material-design-iconic-font.min.css') }} ">

        <!-- Main css -->
        <link rel="stylesheet" href="{{asset('styleform/css/style.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> --}}
        </head>
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <br><br><br><br><br/><br/>
            <div class="section-title">

            <h2><strong>COMING SOON</strong></h2>
            {{-- <p>Laborum repudiandae omnis voluptatum consequatur mollitia ea est voluptas ut</p> --}}
            </div>
             <center>   <h2>Mohon Maaf, Menu ini akan tersedia saat Launching Resmi PUSATNUSA</h2></center><br/><br/>
             <center>   <h3>Nantikan Launching Kami!!</h3></center>
           <br/><br/><br/>
           <div class="form-group">
            <a href="{{url('/')}}"><input type="submit" name="submit" id="submit" class="form-submit" value="BACK TO HOME"/></a>
        </div><br/><br/><br/><br/>

        </div>
        </section><!-- End Services Section -->
    @endsection
