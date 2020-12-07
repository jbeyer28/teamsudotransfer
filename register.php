<?php
require_once("sql_connect.php");
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
	<title>Register - Sudo Store</title>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
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
						<li><a href ="../index.html" >Home</a></li>
						<li><a href="../AllProducts.html">All Products</a> </li>
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
		<table width="100%" cellpadding="10px" cellspacing="0px"></table>
	<tr>
		<td colspan="3">
			<table width="100%" cellpadding="10px" cellspacing="0px">
				<tr height="40px"></tr>
				<tr>
					<td></td>
					<td width="200px">
						<fieldset>
							<legend>Register</legend>
								<?php 
								if($_POST['email'] != ''){
									
									$sql = 'select * from users where email = ?;';
									$stmt = mysqli_stmt_init($dbc);
									if(!mysqli_stmt_prepare($stmt, $sql)){
										echo "SQL statement failed";
										exit;
									}
									mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
									mysqli_stmt_execute($stmt);
									
									$response = mysqli_stmt_get_result($stmt);
									$row = mysqli_fetch_array($response);
									if($row != '')
										echo 'Email already in use<br><a href="javascript:history.back();">Back</a>';
									else{
									
										$sql = 'select * from users where username = ?;';
										$stmt = mysqli_stmt_init($dbc);
										if(!mysqli_stmt_prepare($stmt, $sql)){
											echo "SQL statement failed";
											exit;
										}
										mysqli_stmt_bind_param($stmt, "s", $_POST['username']);
										mysqli_stmt_execute($stmt);
										
										$response = mysqli_stmt_get_result($stmt);
										$row = mysqli_fetch_array($response);
										if($row != '')
											echo 'Username already in use<br><br><a href="javascript:history.back();">Back</a>';
										else{
									
									
									
											$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
											
											$sql = "insert into users values(?,?,?);";
											$stmt = mysqli_stmt_init($dbc);
											if(!mysqli_stmt_prepare($stmt, $sql)){
												echo "SQL statement failed";
												exit;
											}
											mysqli_stmt_bind_param($stmt, "sss", $_POST['username'], $_POST['email'], $hash_password);
											mysqli_stmt_execute($stmt);
											echo 'Account has been created<br><br><a href="login.php">Log in</a>';
										}
									}

								}else{
									echo '<form action="" method="post">
													<input type="email" placeholder="Email" size="30px" name="email" required><br><br><br>
													<input type="text" placeholder="Username" size="30px" name="username" required><br><br><br>
													<input type="password" placeholder="Password" size="30px" name="password" required><br><br><br>
													<input type="submit" value="Sign up"><br><br>
													<a href="login.php">Log in</a>
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
</html>
