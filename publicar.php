
<?php
 require_once "./connection/connection.php";

if(isset($_POST["submitTweet"])) {
    $user_id = $_SESSION['usuarios']['id'];

    $text = isset($_POST["text"]) ? mysqli_real_escape_string($connect,$_POST["text"]): false;

    $sql = "INSERT INTO publications VALUES (null,'$user_id','$text',CURDATE())";
    $guardar = mysqli_query($connect,$sql);

    if($guardar){
        $_SESSION["completado"] ="Registro completado";
    } else {
        $_SESSION["errores"]["general"] = "Fallo en el registro";
    }

    header("Location:./paginaPrincipal.php");
}
    
?>