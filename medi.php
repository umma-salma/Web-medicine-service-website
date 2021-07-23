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

		<div>
		<h1 class="medicine-center">Find your <span>medicines</span></h1>
		<p class="medicine-center-text">Those you really need!</p>
	</div>
	<hr>
	<?php
		#echo "ok";
function MedPage(){
    $newrow=0;
    $conn = new mysqli("localhost","root", "", "medicine");
    $results_per_page = 54;  
    $query = "select * from medinfo";  
    $result = mysqli_query($conn, $query);  
    $number_of_result = mysqli_num_rows($result);  

    $number_of_page = ceil ($number_of_result / $results_per_page);  
    if (!isset ($_GET['page']) ) {  
      $page = 1;  
    } else {  
      $page = $_GET['page'];  
    }  
    $page_first_result = ($page-1) * $results_per_page;  
    $query = "SELECT * FROM medinfo LIMIT " . $page_first_result . ',' . $results_per_page;  
    $result = mysqli_query($conn, $query);  
    echo '<div class="card-group" style="margin-top: 60px;">';
    while($row=mysqli_fetch_array($result))
          {
            if($newrow%3==0 and $newrow!=0)
            {
              echo '</div>';
              echo '<div class="card-group">';
            }
              $newrow++;
                  echo'<div class="flip-card">';
                  echo'<div class="flip-card-inner">';
                  echo'<div class="flip-card-front">';
                  echo '<h3 class="rheading" style="font-size:1.3rem;">'.$row['DrugName'].'</h3>';
                  echo '<p class="card-text">'.$row['Form'].'<br/>'; 
                  echo $row['Strength'].'</p>'.'</div>';
                  echo'<div class="flip-card-back">';
                  echo $row['Indication'].'</div>'; 
              echo'</div>'; 
              echo'</div>';
          }
		  echo '<div class="page_no" style="margin-top: 60px; margin-left: 200px; justify-content: center; align-items: center;">';
            for($page = 1; $page<= $number_of_page; $page++) 
            {  
              echo '<a style="margin-left:5px; background-color:#0f3057; color:white; padding: 10px; border-radius:20px;" class="more_page" href = "medi.php?page=' . $page . '">' . $page . ' </a>';  
            }  
			echo '</div>';}
			function AlphabetSearch($k)
		{
			$newrow=0;
			$conn = new mysqli("localhost","root", "", "medicine");
			$disp="select * from medinfo";
			$result=mysqli_query($conn,$disp);
			echo '<div class="card-group" style="margin-top: 60px;">';
			while($row=mysqli_fetch_array($result))
			{
				if($newrow%3==0 and $newrow!=0)
				{
					echo '</div>';
					echo '<div class="card-group">';
				}
				if(substr($row['DrugName'],0,1)==$k)
				{
					$newrow++;
							echo'<div class="flip-card">';
							echo'<div class="flip-card-inner">';
							echo'<div class="flip-card-front">';
							echo '<h3 class="rheading" style="font-size:1.3rem;">'.$row['DrugName'].'</h3>';
							echo '<p class="card-text">'.$row['Form'].'<br/>'; 
							echo $row['Strength'].'</p>'.'</div>';
							echo'<div class="flip-card-back">';
							echo $row['Indication'].'</div>'; 
					echo'</div>'; 
					echo'</div>';
				}
				if($newrow>50)
				{
					break;
				}
	  		}
			if($newrow==0)
			{
				echo '<div class="no-item">Sorry!! No medicine found :(</div>';
			}
			echo '</div>';
			echo '</div>';
		}
		function MedSearch($k)
		{
			$k=strtoupper($k);
			$newrow=0;
			$conn = new mysqli("localhost","root", "", "medicine");
			$disp="select * from medinfo";
			$result=mysqli_query($conn,$disp);
			echo '<div class="card-group" style="margin-top: 60px;">';
			while($row=mysqli_fetch_array($result))
			{
			  if($newrow%3==0 and $newrow!=0)
			  {
				  echo '</div>';
				  echo '<div class="card-group">';
			  }
			  if((strpos($row['DrugName'],$k))!==FALSE)
			  {
				  $newrow++;
						   echo'<div class="flip-card">';
						   echo'<div class="flip-card-inner">';
						   echo'<div class="flip-card-front">';
						   echo '<h3 class="rheading" style="font-size:1.3rem;">'.$row['DrugName'].'</h3>';
						   echo '<p class="card-text">'.$row['Form'].'<br/>'; 
						   echo $row['Strength'].'</p>'.'</div>';
						   echo'<div class="flip-card-back">';
						   echo $row['Indication'].'</div>'; 
					 echo'</div>'; 
					 echo'</div>';
			  }
			  if($newrow>50)
			  {
				  break;
			  }
			}
			if($newrow==0)
			{
				echo '<div class="no-item">Sorry!! No medicine found :(</div>';
			}
			echo '</div>';
			echo '</div>';
		}
		if(isset($_POST['button1']))
		{
			AlphabetSearch("A");
		}
		else if(isset($_POST['button2']))
		{
			AlphabetSearch("B");
		}
		else if(isset($_POST['button3']))
		{
			AlphabetSearch("C");
		}
		else if(isset($_POST['button4']))
		{
			 AlphabetSearch("D");
		}
		else if(isset($_POST['button5']))
		{
			 AlphabetSearch("E");
		}
		else if(isset($_POST['button6']))
		{
			 AlphabetSearch("F");
		}
		else if(isset($_POST['button7']))
		{
			 AlphabetSearch("G");
		}
		else if(isset($_POST['button8']))
		{
			 AlphabetSearch("H");
		}
		else if(isset($_POST['button9']))
		{
			 AlphabetSearch("I");
		}
		else if(isset($_POST['button10']))
		{
			 AlphabetSearch("J");
		}
		else if(isset($_POST['button11']))
		{
			 AlphabetSearch("K");
		}
		else if(isset($_POST['button12']))
		{
			 AlphabetSearch("L");
		}
		else if(isset($_POST['button13']))
		{
			 AlphabetSearch("M");
		}
		else if(isset($_POST['button14']))
		{
			 AlphabetSearch("N");
		}
		else if(isset($_POST['button15']))
		{
			 AlphabetSearch("O");
		}
		else if(isset($_POST['button16']))
		{
			 AlphabetSearch("P");
		}
		else if(isset($_POST['button17']))
		{
			 AlphabetSearch("Q");
		}
		else if(isset($_POST['button18']))
		{
			 AlphabetSearch("R");
		}
		else if(isset($_POST['button19']))
		{
			 AlphabetSearch("S");
		}
		else if(isset($_POST['button20']))
		{
			 AlphabetSearch("T");
		}
		else if(isset($_POST['button21']))
		{
			 AlphabetSearch("U");
		}
		else if(isset($_POST['button22']))
		{
			 AlphabetSearch("V");
		}
		else if(isset($_POST['button23']))
		{
			 AlphabetSearch("W");
		}
		else if(isset($_POST['button24']))
		{
			 AlphabetSearch("X");
		}
		else if(isset($_POST['button25']))
		{
			 AlphabetSearch("Y");
		}
		else if(isset($_POST['button26']))
		{
			 AlphabetSearch("Z");
		}
		else if(isset($_POST['x']))
		{
			 $a=$_POST['search'];
			 MedSearch($a);
		}
		else{
			MedPage();
		}
?>
	<!-- Footer -->
	<div class="medi-footer" style="width: 100%; height: 60px;">
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
