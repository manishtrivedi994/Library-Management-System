<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Librarian Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link href="css/registration.css" rel="stylesheet">
</head>

<br>

<div class="col-lg-12 text-center ">
    <h1>Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



<div class="login_wrapper">

    <section class="login_content" style="margin-top: -40px;">
        <form name="form1" action="" method="post">
            <h2>Librarian Registration Form</h2><br>

            <div>
                <input type="text" class="form-control" placeholder="FirstName" name="firstname" required=""/>
            </div>
            <div>
                <input type="text" class="form-control" placeholder="LastName" name="lastname" required=""/>
            </div>

            <div>
                <input type="text" class="form-control" placeholder="Username" name="username" required=""/>
            </div>
            <div>
                <input type="password" class="form-control" placeholder="Password" name="password" required=""/>
            </div>
            <div>
                <input type="text" class="form-control" placeholder="email" name="email" required=""/>
            </div>
            <div>
                <input type="text" class="form-control" placeholder="contact" name="contact" required=""/>
            </div>

            <div class="col-lg-12  col-lg-push-3">
                <input class="btn btn-default submit " type="submit" name="submit1" value="Register">
            </div>

        </form>
    </section>
    <?php
    if(isset($_POST["submit1"]))
    {
        $count=0;
        $res=mysqli_query($link,"select * from librarian_registration1 where (username='$_POST[username]' || email='$_POST[email]')");
        $count=mysqli_num_rows($res);
        if($count==0) {
            mysqli_query($link, "insert into librarian_registration1 values('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]')");

            ?>
            <div class="alert alert-success col-lg-6 col-lg-push-3">
                Registration successfull!!
            </div>

            <?php
        }
        else{
            ?>
    <div class="alert alert-danger col-lg-6 col-lg-push-3">
        Email id or Username already taken!!
        <?php
        }
    }

    ?>


</div>



</body>
</html>
