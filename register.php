<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/form-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./img/x-logo.png" type="image/x-icon">
    <title>Warframe Fandom</title>
</head>

<body>
    <div class="wrapper">
        <img class="form__background__image" src="./img/Excalibur.jpg" alt="">
        <div class="form__wrapper">
            <form action="POST">
                <h2>Register</h2>
                <div>
                    <label for="form__login">Login</label>
                    <input type="text" id="register__login" name="form__login" autocomplete="off" placeholder="Login"  minlength="4" maxlength="20">
                    <small class="error_msg">Error: Valid login is required</small>
                </div>
                <div>
                    <label for="form__password">Password</label>
                    <input type="password" id="register__password" placeholder="Password"  minlength="4" maxlength="20">
                    <small class="error_msg">Error: Valid password is required</small>
                </div>
                <div>
                    <label for="form__confirm__password">Confirm password</label>
                    <input type="password" id="register__confirm__password" placeholder="Password" autocomplete="off"  minlength="4" maxlength="20">
                    <small class="error_msg">Error: Confirm password is not the same</small>

                </div>
                <div>
                    <label for="form__email">Email</label>
                    <input type="text" id="register__email" placeholder="email" >
                    <small class="error_msg">Error: Valid email is required</small>

                </div>
                <input type="submit" name="form__button" id="register__button" class="button" value="Register">
            </form>
        </div>

    </div>
    <script type="text/javascript" src="./js/register-input-validation.js"></script>
</body>

</html>