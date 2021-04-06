<?php
	
	if(isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$loan = $_POST['loan'];
		$state = $_POST['state'];
		$city = $_POST['city'];
		$pin = $_POST['pin'];
		$job = $_POST['job'];
		
			/*$filename = $_FILES['uimage']['name'];
			$imgDest = "../assets/img/user-images/".$filename;
			move_uploaded_file($_FILES['uimage']['tmp_name'],$imgDest);*/ 



		$registerQueryDetails = "INSERT INTO userdetails(firstname,lastname,loan,email,state,city,phone,pin,job) VALUES ('$firstname','$lastname','$loan','$email','$state','$city','$phone','$pin','$job')";

		$success1 = mysqli_query($con , $registerQueryDetails);
		


		


	}




?>