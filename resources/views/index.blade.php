@extends('layouts.web')

@section('content')
    <div id="home-body">
      <div class="container">

        <h1 class="text-center text-white text-4xl font-medium">Ren Delaney</h1>
        <h3 class="text-center text-white text-3xl">Software Engineer & Web Developer</h3>
        <hr>

        <div class="row">
          <div class="col-lg-4 order-lg-2 mb-4  center-block">
            <img id="home-body-img" src="/web/assets/images/me_square.jpg" alt="" class="img-fluid center-block wow zoomIn animation-delay-4 ">
          </div>
          <div id="home-txt" class="col-lg-6 order-lg-1 pr-6">
            <p class="wow fadeInLeft animation-delay-1">

            </p>
          </div>
        </div>
      </div>
    </div>

    
    <div id="app">
      <app></app>
      <example-component></example-component>
    </div>
@endsection
