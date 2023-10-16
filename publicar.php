
<?php
    if(isset($_POST["submitTweet"])){
        require_once("./connection/connection.php");


        $username = isset($_POST["text"]) ? mysqli_real_escape_string($connect, $_POST["text"]) : false;
   
    }
?>