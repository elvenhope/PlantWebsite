<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/e63de0730d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ URL::asset('css/authorisation.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <title>Mage's Greens</title>
</head>

<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" method="post" action="{{ route('register') }}">
                @csrf
                <h2>Register</h2>
                <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}" oninput="changedName()" required autofocus />
                <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" oninput="changedEmail()" required autofocus />
                <input type="password" name="password" placeholder="Password" value="{{ old('password') }}" oninput="changedPassword()" required autofocus />
                <input type="password" name="password_confirmation" placeholder="Confirm Password" value="{{ old('password_confirmation') }}" oninput="changedPassword()" required autofocus />
                <div class="rememberMe">
                    <input id="remember_me" type="checkbox" name="remember">
                    <p>{{ __('Remember me') }}</p>
                </div>

                <ul class="errorList">
                    @if($errors->has('name'))
                    <li id="nameError">
                        <div class="error">{{ $errors->first('name') }}</div>
                    </li>
                    @endif
                    @if($errors->has('email'))
                    <li id="emailError">
                        <div class="error">{{ $errors->first('email') }}</div>
                    </li>
                    @endif
                    @if($errors->has('password'))
                    <li id="passwordError">
                        <div class="error">{{ $errors->first('password') }}</div>
                    </li>
                    @endif
                </ul>

                <button class="btn" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Create Account
                </button>
                <div class="soc-media">
                    <div class="connect">Connect with</div>
                    <a href="#" class="facebook">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="google">
                        <i class="fa-brands fa-google" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="github">
                        <i class="fa-brands fa-github" aria-hidden="true"></i>
                    </a>
                </div>
                <p class="message">Already registered? <a href="#">Sign In</a></p>
            </form>
            <form class="login-form" method="post" action="{{ route('login') }}">
                @csrf
                <h2>Login</h2>
                <input type="email" placeholder="Email" name="email" :value="old('email')" oninput="changedEmail()" required autofocus />
                <input id="password" placeholder="Password" type="password" name="password" oninput="changedPassword()" required autocomplete="current-password" />

                <div class="rememberMe">
                    <input id="remember_me" type="checkbox" name="remember">
                    <p>{{ __('Remember me') }}</p>
                </div>

                <ul class="errorList">
                    @if($errors->has('email'))
                    <li id="emailError">
                        <div class="error">{{ $errors->first('email') }}</div>
                    </li>
                    @endif
                    @if($errors->has('password'))
                    <li id="passwordError">
                        <div class="error">{{ $errors->first('password') }}</div>
                    </li>
                    @endif
                </ul>

                <button type="submit" class="btn">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Sign in
                </button>
                <div class="soc-media">
                    <div class="connect">Connect with</div>
                    <a href="#" class="facebook">
                        <i class="fa-brands fa-facebook-f" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="google">
                        <i class="fa-brands fa-google" aria-hidden="true"></i>
                    </a>
                    <a href="#" class="github">
                        <i class="fa-brands fa-github" aria-hidden="true"></i>
                    </a>
                </div>
                <p class="message">Not registered? <a href="#">Create an account</a></p>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        function changedName() {
            $(function() {
                $('#nameError').hide();
            });
        }
        function changedEmail() {
            $(function() {
                $('#emailError').hide();
            });
        }
        function changedPassword() {
            $(function() {
                $('#passwordError').hide();
            });
        }
        $('.message a').click(function() {
            $('form').animate({
                height: "toggle",
                opacity: "toggle"
            }, "slow");
        });
    </script>
    @if(!empty(Session::get('query_data')) && Session::get('query_data') == 'register')
    <script>
        $(function() {
            $('.register-form').show();
            $('.login-form').hide();
        });
    </script>
    @endif
</body>

</html>
