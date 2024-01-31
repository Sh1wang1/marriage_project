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
  .del,{
    background-color: red;
    color: white;
    border: 0;
    outline: none;
    border-radius: 5px;
    height: 23px;
    width: 80px;
    font-weight: bold;
    cursor: pointer;
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
    <table border="1" cellspacing="7" width="75%">
        <tr>
        <th width="10%">Username</th>
         <th width="10%">Password</th>
         <th width="10%">EmailID</th>
         <th width="10%">Mobile No.</th>
         <th width="10%">Operations</th>
</tr>


   <?php

    while($result= mysqli_fetch_assoc($data)){
       echo "<tr>
             <td>".$result[uname]."</td>
             <td>".$result[pass]."</td>
             <td>".$result[emailid]."</td>
             <td>".$result[mobno]."</td>
             <td><a href='del.php?id=$result[uname]'><input type='summit'value='Delete' class='del' onclick =' return checkdelete() '></a></td>
       
       
       
       </tr> 
       ";
    }
    

}
else{
    echo "NO RECORD FOUND";
}
?>
</table>
<script>
    function checkdelete(){
      return confirm('Are you sure you want to delete');
    }
</script> 
