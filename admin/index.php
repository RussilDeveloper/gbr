<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Admin Login </title>
    
        <link rel="icon" type="image/png" href="assets/img/inhouse-medicare-fav-icon.png"/>

    
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/users/login-2.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->    
</head>
<body class="login">

    <form class="form-login" method="post" action="users/users/login-check.php">
        <div class="row">
            
            <div class="col-md-12 text-center mb-4">
                <img alt="logo" src="assets/img/Inhouse-Medicare-footer-logo.png" class="theme-logo" style="width:150px;"><br><br>
                <h3>Authorised  LogIn</h3>                   
            </div>


            <div class="col-md-12">

                <label for="inputEmail" class="sr-only">Email address</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputEmail"><i class="flaticon-user-7"></i> </span>
                    </div>
                    <input type="email" id="inputEmail" class="form-control" name="email" placeholder="Email Address" aria-describedby="inputEmail" required >
                </div>

                <label for="inputPassword" class="sr-only">Password</label>                
                <div class="input-group mb-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="icon-inputPassword"><i class="flaticon-key-2"></i> </span>
                    </div>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" aria-describedby="inputPassword" required >
                </div>
                
                

                <button class="btn btn-lg btn-gradient-warning btn-block btn-rounded mb-4 mt-5" type="submit">Login</button>

            </div>

        </div>
    </form>   
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="assets/js/loader.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>