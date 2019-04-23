<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <title>Dudzai - Register</title>

  <!-- Custom fonts for this template-->

  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="views/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <div class="card o-hidden border-0 shadow-lg my-5">

    <?php
                // show potential errors / feedback (from registration object)
                if (isset($registration)) {
                    if ($registration->errors) {
                        foreach ($registration->errors as $error) {
                            echo '<div class="p-3 bg-warning">
                                    <h5 class="text-center">'.$error.'</h5>
                                </div>';
                        }
                    }
                    if ($registration->messages) {
                        foreach ($registration->messages as $message) {
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
          <div class="col-lg-1"></div>
          <div class="col-lg-10">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
              </div>
                         <form method="post" action="" name="registerform">
                            <div class="form-row">
                                <div class="form-group  col-md-6">
                                        <label for="inputAddress">Email</label>
                                        <input type="email" class="form-control"  placeholder="Email" name="user_email" required>
                                    </div>
                                    <div class="form-group  col-md-6">
                                            <label for="inputZip">Phone</label>
                                            <input type="text" class="form-control" placeholder="+263 123 456 789" name="user_phone" required >
                                    </div>
                            </div>
                            <div class="form-group">
                                    <label for="inputAddress2">Username</label>
                                    <input type="text" class="form-control" placeholder="Username" pattern="[a-zA-Z0-9]{2,64}" name="user_name"  required >
                                </div>
                            <div class="form-group">
                                <label for="inputAddress2">Password (min. 6 characters)</label>
                                <input type="password" class="form-control" placeholder="Passwword" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2">Verify Password</label>
                                <input type="password" class="form-control" placeholder="Verify  Password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
                            </div>
                           
                            <hr/>
                            <div class="row">
                            <p>By clicking Sign Up, I agree to your terms</p>
                                <button type="submit" class="btn btn-primary btn-block" name="register" value="Register">Sign up</button>
                            </div>
                        </form>
              <hr>
              
              <div class="text-center">
                <p>ALready have an account?
                    <a href="index.php">Log in here</a>
                </p>
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


</body>

</html>
