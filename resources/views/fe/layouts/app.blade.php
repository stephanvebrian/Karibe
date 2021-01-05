<!--

=========================================================
* Now UI Kit - v1.3.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-kit
* Copyright 2019 Creative Tim (http://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/now-ui-kit/blob/master/LICENSE.md)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Karibe</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/fe/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fe/css/now-ui-kit.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fe/plugin/font-awesome-4.7.0/css/font-awesome.min.css') }}">

    <!-- Overrider style -->
    <style>
        .card {
            box-shadow: 0px 1px 5px 0px rgba(0, 0, 0, 0.2);
        }
    </style>

    @yield('style')

</head>

<body class="landing-page sidebar-collapse">

    @include('fe.layouts.navbar')

    <!-- End Navbar -->
    <div class="wrapper">

        <div class="section-page">
            @yield('content');
        </div>

        @include('fe.layouts.footer')
    </div>

    <!--   Core JS Files   -->
    <script src="{{ asset('assets/fe/js/core/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/fe/js/core/popper.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/fe/js/core/bootstrap.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
    <script src="{{ asset('assets/fe/js/plugins/bootstrap-switch.js') }}" type="text/javascript"></script>

    <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
    <script src="{{ asset('assets/fe/js/plugins/nouislider.min.js') }}" type="text/javascript"></script>

    <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
    <script src="{{ asset('assets/fe/js/plugins/bootstrap-datepicker.js') }}" type="text/javascript"></script>

    <!--  Google Maps Plugin    -->
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> --}}

    <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/fe/js/now-ui-kit.js?v=1.3.0') }}" type="text/javascript"></script>

    @yield('script')
</body>

</html>