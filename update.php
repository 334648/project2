<?php
include("./connect_db.php");


$id = $_GET["id"];

$sql = "SELECT * FROM `users` WHERE `id` = $id";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">

    <title>Database</title>
</head>
<br>

<body class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Review</h1>
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
                            <input class="form-control mb-2" type="text" name="firstname" id="inputFirstname"
                                placeholder="required" value="<?php echo $record["firstname"]; ?>" required>
                    </div>


                    <div class="col-12">
                        <label for="inputLastname" class="form-label">Lastname:</label>
                        <input class="form-control mb-2" type="text" name="lastname" id="inputLastname"
                            placeholder="required" value="<?php echo $record["lastname"]; ?>" required>
                    </div>

                    <div class="col-5">
                        <label class="form-label" for="inputSelect">Choose your gender</label>
                        <select name="gender" class="form-select mb-2" id="inputSelect" required>
                            <option value="" disabled selected>Gender</option>
                            <option value="man" <?php if ($record["gender"] == "man") { echo "selected"; } ?>>Male
                            </option>
                            <option value="vrouw" <?php if ($record["gender"] == "vrouw") { echo "selected"; } ?>>Female
                            </option>
                            </option>
                        </select>
                    </div>

                    <div class="col-7">
                        <label class="form-label" for="inputSelect">Which service did you choose?</label>
                        <select name="services" class="form-select mb-2" id="inputSelect" required>
                            <option value="" disabled selected>Service</option>
                            <option value="reading" <?php if ($record["services"] == "reading") { echo "selected"; } ?>>
                                Reading</option>
                            <option value="our product"
                                <?php if ($record["services"] == "our_product") { echo "selected"; } ?>>Our product
                            </option>
                        </select>
                    </div>

                    <div class="col-12">
                        <label for="inputMessage" class="form-label">Message</label>
                        <input class="form-control mb-4" type="text" name="message" id="inputMessage"
                            placeholder="not required" value="<?php echo $record["message"]; ?>">
                    </div>

                    <input type="hidden" value="<?php echo $id; ?>" name="id">

                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            <input type="Submit" class="btn btn-outline-danger form-control" value="Submit">
                        </div>
                        </form>

                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                            crossorigin="anonymous"></script>

                        <body class="home">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="read.php"><button type="button"
                                                class="btn btn-outline-danger">Data</button></a>
                                    </div>
                                </div>
                            </div>

                            <script src="js/app.js"></script>
                        </body>

</html>