<?php
require_once("sql_connect.php");
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
	<title>Reset Password - Sudo Store</title>
	<link rel="stylesheet" href="products/productPage.css">
	<link rel="stylesheet" href="checkout/cart.css">
</head>
<header>
    <table width=100%; >
        <tr >
            <td >
				<div class="Title">
					<h1><a href="index.html">Sudo Store</a></h1>
                    <h7 >"For The Superuser In You!"</h7>
				</a>
				</div>
				<div class="SearchArea">
                <form action="search.html">
                    <input type="text" placeholder="Search" id="searchbar" name="q" required>
				</form>		
				<a href="account.html" class="UsrButton">Login</a>
				<a href="register.html" class="UsrButton">Register</a>
				<a href="reset.html" class="UsrButton">Forgot Password?</a>
				</div>
            </td>
		</tr>
		<div >
		<tr>
			<td >
				<div>
					<ul>
						<li><a href ="index.html" >Home</a></li>
						<li><a href="AllProducts.html">All Products</a> </li>
						<li>
						<div class="dropdown">
							<a href="">Components</a>
							<div class="dropdown-content">
								<a href="products/motherboard.html">SUDO Motherboard</a>
								<a href="products/case.html">SUDO Case</a>
								<a href="products/ram.html">SUDO RAM</a>
								<a href="products/cpuFan.html">SUDO CPU Fan</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="">Peripherals</a>
							<div class="dropdown-content">
								<a href="products/keyboard.html">SUDO Keyboard</a>
								<a href="products/monitor.html">SUDO Monitor</a>
								<a href="products/mouse.html">SUDO Mouse</a>
								<a href="products/speakers.html">SUDO Speakers</a>
							</div>
						</div>
					</li>
					<li>
						<div class="dropdown">
							<a href="">Accessories</a>
							<div class="dropdown-content">
								<a href="products/RGBChair.html">SUDO Gaming Chair</a>
								<a href="products/lightstrip.html">SUDO Lighting Strip</a>
								<a href="products/mousepad.html">SUDO Mousepad</a>
							</div>
						</div>
					</li>
						<li><a href="products/laptop.html">Laptops</a></li>
					</ul>
				</div>
			</td>
			
		</tr>
	</div>
	</table>
	<br>
</header>

<body>
<table width="100%" cellpadding="10px" cellspacing="0px">
	<tr>
		<td colspan="3">
			<table width="100%" cellpadding="10px" cellspacing="0px">
				<tr height="40px"></tr>
				<tr>
					<td></td>
					<td width="200px">
						<fieldset>
							<legend>Reset Password</legend>
							
							<?php
							if($_POST['email'] != ''){
							
							
							}else{
								echo '<form action="">
									
									<input type="email" placeholder="Email" size="30px" name="email" required><br><br><br>
									<input type="submit" value="Submit"><br><br>
									<a href="account.html">Log in</a>
								</form>';
							}
								
							?>
						</fieldset>
					</td>
					<td></td>
				</tr>
				<tr height="40px"></tr>
			</table>
		</td>
	</tr>
</table>

<footer>
	<table  width="100%" cellspacing="0px">
		<tr height="40px"></tr>
	<tr>
		<td colspan="3">
			<center>
				<a href="about/faq.html">FAQ</a>&nbsp;&nbsp;
				<a href="about/about.html">About</a>&nbsp;&nbsp;
				<a href="account.html">Account</a><br><br>
				<font size=3 color="grey">Last updated a while ago</font>
			</center>
		</td>
	</tr>
	</table>
</footer>
</body>
</html>
		









