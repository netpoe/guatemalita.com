<footer class="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 footer-left">
        <div class="subscribe-form-block">
          @include('components.subscribe-form', [
            'label' => 'Recibí lo último de Guatemalita en tu correo',
            'action' => route('front.mailchimp.subscribe')
            ])
        </div>
      </div>
      <div class="col-sm-5 ml-auto footer-right">
        <a href="#" class="logo">
          <img src="/img/front/logo-guatemalita-blue-carino.png" alt="Guatemalita.com">
        </a>
        <nav class="icons-nav">
          <a href="https://www.instagram.com/guatemalitamatiox" target="_blank"><i class="icon-instagram"></i> / guatemalitamatiox</a>
          {{-- <a href="#"><i class="icon-youtube"></i> / guatemalita</a> --}}
        </nav>
      </div>
    </div>
  </div>
</footer>
