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


$text = "<h3 class='text'>Thank you for your application. We will response within 5 workdays.
  <br>
  <br>
  Please wait until the site refreshes.</h3>";
  header("Refresh:4; url=./read.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  
   <!-- css bestand -->
   <link rel="stylesheet" href="style.css">

    <title>Thank you</title>
  </head>
  <body class="create">
    <?php echo $message; ?>

  </body>
</html>
