<?php
require_once('../sql_connect.php');
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<title>Sudo RAM - Sudo Store</title>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<link rel="stylesheet" href="productPage.css">
	
<header>
    <table width=100%; >
        <tr >
            <td >
				<div class="Title">
					<h1><a href="../index.php">Sudo Store</a></h1>
                    <h7 >"For The Superuser In You!"</h7>
				</a>
				</div>
				<div class="SearchArea">
                <form action="../search.php">
                    <input type="text" placeholder="Search" id="searchbar" name="q" required>
				</form>		
				<?php
				if($current_username != null){
					echo '<a href="../logout.php" class="UsrButton">Logout</a>
							<a href="../reset.php" class="UsrButton">Change Password</a>';
					
				
				}else{
					echo '<a href="../login.php" class="UsrButton">Login</a>
								<a href="../register.php" class="UsrButton">Register</a>
								<a href="../reset.php" class="UsrButton">Forgot Password?</a>';
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
						<li><a href ="../index.php" >Home</a></li>
						<li><a href="../AllProducts.php">All Products</a> </li>
						<li>
						<div class="dropdown">
							<a href="">Components</a>
							<div class="dropdown-content">
								<a href="../products/motherboard.php">SUDO Motherboard</a>
								<a href="../products/case.php">SUDO Case</a>
								<a href="../products/ram.php">SUDO RAM</a>
								<a href="../products/cpuFan.php">SUDO CPU Fan</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="">Peripherals</a>
							<div class="dropdown-content">
								<a href="../products/keyboard.php">SUDO Keyboard</a>
								<a href="../products/monitor.php">SUDO Monitor</a>
								<a href="../products/mouse.php">SUDO Mouse</a>
								<a href="../products/speakers.php">SUDO Speakers</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="">Accessories</a>
							<div class="dropdown-content">
								<a href="../products/RGBChair.php">SUDO Gaming Chair</a>
								<a href="../products/lightstrip.php">SUDO Lighting Strip</a>
								<a href="../products/mousepad.php">SUDO Mousepad</a>
							</div>
						</div>
					</li>
						<li><a href="../products/laptop.php">Laptops</a></li>
						<li><a href="../checkout/cart.php" >Cart</a></li>
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
            <img src="../img/LeftRGBAd.png" width="300px" height="100px">
        </td>
        <td>
            <font size=5>Want your rig to <br> look as sick as this?</font>
        </td>
        <td>
            <img src="../img/RightRGBAd.png" width="300px" height="100px">
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
	<center>
	<table>
	<tr>
		<td>
			<a href="mouse.php"><img id="sideAd" src="../frontpage Images/MouseVertAd.png" width="300px" height="1000px"></a>
		</td>
		<td colspan="3">
			<table width="100%" cellpadding="10px" cellspacing="0px">
				<tr>
					<td >
						<img width=500px height=450px src="../img/RamNoBG.png">
					</td>
					<td>
						<div class="productDescription">
						<font size=7 id="productName"><b>Sudo Ram Sticks</b></font><br>
						<p>A pair of blazingly fast RAM sicks <br>with 6400mghz of speed and 32GB of memory!</p><br><br>
						
						<p style=" font-size: 20px">$250 <sup>tax not included</sup> </p><br><br>
						
						<button id=CartButton><a href="../checkout/cart.php">Add to cart</a></button>
					</div>
					</td>
				</tr>
			</table>
		</td>
		<td>
			<a href="motherboard.php"><img id="sideAd" src="../frontpage Images/MoboVertAd.png" width="300px" height="1000px"></a>
		</td>
	</tr>
	</table>
</center>
</body>
<br>
	<footer>
	<table  width="100%" cellspacing="0px">
	<tr>
		<td colspan="3" >
			<center>
				<a href="../about/faq.php">FAQ</a>&nbsp;&nbsp;
				<a href="../about/about.php">About</a>&nbsp;&nbsp;
				<a href="../login.php">Account</a><br><br>
				<font size=3>Last updated a while ago</font>
			</center>
		</td>
	</tr>
	</table>
</footer>
</html>