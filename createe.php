<?php

include("./connect_db.php");

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "reviews";

$conn = mysqli_connect($servername, $username, $password, $databasename);


$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lasname = $_POST["lastname"];
$email = $_POST ["email"];
$service= $_POST["service"];
$gender= $_POST["gender"];
$message= $_POST["message"];



$sql "INSERT INTO `reviews` (`id`
                            `firstname`,
                            `infix`,
                            `lastname`
                            `email`
                            `service`
                            `gender`
                            `message`)
            VALUES         (NULL
                             '$firstname',
                            '$infix',
                            '$lastname'
                            '$email',
                            '$service',
                            '$gender',
                            '$message');";
            

mysqli_query($conn, $sql);          


echo "<h3> Uw gegevens zijn opgeslagen </h3>"
header (Refresh: 2.5; url=./index.php");
?>