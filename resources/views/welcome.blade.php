<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./assets/style.css">
    </head>
    <body>
        <div class="container">

            <div class="wrapper">
                <div class="wrapper-header">
                    <img class="wrapper-img" src="./images/Rectangl.png" alt>
                </div>

                <div class="wrapper-sidebar">
                    <div class="wrapper-content">
                        <h1 class="wrapper-title">Login</h1>
                        <p class="wrapper-text">By signing in you are agreeing
                            our <span class="wrapper-span">Term and privacy policy</span> </p>
                        <div class="wrapper-klok">
                            <img class="wrapper-img-klok" src="./images/klok.png" alt>
                        </div>
                    </div>
                </div>

                <form action="#">
                    <div class="row">
                        <input class="wrapper-user" type="text" name="" id="" placeholder="Email Address">
                        {{-- <img class="wrapper-logo-mail" src="./images/mail.png" alt=""> --}}
                    </div>
                    <div class="row">
                        <input class="wrapper-lock" type="password" name="" id="" placeholder="Password">
                        {{-- <img class="wrapper-logo-lock" src="./images/lock.png" alt=""> --}}
                    </div>
                    <div class="wapper-remember">
                        <input class="wrapper-tick" type="checkbox" name="" id="">
                        <p class="wrapper-pass">Remember password</p>
                        <a class="wapper-forger" href="">Forget password</a>
                    </div>
                    <div class="wrapper-login">
                        <button class="wrapper-btn-login">Login</button>
                        <button class="wrapper-btn-register">Register</button>
                    </div>
                </form>

                <div class="wrapper-touch">
                    <p class="wrapper-id">Login wit touch ID</p>
                    <div class="wrapper-logo-touch">
                        <img src="./images/touch.png" alt="">
                    </div>
                    <p class="wrapper-with">or connect with</p>
                </div>

                <div class="wrapper-footer">
                    <ul class="wrapper-contact">
                        <li class="wrapper-facebook">
                            <img src="./images/facebook.png" alt="">
                            <a class="wrapper-text-fb" href="#">Login with facebook</a>
                        </li>
                        <li class="wrapper-instagram">
                            <img src="./images/instagram.png" alt="">
                            <a class="wrapper-text-ig" href="#">Login with Instagram</a>
                        </li>
                        <li class="wrapper-linkedin">
                            <img src="./images/linkedin.png" alt="">
                            <a class="wrapper-text-li" href="#">Login with Linkedin </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
