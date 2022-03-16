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
        <h1 class="mt-3">Benvenuto (nome azienda)</h1>
        <p class="h4 text-c-silver-ligth my-2">Identificati tramite badge e prendi lo scontrino per ritirare il pranzo</p>
      </div>  

  <!-- Scripts -->
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/dashboard/sidebar.js') }}" defer></script>
</body>

</html>