<?php

?>


<!DOCTYPE html>

<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <meta name = "viewport" content = "width = device-width, initial scale = 1.0">
        <title>RESTRICTED PAGE</title>
        <link rel = "stylesheet" href = "style.css">
        <script src="https://kit.fontawesome.com/2cb5c720d7.js" crossorigin="anonymous"></script>
        <script src = "script.js" defer></script>
    </head>

    <body>
        <button class = "login_open">Login</button>
        <div class = "login">
            <button class = "login_close">&times;</button>
            <p class = "lo_to_re">Login &#9654</p>
            <form id = "form1" action = "#">
                <div class="field username">
                    <div class="input-area">
                        <input type = "text" placeholder= "USERNAME">
                        <i class = "icon fas fa-user-alt"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Username can't be blank</div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type = "password" placeholder= "PASSWORD">
                        <i class = "icon fas fa-lock"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Password can't be blank</div>
                </div>
                <input type = "submit" value = "submit" class = "submit">
            </form>
        </div>
        <!-- <div id = "overlay"></div> -->

        <button class = "register_open">Register</button>
        <div class = "register">
            <button class = "register_close">&times;</button>
            <header class = "re_to_lo">Register &#9664</header>
            <form id = "form2" action = "#">
                <div class="field username">
                    <div class="input-area">
                        <input type = "text" placeholder= "USERNAME">
                        <i class = "icon fas fa-user-alt"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Username can't be blank</div>
                </div>
                <div class="field password">
                    <div class="input-area">
                        <input type = "password" placeholder= "PASSWORD">
                        <i class = "icon fas fa-lock"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Password can't be blank</div>
                </div>
                <div class="field repassword">
                    <div class="input-area">
                        <input type = "password" placeholder= "RE-ENTER PASSWORD">
                        <i class = "icon fas fa-lock"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Password can't be blank</div>
                </div>
                <div class="field email">
                    <div class="input-area">
                        <input type = "text" placeholder= "EMAIL">
                        <i class = "icon fas fa-envelope"></i>
                        <i class = "error error-icon fas fa-exclamation-circle"></i>
                    </div>
                    <div class="error error-text">Email can't be blank</div>
                </div>
                <input type = "submit" value = "submit" class = "submit">
            </form>
        </div>
    </body>
</html>