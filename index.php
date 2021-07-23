<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebMed</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
		integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


	<link rel="stylesheet" href="styles.css">
	<link rel="shortcut icon" href="images/favicon.png" />

	<!--font awesome-->
	<script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" data-auto-replace-svg="nest"></script>

	<!--fixed nav-->
	<style>
		.fixed-nav-bar {
		top: 0;
		left: 0;
		z-index: 9999;
		width: 100%;
		height: 50px;
		background-color: white;
		margin:auto;
		}

		.sticky {
		position: fixed;
		top: 0;
		width: 100%;
		z-index: 9999;
		}

		.sticky + .content {
		padding-top: 102px;
		}
	
	</style>


</head>

<body>
	<div class="top-container" id="top-container">
		<h2 class="hotline" id="makecall">Hotline: +8801xxxxxxxxx</h2>
		<div class="search-container">
			<form class="searchbox" action="AllSearch.php" method="post">
				<input type="search" placeholder="Find Doctors,Medicines,...." name="search" class="searchbox-input" onkeyup="buttonUp();" required />
				<input type="submit" class="searchbox-submit" name="x"/>
				<span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
			</form>
		</div>
	</div>


	<div class="navigation-container header" id="myHeader">
		<div class="navigation-bar  fixed-nav-bar" id="navigation-bar">
			<a class="fixed-navbar logo-name" href="index.php">WEBMED</a>

			<!-- navigation bars -->

			<nav>
				<ul>
					<li><a href="index.php">Home</a>
					</li>
					<li><a class="fixed-navbar" href="medi.php">Medicines</a></li>
					<li>
						<a class="fixed-navbar" href="doctor.php">Primary Doctors</a>
						<ul>
						<li><a href="CardioDoctor.php">Cardiologists</a></li>
							<li><a href="DermaDoctor.php">Dermatologists</a></li>
							<li><a href="EndoDoctor.php">Endocrinologists</a>
							<li><a href="GastroDoctor.php">Gastroenterologists</a></li>
							<li><a href="GyneDoctor.php">Gynecologists</a></li>
							<li><a href="MediDoctor.php">Medicine doctors</a></li>
							<li><a href="NeuroDoctor.php">Neurologists</a></li>
							<li><a href="Pedidoctor.php">Peditricians</a></li>
						</ul>
					</li>
					<li><a class="fixed-navbar" href="blog.php">Blog</a></li>
					
<!-- 					<li><a class="fixed-navbar" href="#">Surgical specialists</a>
						<ul>
							<li><a href="#">Cardiothoracic surgery</a></li>
							<li><a href="#">General surgery</a></li>
							<li><a href="#">Neuro surgery</a></li>
							<li><a href="#">Paediatric surgery</a></li>
							<li><a href="#">plastic surgery</a></li>
							<li><a href="#">Urological surgery</a></li>
						</ul>
				  </li> -->

