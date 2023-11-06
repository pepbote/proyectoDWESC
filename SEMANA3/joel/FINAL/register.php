<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/stylelogin.css" rel="stylesheet">
    <link rel="stylesheet" href="css/stylesection.css">
    <title>ProNewsHub</title>
</head>
<body>
<?php include 'header.html'; ?>
<section>
    <div class="contenido-seccion">
        <span class="title-text">REGISTER</span>
    </div>
</section>

<div id="img-container">
    <img src="img/logo.png" id="img">
</div>

<div class="formulario-login">
    <form action="adduser.php" method="post" id="form">
        <p>
            <label for="username">Username:
                <br>
                <input type="text" id="username" name="username" required>
            </label>
        </p>
        <p>
            <label for="email">Email:
                <br>
                <input type="email" id="email" name="email" required>
            </label>
        </p>
        <p>
            <label for="password">Password:
                <br>
                <input type="password" id="password" name="password" required>
            </label>
        </p>
        <button type="submit" value="Login" class="button">Register</button>
    </form>
</div>


<?php include 'footer.html' ?>
</body>
</html>