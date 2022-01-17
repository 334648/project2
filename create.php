<?php  

  
    include("./connect_db.php");


    $firstname = $_POST["firstname"];
    $infix = $_POST["infix"];
    $lastname = $_POST["lastname"];
    $gender = $_POST["gender"];
    $text2 = $_POST["text2"];
    

    $sql =  "INSERT INTO `applicants` (`id`, 
                                       `firstname`,
                                       `infix`,
                                       `lastname`,
                                       `gender`,
                                       `text2`,)
                    VALUES 			  (NULL, 
                                       '$firstname',
                                       '$infix',
                                       '$lastname',
                                       '$gender',
                                       '$text2',);";

  mysqli_query($conn, $sql);

  