<!-- 				  <li><a class="fixed-navbar" href="#">Others</a>
				  	<ul>
				  		<li><a href="#">Blog</a></li>
				  		<li><a href="#">Research</a></li>
				  		<li><a href="#">Weekly health advice</a></li>
				  	</ul>
				  </li> -->
					<li><a class="fixed-navbar" href="#contact">Contact</a></li>
				</ul>
			</nav>

			<!-- end of navigation bars -->

		</div>
	</div>

	<!-- end of navbar -->
		<!-- header -->
	<header class="home" id="home">
		<div class="banner-container">
			<div class="banner-image">
				<img class="header-image" src="images/banner_img.png" alt="home image">
			</div>
			<div class="banner">
				<p class="banner-text">Your health is our first priority.</p>
				<h1><span class="span-banner-text">Best</span> Care <span class="span-banner-text">&</span> <br><span class="span-banner-text">Better</span> Doctor</h1>
				<p class="banner-text down">To ensure good health - eat lightly, breathe deeply, live moderately, cultivate
					cheerfulness and maintain an
					interest in life.</p>
			</div>
			<div class="banner-button">
				<button class="title-button" id="open" data-toggle="modal" data-target="#appointment">Make an appointment</button>
			</div>
		</div>
	</header>

	<!-- Modal -->
	<div id="appointment" class="modal fade" role="dialog" style="z-index: 10000;">
		<div class="modal-dialog modal-lg" role="content">

			<div class="modal-content">
				<div class="modal-header" style="background-color:  #0f3057;color: white;">
					<h4 class="modal-title">Book an Appointment</h4>
					<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				<div class="modal-body">
					<form name="myform" method="POST" style="color: rgb(105, 98, 98);">
						<div class="form-row ">

							<div class="col-12 col-md-3 text-weight-bolder  ">
								<label for="">Name</label>

							</div>
							<div class="col-12 col-md-9 text-weight-bolder ">
								<input type="text" name="pname" autocomplete="off" placeholder="Patient's Name">

							</div>


						</div>

						<div class="form-row ">
							<div class="col-12 col-md-3 text-weight-bolder ">
								<label for="">Email</label>

							</div>
							<div class="col-12 col-md-9 text-weight-bolder ">
								<input type="email" name="email" autocomplete="off" placeholder="Enter Email" onclick="validateForm()">

							</div>
						</div>

						<div class="form-row ">
							<div class="col-12 col-md-3 text-weight-bolder py-1">
								<label for="">Contact No.</label>

							</div>
							<div class="col-12 col-md-9 text-weight-bolder py-1">
								<input type="text" name="contact" autocomplete="off" placeholder="Enter Mobile No.">

							</div>
						</div>
						<div class="form-row ">
							<div class="col-12 col-md-3 text-weight-bolder py-1">
								<label for="">Doctors</label>

							</div>
							<div class="col-12 col-md-9 text-weight-bolder py-1">
								<select name="doctor" id="" style="color:  rgb(105, 98, 98);">
									<option value="Doctor">Doctor</option>
									<option value="Dr.Abraham Erskine">Dr.Abraham Erskine</option>
									<option value="Dr.Andrew Doe">Dr.Andrew Doe</option>
									<option value="Dr.Anna Cuberton">Dr.Anna Cuberton</option>
									<option value="Dr.Beryl Wilde">Dr.Beryl Wilde</option>
									<option value="Dr.Christine Palmer">Dr.Christine Palmer</option>
									<option value="Dr.Erik Selvig">Dr.Erik Selvig</option>
									<option value="Dr.H.Johnson">Dr.H.Johnson</option>
									<option value="Dr.Helen Cho">Dr.Helen Cho</option>
									<option value="Dr.Jane Foster">Dr.Jane Foster</option>
									<option value="Dr.Jean Grey">Dr.Jean Grey</option>
									<option value="Dr.Katie Fischer">Dr.Katie Fischer</option>
									<option value="Dr.Madeline Jay">Dr.Madeline Jay</option>
									<option value="Dr.Sam Smith">Dr.Sam Smith</option>
									<option value="Dr.Samuel Norman">Dr.Samuel Norman</option>
									<option value="Dr.Stephen Hilton">Dr.Stephen Hilton</option>
									<option value="Dr.Tony Banner">Dr.Tony Banner</option>
								</select>

							</div>
						</div>
						<div class="form-row ">
							<div class="col-12 col-md-3 text-weight-bolder py-1">
								<label for="">Date</label>

							</div>
							<div class="col-12 col-md-9 text-weight-bolder py-1">
								<input type="date" id="date" name="date">
							</div>
						</div>

						<div class="form-row ">
							<button type="submit" class="btn  offset-md-2 m-2" name="submit" value="Submit" onclick="validateForm()"
								style="background-color: #0f3057 ;color: white;">Book an Appointment</button>
							<button type="button" class="btn btn-secondary m-2 "
								data-dismiss="modal">Cancel</button>
						</div>
					</form>

	<?php

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "modal2";

		$conn = mysqli_connect($servername, $username, $password, $dbname);


		if (!$conn) {
			die("Connection failed: ". mysqli_connect_error());
		}



if(isset($_POST['pname'])){
		$pname=$_POST['pname'];
		}
	else{
		echo "";
	}
if(isset($_POST['email'])){
	$email=$_POST['email'];
	}
	else{
		echo "";
	}
if(isset($_POST['contact'])){
		$contact=$_POST['contact'];
	}
	else{
		echo "";
	}

if(isset($_POST['doctor'])){
		$doctor=$_POST['doctor'];
		}
	else{
		echo "";
	}
if(isset($_POST['date'])){
		$date=$_POST['date'];
	}

