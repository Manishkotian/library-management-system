<?php
    session_start();
    include 'header.php';
    include 'connection.php' //connecting to database lms
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
                                <h2>my issued books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <table class="table table-bordered">
                                    <th>
                                        student enrollment no
                                    </th>
                                    <th>
                                        books name
                                    </th>
                                    <th>
                                        books issued date
                                    </th>
                                    <?php
                                        $res=mysqli_query($_link,"select * from issue_books where student_username='$_SESSION[username]' && books_return_date=''"); //recieving username from login.php page and book should not be returned
                                        while($row=mysqli_fetch_array($res))
                                        {
                                            echo "<tr>";
                                            echo "<td>";
                                            echo $row["student_enrollment"]; //display student enrollment number
                                            echo "</td>";
                                           
                                          
                                            echo "<td>";
                                            echo $row["books_name"]; // display books name
                                            echo "</td>";
                                            
                                            
                                            echo "<td>";
                                            echo $row["books_issue_date"]; //display books issued date
                                            echo "</td>";
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
    <?php
        include 'footer.php';
    ?>

