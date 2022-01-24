<?php

include ("./connect_db.php");

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$text2 = $_POST["message"];


$sql = "UPDATE `users_` 
            SET `firstname` = '$firstname',
                `lastname` = '$lastname',
                `service` = $service',
                `gender` = '$gender',
                `message` = '$message',
            WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php");

?>