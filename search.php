<?php
require_once("sql_connect.php");
?>
<!DOCTYPE html>
<html lang="en-us">
<html>
<title>Search - Sudo Store</title>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">

	<style>
		body, html{
    background-image: url("img/SudoBackground.png");
    height:100%;
    font-family: Arial, Helvetica, sans-serif;
}




.Title{
    padding-top: 15px;
    width: 400px;
    height: 0px;
    font-size: 30px;
    margin: 0px;
    padding-left: 5%;
}
.Title h1{
    height: 60px;
    margin: 0px;
    padding: 0px;
    text-shadow: 2px 2px 5px #036100;
}

.Title h7{
    color: #397eff;
    text-shadow: 2px 2px 5px #ff0099;
}

div.scrollmenu{
    font-family: Arial, Helvetica, sans-serif;
}
font{
    font-family: Arial, Helvetica, sans-serif;
    color:#4dff4d;
}
#description{
    font-family: Arial, Helvetica, sans-serif;

}

li{
    float: left;
}

#searchbar{
	background-color:#00000000;
	border-radius:30px;
	border: 1px solid #ccc;
	padding:10px;
	color:#fff;
	width:900px;
	height:40px;
	font-size:30px;
}

#searchbar::placeholder{
	color:#ccc;
	font-size:30px;
}

.SearchArea{
    position: relative;
    padding-left: 85%;
}

.SearchArea a{
    display: block;
    padding: 14px, 16px;
    text-align: center;
    text-decoration: none;
}

