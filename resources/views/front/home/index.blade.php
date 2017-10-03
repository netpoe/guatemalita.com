@extends('layouts.app')

@push('head-links')
  <link href="/css/front/home/index.css" rel="stylesheet">
@endpush

@section('content')
  <div class="hero" style="background-image: url(/img/front/home-waves.jpg)">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 hero-left">
          <h1 class="sm-up-title">Guatemala, con cariño...</h1>
          <h1 class="sm-down-title">Guatemala, <br>con cariño...</h1>
          <h2>Recibí en tu correo las más recientes actualizaciones de arte, eventos y cultura en Guatemala</h2>
          <div class="subscribe-form-block">
            @include('components.subscribe-form', [
              'label' => 'Suscribite al newsletter semanal, es gratis',
              'autofocus' => true
              ])
          </div>
          <nav class="hero-menu">
            <a href="{{ route('front.events.index') }}">Eventos</a>
            <a href="{{ route('front.posts.index') }}">Notas</a>
          </nav>
        </div>
        <div class="col-sm-6 hero-right"></div>
      </div>
    </div>
  </div>
@endsection
