<?php

$con=mysqli_connect("localhost","root","","mypoll");

if(isset($_POST['nikhil']))
{
	$vote_nikhil= "update poll2 set nikhil=nikhil+1";
	$run_nikhil= mysqli_query($con,$vote_nikhil);
	
	if($run_nikhil){
		echo "<h2 align='center'> Your vote has been cast to Nikhil Raj ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
}}
 if(isset($_POST['pavan']))
{
	$vote_pavan= "update poll2 set pavan=pavan+1";
	$run_pavan= mysqli_query($con,$vote_pavan);
	
	if($run_pavan){
		echo "<h2 align='center'> Your vote has been cast to Pavan Sri Ram ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
}}

if(isset($_POST['shivani']))
{
	$vote_shivani= "update poll2 set shivani=shivani+1";
	$run_shivani= mysqli_query($con,$vote_shivani);
	
	if($run_shivani){
		echo "<h2 align='center'> Your vote has been cast to Shivani Reddy ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
}}

if(isset($_POST['rekha']))
{
	$vote_rekha= "update poll2 set rekha=rekha+1";
	$run_rekha= mysqli_query($con,$vote_rekha);
	
	if($run_rekha){
		echo "<h2 align='center'> Your vote has been cast to Rekha Rao ! </h2>";
		echo "<a href='poll2.php?results'> Live Results so far ! </a>";
}}

 if(isset($_GET['results']))
 { 
  $get_votes=" select * from poll2";
  $run_votes= mysqli_query ($con,$get_votes);
  $row_votes= mysqli_fetch-array($run_votes);
  
  $nikhil=$row_votes['nikhil'];
    $pavan=$row_votes['pavan'];
	 $shivani=$row_votes['shivani'];
	  $rekha=$row_votes['rekha'];
	  
	  $count=$nikhil+$pavan+$shivani+$rekha;
	  
	  $per_nikhil= round($nikhil*100/$count)."%";
	  $per_pavan= round($pavan*100/$count)."%";
	  	  $per_shivani= round($shivani*100/$count)."%";
		  	  $per_rekha= round($rekha*100/$count)."%";
			  
		echo"
		<div class='wow fadeInDown' style:'text-align:center;>
		<center>
		<h2> Live Result So Far : </h2>
		<p> <b> Nihkil Raj : </b> $nikhil ($per_nikhil)</p><br>
		<p> <b> Pavan Sri Ram : </b> $pavan ($per_pavan)</p><br>
		<p> <b> Shivani Reddy : </b> $shivani ($per_shivani)</p><br>
		<p> <b> Rekha Rao : </b> $rekha ($per_rekha)</p><br>";
 }
?>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title> MVSR FAC Head 2018</title>

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/php; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
		<meta name="description" content="">

		<!-- animate -->
		<link rel="stylesheet" href="css/animate.min.css">
		<!-- bootstrap -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- font-awesome -->
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- google font -->
		<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700,800' rel='stylesheet' type='text/css'>
		<!-- custom -->
		<link rel="stylesheet" href="css/style.css">

	</head>
	<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">

		<!-- start navigation -->
		<div class="navbar navbar-fixed-top navbar-default" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
						<span class="icon icon-bar"></span>
					</button>
					<a href="index.php" class="navbar-brand"><img src="images/logo_e-vote.jpg" width="200" height="200" class="img-responsive" alt="logo"></a>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php" class="smoothScroll"> LOG OUT </a></li>
					
				</div>
			</div>
		</div>
		<!-- end navigation -->
		
		<div id="results">
		<div class="container">
					<div class="col-md-6 col-sm-6 col-sm-offset-3 wow fadeInRight" data-wow-delay="0.9s">
					<h4> Results :</h4>
					<br><br>
						<span class="text-top"> Nikhil Raj <small><?php $per_nikhil; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php $per_nikhil; ?>"></div>
							</div>
						<span> Pavan Sri Ram <small><?php $per_pavan; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php $per_pavan;?>;"></div>
							</div>
						<span> Shivani Reddy <small><?php $per_shivani; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: <?php $per_shivani; ?>;"></div>
							</div>
						<span> Rekha Rao <small><?php $per_rekha; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: <?php $per_rekha; ?>;"></div>
							</div>
							<a href="entermain1.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000"> Back to MAIN MENU </a></li>
					</div>
				</div>
			
		</div><br>

		
		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-7">
						<p>Copyright &copy; 2018 e-VOTEing</p>
						
					</div>
					<div class="col-md-4 col-sm-5">
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
							<li><a href="#" class="fa fa-pinterest"></a></li>
							<li><a href="#" class="fa fa-google"></a></li>
							<li><a href="#" class="fa fa-github"></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->


		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- bootstrap -->
		<script src="js/bootstrap.min.js"></script>
		<!-- isotope -->
		<script src="js/isotope.js"></script>
		<!-- images loaded -->
   		<script src="js/imagesloaded.min.js"></script>
   		<!-- wow -->
		<script src="js/wow.min.js"></script>
		<!-- smoothScroll -->
		<script src="js/smoothscroll.js"></script>
		<!-- jquery flexslider -->
		<script src="js/jquery.flexslider.js"></script>
		<!-- custom -->
		<script src="js/custom.js"></script>

	</body>
</html> 