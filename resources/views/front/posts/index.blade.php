@extends('layouts.app')

@push('head-links')
  <link href="/css/front/posts/index.css" rel="stylesheet">
@endpush

@push('sub-header')
  <div class="sub-header">
    <div class="container">
      <h1 class="title">Notas</h1>
    </div>
  </div>
@endpush

@section('content')
  <section class="section posts-index">
    <div class="section-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            @foreach ($posts as $post)
              <a class="card post-item"
                href="{{ route('front.posts.index', ['post' => $post->template]) }}">
                <div class="card-block">
                  <h4>{{ $post->title }}</h4>
                </div>
              </a>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <footer class="section-footer"></footer>
  </section>
@endsection
