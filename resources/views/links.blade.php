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

</head>

<body class="bg-c-blue-dark text-white p-5">
      <div class="d-flex align-items-center flex-column py-5">
        <img src="{{ asset('storage/img/logo.png') }}" alt="Logo" width="150">
        <div class="d-flex mt-5 py-5">
          <a href="{{ route('index') }}">
            <button type="button" class="btn mx-2 bg-white text-c-blue-dark">Home</button>
          </a>
          <a href="{{ route('dashboard.auth') }}">
            <button type="button" class="btn mx-2 bg-white text-c-blue-dark">Pannello Login</button>
          </a>
          <a href="{{ route('dashboard.calendar') }}">
            <button type="button" class="btn mx-2 bg-white text-c-blue-dark">Pannello Calendario</button>
          </a>
          <a href="{{ route('dashboard.dishes') }}">
            <button type="button" class="btn mx-2 bg-white text-c-blue-dark">Pannello Piatti</button>
          </a>
          <a href="{{ route('menu_composition') }}">
            <button type="button" class="btn mx-2 bg-white text-c-blue-dark">Componi Menu</button>
          </a>
        </div>
      </div>  

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dashboard/sidebar.js') }}" defer></script>
</body>

</html>