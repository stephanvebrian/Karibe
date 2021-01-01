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
</head>

<body class="login-page sidebar-collapse">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
        <div class="container">
            <div class="navbar-translate">
                <a class="navbar-brand" href="{{ route('fe.home') }}" rel="tooltip" title="Make more human socialize"
                    data-placement="bottom" target="_blank">
                    Karibe
                </a>
                <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navigation" aria-controls="navigation-index" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar top-bar"></span>
                    <span class="navbar-toggler-bar middle-bar"></span>
                    <span class="navbar-toggler-bar bottom-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse justify-content-end" id="navigation"
                data-nav-image="assets/img/blurred-image-1.jpg">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('fe.home') }}">
                            <i class="now-ui-icons arrows-1_minimal-left"></i>Back
                            to Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">Login</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(assets/img/login.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="{{ asset('assets/img/now-logo.png') }}" alt="">
                                </div>
                            </div>
                            <div class="card-body">
                                @error('username')
                                <span class="text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                    {{-- <strong>Email Error</strong> --}}
                                </span>
                                @enderror
                                @error('email')
                                <span class="text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                    {{-- <strong>Email Error</strong> --}}
                                </span>
                                @enderror
                                @error('password')
                                <span class="text-light" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="card-body">

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input class="form-control @error('username') is-invalid @enderror"
                                        value="{{ old('username') }}" type="text" name="username" id="username" required
                                        autocomplete="username" autofocus placeholder="Username...">
                                </div>

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-user-o" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="E-mail...">
                                </div>

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Password...">
                                </div>

                                <div class="input-group no-border input-lg">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="fa fa-lock" aria-hidden="true"></i>
                                        </span>
                                    </div>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Confirm Password...">
                                </div>

                                <button type="submit"
                                    class="btn btn-primary btn-round btn-lg btn-block">Register</button>

                                <div class="pull-left">
                                    <h6>
                                        <a href="{{ route('login') }}" class="link">Already have account ?</a>
                                    </h6>
                                </div>
                                <div class="pull-right">
                                    <h6>
                                        <a href="#" class="link">Need Help?</a>
                                    </h6>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <!-- <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Get Started</a> -->
                                {{-- </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer">
        <div class=" container ">
            <nav>
                <ul>
                    <li>
                        <a href="#">
                            Karibe
                        </a>
                    </li>
                    <li>
                        <a href="http://presentation.creative-tim.com">
                            About Us
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="copyright" id="copyright">
                &copy;
                <script>
                    document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                </script> Karibe, Designed by
                <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
                <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
            </div>
        </div>
    </footer>
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
</body>

</html>