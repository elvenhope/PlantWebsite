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
            <form class="register-form" method="post">
                <h2>Register</h2>
                <input type="text" placeholder="Full Name *" required/>
                <input type="text" placeholder="Username *" required/>
                <input type="email" placeholder="Email *" required/>
                <input type="password" placeholder="Password *" required/>
                <a class="btn" href="#">
                <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Create Account
                </a>
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
            <form class="login-form" method="post">
                <h2>Login</h2>
                <input type="text" placeholder="Username *" required/>
                <input type="password" placeholder="Password *" required/>
                <a class="btn" href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Sign in
                </a>
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
        $('.message a').click(function(){
            $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
        });
    </script>
</body>
</html>
