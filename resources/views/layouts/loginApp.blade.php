<!DOCTYPE html>
<html class="h-100" lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Login Hyper</title>

    @include('includes.admin.style')

  </head>

  <body class="h-100">

    @include('includes.admin.preloader')
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <!--**********************************
            Content body start
        ***********************************-->
    @yield('content')
    <!--**********************************
            Content body end
        ***********************************-->
    <!--**********************************
        Main wrapper end
    ***********************************-->

    @include('includes.admin.script')
    @stack('addon-script')

  </body>

</html>