<?php 
if (isset($_POST["submit"])) {
    require_once("../connection/connection.php");
    #session_start();

    //Recoger los datos
    $username = isset($_POST["username"]) ? mysqli_real_escape_string($connect, $_POST["username"]) : false;
    $mail = isset($_POST["mail"]) ? mysqli_real_escape_string($connect, trim($_POST["mail"])) : false;
    $pass = isset($_POST["pass"]) ? mysqli_real_escape_string($connect, $_POST["pass"]) : false;
    $descr = isset($_POST["description"]) ? mysqli_real_escape_string($connect, trim($_POST["description"])) : false;
    //var_dump($_POST);
    $arrayErrores = array();
    //Hacemos validadores necesarios
    if (!empty($username) && !is_numeric($username)) {
        $usernameValidado = true;
    } else {
        $usernameValidado = false;
        $arrayErrores["username"] = "El username no es valido";
    }

    if (!empty($mail) && filter_var($mail, FILTER_VALIDATE_EMAIL)) {
        $mailValidado = true;
    } else {
        $mailValidado = false;
        $arrayErrores["mail"] = "El mail no es valido";
    }

    if (!empty($pass)) {
        $passValidado = true;
    } else {
        $passValidado = false;
        $arrayErrores["pass"] = "El password no es valido";
    }

    
    if (!empty($descr)) {
        $descripcionValidado = true;
    } else {
        $descripcionValidado = false;
        $arrayErrores["description"] = "La descripcion no es valido";
    }

    $guardarUsuario = false;
    if(count($arrayErrores) == 0) {
        $guardarUsuario = true;
        
        $passSegura = password_hash($pass, PASSWORD_BCRYPT, ["cost" => 4]);
        //password_verify($pass, $passSegura);

        $sql = "INSERT INTO usuarios VALUES(null, '$username', '$mail', '$passSegura','$descr')";
        $guardar = mysqli_query($connect, $sql);

        if ($guardar) {
            $_SESSION["completado"] = "Registro completado";
            header("Location: ../index.php");
        } else {
            $_SESSION["errores"]["general"] = "Fallo en el registro";
            echo "aaaaaaaaaaaa";
        }
    } else {
        $_SESSION["errores"] = $arrayErrores;
        var_dump($arrayErrores);
    }
    
}
?>