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
          <h2>Recibí en tu hogar o en tu negocio, productos frescos directo del campo de las personas que lo producen</h2>
          <div class="subscribe-form-block">
            @include('components.subscribe-form', [
              'label' => 'Suscribite a la lista de espera y recibe un regalo especial',
              'autofocus' => true,
              'action' => route('front.mailchimp.subscribe')
              ])
          </div>
        </div>
        <div class="col-sm-6 hero-right"></div>
      </div>
    </div>
  </div>
@endsection
