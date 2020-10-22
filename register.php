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
                <label for="form__login">Login</label>
                <input type="text" id="form__login" name="form__login" placeholder="Login">
                <label for="form__password">Password</label>
                <input type="text" id="form__password" placeholder="Password">
                <label for="form__confirm__password">Confirm password</label>
                <input type="password" id="form__confirm__password" placeholder="Password" autocomplete="off">
                <label for="form__email">Email</label>
                <input type="text" id="form__email" placeholder="email">
                <input type="submit" name="form__button" id="form__button" class="button" value="Register">
            </form>
        </div>

    </div>
</body>

</html>