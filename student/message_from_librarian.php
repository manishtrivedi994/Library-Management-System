<?php
session_start();
if(!isset($_SESSION["username"])){
    ?>
    <script type="text/javascript">
        window.location="login.php";
    </script>
    <?php

}
include "connection.php";
include "header.php";
mysqli_query($link,"update messages set read1='y' where dusername='$_SESSION[username]'");
?>

    <!-- page content area main -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Notifications</h3>
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
                            <h2>Messages from librarian</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Full Name</th>
                                    <th>Title</th>
                                    <th>Message</th>
                                </tr>
                                <?php

                                    $res=mysqli_query($link,"select * from messages where dusername='$_SESSION[username]' order by id desc");
                                    while($row=mysqli_fetch_array($res)){
                                        $count=0;

                                        $res1=mysqli_query($link,"select * from librarian_registration1 where username='$row[susername]'");
                                        $count=mysqli_num_rows($res1);
                                        while($row1=mysqli_fetch_array($res1)) {
                                            $fullname=$row1["firstname"]." ".$row1["lastname"];

                                        }

                                        echo "<tr>";
                                        echo "<td>";  echo $row["susername"]; echo "</td>";
                                        echo "<td>";  echo $row["title"]; "</td>";
                                        echo "<td>";  echo $row["msg"]; "</td>";
                                        echo "</tr>";
                                    }

                                ?>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->

<?php
include"footer.php";
?>