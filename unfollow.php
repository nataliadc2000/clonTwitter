<?php 
    // include("../connection/connection.php");
    include("./connection/connection.php");
    session_start();
   if(isset($_SESSION["usuarios"])){
    $id=$_GET['id'];

   
    $sql="DELETE FROM follows where users_id = $id";
    $query=mysqli_query($connect, $sql);
    header('Location:../mainFollows.php');
   }
   
?>
