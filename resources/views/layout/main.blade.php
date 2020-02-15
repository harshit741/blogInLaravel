<!DOCTYPE html>
<html lang="en">

<head>

  @include('layout.meta')

  <title>@yield('title')</title>

  @include('layout.preJsCss')

</head>

<body>

  @include('layout.navbar')

  @yield('content')

  @include('layout.footer')

  @include('layout.postJsScript')

</body>

</html>