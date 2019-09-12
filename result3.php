
<?php

$con=mysqli_connect("localhost","root","","mypoll");

if(isset($_POST['ravi']))
{
	$vote_ravi= "update poll3 set ravi=ravi+1";
	$run_ravi= mysqli_query($con,$vote_ravi);
	
	if($run_ravi){
		echo "<h2 align='center'> Your vote has been cast to ravi Raj ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
}}
 if(isset($_POST['kaushal']))
{
	$vote_kaushal= "update poll3 set kaushal=kaushal+1";
	$run_kaushal= mysqli_query($con,$vote_kaushal);
	
	if($run_kaushal){
		echo "<h2 align='center'> Your vote has been cast to kaushal Sri Ram ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
}}

if(isset($_POST['indhu']))
{
	$vote_indhu= "update poll3 set indhu=indhu+1";
	$run_indhu= mysqli_query($con,$vote_indhu);
	
	if($run_indhu){
		echo "<h2 align='center'> Your vote has been cast to indhu Reddy ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
}}

if(isset($_POST['rishi']))
{
	$vote_rishi= "update poll3 set rishi=rishi+1";
	$run_rishi= mysqli_query($con,$vote_rishi);
	
	if($run_rishi){
		echo "<h2 align='center'> Your vote has been cast to rishi Rao ! </h2>";
		echo "<a href='poll3.php?results'> Live Results so far ! </a>";
}}

 if(isset($_GET['results']))
 { 
  $get_votes=" select * from poll3";
  $run_votes= mysqli_query ($con,$get_votes);
  $row_votes= mysqli_fetch-array($run_votes);
  
  $ravi=$row_votes['ravi'];
    $kaushal=$row_votes['kaushal'];
	 $indhu=$row_votes['indhu'];
	  $rishi=$row_votes['rishi'];
	  
	  $count=$ravi+$kaushal+$indhu+$rishi;
	  
	  $per_ravi= round($ravi*100/$count)."%";
	  $per_kaushal= round($kaushal*100/$count)."%";
	  	  $per_indhu= round($indhu*100/$count)."%";
		  	  $per_rishi= round($rishi*100/$count)."%";
			  
		echo"
		<div class='wow fadeInDown' style:'text-align:center;>
		<center>
		<h2> Live Result So Far : </h2>
		<p> <b> Nihkil Raj : </b> $ravi ($per_ravi)</p><br>
		<p> <b> kaushal Sri Ram : </b> $kaushal ($per_kaushal)</p><br>
		<p> <b> indhu Reddy : </b> $indhu ($per_indhu)</p><br>
		<p> <b> rishi Rao : </b> $rishi ($per_rishi)</p><br>";
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
						<span class="text-top"> RaviLochan <small><?php $per_ravi; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 67%"></div>
							</div>
						<span> Kaushal  <small><?php $per_kaushal; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:11%"></div>
							</div>
						<span> Indhu Reddy <small><?php $per_indhu; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width:9%"></div>
							</div>
						<span> Rishi Rao <small><?php $per_rishi; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:13%"></div>
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