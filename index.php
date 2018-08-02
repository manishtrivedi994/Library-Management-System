<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home Page</title>
    <style>
        body{
            background-image: url("library.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        button.stud {
            position:absolute;
            transition: .5s ease;
            top: 50%;
            left: 50%;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        button.lib{
            position:absolute;
            transition: .5s ease;
            top: 50%;
            left: 40%;
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        h1.text{
            color: darkblue;
            position:absolute;
            top: 40%;
            left: 45%;
        }
        div.lib{
            font-family: Arial;
            color: red;
            position:absolute;
            top: 10%;
            left: 20%;
            font-size: 70px;
        }
    </style>
</head>
<body>
<div class="lib">Library Management System</div>
<h1 class="text">Login As:</h1>
<button class="stud" onclick="parent.location='http://localhost/phplms/student/login.php'">Student</button>
<button class="lib" onclick="parent.location='http://localhost/phplms/librarian/login.php'">Librarian</button>
</body>
</html>