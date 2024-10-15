

<?php
$servername="localhost";
$username="root";
$password="";
$database="resManagement";
$conn=new mysqli($servername,$username,$password,$database);
if(!($conn))
die("<h1>Failed to Connect to the Database<h1>");
else
{
    $name=$_POST['fname'];
    $contact=$_POST['fmob'];
    $order=$_POST['food'];
    $sql="INSERT INTO `order` (`SI.No`, `Name`, `Contact Number`, `Food Order`) VALUES ('','$name','$contact','$order')";
    if(mysqli_query($conn,$sql)==TRUE)
    {
        echo "<script> alert('Thanks for submitting your request!Your order will be delivered soon');</script>";
    }
    else
    die("<h1>Failed to the database!</h1>");
}
?>
