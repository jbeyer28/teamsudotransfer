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
	
	<style>
		fieldset{
			min-width:300px;
		}
	</style>
</head>
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
							if($_GET['token'] != ''){
								$date = date('Y-m-d', strtotime(date('Y-m-d'). ' - 3 days'));
								
								$sql = "delete from resetlinks where date < '$date';";
								$stmt = mysqli_stmt_init($dbc);
								if(!mysqli_stmt_prepare($stmt, $sql)){
									echo "SQL statement failed 1";
									exit;
								}
								mysqli_stmt_execute($stmt);
								
								
								
								
								
								$sql = 'select * from resetlinks;';
								$stmt = mysqli_stmt_init($dbc);
								if(!mysqli_stmt_prepare($stmt, $sql)){
									echo "SQL statement failed 2";
									exit;
								}
								mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
								mysqli_stmt_execute($stmt);
								$response = mysqli_stmt_get_result($stmt);
								
								while($row = mysqli_fetch_array($response)){
									if(password_verify($_GET['token'], $row['linkhash'])){
										$username = $row['username'];
										break;
									}
									
								}
								
								if($username != null){
								
									echo '<form action="reset.php" method="post">
										
										<input type="password" placeholder="New Password" size="30px" name="password" required><br><br><br>
										<input type="hidden" name="token" value="'.$_GET['token'].'">
										<input type="submit" value="Submit"><br><br>
										<a href="login.php">Log in</a>
									</form>';
								}else{
									echo 'Invalid link
										<br><br><a href="javascript:history.back();">Back</a>';
								}
								
								
							
							}
							else if($_POST['password'] != '' and $_POST['token'] != ''){
								$date = date('Y-m-d', strtotime(date('Y-m-d'). ' - 3 days'));
								
								$sql = "delete from resetlinks where date < '$date';";
								$stmt = mysqli_stmt_init($dbc);
								if(!mysqli_stmt_prepare($stmt, $sql)){
									echo "SQL statement failed 3";
									exit;
								}
								mysqli_stmt_execute($stmt);
								
								
								$sql = 'select * from resetlinks;';
								$stmt = mysqli_stmt_init($dbc);
								if(!mysqli_stmt_prepare($stmt, $sql)){
									echo "SQL statement failed 4";
									exit;
								}
								mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
								mysqli_stmt_execute($stmt);
								$response = mysqli_stmt_get_result($stmt);
								
								while($row = mysqli_fetch_array($response)){
									if(password_verify($_POST['token'], $row['linkhash'])){
										$username = $row['username'];
										break;
									}
									
								}
								
								
								if($username != null){
								
									$hash_password = password_hash($_POST['password'], PASSWORD_DEFAULT);
											
									$sql = "update users set password = ? where username = ?;";
									$stmt = mysqli_stmt_init($dbc);
									if(!mysqli_stmt_prepare($stmt, $sql)){
										echo "SQL statement failed 5";
										exit;
									}
									mysqli_stmt_bind_param($stmt, "ss", $hash_password, $username);
									mysqli_stmt_execute($stmt);
									
									echo 'Your password has been reset!
											<br><br><a href="login.php">Login</a>';
									
									$sql = "delete from resetlinks where username = ?;";
									$stmt = mysqli_stmt_init($dbc);
									if(!mysqli_stmt_prepare($stmt, $sql)){
										echo "SQL statement failed 3";
										exit;
									}
									mysqli_stmt_bind_param($stmt, "s", $username);
									mysqli_stmt_execute($stmt);
								}else{
									echo 'Something went wrong, please try again
											<br><br><a href="javascript:history.back();">Back</a>';
								}
								
							
							}
							else if($_POST['email'] != ''){
								$seed = str_split('abcdefghijklmnopqrstuvwxyz123456789');
								$key = '';
								for($i=0;$i<30;$i++){
									shuffle($seed);
									$key .= $seed[1];
								}
								$key_hash = password_hash($key, PASSWORD_DEFAULT);
								$date = date("Y-m-d");
								
								$sql = 'select * from users where email = ?;';
								$stmt = mysqli_stmt_init($dbc);
								if(!mysqli_stmt_prepare($stmt, $sql)){
									echo "SQL statement failed 6";
									exit;
								}
								mysqli_stmt_bind_param($stmt, "s", $_POST['email']);
								mysqli_stmt_execute($stmt);
								$response = mysqli_stmt_get_result($stmt);
								$row = mysqli_fetch_array($response);
								$username = $row['username'];
								
								if($username != null){
								
								
									$sql = "insert into resetlinks values(null,?,?,?);";
									$stmt = mysqli_stmt_init($dbc);
									if(!mysqli_stmt_prepare($stmt, $sql)){
										echo "SQL statement failed 7";
										exit;
									}
									mysqli_stmt_bind_param($stmt, "sss", $username, $key_hash, $date);
									mysqli_stmt_execute($stmt);
								
								
								
									echo 'We can\'t email from this server, so here is your reset link:<br><br>
										<a href="?token='.$key.'">Reset Link</a>';
								}else{
									echo 'Email not found
										<br><br><a href="javascript:history.back();">Back</a>';
								}
							
							}
							else{
								echo '<form action="" method="post">
									
									<input type="email" placeholder="Email" size="30px" name="email" required><br><br><br>
									<input type="submit" value="Submit"><br><br>';
									
								if($current_username == null)
									echo '<a href="login.php">Log in</a>';
									
								echo '</form>';
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
				<a href="about/faq.php">FAQ</a>&nbsp;&nbsp;
				<a href="about/about.php">About</a>&nbsp;&nbsp;
				<a href="login.php">Account</a><br><br>
				<font size=3 color="grey">Last updated a while ago</font>
			</center>
		</td>
	</tr>
	</table>
</footer>
</body>
</html>
		









