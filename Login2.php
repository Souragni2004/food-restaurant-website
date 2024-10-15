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
        $sql="SELECT * from `usepass`";
        $res=mysqli_query($conn,$sql);
        $flag=0;
        while($row=mysqli_fetch_assoc($res))
        {
            if($row['Username']==$username&&$row['Password']==$password)
            {
                $flag=1;
                break;
            }
        }
        if($flag)
        {
        header("Location:index.html");
        }
        else
        {
        echo "<script>alert('Invalid Username or Password');</script>";
        }

    }
?>
