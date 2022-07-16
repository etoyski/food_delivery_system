 <?php session_start();
  
   if (isset($_POST['submit'])) {
     
       $username = $_POST['username'];
       $password = $_POST['password'];
     
       $check_user = "SELECT * FROM users WHERE username = '$username'";
       $q= mysqli_query($conn,$check_user);
       
       while ($row = mysqli_fetch_array($q)){
   
         $db_user = $row['username'];
         $db_pw = $row['pass'];
         $user_id = $row['UserID'];
       }
       if (empty($username) || empty ($password)){
         echo "<script>alert('no inputs')</script>";
       }else{
         $enc_pw = hash("sha256",$password);
   if(($db_user == $username) && ($db_pw ==$enc_pw)){
   session_start();
   $_SESSION['logged'] =1;
   $_SESSION['username'] = $username;
   $_SESSION['UserID'] = $user_id;
   header("Location:home.php");
   }else{
     echo "<script>alert('not matched')</script>";
   }
       }
   
         }
   



?> 