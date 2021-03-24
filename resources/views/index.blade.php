@extends('layouts.web')

@section('content')
    <div id="home-body">
      <div class="container">

        <h1 class="text-center text-white text-4xl font-medium">Ren Delaney</h1>
        <h3 class="text-center text-white text-3xl">Software Engineer & Web Developer</h3>
        <hr class="m-6">

        <div class="row">
          <div class="col-lg-4 order-lg-2 mb-4 center-block">
            <img id="home-body-img" src="{{ asset('storage/images/me_square.jpg') }}" alt="" class="border-15 max-h-96">
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
