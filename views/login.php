<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

  <title>Dudzai - Login</title>



  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="views/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">
      

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          
        <?php
                // show potential errors / feedback (from login object)
                if (isset($login)) {
                    if ($login->errors) {
                        foreach ($login->errors as $error) {
                            echo '<div class="p-3 bg-warning">
                                    <h5 class="text-center">'.$error.'</h5>
                                </div>';
                                
                        }
                    }
                    if ($login->messages) {
                        foreach ($login->messages as $message) {
                            echo '<div class="p-3 bg-warning">
                                    <h5 class="text-center">'.$message.'</h5>
                                </div>';
                               
                        }
                    }
                }
                ?>



          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-2"></div>
              <div class="col-lg-8">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form method="post" action="" name="loginform">
                      <div class="form-group row">
                          <label for="inputEmail3" class="col-sm-3 col-form-label">Username</label>
                          <div class="col-sm-6">
                              <input type="text" class="form-control" name="user_name" placeholder="Username" required="True">
                          </div>
                      </div>
                      <div class="form-group row">
                          <label for="inputPassword3" class="col-sm-3 col-form-label">Password</label>
                          <div class="col-sm-6">
                              <input type="password" class="form-control" name="user_password" autocomplete="off" placeholder="Password" required="True">
                          </div>
                      </div>
                      <hr/>
                      <div class="row">
                              <button type="submit" name="login" value="Log in"  class="btn btn-primary btn-user btn-block">Sign in</button>
                      </div>
                  </form>
                 
                  <hr>
                 
                  <div class="text-center">
                      <p>Don't have an account?
                          <a href="register.php">Create an account</a>
                      </p>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="views/vendor/jquery/jquery.min.js"></script>
  <script src="views/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="views/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="views/js/sb-admin-2.min.js"></script>

</body>

</html>
