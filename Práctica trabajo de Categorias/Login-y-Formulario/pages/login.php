<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="../CSS/login.css">
</head>

<body>



<div class="login-container">

<h1>Iniciar Sesión</h1>

<form action="../logic/loguear.php" method="POST">

<div class="input-group">
<label>email</label>
<input 
type="email"
name="email"
placeholder="Ingrese su email"
required
>
</div>

<div class="input-group">
<label>Contraseña</label>
<input 
type="password"
name="clave"
placeholder="Ingrese su contraseña"
required
>
</div>

<?php
if(isset($_GET['mensaje'])){
echo "<p style='color:red;'>Lo siento, sus credenciales no son válidas</p>";
}
?>

<br>

<div class="sublink">
<h5>Olvido su contraseña <a href="">Recuperar</a></h5>
</div>

<br>

<button type="submit">Ingresar</button>

<br><br>

<div class="sublink">
<h5>No tienes cuenta <a href="../pages/signup.php">Registrarse</a></h5>
</div>

</form>

</div>

</body>
</html>