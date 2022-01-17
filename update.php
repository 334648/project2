<?php
include("./connect_db.php");


$id = $_GET["id"];

$sql = "SELECT * FROM `applicants` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

   
    <link rel="stylesheet" href="style.css">

    <title>Database</title>
</head>

<body class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Review</h1>
                <hr>
                <h5>Let us know what you think!</h5>
                <a href="read.php"><button type="button" class="btn btn-outline-danger">Data</button></a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
             
                <div class="row">
                    <div class="col-7">
                        <form action="./update_script.php" method="post">
                            <label for="inputFirstname" class="form-label">Name:</label>
                            <input class="form-control mb-2" type="text" name="firstname" id="inputFirstname" placeholder="required" value="<?php echo $record["firstname"]; ?>" required>
                    </div>

                    <div class="col-5">
                        <label for="inputInfix" class="form-label">Infix:</label>
                        <input class="form-control mb-2" type="text" name="infix" id="inputInfix" placeholder="not required" value="<?php echo $record["infix"]; ?>">
                    </div>


                    <div class="col-12">
                        <label for="inputLastname" class="form-label">Surname:</label>
                        <input class="form-control mb-2" type="text" name="lastname" id="inputLastname" placeholder="required" value="<?php echo $record["lastname"]; ?>" required>
                    </div>

                    <div class="col-5">
                        <label class="form-label" for="inputSelect">Choose your gender</label>
                        <select name="gender" class="form-select mb-2" id="inputSelect" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="man" <?php if ($record["gender"] == "man") { echo "selected"; } ?>>Male</option>
                            <option value="vrouw" <?php if ($record["gender"] == "vrouw") { echo "selected"; } ?>>Female</option>
                            </option>
                        </select>
                    </div>

                    <div class="col-7">
                        <label class="form-label" for="inputSelect">Which service did you choose?</label>
                        <select name="city" class="form-select mb-2" id="inputSelect" required>
                            <option value="" disabled selected>choose service</option>
                                <option value="Reading" <?php if ($record["service"] == "reading") { echo "selected"; } ?>>Reading</option>
                                <option value="Our product" <?php if ($record["our product"] == "kleren") { echo "selected"; } ?>>Our product</option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="inputGood_deeds" class="form-label">text2</label>
                        <input class="form-control mb-4" type="text" name="text2" id="inputText2" placeholder="not required" value="<?php echo $record["Text2"]; ?>">
                    </div>

                    <input type="hidden" value="<?php echo $id; ?>" name="id">

                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            <input type="Submit" class="btn btn-outline-danger form-control" value="Submit">
                        </div>
                </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

   
    <script src="js/app.js"></script>
</body>

</html>