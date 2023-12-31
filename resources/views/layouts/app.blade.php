<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  @stack('prepend-style')
  @include('includes.style')
  <link href="{{ url('backend/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  @stack('addon-style')
</head>

<body>
  @include('includes.navbar')
  @yield('content')
  @include('includes.footer')

  @stack('prepend-script')
  @include('includes.script')
  @stack('addon-script')
</body>

</html>