.SearchArea a:hover{
    background-image:radial-gradient(circle, #c7ba00 90%,rgba(189, 14, 212, 0.884) 10%);
    box-shadow: 0px 0px 15px 15px rgba(189, 14, 212, 0.884);
    transition: box-shadow .25s ease-out;
    transition background-image: .25s ease-out;
}
.UsrButton {
    background-color:#39b439;
    border-radius: 30px;
    width: 175px;
    color: white;
    padding: 6px 10px;
    text-align: center;
    display: inline-block;
    font-size: 16px;
    margin: 5px 0px;
    cursor: pointer;
  }
.UsrButton:hover{
    box-shadow: 0px 0px 5px 5px rgba(189, 14, 212, 0.884);
}

ul{
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  
}

li a{
    display: block;
    color: #4dff4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li p{
    display: block;
    color: #4dff4d;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover{
    background-image:radial-gradient(circle, #3eb2ff 85%,rgba(14, 212, 57, 0.884) 10%);
    box-shadow: 0px 0px 15px 15px rgba(14, 212, 196, 0.884);
    z-index: 1;
    transition: background-image .25s ease-out;
    transition: box-shadow .25s ease-out;
}

a{
	text-decoration:none;
	color:#4dff4d;
}

.dropdown{
    float: left;
    overflow: visible;
}


.dropdown a:hover{
    border-radius:30px;
    background-image:radial-gradient(circle, #3eb2ff 90%,rgba(14, 212, 57, 0.884) 10%);
    box-shadow: 0px 0px 15px 15px rgba(14, 212, 196, 0.884);
}

.dropdown-content {
    display:none;
    position: absolute;
    
    min-width: 160px;
    z-index: 1;
  }
  .dropdown-content a {
    border-radius:30px;
    float: none;
    color: #4dff4d;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
  }

.dropdown:hover .dropdown-content {
    display: block;
  }

#CartButton{
    text-align: center;
    background-color: rgb(187, 0, 0);
    border-radius: 30px;
    border: none;
    margin: 10px;
    padding: 16px;

}

#CartButton:hover{
    box-shadow: 0px 0px 15px 15px goldenrod;
    transition: box-shadow .5s ease-out
}

.productDescription p{
    color: rgb(255, 255, 255);
    size: 15px;
    text-shadow: 2px 2px 5px rgb(255, 0, 242);
}

.productDescription font{
    size: 15px;
    text-shadow: 2px 2px 5px rgb(78, 74, 66);
}


footer{
    padding-bottom: 0px;
    font-family: Arial, Helvetica, sans-serif;
}
		div.Title{
			width:100%;
			overflow: visible;
		}

div.follow{
	width:100%;
	display:block;


}

	.content-table{
		border-collapse:collapse;
		margin: 10px;
		height: 15px;
		font-size: 0.9em;
		min-width: 400px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgb(123, 255, 118);

	}
	
	.content-table thead tr{
		background-color: black;
		color: rgb(118, 255, 118);
		text-align: right;
		font-weight: bold;
	}
	.content-table tbody{
		background-color: #009879;
	}

	.content-table tbody tr:last-of-type{
		border-bottom: 2px solid #009900;
	}

	tbody.Selector tr:hover{
		transform: scale(1.19);
		background-image:radial-gradient(circle, #c7ba00 90%,rgba(189, 14, 212, 0.884) 10%);
    box-shadow: 0px 0px 15px 15px rgba(189, 14, 212, 0.884);
    transition: box-shadow .25s ease-out;
    transition background-image: .25s ease-out;
	}
	footer{
    
    font-family: Arial, Helvetica, sans-serif;
}
		.Title:hover{
			overflow: visible;
		}
		tbody.Selector tr:hover{
		
			background-blend-mode: screen;
			text-shadow: 0px 0px 15px 15px rgba(189, 14, 212, 0.884);
    transition: text-emphasis: none;text-shadow .25s ease-out;
    transition background-image: .25s ease-out;
		}
		.content-table{
			position: relative;
    	top: 100;
    	width: 900px;
    	margin: 100px;
    	padding: 100px;
		}
		
	.nonProductLinks{
		height:100px;
	}
	
	td > p{
		display: none;
		align:left;
	}
	footer a{
		font-size:medium;
	}
</style>

<script>

// This function controls what rows of the table are displayed. It searches through the text of the element (the text contained in the first <font> in the <tr>, as well as <div class="extraInfo"> if the row contains that.)
function search() {
	
	var input, filter, ul, li, a, i, extra, hasExtra, numOfResults;
	
	input = document.getElementById("searchbar");
	filter = input.value.toUpperCase();
	ul = document.getElementById("productList");
	li = ul.getElementsByTagName("tr");
	
	numOfResults = 0;
	
	for (i = 0; i < li.length; i++) {
		extra = li[i].getElementsByTagName("p")[0];
		
		if(extra != undefined)
			hasExtra = 1
		else
			hasExtra = 0;
		
		a = li[i].getElementsByTagName("font")[0];
		
		
		if ((a.innerHTML.toUpperCase().indexOf(filter) > -1 || (Boolean(hasExtra) && extra.innerHTML.toUpperCase().indexOf(filter) > -1)) && filter != "") {
			li[i].style.display = "";
			numOfResults++;
		} else {
			li[i].style.display = "none";
		}
		
		if(filter == ""){
			document.getElementById("searchHead").style.display = "none";
		} else {
			document.getElementById("searchHead").style.display = "";
		}
	}
	if(numOfResults == 0)
		document.getElementById("searchHeadText").innerHTML = "No results";
	else
		document.getElementById("searchHeadText").innerHTML = "Search results";
}
</script>
	

</head>

<body>
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

	<div style="height:1000px;font-size:36px">
		<center>
<table class= "content-table" width="40%">
	<thead>
	<tr>
		<th colspan=3>
		<input type="text" placeholder="Search" id="searchbar" onkeyup="search()" required>
		</th>
	</tr>
	<tr id="searchHead" height=80px>
		<th colspan=3><center id="searchHeadText">Search results</center></th>
	</tr>
</thead>
<tbody id="productList" class="Selector">
	<tr>
		<td width="25%"><a href="products/mouse.php">
			<img src="img/mouseNoBG.png" width="100%"><br>
		</a>
		</td>
		<td width="25%">
			<a href="products/mouse.php">
			<center><font size="+2" color="black">Sudo Mouse</center></font>
			</a>
		</td>
		<td>
			<a href="products/mouse.php">
			<center><font size="+2" color="black">$80.00</center></font>
			</a>
		</td>
	</tr>
	<tr>
					<td width="25%">
					<a href="products/keyboard.php">
					<img src="img/keyboardNoBG.png" width="100%">
					</a>
					</td>
					<td width="25%">
					<a href="products/keyboard.php"><center><font size="+2" color="black">Sudo Keyboard</center></font>
					</a>
					</td>
					<td width="25%">
					<a href="products/keyboard.php"><center><font size="+2" color="black">$150.00</center></font>
					</a>
					</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/case.php">
				<img src="img/caseNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/case.php"><center><font size="+2" color="black">
			Sudo Case</center></font></a>
		</td>
		<td>
			<a href="products/case.php"><center><font size="+2" color="black">
				$45.00</center></font></a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/speakers.php">
				<img src="img/speakers.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/speakers.php">
				<center><font size="+2" color="black">Sudo Speakers</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/speakers.php">
				<center><font size="+2" color="black">$45.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Ram.php">
				<img src="img/RamNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/Ram.php">
				<center><font size="+2" color="black">Sudo Ram</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Ram.php">
				<center><font size="+2" color="black">$250.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/cpuFan.php">
				<img src="img/CpuFanNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/CpuFan.php">
				<center><font size="+2" color="black">Sudo Cpu Fan</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/CpuFan.php">
				<center><font size="+2" color="black">$400.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/RGBChair.php">
				<img src="img/RGBChairNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/RGBChair.php">
				<center><font size="+2" color="black">Sudo Racing Chair</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/RGBChair.php">
				<center><font size="+2" color="black">$400.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Motherboard.php">
				<img src="img/MotherboardNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/Motherboard.php">
				<center><font size="+2" color="black">Sudo Motherboard</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Motherboard.php">
				<center><font size="+2" color="black">$400.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Monitor.php">
				<img src="img/MonitorNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/Monitor.php">
				<center><font size="+2" color="black">Sudo Monitor</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Monitor.php">
				<center><font size="+2" color="black">$500.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/Mousepad.php">
				<img src="img/MousepadNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/Mousepad.php">
				<center><font size="+2" color="black">Sudo Mousepad</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/Mousepad.php">
				<center><font size="+2" color="black">$80.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/lightstrip.php">
				<img src="img/LightstripNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/lightstrip.php">
				<center><font size="+2" color="black">Sudo LED Light Strip</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/lightstrip.php">
				<center><font size="+2" color="black">$80.00</font></center>
			</a>
		</td>
	</tr>
	<tr>
		<td width="25%">
			<a href="products/laptop.php">
				<img src="img/LaptopNoBG.png" width="100%"><br>
			</a>
		</td>
		<td width="25%">
			<a href="products/laptop.php">
				<center><font size="+2" color="black">Sudo Laptop</font></center>
			</a>
		</td>
		<td width="25%">
			<a href="products/laptop.php">
				<center><font size="+2" color="black">$3,000</font></center>
			</a>
		</td>
	</tr>
	
	<!-- Non products from here, <p> tag is hidden but searchable -->
	
	<tr class="nonProductLinks">
		<td width="100%" colspan=3>
			<a href="login.php">
				<center><font size="+2" color="black">Login to account</font></center>
			</a>
			<p>user sign in, signin, login, log in</p>
		</td>
		
	</tr>
	<tr class="nonProductLinks">
		<td width="100%" colspan=3>
			<a href="register.php">
				<center><font size="+2" color="black">Register new account</font></center>
			</a>
			<p>new sign in, create account, new user, first time</p>
		</td>
		
	</tr>
	<tr class="nonProductLinks">
		
		<td width="100%" colspan=3>
			<a href="reset.php">
				<center><font size="+2" color="black">Reset my password</font></center>
			</a>
			<p>forgot password, forgot my passowrd, what's my password, what is my password</p>
		</td>
		
	</tr>
	<tr class="nonProductLinks">
		
		<td width="100%" colspan=3>
			<a href="about/faq.php">
				<center><font size="+2" color="black">FAQ</font></center>
			</a>
			<p>tax, payment, method, do you take, how soon will I see my product, shipping time, credit card, paypal, help</p>
		</td>
		
	</tr>
	<tr class="nonProductLinks">
		
		<td width="100%" colspan=3>
			<a href="about/about.php">
				<center><font size="+2" color="black">About us</font></center>
			</a>
			<p>about us, who is this, who are you, person, people, founders</p>
		</td>
		
	</tr>
	<tr class="nonProductLinks">
		
		<td width="100%" colspan=3>
			<a href="checkout/cart.php">
				<center><font size="+2" color="black">Go to cart</font></center>
			</a>
			<p>checkout, pay, purchase</p>
		</td>
		
	</tr>
	
</tbody>
							
</table>
<script>
const urlParams = new URLSearchParams(window.location.search);
document.getElementById("searchbar").value = urlParams.get('q');

search();
</script>

	
	
	<br>

<footer>
	<table width="100%" cellspacing="0px">
		<tr id="footer">
			<td colspan="3">
				<center>
					<a href="about/faq.php">FAQ</a>&nbsp;&nbsp;
					<a href="about/about.php">About</a>&nbsp;&nbsp;
					<a href="login.php">Account</a><br>
					<font size=3 color="grey">Last updated a while ago</font>
				</center>
			</td>
		</tr>
	</table>
</center>
</footer>
</body>
</html>