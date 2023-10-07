<?php
include'account.php';
$message="";
if (isset($_POST['submit'])) {
  $con=mysqli_connect('localhost','root', '','BIM4th') or die('Unable to Connect');
  $email=$_POST['email'];
  $password=$_POST['psw'];
$sql="SELECT * FROM Forms WHERE email='$email' AND password='$password'";
$result= mysqli_query($con, $sql);
$row=mysqli_fetch_array($result);
if (is_array($row)) {
  $_SESSION['id']= $row['registration_id'];
  $_SESSION['email']= $row['email'];
  // $_SESSION['psw']= $row['psw'];
}
else{
  $message="Invalid username or password";
}
}
if (isset($_SESSION['id'])) {
  header("Location: indexproject.html");
}
?>
<html>
<head>
  <title></title>
</head>
<body>
 <form method="post" action="">
 <div>
  <?php
  if ($message!="") {
    echo "Enter Login Details";
  }
  ?>
 </div>
 Email:<input type="text" name="email"><br>
 Password:<input type="password" name="psw"><br>
 <input type="submit" name="submit" value="submit"> 
 <input type="reset" name="reset" value="reset">
 </form>
</body>
</html>