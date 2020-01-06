<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>Event Depot - Login</title>

    <meta name="description" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="author" content="Best Stronger">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="{{asset('backend/img/logo.png')}}">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon57.png')}}" sizes="57x57">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon72.png')}}" sizes="72x72">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon76.png')}}" sizes="76x76">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon114.png')}}" sizes="114x114">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon120.png')}}" sizes="120x120">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon144.png')}}" sizes="144x144">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon152.png')}}" sizes="152x152">
    <link rel="apple-touch-icon" href="{{asset('backend/img/icon180.png')}}" sizes="180x180">
    <!-- END Icons -->
    <!-- Scripts -->
{{--    <script src="{{ asset('js/app.js') }}" defer></script>--}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{{asset('backend/css/plugins.css')}}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{{asset('backend/css/main.css')}}">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{{asset('backend/css/themes.css')}}">

    <link rel="stylesheet" href="{{asset('backend/css/custom.css')}}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="{{asset('backend/js/vendor/modernizr.min.js')}}"></script>
</head>
<body>
<!-- Login Full Background -->
<!-- For best results use an image with a resolution of 1280x1280 pixels (prefer a blurred image for smaller file size) -->
<img src="{{asset('backend/img/placeholders/backgrounds/login_full_bg.jpg')}}" alt="Login Full Background" class="full-bg animation-pulseSlow">
<!-- END Login Full Background -->

<!-- Login Container -->
<div id="login-container" class="animation-fadeIn">
    <!-- Login Title -->
    <div class="login-title text-center">
        <a href="{{ url('/') }}">
            <img src="{{asset('backend/img/logo-dark.png')}}" class="logo-dark" alt="Logo image"><h1><strong>EventsDepot</strong><br><small>Please <strong>Login</strong> or <strong>Register</strong></small></h1>
        </a>
    </div>
    <!-- END Login Title -->

    <!-- Login Block -->
    <div class="block push-bit">
        <!-- Login Form -->
        <form action="{{ route('login') }}" method="post" id="form-login" class="form-horizontal form-bordered form-control-borderless">
            @csrf
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="email" id="login-email" class="form-control input-lg @error('email') is-invalid @enderror" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input type="password" id="login-password" name="password" class="form-control input-lg @error('password') is-invalid @enderror" placeholder="Password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-4">
                    <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                        <input type="checkbox" id="login-remember-me" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-8 text-right">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to Dashboard</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a> -
                    <a href="javascript:void(0)" id="link-register-login"><small>Create a new account</small></a>
                </div>
            </div>
        </form>
        <!-- END Login Form -->

        <!-- Reminder Form -->
        <form action="login.html#reminder" method="post" id="form-reminder" class="form-horizontal form-bordered form-control-borderless display-none">
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="text" id="reminder-email" name="reminder-email" class="form-control input-lg" placeholder="Email">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-12 text-right">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset Password</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <small>Did you remember your password?</small> <a href="javascript:void(0)" id="link-reminder"><small>Login</small></a>
                </div>
            </div>
        </form>
        <!-- END Reminder Form -->

        <!-- Register Form -->
        <form action="{{ route('register') }}" method="post" id="form-register" class="form-horizontal form-bordered form-control-borderless display-none">
            @csrf
            <div class="form-group row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-user"></i></span>
                        <input type="text" id="name" class="form-control input-lg @error('name') is-invalid @enderror" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                        <input type="text" id="email" name="email" class="form-control input-lg @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="confirm password">
                    </div>
                </div>
            </div>
            <div class="form-group form-actions">
                <div class="col-xs-6">
                    <a href="#modal-terms" data-toggle="modal" class="register-terms">Terms</a>
                    <label class="switch switch-primary" data-toggle="tooltip" title="Agree to the terms">
                        <input type="checkbox" id="register-terms" name="register-terms">
                        <span></span>
                    </label>
                </div>
                <div class="col-xs-6 text-right">
                    <button type="submit" class="btn btn-sm btn-success"><i class="fa fa-plus"></i> Register Account</button>
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12 text-center">
                    <small>Do you have an account?</small> <a href="javascript:void(0)" id="link-register"><small>Login</small></a>
                </div>
            </div>
        </form>
        <!-- END Register Form -->
    </div>
    <!-- END Login Block -->

    <!-- Footer -->
    <footer class="text-muted text-center">
        <small><span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.8</a></small>
    </footer>
    <!-- END Footer -->
</div>
<!-- END Login Container -->

<!-- Modal Terms -->
<div id="modal-terms" class="modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Terms &amp; Conditions</h4>
            </div>
            <div class="modal-body">
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <h4>Title</h4>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p>Donec lacinia venenatis metus at bibendum? In hac habitasse platea dictumst. Proin ac nibh rutrum lectus rhoncus eleifend. Sed porttitor pretium venenatis. Suspendisse potenti. Aliquam quis ligula elit. Aliquam at orci ac neque semper dictum. Sed tincidunt scelerisque ligula, et facilisis nulla hendrerit non. Suspendisse potenti. Pellentesque non accumsan orci. Praesent at lacinia dolor. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Terms -->

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="{{asset('backend/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('backend/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('backend/js/plugins.js')}}"></script>
<script src="{{asset('backend/js/app.js')}}"></script>

<!-- Load and execute javascript code used only in this page -->
<script src="{{asset('backend/js/pages/login.js')}}"></script>
<script>$(function(){ Login.init(); });</script>
</body>
</html>
