<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Tourism Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<?php include('includes/header.php');?>
<div class="banner">
	<div class="container">
		<h1 class>Tourism Management System</h1>
	</div>
</div>

<!---holiday---->
<div class="container">
	<div class="holiday">

					
<?php $sql = "SELECT * from tbltourpackages order by rand() limit 1";
$query = $dbh->prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{	?>
			<div class="rom-btm">
				
					<h3>Vision</h3>
		<p style="color:Black;">
To develop technologically competent, socially resonsible and humane engineers and managers to meet the ever growing challenges of the ever growing environment </p>
		<h3>Mission</h3>
		<p style="color:Black;">1. To train students by adopting effective teaching-learning approach.<br>
		   2. To establish collaborative learning approach with Industry and Professional bodies.<br>
		   3. To develop engineers with Professional-Social ethics and creative Research Culture.</p>
		   <h3>Programme Educational Objectives - PEO's</h3>
		<p style="color:Black;">1. Graduates able to apply the knowledge of Basics Science and Core Computer science to analyze and solve real world problems.<br>2. Graduates possess professional skills needed for IT employment and pursue higher education in Computer Science and Engineering.<br>3. Graduates engage in life-long learning and adapt to changing Environment.<br>4. Graduates who can succeed as an individual or team leader in multidisciplinary avenues.</p>
<h3>Program Specific Outcomes - PSO's</h3>
		<p style="color:Black;">Graduates of Computer science & engineering are able to :<br>
			* Use new technology in solving professional problems.<br>
			* Competent in problem solving techniques.<br>
			* Use the creativity and software design knowledge in the development of Information & Technology.</p>

				</div>
<?php }} ?>
			
		
<div><a href="package-list.php" class="view">View Packages</a></div>
</div>
			<div class="clearfix"></div>
	</div>



<!--- routes ---->
<div class="routes">
	<div class="container">
		<div class="col-md-4 routes-left wow fadeInRight animated" data-wow-delay=".1s">
			<div class="rou-left">
				<a href="#"><i class="glyphicon glyphicon-list-alt"></i></a>
			</div>
			
</div>

<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>			
<!-- //write us -->
</body>
</html>