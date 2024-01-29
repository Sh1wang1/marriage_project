<?php  
session_start();
include("dbconnect.php");
?>
<?php
$un=$_POST['t1'];
$pd=$_POST['t2'];
$sql = "SELECT * FROM user";
$result = mysqli_query($conn, $sql);

while($row = mysqli_fetch_assoc($result)) 
{
    if($row["uname"]==$un && $row["pass"]== $pd)
     {
        $_SESSION['t1']=$un;
        $_SESSION['t2']=$pd;
      header("location:indexc.html");

     }
} 
mysqli_close($conn);
?>