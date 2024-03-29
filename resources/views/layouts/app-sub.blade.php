<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hyper</title>
    @include('includes.style')
  </head>

  <body>
    <div class="content-body">
      @include('includes.header-alternate')

      @yield('content')

      {{-- @include('includes.footer-alternate') --}}
    </div>

    @include('includes.script')
    @stack('addon-script')
  </body>

</html>