<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/registrarse.css">
    <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    <title>Registrarse</title>
</head>
<body>








    <div class="signup-container">
        <h1>Registrarse</h1>
        <form action="../logic/registrarse.php" method="POST">
            <div class="input-group">
                <label for="email">email</label>
                <input 
                    type="email"
                    name="email"
                    placeholder="Ingrese un email"
                    require    
                >
            </div>
            <div class="input-group">
                <label for="clave">Contraseña</label>
                <input 
                    type="password"
                    name="clave"
                    placeholder="ingrese una contraseña"
                    require
                >
            </div>
            <div class="input-group">
                <label for="confirm-clave"></label>
                <input 
                    type="password"
                    name="confirm-clave"
                    placeholder="Confirmas contraseña"
                >
            </div>
                <?php 
    
        session_start();

            $message='';

            if (isset($_SESSION['message'])) {
                $message = $_SESSION['message'];
                unset($_SESSION['message']);
            }

            ?>

            <?php if (!empty($message)):?>
            <p><?= $message ?></p>
            <?php endif;?>

            <button type="sumit">Ingresar</button>
            <br>
            <br>
            <div class="sublink">
                <h5>Tienes cuenta <a href="../pages/login.php">Iniciar sesion</a></h5>
            </div>
        </form>
    </div>
</body>
</html>