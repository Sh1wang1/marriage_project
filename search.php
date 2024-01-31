<?php  
session_start();
include("dbconnect.php");
?>
<?php  
$un=$_POST['t1'];
$sql="select * from suvey where uname like='$un'";
if($row=mysqli_query($conn,$sql))
{
    echo $row['uname'];
}
else
{
    echo "profile not deleted";
}
?>