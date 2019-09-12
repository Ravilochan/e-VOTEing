<?php

$con=mysqli_connect("localhost","root","","mypoll");

if(isset($_POST['ravi']))
{
	$vote_ravi= "update poll3 set ravi=ravi+1";
	$run_ravi= mysqli_query($con,$vote_ravi);
	
	if($run_ravi){
		echo "<h2 align='center'> Your vote has been cast to Ravi  ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";
		header("Location:result3.php");
}}
 if(isset($_POST['kaushal']))
{
	$vote_kaushal= "update poll3 set kaushal=kaushal+1";
	$run_kaushal= mysqli_query($con,$vote_kaushal);
	
	if($run_kaushal){
		echo "<h2 align='center'> Your vote has been cast to Kaushal ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";header("Location:result3.php");
}}

if(isset($_POST['indhu']))
{
	$vote_indhu= "update poll3 set indhu=indhu+1";
	$run_indhu= mysqli_query($con,$vote_indhu);
	
	if($run_indhu){
		echo "<h2 align='center'> Your vote has been cast to Indhu Reddy ! </h2>";
		echo "<a href='#results'> Live Results so far ! </a>";header("Location:result3.php");
}}

if(isset($_POST['rishi']))
{
	$vote_rishi= "update poll3 set rishi=rishi+1";
	$run_rishi= mysqli_query($con,$vote_rishi);
	
	if($run_rishi){
		echo "<h2 align='center'> Your vote has been cast to Rishi  ! </h2>";
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
		<h2> Live Result So Far : </h2></center>
		<p> <b> Nihkil Raj : </b> $ravi ($per_ravi)</p><br>
		<p> <b> kaushal Sri Ram : </b> $kaushal ($per_kaushal)</p><br>
		<p> <b> indhu Reddy : </b> $indhu ($per_indhu)</p><br>
		<p> <b> rishi Rao : </b> $rishi ($per_rishi)</p><br></div>";  
		
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
						<h2>  CSI MVSR Student Body Elections 2018 </h2>
						<form action="poll3.php" method="post">
					</div><p> MVSR Eng COLLEGE in associate CSI , Student Chapter Body is helding an election for its HEAD ,Vice-Chairperson, Sub-Head ,etc .
					</p><br>
					<p> THIS IS ONLY TO THE STUDENT HEAD [ STUDENT CHAPTER PUPIL LEADER ].</P>
					<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
						<div class="plan plan_one">
							<h4 class="plan_title"> RaviLochan</h4>
							<ul>
								<li> IT - B 2/4 </li>
								<li> Prominent member form 1st year </li>
								<li> 2 yr member</li>
								<li> NO Experience as HEAD </li>
								<li> S : Problem Solving , Code Mastering </li>
							</ul><input type="submit" name="ravi" class="btn btn-warning" value="VOTE NOW"/>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.9s">
						<div class="plan plan_two">
							<h4 class="plan_title"> Kaushal </h4>
							<ul>
								<li> CSE -A 3/4 </li>
								<li> NO experience </li>
								<li> 1 yr Membership </li>
								<li> S : N/A </li>
								
							</ul>
							<input type="submit" name="kaushal" class="btn btn-warning" value="VOTE NOW"/>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInDown" data-wow-delay="1s">
						<div class="plan plan_three">
							<h4 class="plan_title"> Indhu </h4>
							<ul>
								<li> CSE - C 3/4 </li>
								<li> CO-Head MVSR CSI 2017</li>
								<li> 3 yr of membership  </li>
								<li> 1 yr experienced Leader </li>
								
								<li> S : Leader , Problem Solving. </li>
							</ul>
							<input type="submit" name="indhu" class="btn btn-warning" value="VOTE NOW" onclick="window.location.href='result2.php'"/>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-delay="1.3s">
						<div class="plan plan_four">
							<h4 class="plan_title"> Rishi </h4>
							<ul>
								<li> CSE - A 3/4 </li>
								<li> 1 yr membership </li>
								<li> no Experience</li>
								<li> S : N/A</li>
						
							</ul>
							<input type="submit" name="rishi" class="btn btn-warning" value=" VOTE NOW"/>
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
				
						<span class="text-top"> RaviLochan <small><?php $per_ravi; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%"></div>
							</div>
						<span> Kaushal Sri Ram <small><?php $per_kaushal; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 11%"></div>
							</div>
						<span> Indhu Reddy <small><?php $per_indhu; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 2%"></div>
							</div>
						<span> Rishi Rao <small><?php $per_rishi; ?></small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 27%"></div>
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