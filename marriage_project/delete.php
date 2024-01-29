<?php  
session_start();
include("dbconnect.php");

if (isset($_POST['t1']) && isset($_POST['t2'])) {
    $un = $_POST['t1'];
    $pd = $_POST['t2'];

    $sql = "DELETE FROM user WHERE uname='$un' AND pass='$pd'";
    
    if (mysqli_query($conn, $sql)) {
        echo "Profile deleted";
    } else {
        echo "Profile not deleted";
    }
} else {
    echo "Invalid request";
}
?>
