<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Check Out - Register</title>

    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    <div class="xp-authenticate-bg"></div>
    <div id="xp-container" class="xp-container">
        <!-- Start Container -->
        <div class="container">
            <!-- Start XP Row -->
            <div class="row vh-100 align-items-center">
                <!-- Start XP Col -->
                <div class="col-lg-12 ">
                    <!-- Start XP Auth Box -->
                    <div class="xp-auth-box">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="text-center">
                                    <a href="http://xpanthersolutions.com/html/neon/laravel/vertical" class="xp-web-logo"><img src="{{ asset('assets/images/logo-check-out.png') }}" width="30%" alt="logo"></a>
                                </h3>
                                <div class="p-3">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="text-center mb-3">
                                            <h4 class="text-black">Create New Account</h4>
                                            <p class="text-muted">Already have an account? <a href="{{ route('login') }}">Sign In</a> Here</p>
                                        </div>                                        
                                        <div class="login-or">
                                            <h6 class="text-muted">OR</h6>
                                        </div>
                                        <div class="form-group">
                                            <input id="name" type="text" placeholder="Your name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="email" type="email" placeholder="Your email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" type="password" placeholder="Your password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password-confirm" type="password" placeholder="Repeat your password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="terms" required>
                                                <label class="custom-control-label" for="terms">I Agree to Terms &amp; Conditions of Check Out</label>
                                            </div> 
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">
                                            {{ __('Create an Account') }}
                                        </button>
                       
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End XP Auth Box -->
                </div>
                <!-- End XP Col -->
            </div>
            <!-- End XP Row -->
        </div>
        <!-- End Container -->
    </div>
</body>
</html>
