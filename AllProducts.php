<?php
require_once('sql_connect.php');
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<title>Sudo Store</title>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <link rel="stylesheet" href="AllProducts.css">
    

<header>
    <table width=100%; >
        <tr>
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
	</table>
	<div >
		<tr>
			<td >
				<div class = "follow">
					<ul>
                        <li><a href ="index.php" >Home</a></li>
						<li>
						<li><a href ="AllProducts.php" >All Products</a></li>
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
		</tr>
	</div>
	</table>
	<br>
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
</header>
</head>


<body>
	
	<div style="height:1000px;font-size:36px">
		<center>
<table class= "content-table" width="40%">
	<thead>
	<tr>
		<th><center>Product</center></th>
		<th><center>Name</center></th>
		<th><center>Price</center></th>
	</tr>
</thead>

<div class = "section">
    
<tbody class="Selector">
	<tr>
        <td width="25%"><a href="products/mouse.php">
            <div class="img-magnifier-container">
                <img id="sudoMouse" src="img/mouseNoBG.png" width="300" height="200" alt="mouse">
              </div>
		</a>
		</td>
		<td width="25%">
			<a href="products/mouse.php">
			<center><font color="black">Sudo Mouse</center></font>
			</a>
		</td>
		<td>
			<a href="products/mouse.php">
			<center><font color="black">$80.00</center></font>
			</a>
		</td>
	</tr>
	<tr>
					<td width="25%">
					<a href="products/keyboard.php">
                        <div class="img-magnifier-container">
                            <img id="sudoKeyboard" src="img/keyboardNoBG.png" width="300" height="200" alt="keyboard">
                          </div>
					</a>
					</td>
					<td width="25%">
					<a href="products/keyboard.php"><center><font color="black">Sudo Keyboard</center></font>
					</a>
					</td>
					<td width="25%">
					<a href="products/keyboard.php"><center><font color="black">$150.00</center></font>
					</a>
					</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/case.php">
				<div class="img-magnifier-container">
                    <img id="sudoCase" src="img/caseNoBG.png" width="300" height="200" alt="case">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/case.php"><center><font color="black">
			Sudo Case</center></font></a>
		</td>
		<td>
			<a href="products/case.php"><center><font color="black">
				$45.00</center></font></a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/speakers.php">
				<div class="img-magnifier-container">
                    <img id="sudoSpeakers" src="img/speakers.png" width="300" height="200" alt="speakers">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/speakers.php">
				<center><font color="black">Sudo Speakers</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/speakers.php">
				<center><font color="black">$45.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Ram.php">
				<div class="img-magnifier-container">
                    <img id="sudoRam" src="img/RamNoBG.png" width="300" height="200" alt="Ram">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/Ram.php">
				<center><font color="black">Sudo Ram</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Ram.php">
				<center><font color="black">$250.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/cpuFan.php">
				<div class="img-magnifier-container">
                    <img id="sudoFan" src="img/CpuFanNoBG.png" width="300" height="200" alt="CpuFan">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/CpuFan.php">
				<center><font color="black">Sudo Cpu Fan</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/CpuFan.php">
				<center><font color="black">$400.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/RGBChair.php">
				<div class="img-magnifier-container">
                    <img id="sudoChair" src="img/RGBChairNoBG.png" width="300" height="200" alt="RGBChair">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/RGBChair.php">
				<center><font color="black">Sudo Racing Chair</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/RGBChair.php">
				<center><font color="black">$400.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Motherboard.php">
				<div class="img-magnifier-container">
                    <img id="sudoMotherboard" src="img/MotherboardNoBG.png" width="300" height="200" alt="Motherboard">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/Motherboard.php">
				<center><font color="black">Sudo Motherboard</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Motherboard.php">
				<center><font color="black">$400.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Monitor.php">
				<div class="img-magnifier-container">
                    <img id="sudoMonitor" src="img/MonitorNoBG.png" width="300" height="200" alt="monitor">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/Monitor.php">
				<center><font color="black">Sudo Monitor</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Monitor.php">
				<center><font color="black">$500.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Mousepad.php">
				<div class="img-magnifier-container">
                    <img id="sudoMousepad" src="img/MousepadNoBG.png" width="300" height="200" alt="mousepad">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/Mousepad.php">
				<center><font color="black">Sudo Mousepad</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Mousepad.php">
				<center><font color="black">$80.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/lightstrip.php">
				<div class="img-magnifier-container">
                    <img id="sudoLightstrip" src="img/LightstripNoBG.png" width="300" height="200" alt="lightstrip">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/lightstrip.php">
				<center><font color="black">Sudo LED Light Strip</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/lightstrip.php">
				<center><font color="black">$80.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/laptop.php">
				<div class="img-magnifier-container">
                    <img id="sudoLaptop" src="img/LaptopNoBG.png" width="300" height="200" alt="Laptop">
                  </div>
			</a>
		</td>
		<td width="25%">
			<a href="products/laptop.php">
				<center><font color="black">Sudo Laptop</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/laptop.php">
				<center><font color="black">$3,000</font></center>
			</a>
		</td>
	</tr>
</tbody>
							
</table>
		</td>
	</table>
	</center>
    </div>
    </html>
</div>
	<script src="AllProducts.js"></script>
	</body>
	<br>

	<footer>
		<table width="100%" cellspacing="0px">

</table>
</footer>

<script>
    magnify("sudoMouse", 3);
    magnify("sudoKeyboard", 3);
    magnify("sudoCase", 3);
    magnify("sudoSpeakers", 3);
    magnify("sudoRam", 3);
    magnify("sudoFan", 3);
    magnify("sudoChair", 3);
    magnify("sudoMotherboard", 3);
    magnify("sudoMonitor", 3);
    magnify("sudoMousepad", 3);
    magnify("sudoLightstrip", 3);
    magnify("sudoLaptop", 3);
    </script>
</html>