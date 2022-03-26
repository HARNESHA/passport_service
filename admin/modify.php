<?php
session_start();
if(empty($_SESSION['logged_in'])){
    echo "<html><head>
        <script>
        alert('Login please');
        location.replace('index.php');
        </script>
        </head>
        </html>";
}


$Id = $_GET["id"];
$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");
$query = "SELECT * from feedback where id ='$Id' ";
$output = "";
$query_run = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/addcompany.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin @Passport Services</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">


                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                   
                </ul>
                <a href="logout.php" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-log-out float-right"></span> Log out
                </a>

            </div>
        </div>
    </nav>

    <div class="d-flex justify-content-center h-100 box">
        <div class="card text-white bg-dark mb-3">
            <div class="card-header">
                Replay to feedback
            </div>
            <div class="card-body">
                <?php
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_array($query_run)) {
                ?>
                        <form method="POST" <?php echo " action=update.php?id=$row[id]"?>  id="myform">
                            <div class="mb-3 row">

                                <label for="name" class="col-sm-3 col-form-label">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="cname" disabled id="cname" value=<?php echo $row["name"]; ?>  >

                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="phone_no" class="col-sm-3 col-form-label">Phone</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="phone_no" disabled id="phone_no" value='<?php echo $row["phone_no"]; ?>'  >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="contry" class="col-sm-3 col-form-label">Client id</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="country" id="country" value=<?php echo $row["clientid"]; ?> disabled>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" disabled name="city" id="city" value='<?php echo $row["city"]; ?>' disabled>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="city" class="col-sm-3 col-form-label">Feedback</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="feedback" id="feedback" value='<?php echo $row["feedback"]; ?>' disabled>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="city1" class="col-sm-3 col-form-label">Replay</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="reply" id="reply" value='<?php echo $row["reply"]; ?>' required>
                                </div>
                            </div>
                            <button type="submit" id="submit" class="btn btn-primary float-right">Send replay</button>
                        </form>
                <?php }
                } ?>
            </div>
        </div>
    </div>

</body>
</html>
