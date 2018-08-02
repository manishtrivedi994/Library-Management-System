<?php
session_start();
if(!isset($_SESSION["librarian"])){
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}
include "connection.php";
include "header.php";
?>

    <!-- page content area main -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Student List</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
            <div class="row" style="min-height:500px">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Students Having This Book</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <?php
                            $res=mysqli_query($link,"select * from issue_books where books_name='$_GET[books_name]' && books_return_date=''");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "Student Name";   echo "</th>";
                            echo "<th>"; echo "Student Enrollment";  echo "</th>";
                            echo "<th>"; echo "Books Name";  echo "</th>";
                            echo "<th>";  echo "Student Email"; echo "</th>";
                            echo "<th>"; echo "Student Contact";  echo "</th>";
                            echo "<th>";  echo "Student Books Issue Date"; echo "</th>";
                            echo "</tr>";
                            while($row=mysqli_fetch_array($res))
                            {

                                echo "<tr>";
                                echo "<th>"; echo $row["student_name"];   echo "</th>";
                                echo "<th>"; echo $row["student_enrollment"];  echo "</th>";
                                echo "<th>"; echo $row["books_name"];  echo "</th>";
                                echo "<th>";  echo $row["student_email"]; echo "</th>";
                                echo "<th>"; echo $row["student_contact"];  echo "</th>";
                                echo "<th>";  echo $row["books_issue_date"]; echo "</th>";
                                echo "</tr>";
                            }
                            echo "</table>";

                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

<?php
include "footer.php";
?>