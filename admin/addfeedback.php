<?php
// session_start();
// if(empty($_SESSION['logged_in'])){
//     echo "<html><head>
//         <script>
//         alert('Login please');
//         location.replace('index.php');
//         </script>
//         </head>
//         </html>";
// }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <link rel="stylesheet" href="css/addcompany.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Client @Passport Services</a>
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
        <div class="card text-dark bg-light mb-3">
            <div class="card-header">
                Add Feedback
            </div>
            <div class="card-body">
                <form method="post" id="myform">

                    <div class="mb-3 row">

                        <label for="cname" class="col-sm-3 col-form-label">Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="cname">
                            <span id="Cname"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="phone_no" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone_no">
                            <span id="Phone_no"></span>
                        </div>
                    </div>

                    <div class="mb-3 row">
                                <label for="contry" class="col-sm-3 col-form-label">Client id</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="country" id="country" >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="city" class="col-sm-3 col-form-label">City</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="city" id="city" >
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <label for="city" class="col-sm-3 col-form-label">Feedback</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="feedback" id="feedback" >
                                </div>
                            </div>

                        <div class="g-recaptcha" data-sitekey="6LfI3mAfAAAAANaKXl4FG5GGiXYkSmmUZId14agb"></div>
                                <br>
                    <button type="submit" id="submit" class="btn btn-primary float-right">Add Feedback</button>
                </form>
            </div>
        </div>
    </div>


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/addfeedback.js"></script>

</body>
</html>