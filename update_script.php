<?php

include ("./connect_db.php");

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lastname = $_POST["lastname"];
$gender = $_POST["gender"];
$text2 = $_POST["text2"];


$sql = "UPDATE `applicants` 
            SET `firstname` = '$firstname',
                `infix` = '$infix',
                `lastname` = '$lastname',
                `gender` = '$gender',
                `text2` = '$text2',
            WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php");

?>