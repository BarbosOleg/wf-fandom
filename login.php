<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/form-style.css">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <title>Warframe Fandom</title>
</head>
<body>
    <div class="wrapper">
        <img class="form__background__image" src="./img/Excalibur.jpg" alt="">
        <div class="form__wrapper">
            <form action="POST">
                <h2>Login</h2>
                <label for="form__login">Login</label>
                <input type="text" id="form__login" name="form__login" placeholder="Login" autocomplete="off">
                <label for="form__password">Password</label>
                <input type="password" id="form__password" placeholder="Password" autocomplete="off">
                <input type="submit" name="form__button" id="form__button" class="button" value="Sing Up">
                <h6 ><a href="#" class="form__help">Forgot password?</a></h6>
            </form>
            <div class="registration">
                <a href="./register.html" class="form__help">Have no account yet? Register</a>
            </div>
        </div>

    </div>
</body>
</html>