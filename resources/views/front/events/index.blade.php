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
              <div class="card">
                <small class="card-block-title">{{ $date['date'] }}</small>
                <div class="card-block">
                  @foreach($date['events'] as $event)
                    <p><a href="https://www.facebook.com/events/{{ $event->id }}" target="_blank">{{ $event->name }}</a></p>
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
