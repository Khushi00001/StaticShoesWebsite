<!DOCTYPE html>
<html>
<head>
	<title>Form validation</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
 *{
  margin:0;
  padding:0 
	}
	body{
		background-image:url("Form.jpg");
		background-position:center;
		background-size:cover;
		font-family:sans-serif;
		color: #FFFFFF;
		margin-top:40px;
	}
.regform{
		width: 750px;
		background-color: rgb(0,0,0,0.6);
		margin: auto;
		color:#FFFFFF;
		padding:10px 0px 10px 0px;
		text-align: center ;
		border-radius:15px 15px 0px 0px;
		}
.main{
	  background-color:rgb(0,0,0,0.5);
	  width:750px;
	  margin:auto;
	}
	form{
	  	 padding:10px;
	    }	
#name{
	  width:100%;
	  height:100px;
	}	
	.id{
		   position:relative;
		   left: 200px;
		   top: -37px;
		   line-height:40px;
		   border-radius:6px;
		   padding:0 22px;
		   font-size:16px;
		  }
.name{
	  margin-left:25px;
	  margin-top:30px; 
	  width:125px;
	  color:white;
	  font-size:18px;
	  font-weight:700px;
	  }	

.name1{
	   position:relative;
	   left:200px;
	   top:-37px;
	   line-height:37px;
	   width:485px;
	   border-radius:6px;
	   padding:0 22px;
	   font-size:10px;
	   color:#555;
	   }
.lastname{
		  position:relative;
		   left:417px;
		   top:-80px;
		   line-height:40px;
		   border-radius:6px;
		   padding:0 22px;
		   font-size:16px;
		   color:#555;
		  }
.firstlabel{
			position:relative;
			color:#E5E5E5;
			text-transform:capitalize;
			font-size:14px;
			left:203px;
			top:-45px;
			}

.lastlable{
		   position:relative;
		   color:#E5E5E5;
		   text-transform:capitalize;
		   font-size:14px;
		   left:175px;
		   top:-45px;
		   }
 
.Email{
	   position:relative;
	   left:200px;
	   top:-37px;
	   line-height:37px;
	   width:485px;
	   border-radius:6px;
	   padding:0 22px;
	   font-size:10px;
	   color:#555;
	   }

.code{
	  position:relative;
	   left:200px;
	   top:-37px;
	   line-height:40px;
	   width:95px;
	   border-radius:6px;
	   padding:0 22px;
	   font-size:16px;
	   color:#555;
	   }
.number{
		position:relative;
	 left:200px;
	   top:-37px;
	   line-height:40px;
	   width:280px;
	   border-radius:8px;
	   padding:0 22px;
	   font-size:16px;
	   color:#555;
	   }
.area-code{
		   position:relative;
		   color:#E5E5E5;
		   text-transform:capitalize;
		   font-size:16px;
		   left:54px;
		   top:-2px;
		}
.Phone-Number{
		   position:relative;
		   color:#E5E5E5;
		   text-transform:capitalize;
		   font-size:16px;
		   left:-125px;
		   top:-2px;
           }

.option{
		position:relative;
	 left:200px;
	   top:-37px;
	   line-height:40px;
	   height:35px;
	   width:532px;
	   border-radius:6px;
	   padding:0 22px;
	   font-size:16px;
	   color:#555;
	   outline:none;
	   overflow:hidden;
}
.option option{
			  font-size:20px;
} 
#ExistingCoustmor{
					margin-left:25px;
					color:white;
					font-size:18px;
					} 
.radio{
		display:inline-block;
		padding-right:70px;
		font-size:25px;
		margin-left:25px;
		margin-top:15px;
		color:white;
	}
.radio input{
			 width:20px;
			 height:20px;
			 border-radius:50%
			 cursor:pointer;
			 outline:none;
			}
.enter{
	  		 position:relative;
	   		left:200px;
	   		top:-37px;
	   		line-height:37px;
	  		width:485px;
	   		border-radius:6px;
	   		padding:0 22px;
	   		font-size:10px;
	   		color:#555;
	   }
