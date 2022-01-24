<?php

include ("./connect_db.php");

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$message = $_POST["message"];


$sql = "UPDATE `users` 
            SET `firstname` = '$firstname',
                `lastname` = '$lastname',
                `service` = $service',
                `gender` = '$gender',
                `message` = '$message',
            WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php");

?>