<?php

    $host     = "localhost";
    $name     = "root";
    $password = "mysql";
    $db       = "choosyone";
    
    $conn = mysqli_connect("$host","$name","$password","$db");

if(!$conn){
    die("you r going to hell");
}

?>