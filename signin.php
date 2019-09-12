<?php
error_reporting(E_PARSE);
 $host="localhost";
 $user="root";
 $password="";
 $db="sigindemo";
 
 
/*$username=stripcslashes($username);
 $password=stripcslashes($password);
 $username=mysql_real_escape_string($username);
 $password=mysql_real_escape_string($password);*/
 
 $con= mysqli_connect($host,$user,$password);
$con= mysqli_select_db($db);
 if(isset($_POST['username'])){
	 $uname=$_POST['username'];
 $password=$_POST['password'];
 
 $sql="select*from loginform where user ='".$uname."'AND Pass='".$password."' limit 1";
 
 $result=mysqli_query($sql);
 
 if(mysqli_num_rows($result)==1){
	 echo " You have Successfully Signed In ";
	header("Location:entermain1.php");
	 exit();
 }
 else{
	 echo " You Have entered an incorrect password !";
	 exit();
	 
 }
 }
 
 




?>
<html lang="en">
	<head>
		<meta charset="utf-8">

		<title> SIGN IN </title>

		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="keywords" content="">
	<!--	<meta author="ravilochan" >-->
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
						<li><a href="index.php" class="smoothScroll">HOME</a></li>
						<li><a href="signup.php" class="smoothScroll">SIGN UP</a></li>
					
				
					
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
						<a href="signup.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">SIGN UP</a>	
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
						<a href="signin.php" class="smoothScroll btn btn-default wow fadeInDown" data-wow-delay="2000">Sign IN</a>	
					    </div>
				  	</div>
		        </li>
		      </ul>
		    </div>
		  </div>				
		</section>
		<!-- end home -->
		<br><br><br>
		
		
		
		<!-- LOG IN -->
	
  
    <style>
	h2 {
	 text-align:center;
	 }
	  
	 
   
	   
	 
 
	 </style>
	<div class="container">
    <h2 class="wow bounce">Log In </h2>
   <h3 class="wow fadeIn" data-wow-delay="0.6s">Please fill in:</h3>
    		
				
<form action="#" method="post" class="wow fadeInUp" data-wow-delay="0.9s">
							
		

 <div class="col-sm-8 col-sm-offset-2"	>	
    <label for="email"><b>UserName : </b></label>
    <input type="text" placeholder="Enter Your UserName" name="username" class="form-control"required></div><br>
<div class="row">
 <div class="col-sm-8 col-sm-offset-2"	>
    <label for="psw"><b>Password :</b></label>
    <input type="password" placeholder="Enter Password" name="password" class="form-control"required></div></div><br>
<div class="row">
 <div class="col-sm-8 col-sm-offset-2"	>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>

    
    <div class="">
	<div class="col-md-2 wow fadeIn" data-wow-delay="0.3s">
      <button type="button" class="btn btn-warning">Cancel</button></div>
	  
	<!--  <div class="col-md-offset-9 col-md-3 col-sm-6 wow fadeIn" data-wow-delay="0.3s">
								<input name="submit" type="submit" class="form-control" id="submit" value="Send">
							</div>-->
   <div class="col-md-2 wow fadeIn" data-wow-delay="0.3s">  <button type="submit" class="btn btn-warning">Sign In</button></div>
    </div></div></div>
  </div><br><br>
</form> 

<br><br><br><br>
<!-- start contact -->
		<div id="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-4 wow fadeInLeft" data-wow-delay="0.6s">
						<h2><strong>e-VOTEing</strong>.com</h2>
						<p> e-VOTEing is a complete solution for online election system, a 100% web based, easy to use, most convenient, user friendly.</p><p> e-VOTEing is a flexible, feature-rich responsive service ideal for all types of organizations large and small. e-VOTEing is designed the best and optimized for usage by Recreation Clubs, Social Service Clubs, Organizations, Associations, NGO, Political Parties, Societies, Home/Flat Owner Associations, Trade Unions and Educational Institutions.</p>
						<p>To achieve excellence in providing secure and efficient application responce and to create value for our clients.</p> </p>
						<ul class="social-icon">
							<li><a href="#" class="fa fa-facebook"></a></li>
							<li><a href="#" class="fa fa-twitter"></a></li>
							<li><a href="#" class="fa fa-instagram"></a></li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-4 wow fadeIn" data-wow-delay="0.9s">
						<address>
							<h3> IF your really wanna MEET US </h3>
							<p><i class="fa fa-map-marker too-icon"></i> Mail US , We reply you ASAP !! </p>
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
						<h4> Maintanence</h4>
						<h3> SONIA KOKALA</h3>
						<p> Innovative Idealist , HTML Supervisor , Documentation & Consultancy , Maintanence associate.</p>
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
						<h3> SOWMYA PULLAKHANDAM</h3>
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
</body>

 
</html>
		
		