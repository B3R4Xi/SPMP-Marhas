<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('template') }}/assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="{{ asset('template') }}/assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        @yield('title') | SPMP - Marhas
    </title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css"> --}}
    <!-- CSS Files -->
    <link href="{{ asset('template') }}/assets/css/material-dashboard.min.css?v=2.2.1" rel="stylesheet" />
    {{-- <link href="{{ asset('template') }}/assets/css/animateload.css" rel="stylesheet" /> --}}
    {{-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css"> --}}
    {{-- JS --}}
</head>

<body class="">
    <div class="wrapper ">
        {{-- Sidebar --}}
        @include('_component.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('_component.navbar')
            <!-- End Navbar -->
            {{-- Content section --}}
            <div class="content">
                @yield('content')
            </div>
            {{-- footer --}}
            @include('_component.footer')
        </div>
    </div>
    {{-- plugin-sidebar --}}
    <!--   Core JS Files   -->
    @include('_component.core_js')
</body>

</html>
