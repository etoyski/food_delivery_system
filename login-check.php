<?php 
session_start();
include ('./config/connection.php');

$username =$_POST['username'];
$password = $_POST['password'];

$username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
    $sql = "select * from users where username = '$username' and password = '$password'";

    $result= mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
    $num =mysqli_num_rows($result);

    if($num ==1){
       
        $_SESSION['username'] = $name;
        echo '<alert> Login success </alert>';
         header('location:mainpage.php');
    }else{
        echo '<alert> Login fail </alert>';
         header('location:login.php');

    }
?>