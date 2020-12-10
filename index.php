<?php
require_once('sql_connect.php');
?>
!DOCTYPE html>
<html lang="en-us">
<html>
<title>Sudo Keyboard - Sudo Store</title>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="products/productPage.css">
	<link rel="stylesheet" href="frontpage Images/frontPage.css">
	<script src = "frontpage Images/frontpageScript.js"></script>
	
	
<header>
    <table width=100%; >
        <tr >
            <td >
				<div class="Title">
					<h1><a href="index.php">Sudo Store</a></h1>
                    <h7 >"For The Superuser In You!"</h7>
				</a>
				</div>
				<div class="SearchArea">
                <form action="search.php">
                    <input type="text" placeholder="Search" id="searchbar" name="q" required>
				</form>		
				<?php
				if($current_username != null){
					echo '<a href="logout.php" class="UsrButton">Logout</a>
							<a href="reset.php" class="UsrButton">Change Password</a>';
					
				
				}else{
					echo '<a href="login.php" class="UsrButton">Login</a>
								<a href="register.php" class="UsrButton">Register</a>
								<a href="reset.php" class="UsrButton">Forgot Password?</a>';
				}
				
				?>
				</div>
            </td>
		</tr>
		<div >
		<tr>
			<td >
				<div>
					<ul>
						<li><a href ="index.php" >Home</a></li>
						<li><a href="AllProducts.php">All Products</a> </li>
						<li>
						<div class="dropdown">
							<a href="">Components</a>
							<div class="dropdown-content">
								<a href="products/motherboard.php">SUDO Motherboard</a>
								<a href="products/case.php">SUDO Case</a>
								<a href="products/ram.php">SUDO RAM</a>
								<a href="products/cpuFan.php">SUDO CPU Fan</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="">Peripherals</a>
							<div class="dropdown-content">
								<a href="products/keyboard.php">SUDO Keyboard</a>
								<a href="products/monitor.php">SUDO Monitor</a>
								<a href="products/mouse.php">SUDO Mouse</a>
								<a href="products/speakers.php">SUDO Speakers</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="">Accessories</a>
							<div class="dropdown-content">
								<a href="products/RGBChair.php">SUDO Gaming Chair</a>
								<a href="products/lightstrip.php">SUDO Lighting Strip</a>
								<a href="products/mousepad.php">SUDO Mousepad</a>
							</div>
						</div>
					</li>
                        <li><a href="products/laptop.php">Laptops</a></li>
						<li><a href="checkout/cart.php" >Cart</a></li>
					</ul>
				</div>
			</td>
			
		</tr>
	</div>
	</table>
	<br>
</header>
<marquee>
	<table>
   		<tr>
     	<td>
            <font size=5>Hey you!</font>
        </td>
        <td>
            <img src="img/LeftRGBAd.png" width="300px" height="100px">
        </td>
        <td>
            <font size=5>Want your rig to <br> look as sick as this?</font>
        </td>
        <td>
            <img src="img/RightRGBAd.png" width="300px" height="100px">
		</td>
		<td>
			<font size = 5> Buy more of our products!!!</font>
		</td>   
    </tr>
	</table>
	</marquee>
</head>

<body>
	<div class="bg"></div>
	<div id="page-container">
		<div id="content-wrap">
	<center>
			
		<div class="row"> 
			<div class="column">

			<p>Experience the blinding speeds of the brightest computer components available on the market.</p>

            <div class="slideshow-container">

                <div class="mySlides fade">
                  
                  <a href="products/motherboard.php"> <img src="frontpage Images/SudoHorizMobo.png" style="width:1500px"> </a> 
                  <div class="text"><a href="products/motherboard.php">Unparalled Audio and Ultrafast I/0 Connections</a></div>
                </div>
                
                <div class="mySlides fade">
                  
                    <a href="products/monitor.php"> <img src="frontpage Images/SudoHorizMonitor.png" style="width:1500px"> </a> 
                    <div class="text"><a href="products/monitor.php">The Ultimate in Ultrawide 8K Resolution.</a></div>
                </div>
                
                <div class="mySlides fade">
                  
                    <a href="products/ram.php"> <img src="frontpage Images/SudoHorizRam.png" style="width:1500px"> </a> 
                    <div class="text"><a href="products/ram.php">Our Fastest Sticks of 32GB RAM at 6400MHz.</a></div>
                </div>
                
                </div>
                <br>
                
                <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span> 
                  <span class="dot" onclick="currentSlide(2)"></span> 
                  <span class="dot" onclick="currentSlide(3)"></span> 
                </div>

                <p>Check out how we Souped up this Superuser's PC that was on the Verge of Total Disaster!</p>
			  
			  <div id="comparison-picture"class="img-comp-container">
				<div class="img-comp-img">
				  <img src="frontpage Images/SUDONewInside.jpg">
				</div>
				<div class="img-comp-img img-comp-overlay">
				  <img src="frontpage Images/SUDOOldInside.jpg">
				</div>
              </div>
              
              <p>This Deal Won't Last Long, so Grab it While you can!</p>

			  <a href ="products/mouse.php"><img src="frontpage Images/MouseSale.png"></a>

			</div>
		  </div>
			
	</center>
		</div>
	</div>

	<script>
		initComparisons();

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
		</script>

</body>
<br>
<footer>
	
</footer>
</html>