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
    <!-- <script src="{{ asset('js/script.js') }}"></script> -->
    <script>
        function myFunction1() {
            //document.querySelector('#login-form').addEventListener('click', () => {
            //document.querySelector('#login').classList.add('magic');
            //});
            document.querySelector('#login').classList.add('magic');
            document.querySelector('#sign-up').classList.remove('magic');
        }
        function myFunction2() {
            //document.querySelector('#sign-up-form').addEventListener('click', () => {
            //document.querySelector('#sign-up').classList.add('magic');
            //});
            document.querySelector('#sign-up').classList.add('magic');
            document.querySelector('#login').classList.remove('magic');
        }
    </script>
    <title>Mage's Greens</title>
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form class="register-form" id="sign-up" method="post">
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
                <p class="message" id="login-form">Already registered? <a href="#" onclick="myFunction1()">Sign In</a></p>
            </form>
            <form class="login-form" id="login" method="post">
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
                <p class="message" id="sign-up-form">Not registered? <a href="#" onclick="myFunction2()">Create an account</a></p>
            </form>
        </div>
    </div>
</body>
</html>
