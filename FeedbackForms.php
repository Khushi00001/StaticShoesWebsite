<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Form for feedbacks</title>
</head>
<body>
	<?php
	include'formvalidation.php';
	if (isset($_POST['validate'])) {
	$conn=mysqli_connect('localhost', 'root', '', 'bim4th');
	if (!$conn) {
		die("Connection Failed");
	}
	 $sql="INSERT INTO CustomersFeedbacks(Customer_ID, name, Email, Phone, Gender, Any_Suggestions_Regarding_Services, Enter_your_Feedbacks)
                    VALUES (?,?,?,?,?,?,?)";
                    if($stmt=mysqli_prepare($conn,$sql)){
                    mysqli_stmt_bind_param($stmt,'ississs',$custId, $name, $email, $phone, $gender, $radio, $feedbacks);
                    echo $custId=$_POST['id'];
					 echo $name=$_POST['name1'];
					 echo $email=$_POST['email'];
					 echo $phone=$_POST['phone'];
					 echo $gender=$_POST['gender'];
					 echo $radio=$_POST['check'];
					 echo $feedbacks=$_POST['enter'];
                    if(mysqli_stmt_execute($stmt)){
                    echo "Record added successfully";
                    echo "<script> window.location.href='FeedbackForms.php'</script>";
                    }
                    else{
                    echo "something went wrong. Please try again";
                    echo "<script> alert(window.location.href='FeedbacksForm.php'</script>)";
                 }
                }
                 else{
                    echo " Error: could not prepared query: $sql.".mysqli_error($link);
                     }
                
                mysqli_stmt_close($stmt);
                mysqli_close($conn);
            }
	?>
</body>
</html>