<!DOCTYPE html>
<html lang="en">
<head>
    <style>
  body{
    background:teal;
  }
  table{
    background-color:white;
  }
  </style>
</head>

</html>



<?php  
session_start();
include("dbconnect.php");
error_reporting(0);

$sql = "SELECT * FROM user";
$data = mysqli_query($conn, $sql);

$total = mysqli_num_rows($data);



if($total!=0){
    ?>
    <h2 align="center">Displaying User List</h2>
    <table border="1" cellspacing="7" width="100%">
        <tr>
        <th width="10%">Username</th>
         <th width="10%">Password</th>
         <th width="10%">EmailID</th>
         <th width="10">Mobile No.</th>
         <th width="10">Operation</th>
</tr>


   <?php

    while($result= mysqli_fetch_assoc($data)){
       echo "<tr>
             <td>".$result[uname]."</td>
             <td>".$result[pass]."</td>
             <td>".$result[emailid]."</td>
             <td>".$result[mobno]."</td>
       
       
       
       
       </tr> 
       ";
    }
    

}
else{
    echo "NO RECORD FOUND";
}
?>
</table>
