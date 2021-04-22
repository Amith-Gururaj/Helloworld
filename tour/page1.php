<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($s_POST['submit1']))
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
<title>Tourism Management System</title>
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
		<h1>Tourism Management System</h1>
	</div>
</div>
<!--- /banner-1 ---->
<!--- privacy ---->
<div class="privacy">
	<div class="container">
										<?php 
$pagetype=$_GET['type'];
$sql = "SELECT type,detail from tblpages where type=:pagetype";
$query = $dbh -> prepare($sql);
$query->bindParam(':pagetype',$pagetype,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{
foreach($results as $result)
{		

?>


		<h3 class="wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;"><?php 	echo $_GET['type'] ?></h3>
		
	<p>
	<?php 	echo $result->detail; ?>


	</p> 
<?php } }?>
	
<div class="rom-btm">
				<h3>Privacy Policy</h3>
					<p style="color:Black;">This privacy statement is valid for the all websites hosted by Tourism Management System.<br>

                    In the following, we provide information about the collection of personally identifiable information while using our website. Personally identifiable information is all data that relates to you personally, such as name, address, e-mail addresses, or user behavior. The protection of your personally identifiable information is very important to us. If you have any questions or would like more information about our data protection, please contact us.<br>

Continuous technological development, changes in our services or the legal situation, and other reasons may require adjustments to our data protection notice. We therefore reserve the right to change this privacy statement at any time and ask that you regularly keep yourself informed of the current state.<br>

1. Your rights<br>
You have the following rights with respect to the personally identifiable information concerning you:<br>

1.1 General rights<br>
You have the right to information, correction, deletion, limitation of processing, opposition to processing, and data portability. If processing is based on your consent, you have the right to revoke it with effect for the future.<br>

1.2 Rights in the processing of data based on legitimate interests<br>
According to Article 21 (1) of the GDPR, you have the right to file an objection at any time for reasons arising out of your particular situation against the processing of personally identifiable information relating to you, pursuant to Article 6 (1) of the GDPR (data processing in the public interest) or Article 6 par. 1 f GDPR (data processing for the protection of a legitimate interest); this also applies to a profiling based on this provision. In the event of your objection, we will no longer process your personally identifiable information unless we can establish compelling and legitimate grounds for processing that outweigh your interests, rights and freedoms, or if the processing aids the enforcing, exercising or defending of legal claims.<br>

1.3 Rights in direct advertising<br>
If we process your personally identifiable information for the purpose of direct advertising, you have the right according to Article 21 par. 2 GDPR to object at any time to the processing of personally identifiable information relating to you for the purpose of such advertising; this also applies to profiling, where appropriate, insofar as it is associated with such direct advertising.<br>

In the event of your objection to processing for the purpose of direct advertising, we will no longer process your personally identifiable information for these purposes.<br>

1.4 Right to complain to a supervisory authority<br>
You also have the right to complain to a relevant data protection supervisory authority about our processing of your personally identifiable information.
 </p>

				</div>
		
		
	</div>
</div>
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