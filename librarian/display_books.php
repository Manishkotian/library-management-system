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
                                <h2>display books</h2>

                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">
                                <form name="form1" action="" method="post">
                                 <select name="t1" class="form-control selectpicker">
                                             <?php
                                             $res=mysqli_query($_link,"select books_name from add_books");
                                             while($row=mysqli_fetch_array($res))
                                             {
                                                 echo "<option>";
                                                 echo $row["books_name"];
                                                 echo"</option>";
                                             }
                                             ?>
                                            </select>
                              
                                    <input type="submit" name="submit1" value="search books" class="btn btn-default submit">
                                </form>
                                <?php
                                if(isset($_POST["submit1"]))
                                {
                                       $res=mysqli_query($_link,"select * from add_books where books_name like('%$_POST[t1]%')");
                                    echo"<table class='table table-bordered'>";
                                    echo"<tr>";
                                    echo"<th>" ;echo"books image"; echo"</th>";
                                    echo"<th>" ;echo"books name"; echo"</th>";
                                    echo"<th>"; echo"books author name"; echo"</th>";
                                    echo"<th>"; echo"publication name"; echo"</th>";
                                   echo"<th>"; echo"books purchase date"; echo"</th>";
                                     echo"<th>"; echo"books price"; echo"</th>";
                                     echo"<th>"; echo"books quantity"; echo"</th>";
                                     echo"<th>"; echo"available quantity"; echo"</th>";
                                     echo"</tr>";
                                     while($row=mysqli_fetch_array($res))
                                     {
                                         echo"<tr>";
                                         echo"<td>";?> <img src="<?php echo $row["books_image"];?>" height="100" width="100"> <?php echo"</td>";
                                         echo"<td>"; echo $row["books_name"]; echo"</td>";
                                         echo"<td>"; echo $row["books_author_name"]; echo"</td>";
                                         echo"<td>"; echo $row["books_publication_name"]; echo"</td>";
                                         echo"<td>"; echo $row["books_purchase_date"]; echo"</td>";
                                         echo"<td>"; echo $row["books_price"]; echo"</td>";
                                         echo"<td>"; echo $row["books_qty"]; echo"</td>";
                                         echo"<td>"; echo $row["available_qty"]; echo"</td>";
                                         echo"</tr>";
                                     }
                                     echo"</table>";
                                    
                          
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
