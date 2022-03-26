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
$con = mysqli_connect("localhost", "root", "", "recruitedb") or die("connection faild");

$sql = "SELECT * FROM company";
$output = "";
$result = $con->query($sql);
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
    <link rel="stylesheet" href="css/ajax-load.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Recruiter Manager</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">


                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="addcompany.php">Add New Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link inactive" aria-current="page" href="#">See all Companies</a>
                    </li>
                </ul>

                <a href="logout.php" class="btn btn-info btn-lg">
                    <span class="glyphicon glyphicon-log-out float-right"></span> Log out
                </a>

            </div>
        </div>
    </nav>



    <div class="table-responsive p-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Website</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Address</th>
                    <th scope="col">City</th>
                    <th scope="col">State</th>
                    <th scope="col">Country</th>
                    <th scope="col">Industry</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td scope="col">
                        <?php echo $row["id"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["cname"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["website"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["phone_no"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["address"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["city"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["state"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["country"]; ?>
                    </td>
                    <td scope="col">
                        <?php echo $row["industry"]; ?>
                    </td>
                    <td scope='col'><a href='modify.php?id=<?php echo "$row[id]" ?>'> <button type='button'  class='btn btn-primary'>Edit</button> </a></td>
                                <?php echo "<td scope='col'><button type='button'  data-eid='$row[id]' class='btn btn-danger dbdelete'>Delete</button></td> " ?>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>

    <script>
        //delete record
        $(document).ready(function () {

            $(document).on("click", ".dbdelete", function () {
                var Id = $(this).data("eid");
                var element = this;
                $.ajax({
                    url: "delete.php",
                    type: "POST",
                    data: {
                        id: Id
                    },

                    success: function (data) {
                        if (data == "1") {
                            $(element).closest("tr").fadeOut();
                            alert("deleted successfully");

                        } else {
                            alert("something wenr wrong!!");
                        }
                    }
                });
            });

            //modify record
            $(document).on("click", ".dbedit", function () {
                var E_Id = $(this).data("id");

                $.ajax({
                    url: "modify.php",
                    type: "POST",
                    data: {
                        id: E_Id
                    },

                    success: function (data) {
                        window.location.href = "modify.php";

                    }
                });
            });
        });
    </script>
</body>

</html>