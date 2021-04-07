<?php
//    $studentId = $_GET['id'];
//    require_once './student.php';
//    $studentObject = new Student();
//    $queryResult = $studentObject->show_student_info_by_id($studentId);
//    $editStudent = mysqli_fetch_assoc($queryResult);

    echo session_start();
//    echo session_id();
    $studentId = $_GET['id'];
    require_once './student.php';
    $studentObject = new Student();
    $queryResult = $studentObject->show_student_info_by_id($studentId);
    $editStudent = mysqli_fetch_assoc($queryResult);

    if(isset($_POST['btn']))
    {
        $studentObject->update_student_info($_POST);
    }

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit Student Page</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class=""><a href="add_student.php">Add Student</a></li>
                <li><a href="view_student.php">View Student</a></li>
            </ul>
            <form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<!--<h3 class="text-center alert-success">--><?php //echo $message; ?><!--</h3>-->
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="well">
                <form class="form-horizontal" method="post" action="">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Student Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="student_name" value="<?php echo $editStudent['student_name']; ?>" class="form-control">
                            <input type="hidden" name="id" value="<?php echo $editStudent['id']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>
                        <div class="col-sm-10">
                            <input type="number" name="phone_number" value="<?php echo $editStudent['phone_number']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email Address</label>
                        <div class="col-sm-10">
                            <input type="email" name="email_address" value="<?php echo $editStudent['email_address']; ?>" class="form-control"  placeholder="Email" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Address</label>
                        <div class="col-sm-10">
                            <textarea name="address" rows="4" cols="30" class="form-control"><?php echo $editStudent['address']; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" name="btn" class="btn btn-success btn-block">Update Student Info</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery-3.6.0.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
</body>
</html>