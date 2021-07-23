<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>WebMed</title>

	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
		integrity="sha256-+N4/V/SbAFiW1MPBCXnfnP9QSN3+Keu+NlB+0ev/YKQ=" crossorigin="anonymous" />

	<!--bootstrap-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


	<link rel="stylesheet" href="styles.css">
	<link rel="stylesheet" href="styles2.css">
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
					<li><a class="fixed-navbar" href="index.php">Home</a></li>
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
					<li><a class="fixed-navbar" href="#contact">Contact</a></li>
				</ul>
			</nav>

			<!-- end of navigation bars -->

		</div>
	</div>

	<h1 style="text-align: center; color: #0f3057;">Peditricians</h1>
	<hr>
	<?php
		#echo "ok";
        function DocSection($k){
            $newrow=0;
        $conn = new mysqli("localhost","root", "", "medicine");
        $disp="select * from docinfo";
        $result=mysqli_query($conn,$disp);
        echo '<div class="card-group" style="display: flex; justify-content: center; align-items: center;">';
        while($row=mysqli_fetch_array($result))
        {
            if($newrow%4==0 and $newrow!=0)
            {
                echo '</div>';
                echo '<div class="card-group">';
            }
            if((strpos($row['DocSpeciality'],$k))!==FALSE)
            {
                $newrow++;
                        echo'<div class="card col-md-4">';
                        if($row['DocID']==1){echo '<img class="card-img-top" src="images/doctor1.png" alt="doctor pic"/>';}
                        if($row['DocID']==2){echo '<img class="card-img-top" src="images/doctor2.png" alt="doctor pic"/>';}     
                        if($row['DocID']==3){echo '<img class="card-img-top" src="images/doctor3.png" alt="doctor pic"/>';}     
                        if($row['DocID']==4){echo '<img class="card-img-top" src="images/doctor4.png" alt="doctor pic"/>';}     
                        if($row['DocID']==5){echo '<img class="card-img-top" src="images/doctor5.png" alt="doctor pic"/>';}                             
                        if($row['DocID']==6){echo '<img class="card-img-top" src="images/doctor6.png" alt="doctor pic"/>';}     
                        if($row['DocID']==7){echo '<img class="card-img-top" src="images/doctor7.png" alt="doctor pic"/>';}   
                        if($row['DocID']==8){echo '<img class="card-img-top" src="images/doctor8.png" alt="doctor pic"/>';}   
                        if($row['DocID']==9){echo '<img class="card-img-top" src="images/doctor9.png" alt="doctor pic"/>';} 
                        if($row['DocID']==10){echo '<img class="card-img-top" src="images/doctor10.png" alt="doctor pic"/>';}     
                        if($row['DocID']==11){echo '<img class="card-img-top" src="images/doctor11.png" alt="doctor pic"/>';}    
                        if($row['DocID']==12){echo '<img class="card-img-top" src="images/doctor12.png" alt="doctor pic"/>';}     
                        if($row['DocID']==13){echo '<img class="card-img-top" src="images/1.jpg" alt="doctor pic"/>';}     
                        if($row['DocID']==14){echo '<img class="card-img-top" src="images/2.jpg" alt="doctor pic"/>';}     
                        if($row['DocID']==15){echo '<img class="card-img-top" src="images/3.jpg" alt="doctor pic"/>';}     
                        if($row['DocID']==16){echo '<img class="card-img-top" src="images/4.jpg" alt="doctor pic"/>';}     
                        echo'<div class="card-body">';
                        echo '<h3 class="rheading">'.$row['DocName'].'</h3>';
                        echo '<p class="card-text">'.$row['DocSpeciality'].'<br/>'; 
                        echo $row['DocEmail'].'<br/>';
                        echo $row['DocPhone'].'</p>'.'</div>'; 
                echo'</div>';
            }
            
          }
        echo '</div>';
        echo '</div>';
        }
			 $a="Peditrician";
			 DocSection($a);
?>


	<div id="contact" class="footer">
		<div class="web-icon">
			<h3>WEBMED</h3>
			<p>Copyright &copy; 2021, webMed</p>
		</div>

		<div class="newsletter">
			<h3>Newsletter</h3>
			<hr>
			<p>Join us for our monthly newsletter and more !</p>
			<form action="/" class="newsletter-form" method="POST">
				<input type="email" name="email" placeholder="Type your email"><br>
				<input type="submit" value="Subscribe!">
			</form>
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

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
