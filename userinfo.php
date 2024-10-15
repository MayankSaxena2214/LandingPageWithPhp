<?php
    $con=mysqli_connect('localhost','root');
    if($con){
        echo "connection successfully";
    }
    else{
        echo "Connection not done";
    }
    //select the database
    mysqli_select_db($con,'phpwebsite');
    
    //store the data
    $user=$_POST['user'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $comments=$_POST['comments'];

    $query="INSERT INTO `userinfo`(`user`, `email`, `mobile`, `comment`) VALUES ('$user','$email','$mobile','$comments')";
    // echo $query;
    mysqli_query($con,$query);
    header("location:index.php");
?>