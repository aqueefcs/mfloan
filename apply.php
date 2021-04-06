<?php
	
	include('assets/db.php');
	include('assets/apply-handler.php');

?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">


	<title>Apply For All kinds of Loans</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>


	<!--Navbar-->

		<nav class="navbar navbar-expand-lg navbar-dark elegant-color">

		  <!-- Navbar brand -->
		  <a class="navbar-brand py-0" href="index.php"><img src="images/logo1.jpg" class="img-fluid" alt="mf"></a>

		  <!-- Collapse button -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
		    aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>

		  <!-- Collapsible content -->
		  <div class="collapse navbar-collapse" id="basicExampleNav">

		    <!-- Links -->
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="#about"><i class="fas fa-info-circle"></i> About
		          <span class="sr-only">(current)</span>
		        </a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#contact"><i class="fas fa-mobile"></i> contact</a>
		      </li>
		      

		      <!-- Dropdown -->
		      <li class="nav-item dropdown">
		        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
		          aria-haspopup="true" aria-expanded="false"><i class="fas fa-hand-holding-usd"></i> Loan Product</a>
		        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
		          <a class="dropdown-item" href="#">Home Loan</a>
		          <a class="dropdown-item" href="#">Vehicle Loan</a>
		          <a class="dropdown-item" href="#">Personal Loan</a>
		        </div>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link btn btn-danger btn-rounded btn-sm" href="apply.php">Apply Now</a>
		      </li>

		    </ul>
		    <!-- Links -->

		   
		  </div>
		  <!-- Collapsible content -->

		</nav>

	<!--/.Navbar-->


		<!-- Jumbotron -->
		<div class="jumbotron  text-center text-dark mx-2 mb-5">

		  <!-- Title -->
		  <h2 class="card-title h2 text-danger"><i class="fas fa-dot-circle"></i> Apply Now</h2>

		  <!-- Subtitle -->
		  <p class="my-4 h6 text-warning">Enter your details below and we will get back to you</p>
		  <hr class="my-10">
		  <!-- Grid row -->
		  <div class="row d-flex justify-content-center">

		    <!-- Grid column -->
		    <div class="col-xl-7 pb-2">
		    		<!-- Default form register -->
						<form class="text-center border border-light p-5" method="post" enctype="multipart/form-data">

						    <p class="h4 mb-4 text-danger">Personal <span class="text-warning">Details</span></p>
						    <?php
									if(isset($_POST['submit'])){
										if($success1)
											echo "<div class='alert alert-success text-center'> Submit Successful !</div><div class='alert alert-warning text-center'> We will Contact You soon !</div>";
										else
											echo "<div class='alert alert-danger text-center'> OOPS!! Unsuccessful !</div>";
									}
										
							?>
						    <div class="form-row mb-4">
						        <div class="col">
						            <!-- First name -->
						            <input type="text" name="firstname" id="defaultRegisterFormFirstName" class="form-control" placeholder="First name">
						        </div>
						        <div class="col">
						            <!-- Last name -->
						            <input type="text" name="lastname" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name">
						        </div>
						    </div>

						    <!-- E-mail -->
						    <input type="email" name="email" id="defaultRegisterFormEmail" class="form-control mb-4" placeholder="E-mail">

						    
						    <select class="browser-default custom-select form-control mb-4" name="loan">
						        <option value="" disabled>Choose option</option>
						        <option value="1" selected>Home Loan</option>
						        <option value="2">Personal Loan</option>
						        <option value="3">Two-vehicle Loan</option>
						        <option value="4">Three Vehicle Loan</option>
						    </select>

						    <!-- Phone number -->
						    <input type="text" name="phone" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="Phone number" aria-describedby="defaultRegisterFormPhoneHelpBlock">

						    <input type="text" name="state" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="State" aria-describedby="defaultRegisterFormPhoneHelpBlock">

						    <input type="text" name="city" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="City" aria-describedby="defaultRegisterFormPhoneHelpBlock">

						    <input type="text" name="pin" id="defaultRegisterPhonePassword" class="form-control mb-4" placeholder="Pin Code" aria-describedby="defaultRegisterFormPhoneHelpBlock">
						    

						    <select class="browser-default custom-select form-control mb-4" name="job">
						        <option value="" disabled selected>Type of Employment</option>
						        <option value="1">Salaried</option>
						        <option value="2">Self-Employment</option>
						        <option value="3">Others</option>
						    </select>

						    <!-- Sign up button -->
						    <button class="btn btn-danger my-4 btn-md" name="submit" type="submit">Submit <i class="fa fa-arrow-right"></i></button>

						   

						    <hr>

						</form>
				<!-- Default form register -->
		    </div>
		    <!-- Grid column -->

		  </div>
		  <!-- Grid row -->

		  <hr class="my-4 rgba-white-light">

		  

		</div>
		<!-- Jumbotron -->
















<!-- Footer -->
<footer class="page-footer font-small elegant-color pt-4">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase text-danger">Mahindra <span class="text-warning">Finance</span></h5>
        <p>Simple,quick and convinient loans for every little and big dream.</p>
        <img class="img-fluid mx-auto d-block" src="images/computer1.png" alt="Sample image">

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        
 
        <ul class="list-unstyled">
          <li>
            <a href="index.php">Home</a>
          </li>
          <li>
            <a href="index.php">About</a>
          </li>
          <li>
            <a href="index.php">ELigibility</a>
          </li>
          <li>
            <a href="index.php">Contact</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
       

        <ul class="list-unstyled">
          <li>
            <a href="#">Apply Now</a>
          </li>
          <li>
            <a href="index.php">Loans</a>
          </li>
          <li>
            <a href="https://www.freeprivacypolicy.com/live/dec26036-2a0b-4e92-8402-808e250b1798" target="_blank">Privacy Policy</a>
          </li>
          <li>
            <a href="#!">Terms of Use</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="index.php"> MahindraLoanFinance.com || All rights Reserved</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->







	<!-- JQuery -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Bootstrap tooltips -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
	<!-- Bootstrap core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<!-- MDB core JavaScript -->
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

</body>
</html>