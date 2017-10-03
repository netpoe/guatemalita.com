@extends('layouts.app')

@push('head-links')
  <link href="/css/front/events/index.css" rel="stylesheet">
@endpush

@section('content')
  <section class="section">
    <header class="section-header">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <h1>Eventos en Guatemala</h1>
          </div>
        </div>
      </div>
    </header>
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            @foreach($calendar as $date)
              @if ($loop->index == 2 || $loop->index == 4)
                <div class="subscribe-form-block">
                  @include('components.subscribe-form', ['label' => 'Recibe los últimos eventos a tu correo'])
                </div>
              @endif

              <div class="card events-list">
                <h2 class="card-block-title">{{ $date['date'] }}</h2>
                <div class="card-block">
                  @foreach($date['events'] as $event)

                    <article class="event-item">
                      <div class="img-wrapper">
                        <a
                          href="https://www.facebook.com/events/{{ $event->id }}"
                          target="_blank">
                          <img src="{{ $event->cover }}" alt="{{ $event->name }}">
                        </a>
                      </div>
                      <h3 class="title"><a href="https://www.facebook.com/events/{{ $event->id }}" target="_blank">{{ $event->name }}</a></h3>
                      <address class="location">
                        <a
                          href="http://maps.google.com/maps?q={{ $event->place->latitude }},{{ $event->place->longitude }}"
                          target="_blank"
                          class="map-link">
                          <i class="icon-map-marker"></i> {{ $event->place->name }}
                        </a>
                        <br> {{ $event->place->city }}
                        <br> {{ $event->place->street }}
                      </address>
                      <p class="description">{{ $event->description }}</p>
                    </article>
                  @endforeach
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>
@endsection
