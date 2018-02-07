<?php
    session_start();
    include 'connection.php';  //connecting to database lms
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Login Form </title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1 style="font-family:Lucida Console">Library Management System</h1>
</div>

<br>

<body class="login">


<div class="login_wrapper">

    
        <form name="form1" action="" method="post">
            <h1>User Login Form</h1>

            <div>
                <input type="text" name="username" class="form-control" placeholder="Username" required=""/>
            </div>
            <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required=""/>
            </div>
            <div>

                <input class="btn btn-default submit" type="submit" name="submit1" value="Login">
                <a class="reset_pass" href="#">Lost your password?</a>       <!--pointed  null link-->
            </div>

            <div class="clearfix"></div>

            <div class="separator">
                <p class="change_link">New to site?
                    <a href="registration.php"> Create Account </a>   <!-- link to registration.php-->
                </p>

                <div class="clearfix"></div>
                <br/>


            </div>
        </form>
    
</div>
    <?php
        if(isset($_POST["submit1"]))
        {
            $count=0;
            $res=mysqli_query($_link,"select * from student_registration where username='$_POST[username]' && password='$_POST[password]'&& status='yes'"); //returning username password and approved account by libraian
            $count=mysqli_num_rows($res);
            if($count==0) //if invalid username password and not approved account
            {
    ?>
            <div class="alert alert-danger col-lg-6 col-lg-push-3">
               <strong style="color:white">Invalid</strong> Username Or Password  
            </div>
    <?php
            }
        else 
            {
            $_SESSION["username"]=$_POST["username"];    //sending username to my_issued_books.php page
    ?>
            <script type="text/javascript">
                window.location="my_issued_books.php"; //opening new window
            </script>
    <?php
            }
            
        }
    ?>


</body>
</html>


