<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body class="font-inter">
  @yield('content')
</body>
@vite('resources/js/app.js')
@stack('scripts')
</html>