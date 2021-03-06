
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <style>
        .navbar {
    background-color: #190c0c;
}

.table {
    padding: 10px;
}

.table td,
.table th {
    padding: 2px;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
</style>
</head>

<body>
    <script>
        $(document).ready(function() {
        document.getElementById("submit").click();
        });
        </script>
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
<div class="container">
    <form action="#" id="search">
        <select class="form-control w-50" id="industry" aria-label="Default select example">
            <option selected value="">--select industry type--</option>
            <option value="Account">Account</option>
            <option value="IT">IT</option>
            <option value="Sales">Sales</option>
            <option value="Health Care">Health Care</option>
        </select>
        <button type="submit" class="btn btn-primary" id="submit">Search</button>
</form> 
</div>


    <div class="table-responsive p-4" >
        <table id="t_data" class="table">
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous">
        </script>

<script type="text/javascript">
    let ind="";
    document.querySelector('form').addEventListener('submit', (event) => {
    event.preventDefault();
    let select = document.getElementById("industry");
    ind = select.options[select.selectedIndex].value;
    $(document).ready(function() {
            function loadTable() {
                $.ajax({
                    url: "load.php",
                    type: "POST",
                    data: {
                        ind: ind,
                    },
                    success: function(data) {
                        $("#t_data").html(data);
                    }
                });
            }
            loadTable();
            
        });
});
    
        //show table
        // $(document).ready(function() {
        //     function loadTable() {
        //         $.ajax({
        //             url: "load.php",
        //             type: "POST",
        //             industry: "IT",
        //             success: function(data) {
        //                 $("#t_data").html(data);
        //             }
        //         });
        //     }
        //     loadTable();
            
        // });
     </script>
</body>

</html>

