<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 footer-left">
        <div class="subscribe-form-block">
          @include('components.subscribe-form', ['label' => 'Recibe lo último de Guatemalita en tu correo'])
        </div>
      </div>
      <div class="col-sm-5 ml-auto footer-right">
        <a href="#" class="logo">
          <img src="/img/front/logo-guatemalita-blue-carino.png" alt="Guatemalita.com">
        </a>
        <ul class="footer-list">
          <li><a href="{{ route('front.events.index') }}">Eventos</a></li>
          <li><a href="{{ route('front.posts.index') }}">Notas</a></li>
        </ul>
        <nav class="icons-nav">
          <a href="#"><i class="icon-instagram"></i> / guatemalita.com</a>
          <a href="#"><i class="icon-youtube"></i> / guatemalita</a>
        </nav>
      </div>
    </div>
  </div>
</footer>
