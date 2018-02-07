<?php
    include 'connection.php'; //connecting database lms
    include 'header.php';
?>

        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3></h3>
                    </div>

                </div>

                <div class="clearfix"></div>
                <div class="row" style="min-height:500px">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>SEARCH BOOKS</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                              
                                 <form name="form1" action="" method="post">
                                    <table class="table table-bordered">
                                        <tr>
                                                    <td> <select name="enr" class="form-control">
                                                <?php
                                                $res=mysqli_query($_link,"select distinct books_name from add_books where available_qty>0"); //get books name if book quantity is more then zero
                                                while($row=mysqli_fetch_array($res))
                                                {
                                                    echo "<option>";
                                                    echo $row["books_name"]; //display all books name
                                                    echo"</option>";
                                                }
                                                ?>
                                                        </select></td>
                                                    <td>
                                                        <input type="submit" name="submit1" value="search" class="form-control" style="background-color:blue; color:white">
                                                    </td>
                                               
                                        </tr>
                                    </table>
                                </form>
                                <?php 
                                if(isset($_POST["submit1"]))
                                {
                                    $i=0;
                                $res=mysqli_query($_link,"select * from add_books where books_name like('%$_POST[enr]%')"); //gets particular book name selected above
                                echo"<table class='table table-bordered'>";
                                echo "<tr>";
                                while($row=mysqli_fetch_array($res))
                                {
                                    $i=$i+1;
                                    echo"<td>";?> <img src="../librarian/<?php echo $row["books_image"]; ?>" height="100" width="100"><?php //getting image of book from librarian directory
                                        echo"<br>";
                                        echo"<b>".$row["books_name"]."</b>";
                                         echo"<br>";
                                         echo"<b>"."available:".$row["available_qty"]."</b>"; //display available quantity of books
                                            echo"</td>";  
                                             if($i==2) // displaying 2 books in row
                                            {
                                              echo"</tr>";
                                              echo"<tr>";
                                               $i=0;
                                            }
                                }
                                echo"</tr>";
                               echo "</table>";
                                }
                             
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


