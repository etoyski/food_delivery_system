<?php
session_start();
include ('./config/connection.php');

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$email = $_POST['email'];
$contactno = $_POST['contactno'];
$address = $_POST['address'];
$birthdate = $_POST['birthdate'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];

    $sql = "select * from users where username = '$username'";
    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if ($num == 1){
        echo "<Alert> username taken</Alert>";
        header('location:signup.php');
    }else{
        $reg = "insert into users (fullname,username,email,contactno,address,birthdate,password) values ('$fullname','$username','$email','$contactno','$address','$birthdate','$password')";
        mysqli_query($con,$reg);
        echo "<Alert> Success</Alert>";
        header('location:login.php');
       
    }
?>