if(isset($_POST["submit"]))
{
	if($pname!="" && $email!="" && $contact!="" && $doctor!="" && $date!="")
	{

		$query = "INSERT INTO appointment VALUES ('$pname', '$email', '$contact','$doctor','$date')";

		if (mysqli_query($conn, $query)) {
			 echo "";

		}
	}

	else{
	echo" <h3> All files required </h3>";
	}
}
mysqli_close($conn);


?>

				</div>
			</div>
		</div>
	</div>

	 <!-- end of modal-->

	<!--  find medicines -->

	<div class="middle-container">
		<div>
			<img class="drug-image" src="images/top_service.png" alt="drugs image">
		</div>
		<div class="drug-store">
			<h2 class="find-medi">Find medicine <img  src="https://img.icons8.com/android/20/000000/pill.png"/></h2>

			<div class="alphabet">
				<form action="medi.php" method="post">
					<table>
						<tr>
							<td>
								<span><input type="submit" name="button1" value="A" /></span>
							</td>
							<td>
								<span><input type="submit" name="button2" value="B" /></span>
							</td>
							<td>
								<span><input type="submit" name="button3" value="C" /></span>
							</td>
							<td>
								<span><input type="submit" name="button4" value="D" /></span>
							</td>
							<td>
								<span><input type="submit" name="button5" value="E" /></span>
							</td>
							<td>
								<span><input type="submit" name="button6" value="F" /></span>
							</td>
							<td>
								<span><input type="submit" name="button7" value="G" /></span>
							</td>
							<td>
								<span><input type="submit" name="button8" value="H" /></span>
							</td>
							<td>
								<span><input type="submit" name="button9" value="I" /></span>
							</td>
							<td>
								<span><input type="submit" name="button10" value="J" /></span>
							</td>
							<td>
								<span><input type="submit" name="button11" value="K" /></span>
							</td>
							<td>
								<span><input type="submit" name="button12" value="L" /></span>
							</td>
							<td>
								<span><input type="submit" name="button13" value="M" /></span>
							</td>
						</tr>
					</table>
					<table class="second-table">
						<tr>
							<td>
								<span><input type="submit" name="button14" value="N" /></span>
							</td>
							<td>
								<span><input type="submit" name="button15" value="O" /></span>
							</td>
							<td>
								<span><input type="submit" name="button16" value="P" /></span>
							</td>
							<td>
								<span><input type="submit" name="button17" value="Q" /></span>
							</td>
							<td>
								<span><input type="submit" name="button18" value="R" /></span>
							</td>
							<td>
								<span><input type="submit" name="button19" value="S" /></span>
							</td>
							<td>
								<span><input type="submit" name="button20" value="T" /></span>
							</td>
							<td>
								<span><input type="submit" name="button21" value="U" /></span>
							</td>
							<td>
								<span><input type="submit" name="button22" value="V" /></span>
							</td>
							<td>
								<span><input type="submit" name="button23" value="W" /></span>
							</td>
							<td>
								<span><input type="submit" name="button24" value="X" /></span>
							</td>
							<td>
								<span><input type="submit" name="button25" value="Y" /></span>
							</td>
							<td>
								<span><input type="submit" name="button26" value="Z" /></span>
							</td>
						</tr>
					</table>
				</form>
			</div>
			<h2 class="featured-class">Featured topics <img src="https://img.icons8.com/material-sharp/24/4a90e2/long-arrow-down.png"/></h2>
			<ul class="featured-topics">
				<li>
					<img src="https://img.icons8.com/ultraviolet/24/000000/human-bone.png"/>
					<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2626005/">Bone marrow transplant</a>
				</li>
				<li>
				 <img src="https://img.icons8.com/pastel-glyph/25/4a90e2/brain-3--v1.png"/>
					<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3317292/">Brain aneurysm</a>
				</li>
				<li>
				 <img src="https://img.icons8.com/pastel-glyph/25/4a90e2/brain-stroke.png"/>
					<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3925448/">Brain tumor</a>
				</li>
				<li>
				 <img src="https://img.icons8.com/ios/25/4a90e2/--broken-heart--v1.png"/>
					<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC6585327/">Congenital heart disease</a>
				</li>
				<li>
				 <img src="https://img.icons8.com/ios/25/4a90e2/heart-lock--v1.png"/>
					<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC3164530/">Heart arrhythmia</a>
				</li>
				<li>
				 <img src="https://img.icons8.com/ios/25/4a90e2/liver.png"/>
					<a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC2852711/">liver transplant</a>
				</li>
			</ul>
			<button class="featured-button"><a href="https://www.health.harvard.edu/topics/more-diseases-and-conditions"></a>Find more diseases & conditions</button>
		</div>
	</div>

	 <!-- end of find medicines -->

	<!-- our services -->

	<div>
		<h1 class="service-center">Our available <span>services</span></h1>
		<p class="service-center-text">Those you really want!</p>
	</div>

	<hr>
	<div class="service-container">
		<div class="service-center1">
			<article class="service service1">
				<div class="service-image">
					<img class="icon" src="https://img.icons8.com/ultraviolet/40/000000/organ-transplantation.png" />
				</div>
				<h4 class="icon-title">Emergency Care</h4>
				<p class="service-description">An essential part of the health system and serves as the first point of contact for many around the world specially when there are logistical or financial barriers.</p>
				<a href="https://www.uhlbd.com/departments/accident-emergency" class="read-more">Read More</a>
			</article>

			<article class="service service2">
				<div class="service-image">
					<img class="icon" src="https://img.icons8.com/ultraviolet/40/000000/heart-monitor.png" />
				</div>
				<h4 class="icon-title">Operation Theater</h4>
				<p class="service-description">Designed and equipped to provide care to patients with a range of conditions and specialized care to patients with specific conditions.</p>
				<a href="https://www.uhlbd.com/page/about" class="read-more">Read More</a>
			</article>

			<article class="service service3">
				<div class="service-image">
					<img class="icon" src="https://img.icons8.com/ultraviolet/40/000000/ambulance.png" />
				</div>
				<h4 class="icon-title">24/7 Ambulance</h4>
				<p class="service-description">Ambulance services often send more than one vehicle to try to meet the 8 minute target.It will cover while going as well coming back to the hospital.</p>
				<a href="https://www.uhlbd.com/page/about" class="read-more">Read More</a>
			</article>
		</div>

		<div class=service-center2>
			<article class="service service4">
				<div class="service-image">
					<img class="icon" src="https://img.icons8.com/ultraviolet/40/000000/prescription-pill-bottle.png" />
				</div>
				<h4 class="icon-title">24/7 Pharmacy</h4>
				<p class="service-description">The collaboration of physicians and pharmacists, can help to ensure that patients properly take their medications as prescribed and avoid any harmful effects.</p>
				<a href="https://www.uhlbd.com/page/about" class="read-more">Read More</a>
			</article>

			<article class="service service5">
				<div class="service-image">
					<img class="icon" src="https://img.icons8.com/ultraviolet/40/000000/thermometer-automation.png" />
				</div>
				<h4 class="icon-title">Laboratory Research</h4>
				<p class="service-description">Who engage in well-designed laboratory experiences develop critical-thinking skills, as well as gain exposure to reactions, materials, and equipment in a lab setting.</p>
				<a href="https://www.uhlbd.com/page/about" class="read-more">Read More</a>
			</article>

			<article class="service service6">
				<div class="service-image">
					<img class="icon" src="https://img.icons8.com/ultraviolet/40/4a90e2/bed.png" />
				</div>
				<h4 class="icon-title">Cabinet supply</h4>
				<p class="service-description">A decentralized medical storage cabinet allows for small items, medications, linens and other needed supplies to be near the patient’s bedside at all times.</p>
				<a href="https://www.uhlbd.com/page/about" class="read-more">Read More</a>
			</article>
		</div>
	</div>



	<!-- end of services -->

	<!-- doctors -->

	<div>
		<h1 class="doctors">Our Qualified <span class="span-doctors">Doctors</span></h1>
		<p class="doctor-text">Those who are behind the best services!</p>
		<img class="icon-doctor" src="https://img.icons8.com/ios-glyphs/15/4a90e2/drop-of-blood.png"/>
		<hr class="line">
	</div>

	<div class="doctor-center">
		<article class="doctors-name">
			<img class="face1" src="images/1.jpg">
			<h3 class="doctors-description doctors-description1">Dr. Sam Smith</h3>
			<p class="doctors-description doctors-description1">Neurologist</p>
		</article>

		<article class="doctors-name">
			<img class="face2" src="images/doctor2.png">
			<h3 class="doctors-description doctors-description2">Dr. Helen CHo</h3>
			<p class="doctors-description doctors-description2">Cardiologist</p>
		</article>

    <article class="doctors-name">
    	<img class="face3" src="images/3.jpg">
			<h3 class="doctors-description doctors-description3">Dr. Andrew Doe</h3>
			<p class="doctors-description doctors-description3">Peditrician</p>
		</article>

		<article class="doctors-name">
    	<img class="face4" src="images/doctor11.png">
			<h3 class="doctors-description doctors-description4">Dr.Samuel Norman</h3>
			<p class="doctors-description doctors-description4">Medicine doctor</p>
		</article>

	</div>
	<div>
			<a class="check-doctors" href="doctor.php">Check all doctors</a>
		</div>


	<!-- end of doctors -->

	<!-- choice container -->

	<div class="choice-container">
		<h1 class="choice-title">Why <span class="span-choice">Choose</span> Us</h1>
		<p class="about-us">What others say about us!</p>
		<hr>

	<div class="choice1">
		<div class="choice11">
			<div>
				<h4 class="why-choose">Professional Doctors</h4>
				<p class="why-choose">Professionalism is about accountability and the need for physicians to work in teams and systems that may override physician autonomy for the greater good of the patient.</p>
			</div>
			<div class="choose-image">
				<img src="https://img.icons8.com/nolan/50/organ-transplantation.png"/>
			</div>
			
		</div>

		<div class="choice12">
			<div class="choose-image">
				<img src="https://img.icons8.com/nolan/64/rh-plus.png"/>
			</div>
			<div>
				<h4 class="why-choose1">Exclusive Blood Bank</h4>
			<p class="why-choose1">This includes maintining an inventory for each blood group, ensuring an average age of blood at time of issue, and monitoring the amount of blood that becomes out dated.</p>
			</div>
		</div>
	</div>


	<div class="choice2">
		<div class="choice21">
			<div>
				<h4 class="why-choose">Track Your Progress</h4>
			<p class="why-choose">Tracking patients can help a hospital to establish better patient security, identify gaps in the services and increase patient satisfaction.</p>
			</div>
			<div class="choose-image">
				<img src="https://img.icons8.com/nolan/64/heart-monitor.png"/>
			</div>
		</div>

		<div class="choice22">
			<div class="choose-image">
				<img src="https://img.icons8.com/nolan/64/ambulance.png"/>
			</div>
			<div>
				<h4 class="why-choose1">Fast Pathological Report</h4>
			<p class="why-choose1">as laboratory medicine, clinical pathology concerns the analysis of blood, urine and tissue samples to examine and diagnose disease.</p>
			</div>
		</div>
	</div>

	<div class="choice3">
		<div class="choice31">
			<div>
				<h4 class="why-choose">Over 10 Years of Experience</h4>
			<p class="why-choose">Over the last 10 years, our hospital has provided the fast medical security, clicinical reports, best experienced doctors from the country.</p>
			</div>
			<div class="choose-image">
				<img src="https://img.icons8.com/nolan/50/rating.png"/>
			</div>
		</div>

		<div class="choice32">
			<div class="choose-image">
				<img src="https://img.icons8.com/nolan/64/cost.png"/>
			</div>
			<div>
				<h4 class="why-choose1">Minimal Cost</h4>
			<p class="why-choose1">When funds are correctly budgeted and spent on areas needed most, the services provided by these organizations also improve in efficiency, functionality, and quality.</p>
			</div>
		</div>
	</div>

	</div>

		<!-- 	Testimonials -->

	<div class="testimonials">
		<h1 class="testi-title">Testimonials</h1>
		<hr>
	</div>

	<div class="slider">
		<input type="radio" name="slider" title="slide1" checked="checked" class="slider__nav" />
		<input type="radio" name="slider" title="slide2" class="slider__nav" />
		<input type="radio" name="slider" title="slide3" class="slider__nav" />
		<input type="radio" name="slider" title="slide4" class="slider__nav" />

		<div class="slider__inner">
			<div class="slider__contents">
				<img class="slider-img" src="images/3.jpg">
				<h2 class="slider__caption">Dr.Michele Johnson</h2>
				<p class="slider__txt">"Our paths may not be identical, but you will never walk alone. We are stronger and smarter together."</p>
			</div>

			<div class="slider__contents">
				<img class="slider-img" src="images/2.jpg">
				<h2 class="slider__caption">Dr. Madeline Jay</h2>
				<p class="slider__txt">"Good health is not something we can buy. However, it can be an extremely valuable savings account."</p>
			</div>
			<div class="slider__contents">
				<img class="slider-img" src="images/4.jpg">
				<h2 class="slider__caption">Dr. Anna Cuberton</h2>
				<p class="slider__txt">"Health is a state of complete mental, social and physical well-being, not merely the absence of disease or infirmity."</p>
			</div>
			<div class="slider__contents">
				<img class="slider-img" src="images/doctor4.jpg">
				<h2 class="slider__caption">Dr. Bryan Anderson</h2>
				<p class="slider__txt">"You can’t control what goes on outside, but you CAN control what goes on inside."</p>
			</div>
		</div>
	</div>

	<!--   end of testimonials -->

	<!-- Footer -->
	<div id="contact" class="footer">
		<div class="web-icon">
			<h3>WEBMED</h3>
			<p>Copyright &copy; 2021, webMed</p>
		</div>

		<div class="newsletter">
			<h3>Newsletter</h3>
			<hr>
			<p>Join us for our monthly newsletter and more !</p>
			<form action="" class="newsletter-form" method="POST">
				<input type="email" name="email2" placeholder="Type your email"><br>
				<input type="submit" name="submit2" value="Subscribe!">
			</form>

			<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "newsletter";

		$conn = mysqli_connect($servername, $username, $password, $dbname);


	if (!$conn) {
		die("Connection failed: ". mysqli_connect_error());
	}



	if(isset($_POST['email2'])){
		$email2=$_POST['email2'];
		}
		else{
			echo "";
		}

	if(isset($_POST["submit2"]))
	{
		if($email2!="")
		{

			$query = "INSERT INTO subscribe VALUES ('$email2')";

			if (mysqli_query($conn, $query)) {
				// echo "done";    
                echo "<script>$(document).ready(function(){
                    $('#newsletter').modal('show')
                 });</script>";

			}
		}

			else{
				echo"";
			//echo" <h5> All files required </h5>";
			}
	}
	mysqli_close($conn);

		?>

	</div>

	 <!-- newsletter modal -->
	<div class="modal" id="newsletter">
            <div class="modal-dialog">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header" style="background-color: #0F3057;">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    
                    <!-- Modal body -->
                    <div class="modal-body">
                        <h4 style="color: #0F3057;">Congratulation !! <i class="far fa-laugh-beam" style="color:#0F3057 ;"></i></h4>
                        
                       <p>For being our subscriber. Stay with us</p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn " style="background-color: #0F3057;color:white" data-dismiss="modal">Close</button>
                    </div>

                </div>
            </div>
    </div>

		<div class="footer-navigation">
			<h3>Navigation</h3>
			<hr>
			<div class="footer-navigation-all">
				<div>
					<a href="/">Home</a>
				</div>
				<div>
					<a href="">Medicines</a>
				</div>
				<div>
					<a href="">Primary Doctors</a>
				</div>
				<div>
					<a href="">Surgical Specialists</a>
				</div>
				<div>
					<a href="">Others</a>
				</div>
				<div>
					<a href="">Contact</a>
				</div>
			</div>
		</div>
		<div class="social-icon">
			<h3>Social Icons</h3>
			<hr>
			<div>
				<img src="https://img.icons8.com/carbon-copy/45/ffffff/facebook-new.png" />
				<a href="https://www.facebook.com/">Facebook</a>
			</div>
			<div>
				<img src="https://img.icons8.com/dotty/40/ffffff/twitter-circled.png" />
				<a href="https://twitter.com/">Twitter</a>
			</div>
			<div>
				<img src="https://img.icons8.com/dotty/40/ffffff/google-logo.png" />
				<a href="https://www/google.com">Google</a>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="scripts.js"></script>

	<script>
	window.onscroll = function() {myFunction()};

	var header = document.getElementById("myHeader");
	var sticky = header.offsetTop;

	function myFunction() {
	if (window.pageYOffset > sticky) {
		header.classList.add("sticky");
	} else {
		header.classList.remove("sticky");
	}
	}
	</script>
	
</body>

</html>
