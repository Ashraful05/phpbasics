<?php
if(isset($_POST['btn']))
{
    require_once '../class/login.php';
    $login = new login();
    $login->admin_login_check($_POST);
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link rel="canonical" href="https://getbootstrap.com/docs/3.4/examples/jumbotron/">

    <title>Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="../asset/css/bootstrap.min.css" rel="stylesheet">
    <![endif]-->
</head>

<body>
<div class="container">
    <div class="row">
        <div class="col-md-offset-2 col-md-8">
            <hr>
            <div class="well" style="margin-top: 200px; padding: 50px;">
                <h3 class="text-center text-success">Please Use valid Email and Password</h3>
                <form action="" method="post" class="form-horizontal">
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Email Address</label>
                        <div class="col-md-9">
                            <input type="email" name="email_address"  class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label col-md-3">Password</label>
                        <div class="col-md-9">
                            <input type="password" name="password" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-offset3 col-md-9">
                            <input type="Submit" name="btn" value="Submit" class="btn btn-success btn-block">
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script src="../asset/js/bootstrap.min.js"></script>
</body>
</html>


