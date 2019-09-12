<?php
error_reporting(E_PARSE);
 $uname=$_POST['username'];
 $pass=$_POST['password'];
 $error="";

 
 if(isset($_POST['submit'])){
	 if($uname=="user"){
	 if($pass=="user"){
		 $error="";
		
		header("Location:entermain1.php");
	 }else{
		  $error=" Invalid Password !";
		
	 }
	 }else{
		  $error=" Invalid User ID ";
		 
 }}


?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title> e-VOTEing </title>

		
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
						<li><a href="#portfolio" class="smoothScroll">RECENT VOTINGS</a></li>
						<li><a href="#contact" class="smoothScroll"> YOU & WE </a></li>
					
						<li><a href="admin1.php" class="smoothScroll">ADMIN</a></li>
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
					      <h1 class="wow fadeInDown" data-wow-delay="2000"> wE are MODUS</h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span>WE give YOU right &AMP VOTE <span>
						</h2>
						<a href="signup.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">SIGN UP</a>	
					    </div>
				  	</div>
		        </li>
		        <li>
		        	<img src="images/slider/2.jpg" alt="Slide 2">
		        	<div class="slider-caption">
					    <div class="templatemo_homewrapper">
					      <h1 class="wow fadeInDown" data-wow-delay="2000"> e-VOTing </h1>
					      <h2 class="wow fadeInDown" data-wow-delay="2000">
							<span> POWER WITHIN YOUR HANDS </span>
						</h2>
						<p> Jump in to make Your VOTE </p>
						<a href="signin.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Sign IN</a>	
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
							<h2 class="wow bounce"> Make your VOTE </h2>
							<p class="wow fadeIn" data-wow-delay="0.6s"> WELCOME !! LOG IN to access all our services .</p>
						</div>
						<form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.9s">
							<div class="col-md-3 col-sm-3"> <?php echo "$error"; ?>
							<!--<input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
							<br>--></div>
							<div class="col-md-4 col-sm-4">
							<input name="username" type="text" class="form-control" id="username" placeholder="Enter your Username / ID "><br></div>
							<div class="col-md-4 col-sm-4">
								<input name="password" type="password" class="form-control" id="password" placeholder="Enter your password ">
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
					<p> Winners !! In recent e-VOTEing held. 
						<span class="text-top"> Aditya Kiran [ IEEE SCE 2018 ]  <small>90%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
							</div>
						<span> Manoj Reddy [ CR Elections IT 2/4 2017 ] <small>50%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;"></div>
							</div>
						<span> Shyam [ CSI-MVSR SLE 2017 ] <small>78%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%;"></div>
							</div>
						<span> Rachana [ CR Elections IT 3/4 2017 ]<small>60%</small></span>
							<div class="progress">
								<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;"></div>
							</div>
					</div>
				</div>
			</div>
		</div><br>
		<!-- end about -->

		<!-- start trending -->
		<div id="trending" class="text-center">
			<div class="container">
				<div class="row">
					<div class="col-md-12 wow bounce">
						<h2>Our Trending </h2>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInLeft" data-wow-delay="0.6s">
						<div class="plan plan_one">
							<h4 class="plan_title"> CR - IT-B 2/4</h4>
							<ul>
								<li>Class Representative 2018</li>
								<li> Choose Your CR </li>
								<li> BEGINS : 27/09/2018</li>
								<li> HURRY UP !</li>
								<li> Available for 24hr only!!</li>
							</ul>
							<button class="btn btn-warning" onclick="window.location.href='signin.php'">VOTE NOW</button>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInUp" data-wow-delay="0.9s">
						<div class="plan plan_two">
							<h4 class="plan_title"> MVSR Fine Arts Club </h4>
							<ul>
								<li> We are making new HEAD </li>
								<li> From 3rd years  </li>
								<li>  Pretty HARD competition </li>
								<li> ONE and Only position !! </li>
								<li>12-hr response only !!</li>
								<li> Hurry up!! </li>
								<li> Live Results so far !!</li>
							</ul>
							<button class="btn btn-warning" onclick="window.location.href='signin.php'">VOTE NOW</button>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInDown" data-wow-delay="1s">
						<div class="plan plan_three">
							<h4 class="plan_title"> CSI Student Chapter 2018</h4>
							<ul>
								<li> CSI-MVSR </li>
								<li> Student Body Elections 2018</li>
								<li> 60 Nominees </li>
								<li> 4 Positions</li>
								<li> Only CSI members are eligible </li>
								<li> HURRY UP !! 1-hr response ONLY ! </li>
							</ul>
							<button class="btn btn-warning" onclick="window.location.href='signin.php'">VOTE NOW</button>
						</div>
					</div>
					<div class="col-sm-6 col-md-3 wow fadeInRight" data-wow-delay="1.3s">
						<div class="plan plan_four">
							<h4 class="plan_title"> New TIMETABLE (Sem-3)Election.</h4>
							<ul>
								<li> Select your own class Timetable </li>
								<li> 4 options </li>
								<li> 1 - Choice </li>
								<li> Its not a matter of You,</li>
								<li> Its of you all !! </li>
								<li> 1 week of responce time only !! </li>
							</ul>
							<button class="btn btn-warning" onclick="window.location.href='signin.php'">VOTE NOW</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end trending-->

		<!-- start recentvotings -->
		<div id="portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<h2 class="wow bounce">Recent e-VOTEing s</h2>
							<div class="iso-section wow fadeIn" data-wow-delay="0.6s">

								<ul class="filter-wrapper clearfix">
                   					 <li><a href="#portfolio" data-filter="*" class="selected opc-main-bg">All</a></li>
                   					 <li><a href="#portfolio" class="opc-main-bg" data-filter=".graphic">Academic</a></li>
                   					 <li><a href="#portfolio" class="opc-main-bg" data-filter=".photoshop"> Recreation & Fun</a></li>
                    				<li><a href="#portfolio" class="opc-main-bg" data-filter=".wallpaper"> Student Bodies</a></li>
               					 </ul>

               				 	<div class="iso-box-section">
               				 		<div class="iso-box-wrapper col4-iso-box">

               				 			<div class="iso-box graphic photoshop wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img1.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="#" class="fa fa-search"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4> MVSR CINEMAscope </h4>
               				 							<p> Young cheering, Enthusisastic , amazing cinema-makers Den. </p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img2.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="#" class="fa fa-search"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4> Proffesional Elective BE 3/4 IT </h4>
               				 							<p> Opt your Prof.Elective for SEM-3 .</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img3.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="#" class="fa fa-search"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4> Field Tour BE 3/4</h4>
               				 							<p> Vote for your intreseted place to visit your 2018 feild tour.
														this comes once.. This Year !!</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img4.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="#" class="fa fa-search"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 								<h4> Open Elective BE 3/4 </h4>
               				 							<p> Select your Open Elective For this SEM-3 BE 3/4 IT.</p>
               				 						</div>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box wallpaper col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img5.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="#" class="fa fa-search"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4> Board of Directors  </h4>
               				 							<p>  Level-1 Board of Directors Election.</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 			<div class="iso-box graphic photoshop col-md-4 col-sm-6 col-xs-12">
               				 				<div class="portfolio-thumb">
               				 					<img src="images/portfolio-img6.jpg" class="fluid-img" alt="portfolio img">
               				 						<div class="portfolio-overlay">
               				 							<a href="#" class="fa fa-search"></a>
               				 							<a href="#" class="fa fa-link"></a>
               				 							<h4> Science Day @018 </h4>
               				 							<p> Vote for the best project , you see and we present them with our prize.
														Hurry UP !!</p>
               				 						</div>
               				 				</div>
               				 			</div>

               				 		</div>
               				 	</div>

							</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end recentvotings -->

		<!-- start contact -->
		<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
						<h2>e-VOTEing   .com</h2>
						<p> To overcome all the difficulties being faced in traditional methods of voting by a simple, easy and flexible 24*7 available Service.</p>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<address>
							<h3> IF your really wanna MEET US </h3>
							<p><i class="fa fa-map-marker too-icon"></i> Hyderabad</p>
							<p><i class="fa fa-phone too-icon"></i> (+91)7901051813</p>
							<p><i class="fa fa-envelope-o too-icon"></i> ravilochan2000@gmail.com</p>
						</address>
					</div>
					<form action="#" method="post" class="col-md-6 col-sm-4" id="contact-form" role="form">
							<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
								<input name="name" type="text" class="form-control" id="name" placeholder="Name">
							</div>
							<div class="col-md-6 col-sm-12 wow fadeIn" data-wow-delay="0.3s">
								<input name="email" type="email" class="form-control" id="email" placeholder="Email">
							</div>
							<div class="col-md-12 col-sm-12 wow fadeIn" data-wow-delay="0.9s">
								<textarea name="message" rows="5" class="form-control" id="message" placeholder="Message"></textarea>
							</div>
							<div class="col-md-offset-9 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
								<input name="submit" type="submit" class="form-control" id="submit" value="Send">
							</div>
					</form>
				</div>
			</div>
		</div>
		<!-- end contact -->
		<!-- start team -->
		<div id="team">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2 class="wow bounce">Meet the team</h2>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.3s">
						<img src="images/team1.JPG" class="img-responsive" alt="team img">
						<h4> Developer </h4>
						<h3>RAVILOCHAN BALLA</h3>
						<p> UI Supervisor , Bootstrap & Animaitions , Content Writer , DataBase & Security Manager .</p>
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
						<p> Innovative Idealist , HTML Supervisor , Documentation & Consultancy , Maintanence associate. </p>
						 <ul class="social-icon text-center">
           					<li><a href="#" class="wow fadeInUp fa fa-facebook" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeInDown fa fa-twitter" data-wow-delay="2s"></a></li>
          					 <li><a href="#" class="wow fadeIn fa fa-instagram" data-wow-delay="2s"></a></li>
         					 <li><a href="#" class="wow fadeInUp fa fa-pinterest" data-wow-delay="2s"></a></li>
       					 </ul>
					</div>
					<div class="col-md-4 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<img src="images/team3.jpg" class="img-responsive" alt="team img">
						<h4> Administrater </h4>
						<h3>SOWMYA PULLAKHANDAM</h3>
						<p> Design & Layout , CSS effects , Maintanence Associate , ADMIN .</p>
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
