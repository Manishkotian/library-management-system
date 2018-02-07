<?php
    include "connection.php";
    $id=$_GET["id"]; //get id of student not to be approved
    mysqli_query($_link," update student_registration set status='no' where id='$id' "); //not approving student to login
?>
<script type= "text/javascript">
    window.location="display_student_info.php";//back to previous page
</script>
