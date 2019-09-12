<?php
error_reporting(E_PARSE);
 $uname=$_POST['id'];
 $pass=$_POST['pass'];
 $error="";
 $success="";
 
 if(isset($_POST['submit'])){
	 if($uname=="admin"){
	 if($pass=="password"){
		 $error="";
		 $success=" Welcome ADMIN !! ";
		header("Location:admin2.php");
	 }else{
		  $error=" Invalid Password !";
		  $success="";
	 }
	 }else{
		  $error=" Invalid User ID ";
		  $success="";
 }}


?>

<html lang="en">
	<head>
		<meta charset="utf-8">

		<title> Admin Access </title>

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
						<li><a href="#home" class="smoothScroll">HOME</a></li>
						<li><a href="signup.php" class="smoothScroll">SIGN UP</a></li>
						<li><a href="#about" class="smoothScroll">ABOUT & RESULTS</a></li>
						<li><a href="#trending" class="smoothScroll">TRENDING</a></li>
						<li><a href="#recentvoting" class="smoothScroll">RECENT VOTINGS</a></li>
						<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
						<li><a href="#team" class="smoothScroll">TEAM</a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- end navigation -->

		<!-- start home -->
		<section id="home" class="text-center">
		  <div class="templatemo_headerimage">
		    <div class="flexslider">
		      <ul class="slides">
		        <li>
		        	<img src="images/slider/1.jpg" alt="Slide 1">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000">WE are MODUS</h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span>WE give YOU right &AMP VOTE <span>
						</h2>
					    </div>
				  	</div>
		        </li>
		        <li>
		        	<img src="images/slider/2.jpg" alt="Slide 2">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"> e-VOTEing </h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span>Work on all Modern Browsers, Works on</span>
						</h2>
						<p> Jump in to make Your VOTE </p>
						
					    </div>
				  	</div>
		        </li>
		      </ul>
		    </div>
		  </div>				
		</section>
		<!-- end home -->

		<!-- start service -->
		<div id="service">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.1s">
								<i class="fa fa-laptop"></i>
							</div>
							<div class="media-body wow fadeIn">
								<h3 class="media-heading">QUICKsy Steps</h3>
								<p>Please do <a rel="nofollow" href="signup.php" target="_parent"> SIGN UP </a> to VOTE. If you are already with us, then <a rel="nofollow" href="signin.php" target="_parent"> LOG IN </a> easily.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.3s">
								<i class="fa fa-cog"></i>
							</div>
							<div class="media-body wow fadeIn">
								<h3 class="media-heading"> 24*7 </h3>
								<p> e-VOTEing never restricts you, we offer our services @ 24 x 7 . &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.6s">
								<i class="fa fa-paper-plane"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.3s">
								<h3 class="media-heading"> Directivity </h3>
								<p> Your response reaches us only and directly , no barrier , no intermediatery.&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.9s">
								<i class="fa fa-html5"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.6s">
								<h3 class="media-heading"> ANONYMOUS </h3>
								<p> Your response data is kept anonymous and preveilege is 100% secured and protected </p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.4s">
								<i class="fa fa-comments-o"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.3s">
								<h3 class="media-heading">Quick Support</h3>
								<p> We worship our users , we ever try to provide swift support and responce to our users concerns.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-4">
						<div class="media">
							<div class="media-object media-left wow fadeIn" data-wow-delay="0.8s">
								<i class="fa fa-check-circle"></i>
							</div>
							<div class="media-body wow fadeIn" data-wow-delay="0.6s">
								<h3 class="media-heading">Up to Date</h3>
								<p> Up to date , every day .&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end service -->
		
		
	<!-- start newsletter -->
		<div id="newsletter">
			<div class="container">
				<div class="row">
 					<div class="col-md-12">
						<div class="title">
							<h2 class="wow bounce"> Welcome ADMIN !!! </h2>
							<p class="wow fadeIn" data-wow-delay="0.6s"> LOG IN will provide ADMIN ACCESS <br>
							</p>
							<p class="error"><?php echo $error; ?></p> <p class="success"><?php echo $success; ?></p>
						</div>
						<form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.9s">
							<div class="col-md-3 col-sm-3"> 
							<!--<input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
							<br>--></div>
							<div class="col-md-4 col-sm-4">
							<input name="id" type="text" class="form-control"  placeholder="Enter your ID "required><br></div>
							<div class="col-md-4 col-sm-4">
								<input name="pass" type="password" class="form-control"  placeholder="Enter your password "required>
							</div>
							<br><br>
									
								<input name="submit" type="submit" class="form-control" id="submit" value="Sign In" ></div>
							
							<div class="col-md-3 col-sm-3"></div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- end newsletter -->
		
		
		<!-- start divider -->
		<div id="divider">
			<div class="container">
				<div class="row">
					<div class="col-md-1 col-sm-1"></div>
					<div class="col-md-8 col-sm-8">
						<h2 class="wow bounce">We shine <strong> leaders</strong></h2>
						<h3 class="wow fadeIn" data-wow-delay="0.6s"><mark> INNOVATIVE </mark> Ideas &amp; <mark> EFFICENT</mark> Application</h3>
						<p class="wow fadeInUp" data-wow-delay="0.9s"> We created a platform to all , to get every thing to the people , for the people !! </p>
					</div>
					<div class="col-md-2 col-sm-2"></div>
				</div>
			</div>
		</div>
		<!-- end divider -->

		<!-- start about -->
		<div id="about">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 wow fadeInLeft" data-wow-delay="0.9s">
						<h3>About <strong> e-VOTEing</strong></h3>
						<h4>Smart, Light and Adaptive</h4>
						<p>e-VOTEing is a complete solution for online election system, a 100% web based, easy to use, most convenient, user friendly.</p><p> e-VOTEing is a flexible, feature-rich responsive service ideal for all types of organizations large and small. e-VOTEing is designed the best and optimized for usage by Recreation Clubs, Social Service Clubs, Organizations, Associations, NGO, Political Parties, Societies, Home/Flat Owner Associations, Trade Unions and Educational Institutions.</p>
						<p>To achieve excellence in providing secure and efficient application responce and to create value for our clients.</p>
					</div>
					<div class="col-md-6 col-sm-6 wow fadeInRight" data-wow-delay="0.9s">
					<h4> Results :</h4>
					Winners in recent e-VOTEing held Services.
					( ONLY WINNERS are MENTIONED )
						<span class="text-top"> RaviShanker [ Best Student of the YEAR 2018 ] <small>59%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 59%;"></div>
							</div>
						<span> Ramya [ ITSA Head 2018 ] <small>81%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
							</div>
						<span> NOTA [ MVSR FAC ] <small>62%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 62%;"></div>
							</div>
						<span> Sowmya G [ CR elections CSE-1 2018 ] <small>70%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
							</div>
					</div>
				</div>
			</div>
		</div><br>
		<!-- end about -->

		
		<!-- start team -->
		<div id="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow bounce">Meet the team</h2>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
						<img src="images/team1.JPG" class="img-responsive" alt="team img">
						<h4> Developer</h4>
						<h3>RAVILOCHAN BALLA</h3>
						<p>UI Supervisor , Bootstrap & Animaitions , Content Writer , DataBase & Security Manager .</p>
						 <ul class="social-icon text-center">
           					<li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
         					 <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
       					 </ul>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.6s">
						<img src="images/team2.jpg" class="img-responsive" alt="team img">
						<h4> Manager </h4>
						<h3>SONIA KOKALA</h3>
						<p>Innovative Idealist , HTML Supervisor , Documentation & Consultancy , Maintanence associate.</p>
						 <ul class="social-icon text-center">
           					<li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
         					 <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
       					 </ul>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<img src="images/team3.jpg" class="img-responsive" alt="team img">
						<h4> ADMIN </h4>
						<h3>SOWMYA PULLAKHANDAM</h3>
						<p>Design & Layout , CSS effects , Maintanence Associate , ADMIN .</p>
						 <ul class="social-icon text-center">
           					<li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
         					 <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
       					 </ul>
					</div>
				</div>
			</div>
		</div>
		<!-- end team -->


		
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