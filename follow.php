<?php 
    // include("../connection/connection.php");
    include("./connection/connection.php");
    session_start();
   if(isset($_SESSION["usuarios"])){
    $id=$_GET['id'];

    $idses=$_SESSION["usuarios"]['id'];
    $sql="INSERT INTO follows VALUES ('$id','$idses');";
    var_dump($sql);
    $query=mysqli_query($connect, $sql);
    header('Location:../mainFollows.php');
   }
   
?>
