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
      @include('includes.header')

      @yield('content')

      @include('includes.footer')
    </div>

    <!-- jquery plugins here-->

    @include('includes.script')
  </body>

</html>