<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    {{-- fb:instant articles --}}
    <meta property="op:markup_version" content="v1.0">
    <link rel="canonical" href="http://example.com/article.html">
    <meta property="fb:article_style" content="myarticlestyle">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://fonts.googleapis.com/css?family=Sanchez|Oleo+Script|Nunito:400,700" rel="stylesheet">

    @stack('head-links')
    @stack('head-scripts')
  </head>
  <body>
    <article class="site-wrapper" id="site-wrapper">

        @yield('content')

    </article>
    <div class="site-wrapper" id="site-wrapper">
      @yield('site-wrapper')

      @include('components/front/top-menu')
      @include('components/front/header')

      <main class="site-content" role="main">


      </main>

      @yield('footer')
    </div>

    @stack('footer-scripts')
  </body>
</html>
