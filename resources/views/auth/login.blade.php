<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="login-form/fonts/icomoon/style.css">
    <link rel="stylesheet" href="login-form/css/owl.carousel.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="login-form/css/bootstrap.min.css">
    <!-- Style -->
    <link rel="stylesheet" href="login-form/css/style.css">
    <link rel="stylesheet" href="login-form/css/stylee.css">

</head>
<body>

    <div class="col-md-5 contents">
        <div class="form-container">
            <div class="mb-4">
                <h3>Sign In</h3>
            </div>
    
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group first">
                    <label for="username">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group last mb-4">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="d-flex mb-5 align-items-center">
                    <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember"></label>
                        <div class="control__indicator"></div>
                    </label>
                   
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}"></a>
                    @endif
                </div>
                <input type="submit" value="Sign In" class="btn btn-pill text-white btn-block btn-primary">
            </form>
            <div class="text-center mt-3">
                <p class="account-text">Don't have an account? <a href="{{ route('register') }}" class="signup-link">Sign Up</a></p>
            </div>
        </div>
    </div>

    <script src="login-form/js/jquery-3.3.1.min.js"></script>
    <script src="login-form/js/popper.min.js"></script>
    <script src="login-form/js/bootstrap.min.js"></script>
    <script src="login-form/js/main.js"></script>
</body>
</html>
