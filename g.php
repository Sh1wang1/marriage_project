<?php
     error_reporting(0);
?>
<?php 
$n=$_POST['q1'];
$fn=$_POST['q2'];
$mb=$_POST['q3'];
$em=$_POST['q4'];
$ad=$_POST['q5'];
$rg=$_POST['q6'];
$d=$_POST['q7'];
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
  
$sql = "INSERT INTO groom (uname,fname,mobno,emailid,addr,reg,dat,img_source) VALUES ('$n','$fn','$mb','$em','$ad','$rg','$d','$folder')";

  if (mysqli_query($conn, $sql))
   {
    echo "Your record is created successfully";
    }
    else
     {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
     }
  


?>