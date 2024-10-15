<?php
    $servername="localhost";
    $username="root";
    $password="";
    $database="userinfo";
    $conn=new mysqli($servername,$username,$password,$database);
    if(!($conn))
    die("Connection failed to secured");
    else
    {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $sql="INSERT INTO `usepass` (`SI.No`, `Username`, `Password`) VALUES ('', '$username', '$password')";
        if(mysqli_query($conn,$sql)==TRUE)
        {
            header("Location:Login.php");
        }
        else
        die("Failed to add the data in DB");
} 