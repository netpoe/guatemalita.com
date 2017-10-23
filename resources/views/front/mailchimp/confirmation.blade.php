@extends('layouts.app')

@push('head-links')
  <link href="/css/front/home/index.css" rel="stylesheet">
@endpush

@section('content')
  <div class="hero" style="background-image: url(/img/front/home-waves.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 hero-left">
          <h1 class="sm-up-title">¡Gracias por suscribirte!</h1>
          <h2>Confirma tu suscripción dando clic al botón en el correo que acabamos de enviarte.</h2>
          {{-- <nav class="hero-menu">
            <a class="btn btn-primary" href="{{ route('front.events.index') }}">Reenviar correo de confirmación</a>
          </nav> --}}
        </div>
        <div class="col-sm-6 hero-right"></div>
      </div>
    </div>
  </div>
@endsection
