<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PHP food ordering system</title>

	<!-- Bootstrap css link -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="bg-dark">
	<?php
// include'account.php';
$message="";
if (isset($_POST['submit'])) {
  $con=mysqli_connect('localhost','root', '','food') or die('Unable to Connect');
  $email=$_POST['email'];
  $password=$_POST['psw'];
$sql="SELECT * FROM Foods WHERE email='$email' AND password='$password'";
$result= mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
if (is_array($row)) {
  
  $_SESSION['email']= $row['email'];
  // $_SESSION['psw']= $row['psw'];
}
else{
  $message="Invalid username or password";
}
}
if (isset($_SESSION['email'])) {
  header("Location: index.html");
}
?>
	<h1 class="text-info text-center p-3">Welcome To Food Ordering System  </h1>
	<div class="bg-info py-4">
		<h2 class="text-center">Login</h2>
		<div class="container text-center">
			<form action="./actions/Login.php" method="POST">
				<?php
  if ($message!="") {
    echo "Enter Valid Login Details";
  }
  ?>
				<div class="mb-3">
					Email:<input type="text" class="form-control w-50 m-auto" name="mobile" placeholder="Enter your Email"  required="required"> 
				</div>
				<div class="mb-3">
					Password:<input type="password" class="form-control w-50 m-auto" name="password" placeholder="Enter your password"  required="required"> 
				</div>
				<!-- <div class="mb-3">
					<select name="std" class="form-select w-50 m-auto">
						<option value="Admin">Admin</option>
						<option value="customer">customer</option>
					</select> -->
			</form>
		</div>
		<button type="submit" class="btn btn-dark my-4">Login</button>
		<p>Don't have an account?<a href="./partials/registration.php" class="text-white">Register here</a></p>
	
	</div>

</body>
</html>