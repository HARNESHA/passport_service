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
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script 
    src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/ajax-load.css">
</head>

<body>
    <script>
        $(document).ready(function() {
        document.getElementById("submit").click();
        });
        </script>
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

<h1 class="d-flex justify-content-center text-primary">User details</h1><br>

</div>
<?php
// $replied = $_POST["ind"];

$con = mysqli_connect("localhost", "root", "", "passport") or die("connection faild");
$sql = "SELECT * FROM person";

$output = '';
$result = $con->query($sql);
if ($result->num_rows > 0) {
$output = '<table class="table container">
            <thead>
                <tr class="">
                    <th scope="col">Sr. No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Varified</th>
                </tr>
            </thead>
            <tbody>';

            while ($row = mysqli_fetch_array($result)) {
                $output = $output.'<tr><td>'.$row['id'].'</td>
                <td scope="col">'.$row["name"].'</td>
                <td scope="col">'.$row["email"].'</td>
                <td scope="col">'.$row["phoneNumber"].'</td>';
                if ($row["varified"]==1){
                    $output = $output.'<td scope="col"><i class="fa fa-check text-success font-weight-bold" aria-hidden="true"></i></td></tr>'; 

                }else{
                    $output = $output.'<td scope="col"><i class="fa-solid fa-xmark text-danger font-weight-bold"></i></td></tr>'; 
                }
            }
            $output.="</tbody></table>";
            mysqli_close($con);
            echo $output;
}else
{
 echo "<h1>No any data found</h1>";
}

?>

    <!-- <div class="table-responsive p-4" >
        <table id="t_data" class="table">
        </table>
    </div> -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript">
        let ind="";
        // document.querySelector('form').addEventListener('submit', (event) => {
        // event.preventDefault();
        // let select = document.getElementById("industry");
        // ind = select.options[select.selectedIndex].value;
        // $(document).ready(function() {
        //         function loadTable() {
        //             $.ajax({
        //                 url: "userlist.php",
        //                 success: function(data) {
        //                     $("#t_data").html(data);
        //                 }
        //             });
        //         }
        //         loadTable();                
        //     });
        // });
    
        
    </script>
</body>

</html>
