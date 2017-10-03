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
