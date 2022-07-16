 <?php session_start();
  
   if (isset($_POST['submit'])) {
     
       $username = $_POST['username'];
       $password = $_POST['password'];
     
       $check_user = "SELECT * FROM users WHERE username = '$username'";
       $q= mysqli_query($conn,$check_user);
       

?> 