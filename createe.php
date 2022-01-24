<?php

include("./connect_db.php");

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$service= $_POST["service"];
$gender= $_POST["gender"];
$message= $_POST["message"];

 
    $sql =  "INSERT INTO `users` (`id`, 
                                       `firstname`,
                                       `lastname`,
                                       `service`,
                                       `gender`,
                                       `message`)
                    VALUES 			  (NULL, 
                                       '$firstname',
                                       '$lastname',
                                       '$service',
                                       '$gender',
                                       '$message');";
            

mysqli_query($conn, $sql);          


header("Refresh:4; url=./read.php");
?>

