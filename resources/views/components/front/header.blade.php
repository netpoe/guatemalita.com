<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 header-left">
        <a href="{{ route('front.home.index') }}" class="logo-wrapper">
          <img src="/img/front/logo-guatemalita-blue-carino.png" alt="Guatemalita">
        </a>
      </div>
      <div class="col-sm-6 header-right">
        <nav class="icons-nav">
          <a href="https://www.instagram.com/guatemalitamatiox/" target="_blank"><i class="icon-instagram"></i> / guatemalitamatiox</a>
          {{-- <a href="#"><i class="icon-youtube"></i> / guatemalita</a> --}}
        </nav>
      </div>
    </div>
  </div>
  @stack('sub-header')
</header>
