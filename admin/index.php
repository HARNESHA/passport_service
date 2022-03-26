<?php
session_start();
if(!empty($_SESSION['logged_in'])){
    echo "<html><head>
        <script>
        alert('Already Logged In');
        location.replace('ajax-load.php');
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
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/login.css">
</head>

<body style="background-color:#a793c7">
<div class="elementor-container elementor-column-gap-default bg-light">
                                    <div class="elementor-row">
                                        <div class="elementor-element elementor-element-ade11a9 elementor-column elementor-col-50 elementor-top-column" data-id="ade11a9" data-element_type="column">
                                            <div class="elementor-column-wrap  elementor-element-populated">
                                                <div class="elementor-widget-wrap">
                                                    <div class="elementor-element elementor-element-8c1dbb3 elementor-widget elementor-widget-image" data-id="8c1dbb3" data-element_type="widget" data-widget_type="image.default">
                                                        <div class="elementor-widget-container" style="height: 100px;">
                                                            <div class="elementor-image" style="height: 200px; width:320px">

                                                                <img style="height: 100%; width: 100%;  margin-top: -18%;" src="x50.png" class="attachment-full size-full" alt="" srcset="50.png" sizes=""> </div>



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                            </div>

  <div class="d-flex justify-content-center h-100 box">
    <div class="card text-white bg-dark mb-3">
      <div class="card-header">
        Admin Login  
      </div>
      <div class="card-body">
        <form action="#" method="post" >
          <div class="mb-3 row">
            <label for="email" class="col-sm-3 col-form-label">Email</label>
            <div class="col-sm-9">
              <input type="email" class="form-control" id="email">
              <span id="err-email"></span>
            </div>
          </div>
          <div class="mb-3 row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
              <input type="password" class="form-control" id="password">
              <span id="err-password"></span>
            </div>
          </div>
          <button type="submit" class="btn btn-primary float-right" id="submit">Sign in</button>
        </form>
      </div>
      <div class="card-footer text-muted">
        <div class="d-flex justify-content-center links">
          <!-- Don't have an account?<a href="signup.php">Sign Up</a> -->
          Passport Services @2020
        </div>
      </div>
    </div>
  </div>

  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/login.js"></script>
</body>

</html>