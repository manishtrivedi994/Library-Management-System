<?php
    include "connection.php";
    $_SESSION['secure']=rand(1000,9999);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Student Registration Form | LMS </title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link href="css/registration.css" rel="stylesheet">

</head>

<br>

<div class="col-lg-12 text-center ">

    <h1> Library Management System</h1>
</div>


<body class="login" style="margin-top: -20px;">



<div class="login_wrapper">

    <section class="login_content" style="margin-top: -40px;">
        <form name="form1" action="registration.php" method="post">
            <h2>User Registration Form</h2><br>

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
            <div>
                <input type="text" class="form-control" placeholder="SEM" name="sem" required=""/>
            </div>
            <div>
                <input type="text" class="form-control" placeholder="Enrollment No" name="enrollmentno" required=""/>
            </div>
            <div class="col-lg-12  col-lg-push-3">
                <input class="btn btn-default submit " type="submit" name="submit1" onclick="verify();" value="Register">
            </div>

        </form>
    </section>
    <script type="text/javascript">
        function verify()
        {
            var s=/^[a-zA-Z0-9]+@[a-z]+\.[a-z]+$/;
            if(!document.form1.email.value.match(s))
            {
                alert("Provide a valid email id:");
                window.location="registration.php";
            }

        }
    </script>

    <?php
        if(isset($_POST["submit1"]))
        {

            mysqli_query($link,"insert into student_registration values('','$_POST[firstname]','$_POST[lastname]','$_POST[username]','$_POST[password]','$_POST[email]','$_POST[contact]','$_POST[sem]','$_POST[enrollmentno]','no')");

    ?>
        <div class="alert alert-success col-lg-6 col-lg-push-3">
            Registration successfull, You will get notified when your account is approved.
        </div>

    <?php

        }

    ?>


</div>




</body>
</html>