button{
		background-color:#3BAF9F;
		display:block;
		margin:20px 0px 20px 0px;
		text-align:center;
		border-radius:12px;
		border:2px solid #366473;
		padding:14px 110px;
		outline:none;
		color:white;
		cursor:pointer;
		transition:0.25px;
	}
 button:hover{
 	background-color: #5390F5;
 }

</style>
</head>
<body>
	<div class="">
	<div class="container">
<div class="navigation">
<nav>
	<ul>
		<li><a href="indexproject.html">Home</a></li>
		<li><a href="product.html">Products</a></li>
		<li><a href="aboutus.html">About Us</a></li>
		<li><a href="formvalidation.php">Contact</a></li>
		<li><a href="Logout.php">Logout</a></li>
	</ul>
</nav>
<img src="cart11.png" alt="pic" width="30px" height="30px">
</div>
</div>
</div>
<?php
	// include'formvalidation.php';
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
	<div class="regform"><h1>Feedback Form</h1></div>
		<div class="main">
			<form name="validation" method="POST" action="formvalidation.php">
				<h2 class="name">Customer ID</h2>	
			<input class="id" type="text" name="id" required="required">

				
					<h2 class="name">Name</h2>
			<input class="name1" type="text" name="name1" required="required"><br>


		<h2 class="name">Email</h2>	
			<input class="Email" type="text" name="email" required="required">

		<h2 class="name">Phone</h2>
			<input class="number" type="number" name="phone" min="0" >
			<label class="Phone-Number">Phone Number</label>

		<!-- <h2 class="name">Area code</h2>
			<input type="number" name="code" min="0">
			<label class="area-code">Area Code</label> -->

		<h2 class="name">Gender</h2>
			<select class="option" id="gender" name="gender" value="gender">
			<option value="">Select Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
			<option value="Others">Others</option>
		</select>
<h2 id="Existing Customor" >Any Suggestions Regardig Services</h2>
	<label name="r" class="radio" value="radio"></label>
		<input type="radio" name="check" value="yes">
		<span class="Checkmark"></span>
		Yes
		
	<label name="r" class="radio"></label>
		<input type="radio" name="check" value="no">
		<span class="Checkmark"></span>
		No
		
	<h2 class="name">Enter your Feedbacks</h2><br>
			<input class="enter" type="text" name="enter">


	<button type="submit" name="validate" value="submit" onclick="validationform()" >Submit</button>
	</form>
</div>
	<p id="result"></p>
	<script type="text/javascript">
		function validationform(){
			fstname=document.validation.firstname.value;
			lstname=document.validation.lastname.value;
			email=document.validation.email.value;
			phone=document.validation.phone.value;
			acode=document.validation.code.value;
			group=document.validation.gender.value;
			check= document.validation.check;
			enter=document.validation.enter.value;
			elements = document.getElementsByName("r");
			var statusText="";
			var optioncheck="";
			if (fstname=="") {
				alert("Please enter firstname");
				return false;
			}

			if (lstname=="") {
				alert("Please enter lastname");
				return false;
			}

			if (email=="") {
				alert("Please enter email");
				return false;
			}
			if (phone=="") {
				alert("Please enter phone number");
				return false;
			}

			if (acode=="") {
				alert("Please enter code");
				return false;
			}

			if (group=="-1") {
				alert("Please select gender");
				return false;
			}

			for (var i=0; i<check.length; i++) {
			if (check[i].checked){
				optioncheck=check[i].value;
				break;
				}
			}

			if (i==check.length){
			return alert("No radio button is checked");
			return false;
			}
               
			for (var index=0;index < elements.length;index++){
				          
           	statusText += elements[index].value+"-"+elements[index].checked+"<br />";

    		}

			return (document.getElementById('result').innerHTML=fstname+" "+lstname+" "+email+" "+phone+" "+acode+""+group+" "+optioncheck+" "+statusText);

		}
	</script>
</body>
</html>