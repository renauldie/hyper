<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Hyper</title>

    @include('includes.admin.style')

  </head>

  <body>

    @include('includes.admin.preloader')
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

      @include('includes.admin.header')
      @include('includes.admin.navbar')
      @include('includes.admin.sidebar')

      <!--**********************************
            Content body start
        ***********************************-->
      <div class="content-body">
        @yield('content')
      </div>
      <!--**********************************
            Content body end
        ***********************************-->
      @include('includes.admin.footer')
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('includes.admin.script')
    @stack('addon-script')

  </body>

</html>