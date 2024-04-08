
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
        <div class="mb-4 text-center">
           <h3>Sign Up</h3>
        <p class="mb-4">Please fill in this form to create an account.</p>
        </div>
            <form action="{{ route('register') }}" method="post">
                @csrf
               
                <div class="form-group first">
                        <label for="name">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group last mb-4">
                    <label for="password-confirm">Confirm Password</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
                <div class="d-flex mb-5 align-items-center">
                        <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption"><a href="#">Terms and Conditions</a></span>
                            <input type="checkbox" checked="checked"/>
                            <div class="control__indicator"></div>
                        </label>
                        <span class="ml-auto"><a href="{{ route('login') }}" class="forgot-pass">Sign In</a></span> 
                    </div>
                <input type="submit" value="Sign Up" class="btn btn-pill text-white btn-block btn-primary {{ __('Register') }}">
            </form>
            
        </div>
    </div>

    <script src="login-form/js/jquery-3.3.1.min.js"></script>
    <script src="login-form/js/popper.min.js"></script>
    <script src="login-form/js/bootstrap.min.js"></script>
    <script src="login-form/js/main.js"></script>
</body>
</html>


