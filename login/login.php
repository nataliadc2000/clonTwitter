<?php 
 include_once("../connection/connection.php");
 session_start();
    if (isset($_POST)) {
        $nombre =$_POST["username"];
        $pass = $_POST["pass"];
    }

    $sql = "SELECT * FROM usuarios WHERE username = '$nombre'";
    $res = mysqli_query($connect, $sql);

    if ($res && mysqli_num_rows($res) === 1) {
        $usuario = mysqli_fetch_assoc($res);

        if (password_verify($pass, $usuario["pass"])) {
            $_SESSION["usuarios"] = $usuario;
            
            header("Location:../paginaPrincipal.php");
        } else {
            $_SESSION["error_login"] = "Login incorrecto";
            header("Location: ../index.php");
        }
    } else {
        $_SESSION["error_login"] = "Login incorrecto";
        header("Location: ../index.php");
    }


?>