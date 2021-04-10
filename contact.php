<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
}

}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>SafeTravel</title>
<link rel="apple-touch-icon" sizes="180x180" href="css/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="css/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="css/favicon/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Tourism Management System In PHP" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" href="css/icofont/icofont.min.css">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>
</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">
	<div class="container">
		<h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">O călătorie de o mie de mile începe cu un singur pas.</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<<section class="intro">
	<div class="container">
		<div class="intro-wrap bg-white w-100">
			<div class="row no-gutters">
				<div class="col-lg-4 col-md-4">
					<div class="intro-item">
						<i class="icofont-google-map"></i>
						<h3 class="mt-3">Vino la sediul nostru!</h3>
						<p>Nu ai încredere în mediul online? Ai prefera o întâlnire face to face cu unul dintre consultanții noștri? Atunci birourile noastre din Oradea, București și Sibiu sunt deschise pentru tine între orele 9-17. Vino să discutâm la o cafea planurile tale de vacanță! </p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="intro-item bg-gray ">
						<i class="icofont-telephone"></i>
						<h3 class="mt-3">Contact telefonic </h3>
						<p>Nu vrei să aștepți până ce unul dintre consultanții noștri iți va răspunde la e-mail? Sună la numărul +40712345789. Linia telefonică este deschisă între 9-17 de Luni până Vineri. Din cauza numărului mare de apeluri, timpul de așteptare este intre 5-10 minute. </p>
					</div>
				</div>

				<div class="col-lg-4 col-md-4">
					<div class="intro-item" >
						<i class="icofont-users-social"></i>
						<h3 class="mt-3">Social Media</h3>
						<p>Din 2019 ne puteți găsi pe Facebook și Twitter! Ne puteți contacta și pe aceste platforme. De asemenea, am fi foarte recunoscători dacă ne-ați lăsa o recenzie pe Facebook. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>