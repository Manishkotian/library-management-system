<?php
    include "connection.php";
    $id=$_GET["id"]; //get id number of student to be approved
    mysqli_query($_link,"update student_registration set status= 'yes' where id='$id' "); //approving student to login
?>

<script type= "text/javascript">
    window.location="display_student_info.php"; //back to previous page
</script>