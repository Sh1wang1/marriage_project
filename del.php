<?php
include("dbconnect.php");
$id = $_GET['id'];
$query ="DELETE FROM user WHERE uname = '$id' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "<script>alert('Record Deleted')</script>";
    ?>
    <meta http-equiv="refresh" content ="0;url = http://localhost/marriage%20project/marriage_project/display.php" />

    <?php
}
else{
    echo "<script>alert('Failed to Delete')</script>";
}
?>