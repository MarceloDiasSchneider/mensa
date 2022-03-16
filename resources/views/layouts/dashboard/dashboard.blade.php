<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Sellmasters CRM">
  <meta name="author" content="Marcelo Dias Schnedier <marcelo.d.schneider@gmail.com>">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ config('app.name', 'Laravel') }}</title>
  <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">

  <!-- Bootstrp icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  @yield('head')
</head>

<body>

  <div class="container-fluid">
    <div class="row flex-nowrap">
      <div id="vueThesidebar" class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-c-blue-dark">
        <Thesidebar 
          src_logo="{{ asset('public/storage/img/logo.png') }}"
          active_sidebar="@php echo $active_sidebar; @endphp"
        />
      </div>
      <div class="col p-5 bg-c-silver">
        @yield('content')
      </div>
    </div>
  </div>

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dashboard/sidebar.js') }}" defer></script>
  @yield('script')
</body>

</html>