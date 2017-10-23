<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/png" href="/img/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="/img/favicon-192x192.png" sizes="192x192">
    <link rel="icon" type="image/png" href="/img/favicon-16x16.png" sizes="16x16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Sanchez|Oleo+Script|Nunito:400,700" rel="stylesheet">

    <!-- share -->
    <meta property="og:title" content="Recibí en tu correo las más recientes actualizaciones de arte, eventos y cultura en Guatemala | Guatemalita.com">
    <meta property="og:image" content="/img/og-image-guatemalita.com">
    <meta property="og:description" content="Recibí en tu correo las más recientes actualizaciones de arte, eventos y cultura en Guatemala">
    <meta property="og:url" content="http://guatemalita.com/">
    <meta property="og:type" content="website">
    <meta property="fb:app_id" content="541499782697544">

    @stack('head-links')
    @stack('head-scripts')
  </head>
  <body>
    <div class="site-wrapper" id="site-wrapper">
      @yield('site-wrapper')

      @include('components/front/top-menu')
      @include('components/front/header')

      <main class="site-content" role="main">

        @yield('content')

      </main>

      @yield('footer')
      @include('components/front/footer')
    </div>

    @stack('footer-scripts')
  </body>
</html>
