<?php
    
    require "code-login.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>hola</title>
    <link rel="stylesheet" href="css/estilos.css">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>

<body>

    <div class="container-all">

        <div class="ctn-form">
            <img src="dist/img/LOGO PNG.PNG" alt="" class="logo">
            <h1 class="title">Iniciar Sesión</h1>

            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                <label for="">Email</label>
                <input type="text" name="email" placeholder="...@gmail.com">
                <span class="msg-error"><?php echo $email_err; ?></span>
                <label for="">Contraseña</label>
                <input type="password" name="password" placeholder="**************">
                <span class="msg-error"><?php echo $password_err; ?></span>

                <input type="submit" value="Iniciar">

            </form>
        </div>

        <div class="ctn-text">
            <div class="capa"></div>
            <h1 class="title-description"></h1>
            <p class="text-description"></p>
        </div>

    </div>

</body>

</html>