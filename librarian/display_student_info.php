<?php
    include 'header.php';
    include 'connection.php'; //connecting to database lms
?>

        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                    <div class="title_right">
                        <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                            <div class="input-group">
                             
                            </div>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>student info</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                    $res=mysqli_query($_link,"select * from student_registration"); //selecting all fields of table
                                    echo "<table class= 'table table-bordered'>";
                                    echo "<tr>";
                                    echo "<th>"; echo "firstname"; echo "</th>";
                                    echo "<th>"; echo "lastname"; echo "</th>";
                                    echo "<th>"; echo "username"; echo "</th>";
                                    echo "<th>"; echo "email"; echo "</th>";
                                    echo "<th>"; echo "contact"; echo "</th>";
                                    echo "<th>"; echo "sem"; echo "</th>";
                                    echo "<th>"; echo "enrollmentno"; echo "</th>";
                                    echo "<th>"; echo "status"; echo "</th>";
                                    echo "<th>"; echo "approve"; echo "</th>";
                                    echo "<th>"; echo "not approved"; echo "</th>";
                                    echo "</tr>";
                                   
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        echo "<tr>";
                                        echo "<td>"; echo $row["firstname"]; echo "</td>";
                                        echo "<td>"; echo $row["lastname"]; echo "</td>";
                                        echo "<td>"; echo $row["username"]; echo "</td>";
                                        echo "<td>"; echo $row["email"]; echo "</td>";
                                        echo "<td>"; echo $row["contact"]; echo "</td>";
                                        echo "<td>"; echo $row["sem"]; echo "</td>";
                                        echo "<td>"; echo $row["enrollmentno"]; echo "</td>";
                                        echo "<td>"; echo $row["status"]; echo "</td>";
                                        echo "<td>"; ?> <a href="approve.php? id= <?php echo $row["id"]; ?>" style="color:red"> APPROVE </a> <?php echo "</td>"; //link to approve the student login
                                        echo "<td>"; ?> <a href="notapprove.php? id= <?php echo $row["id"]; ?>" style="color:red"> NOT APPROVE </a> <?php echo "</td>"; //link to not aprove the student login
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
    <?php
        include 'footer.php';
    ?>
   

