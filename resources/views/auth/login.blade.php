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

    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            background-color: #f8f9fa; 
            padding: 8px 12px;
            background-image: linear-gradient(135deg, #FFD9E2, #FFB6C1, #E76F8C, #BD3381, #000000);
        }

        .form-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        @media (max-width: 576px) {
            .form-container {
                max-width: 100%;
            }
        }

        /* Updated color */
        .btn-primary {
            background-color: #d43076;
            border-color: #d43076;
        }

        .btn-primary:hover {
            background-color: #b32c65;
            border-color: #b32c65;
        }

        /* Updated color for hover effect on email address and password */
        input[type="email"]:focus,
        input[type="password"]:focus {
            border-color: #d43076;
            box-shadow: 0 0 0 0.2rem rgba(212, 48, 118, 0.25);
        }

        /* Updated color for "Forgot Password" text */
        .forgot-pass {
            color: #d43076;
        }
        .forgot-pass:hover {
            color: #d43076;
        }
    </style>
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
                    <!-- Updated color for "Forgot Password" text -->
                    <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}"></a>
                    @endif
                </div>
                <input type="submit" value="Sign In" class="btn btn-pill text-white btn-block btn-primary">
            </form>
        </div>
    </div>

    <script src="login-form/js/jquery-3.3.1.min.js"></script>
    <script src="login-form/js/popper.min.js"></script>
    <script src="login-form/js/bootstrap.min.js"></script>
    <script src="login-form/js/main.js"></script>
</body>
</html>
