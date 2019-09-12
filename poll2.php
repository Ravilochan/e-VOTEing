<?php

$con=mysqli_connect("localhost","id8538355_testdb01","poll2","id8538355_testdb1");

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
		<!-- start trending -->
		<div id="trending" class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounce">
						<h2> MVSR FINE ARTS CLUB </h2>
						<form action="poll2.php" method="post">
					</div><p> MVSR Eng COLLEGE 's Legacy of featuring atmost entertainment club is now re-appointing its HEAD ,
					VOTE for your HEAD , every vote does count , please do utilise them in such way.</p>
					<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
						<div class="plan plan_one">
							<h4 class="plan_title"> Nikhil Raj </h4>
							<ul>
								<li> IT - B 3/4 </li>
								<li> Prominent member form 1st year </li>
								<li> 3 yr member</li>
								<li> NO Experience as HEAD </li>
								<li> D : Acting </li>
							</ul><input type="submit" name="nikhil" class="btn btn-warning" value="VOTE NOW"/>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.9s">
						<div class="plan plan_two">
							<h4 class="plan_title"> Pavan </h4>
							<ul>
								<li> CSE -A 3/4 </li>
								<li> NO experience </li>
								<li> 1 yr Membership </li>
								<li> D : Photography </li>
								
							</ul>
							<input type="submit" name="pavan" class="btn btn-warning" value="VOTE NOW"/>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInDown" data-wow-delay="1s">
						<div class="plan plan_three">
							<h4 class="plan_title"> Shivani </h4>
							<ul>
								<li> CSE - C 3/4 </li>
								<li> CO-Head MVSR FAC 2017</li>
								<li> 3 yr of membership  </li>
								<li> 1 yr experienced Leader </li>
								
								<li> D : Dance  </li>
							</ul>
							<input type="submit" name="shivani" class="btn btn-warning" value="VOTE NOW" onclick="window.location.href='result2.php'"/>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-delay="1.3s">
						<div class="plan plan_four">
							<h4 class="plan_title"> Rekha </h4>
							<ul>
								<li> ECE - A 3/4 </li>
								<li> 1 yr membership </li>
								<li> no Experience</li>
								<li> D : Acting, Dance , Choerography.</li>
						
							</ul>
							<input type="submit" name="rekha" class="btn btn-warning" value=" VOTE NOW"/>
						</div>
					</div>
				</div></form>
			</div>
		</div>
		<!-- end trending-->
		 <div class="col-sm-2 col-sm-offset-5 wow bounce"><button class="btn btn-warning" onclick="window.location.href='result2.php'"> RESULTS SO FAR !! </button>
		</div><br><br><br>

<div id="results">
		<div class="container">
					<div class="col-md-6 col-sm-6 col-sm-offset-3 wow fadeInRight" data-wow-delay="0.9s">
					<h4> Results :</h4>
					<br><br>
				
						<span class="text-top"> Nikhil Raj <small> 46 % </small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 46%"></div>
							</div>
						<span> Pavan Sri Ram <small> 22 % </small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 22%"></div>
							</div>
						<span> Shivani Reddy <small> 9 % </small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 9% "></div>
							</div>
						<span> Rekha Rao <small> 23 % </small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 23%"></div>
							</div>
					</div>
				</div>
			 

		
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