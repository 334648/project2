<?php

include("./connect_db.php");

$servername = "localhost";
$username = "root";
$password = "";
$databasename = "sinterklaasverlanglijst-c";

$conn = mysqli_connect($servername, $username, $password, $databasename);


$firstname = $_POST["firstname"];
$infix = $_POST["infix"];
$lasname = $_POST["lastname"];
$gender= $_POST["gender"];


$sql "INSERT INTO `users` (`id`
                            `firstname`,
                            `infix`,
                            `lastname`)
            VALUES         (NULL
                             '$firstname',
                            '$infix',
                            '$lastname');";
            

mysqli_query($conn, $sql);          

//Met een header fuctie wordt je direct doorgestuurd naar een andere pagina
//header("Location: ./index.php");

echo "<h3> Uw gegevens zijn opgeslagen </h3>"
header (Refresh: 2.5; url=./index.php");
?>