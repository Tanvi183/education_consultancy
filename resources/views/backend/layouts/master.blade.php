<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="icon" sizes="16x16 32x32" type="image/png" href="{{ asset('backend') }}/dist/img/sana-01.png">
        <title> @yield('title') | Dashboard </title>
        <!-- Css -->
        @include('backend.partials.css')
    </head>
    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">

            <!-- Navbar -->
            @include('backend.partials.nav')
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            @include('backend.partials.sidebar')

            @yield('content')

            <!-- /.content-wrapper -->
            @include('backend.partials.footer')
        </div>

        @include('backend.partials.js')
        @yield('js')
    </body>
</html>

