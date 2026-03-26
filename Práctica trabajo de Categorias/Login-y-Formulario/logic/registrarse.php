<?php

session_start();

if (isset($_SESSION['user_id'])){
    header('location: ../pages/signup.php');
}

require 'conexion.php';

if (!empty($_POST['email']) && !empty($_POST['clave']) && !empty($_POST['confirm-clave'])) {

    if ($_POST['clave'] !== $_POST['confirm-clave']){

        $_SESSION['message'] = 'La contraseña no coincide';
        header('location: ../pages/signup.php');
        exit();

    } else {

        $check = $conn->prepare("SELECT id FROM usuarios WHERE email = :email");
        $check->bindParam(':email', $_POST['email']);
        $check->execute();

        if ($check->rowCount() > 0) {

            $_SESSION['message'] = 'El usuario no se pudo crear';
            header('location: ../pages/signup.php');
            exit();

        } else {

            $sql = "INSERT INTO usuarios (email,clave) VALUES (:email, :clave)";
            $stmt = $conn->prepare($sql);
            $stmt->bindparam(':email', $_POST['email']);

            $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);
            $stmt->bindparam(':clave',$clave);

            if ($stmt->execute()){

                $_SESSION['message']='El usuario se creó correctamente';
                header('location: ../pages/login.php');
                exit();

            }else{

                $_SESSION['message']='Lo sentimos, no se pudo registrar';
                header('location: ../pages/signup.php');
                exit();

            }
        }
    }

} else {

    $_SESSION['message']='Debe completar todos los campos';
    header('location: ../pages/signup.php');
    exit();

}

?>