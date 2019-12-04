<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Check Out - Login</title>

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
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="text-center mb-3">
                                            <h4 class="text-black">Sign In !</h4>
                                            <p class="text-muted">New to CheckOut? <a href="{{ route('register') }}">Sign Up</a> Here</p>
                                        </div>                                        
                                        <div class="login-or">
                                            <h6 class="text-muted">OR</h6>
                                        </div>
                                        <div class="form-group">
                                            <input id="email" placeholder="Your email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input id="password" placeholder="Your password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-6">
                                                <div class="custom-control custom-checkbox">
                                                  <input type="checkbox" class="custom-control-input" id="rememberme">
                                                  <label class="custom-control-label" for="rememberme">Remember Me</label>
                                                </div>                                
                                            </div>
                                            <div class="form-group col-6 text-right">
                                              <label class="forgot-psw"> 
                                                    @if (Route::has('password.request'))
                                                        <a class="btn-link" href="{{ route('password.request') }}">
                                                            {{ __('Forgot Your Password?') }}
                                                        </a>
                                                    @endif 
                                              </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-rounded btn-lg btn-block">
                                            {{ __('Sign In') }}
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
