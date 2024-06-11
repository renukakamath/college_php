<?php include 'connection.php';
$cid=$_SESSION['college_id'];
extract($_GET);




 ?>
<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<a href="college_managecourse.php"> Manage Course</a>
<a href="college_managelibrary.php"> Manage Library</a>
<a href="college_managegrounds.php">Manage Grounds</a>
<a href="college_managelabs.php">Manage Labs</a>
<a href="college_manageactivity.php">Manage Activities</a>
<a href="college_manageawards.php">Manage Awards</a>
<a href="college_viewrequests.php">View Request</a>
<a href="college_viewenqiry.php"> View Enquiry</a>
<a href="public_login.php">Logout</a> -->
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>College</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="js/modernizer.js"></script>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version"> 

	<!-- Modal -->
	
	
    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->	
	
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container-fluid">
				
				<div class="collapse navbar-collapse" id="navbars-host">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a class="nav-link" href="college_home.php">Home</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Manage </a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="college_managecourse.php">Manage Course </a>
								<a class="dropdown-item" href="college_managelibrary.php">Manage Library </a>
								<a class="dropdown-item" href="college_managegrounds.php">Manage Grounds </a>
								<a class="dropdown-item" href="college_managelabs.php">Manage Labs </a>
								<a class="dropdown-item" href="college_manageactivity.php">Manage Activities </a>
								<a class="dropdown-item" href="college_manageawards.php">Manage Awards </a>
							</div>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Views</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="college_viewrequests.php">View Request</a>
								<a class="dropdown-item" href="college_viewenqiry.php">View Enquiry </a>

							</div>
						</li>
					<li class="nav-item"><a class="nav-link" href="public_login.php">Logout</a></li>
					</ul>
					
				</div>
			</div>
		</nav>
	</header>

