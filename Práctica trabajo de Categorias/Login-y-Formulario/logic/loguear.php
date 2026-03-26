<?php

session_start();
require 'conexion.php';

if (!empty($_POST['email']) && !empty($_POST['clave'])) {

$records = $conn->prepare('SELECT id,email,clave FROM usuarios WHERE email = :email');
$records->bindParam(':email',$_POST['email']);
$records->execute();

$resultado = $records->fetch(PDO::FETCH_ASSOC);

if ($resultado && password_verify($_POST['clave'], $resultado['clave'])){

$_SESSION['user_id']=$resultado['id'];
header('location: ../pages/formulario.php');
exit;

}else{

header('location: ../pages/login.php?mensaje=error');
exit;

}

}
?>