<?php
    include 'connection.php';
    include 'header.php';
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
                                <h2>Student list with this books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <?php
                                $id=$_GET["books_name"];
                                        $res=mysqli_query($_link,"select * from issue_books where books_return_date=' ' && books_name='$id' ");
                                        echo "<table class= 'table table-bordered'>";
                                        echo "<tr>";
                                            echo "<th>"; echo "student name"; echo "</th>";
                                            echo "<th>";echo "student enrollment"; echo "</th>";
                                            echo "<th>"; echo "books name";echo "</th>";
                                             echo "<th>";  echo "student email";  echo "</th>";
                                             echo "<th>"; echo "student contact";echo "</th>";
                                             echo "<th>"; echo "books issue date";  echo "</th>";
                                           echo "</tr>";
                                      while($row=mysqli_fetch_array($res))
                                        {
                                          echo "<tr>";
                                          echo"<td>"; echo $row["student_name"]; echo"</td>";
                                          echo"<td>"; echo $row["student_enrollment"]; echo"</td>";                           
                                         echo"<td>"; echo $row["books_name"]; echo"</td>";
                                          echo"<td>"; echo $row["student_email"]; echo"</td>"; 
                                          echo"<td>"; echo $row["student_contact"]; echo"</td>";
                                           echo"<td>"; echo $row["books_issue_date"]; echo"</td>";
                                          echo "</tr>";
                                        }
                                        echo"</table>";
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
