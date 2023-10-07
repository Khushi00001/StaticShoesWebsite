<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("form2.jpg");

  min-height: 1000px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;
}

/* Add styles to the form container */
.container {
  position: absolute;
  right: 0;
  margin: 20px;
  max-width: 300px;
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
  <?php
  if (isset($_POST['submit'])) {
  $conn=mysqli_connect('localhost', 'root', '', 'bim4th');
  if (!$conn) {
    die("Connection Failed");
  }
$Email = $_POST['email'];
$Password=$_POST['password'];
$sql= "INSERT INTO Forms(Email, Password)
VALUES('$Email', '$Password')";
if (mysqli_query($conn,$sql)) {
    echo "New Record created successfully";
    header("Location: account.php");
 }
 else{
  echo "New Record created unsuccessfully";
 }
}
?>
<div class="bg-img">
  <form class="container" action="" method="POST">
    <h1>Registration Form</h1>
    <!-- <h2>Login</h2> -->
  <!-- Registration Id: <input type="text" name="registration_id"> -->
  Email:<input type="text" name="email"><br>
  Password:<input type="password" name="password"><br>
 <!-- <input type="submit" name="submit" value="submit"> --> 
<!--  <input type="reset" name="reset" value="reset"> -->

 <button type="submit" class="btn" name="submit" value="submit">Register</button>
  </form>
</div>
</body>
</html>