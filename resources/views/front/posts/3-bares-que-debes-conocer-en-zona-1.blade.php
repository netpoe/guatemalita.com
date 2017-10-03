@extends('layouts.app')

@push('head-links')
  <link href="/css/front/home/index.css" rel="stylesheet">
@endpush

@section('content')
  <section class="hero">
    <div class="container-md">
      <div class="img-wrapper">
        <img src="/img/posts/2017-10-01/cafe-calabria-guatemala.png" alt="Zona 1">
      </div>
      <h1 class="title">3 bares que tienes que conocer en el Centro de Guatemala</h1>
      <h2 class="excerpt">Aventúrate a Zona 1</h2>
      <h2 class="excerpt">y échate un bar-hopping en Café Calabria,</h2>
      <h2 class="excerpt">Rayuela o Café Bar Plazuela</h2>
    </div>
  </section>
  <section class="content">
    <div class="container-md">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, ratione iste, ab dolor asperiores fugiat velit officia quidem quaerat quam eum. Nihil eum adipisci placeat reiciendis expedita labore soluta neque.</p>
      <article class="list-item">
        <header>
          <h3>3. Café Calabria</h3>
          <address>
            <a href="#" class="location">6ta Avenida con 11 Avenida, Zona 1. Ciudad de Guatemala</a>
            <br> Lunes a Viernes de 5pm a 1am
            <br> Sábados de 5pm a 2am
          </address>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sed cum ullam totam accusamus id similique dignissimos natus temporibus animi nobis rem, fuga sapiente impedit nam tempore. Quae sint, dolorem.</p>
      </article>
    </div>

    @include('components.subscribe-form-section')

    <div class="container-md">
      <article class="list-item">
        <header>
          <h3>2. Rayuela</h3>
          <address>
            <a href="#" class="location">6ta Avenida entre 11 calle y 13 calle, Zona 1. Ciudad de Guatemala</a>
            <br> Lunes a Viernes de 5pm a 1am
            <br> Sábados de 5pm a 2am
          </address>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis debitis sequi culpa odio suscipit non animi quaerat facere a rerum dicta modi officiis, dolorum est ducimus necessitatibus nesciunt minus in.</p>
      </article>
      <article class="list-item">
        <header>
          <h3>1. Café Bar Plazuela</h3>
          <address>
            <a href="#" class="location">5 calle entre 6ta y 5a avenida, Zona 1. Ciudad de Guatemala</a>
            <br> Lunes a Viernes de 5pm a 1am
            <br> Sábados de 5pm a 2am
          </address>
        </header>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestiae ipsam quaerat vel facere doloremque nostrum eligendi harum unde deserunt itaque aperiam, quis cumque eum ea nisi obcaecati ut? Commodi, ut.</p>
      </article>
    </div>
    </div>
  </section>
@endsection
