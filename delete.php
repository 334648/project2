<?php

include("./connect_db.php");

$id = $_GET["id"];

$sql = "DELETE FROM `applicants` WHERE `id` = $id";

mysqli_query($conn, $sql);

header("Location: ./read.php");

?>