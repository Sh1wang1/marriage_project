<?php
     error_reporting(0);
?>
<?php 


$n=$_POST['a1'];
$fn=$_POST['a2'];
$mb=$_POST['a3'];
$em=$_POST['a4'];
$ad=$_POST['a5'];
$rg=$_POST['a6'];
$d=$_POST['a7'];

$servername = "localhost";
$username = "root";
$password ="";
$dbname = "marriage project";
$filename = $_FILES["uploadfile"]["name"];
$tempname = $_FILES["uploadfile"]["tmp_name"];
//print_r($_FILES["uploadfile"]);
$folder ="images/".$filename;
//echo $folder;
move_uploaded_file($tempname, $folder);
echo "<img src='$folder' height='500px' width='500px'> ";

$conn = mysqli_connect($servername,$username, $password, $dbname);
if (!$conn)
 {
    die("Connection failed: " . mysqli_connect_error());
  }
  
$sql = "INSERT INTO bride (uname,fname,mobno,emailid,addr,reg,dat,img_source) VALUES ('$n','$fn','$mb','$em','$ad','$rg','$d','$folder')";
  
  if (mysqli_query($conn, $sql))
   {
    echo "YOUR REGISTRATION IS SUCCESSFULLY CREATED";
    }
    else
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
  


?>