<!doctype html>
<html lang="en">
<?php
require_once ("./config/connection.php");
error_reporting(0);
?>
  <head>
    <?php 
        include ('header.php');
        echo $con ? '<h1>connected</h1>' : 'not connected';

    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Delivery</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/style.css">
</head>
  <body>
  <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last">
							<div class="text w-100">
								<h2>Welcome to Andaks</h2>
								<p>Already have an account?</p>
								<a href="./login.php" class="btn btn-white btn-outline-white">Sign In</a>
							</div>
			      </div>
						<div class="login-wrap p-4 p-lg-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4">Sign Up</h3>
			      		</div>
								
			      	</div>
							<form action="signup-check.php" method="post" class="signin-form">
                       
                    
          
                            <div class="form-group mb-3">

			      			<label class="label" for="Fullname">Fullname</label>
			      			<input type="text" class="form-control" placeholder="Fullname" name="fullname" value="<?php echo $_GET['fullname']; ?>" required>
                              
                        </div>
			      		<div class="form-group mb-3">
                          
			      			<label class="label" for="name">Username</label>
			      			<input type="text" class="form-control" placeholder="Username"name="username" value="<?php echo $_GET['username']; ?>" required>
			      		</div>

                          <div class="form-group mb-3">
			      			<label class="label" for="Email">Email</label>
			      			<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $_GET['email']; ?>"required>
			      		</div>

                          <div class="form-group mb-3">
			      			<label class="label" for="ContactNo">ContactNo</label>
			      			<input type="text" class="form-control" placeholder="ContactNo"name="contactno"value="<?php echo $_GET['contactno']; ?>" required>
			      		</div>

                          <div class="form-group mb-3">
			      			<label class="label" for="name">Birthdate</label>
			      			<input type="date" class="form-control" placeholder="Birthdate" name="birthdate"value="<?php echo $_GET['birthdate']; ?>"required>
			      		</div>

                          <div class="form-group mb-3">
			      			<label class="label" for="Address">Address</label>
			      			<input type="text" class="form-control" placeholder="Address" name="address"value="<?php echo $_GET['address']; ?>"required>
			      		</div>

		            <div class="form-group mb-3">
		            	<label class="label" for="password">Password</label>
		              <input type="password" class="form-control" placeholder="Password" name="password"value="<?php echo $_GET['password']; ?>"required>

		            </div>

                    <div class="form-group mb-3">
		            	<label class="label" for="confirmpassword">Confrim Password</label>
		              <input type="password" class="form-control" placeholder="Confrim Password" name="confirmpassword"value="<?php echo $_GET['confirmpassword']; ?>" required>
		            </div>

		            <div class="form-group">
		            	<button type="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
		            </div>
		            <div class="form-group d-md-flex">
		            	<div class="w-50 text-left">
			            	<label class="checkbox-wrap checkbox-primary mb-0">Agree to terms & conditions
									  <input type="checkbox" checked>
									  <span class="checkmark"></span>
										</label>
									</div>
									
		            </div>
		          </form>
		        </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
        <?php 
        include('footer.php');
        ?>

    </body>
</html>