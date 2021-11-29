<?php
    include ("login.php");
?>
<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>Đăng Nhập</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Online Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	
	<script src="./js/dangnhap.js"></script>
	<link rel="stylesheet" href="./css/style.css" type="text/css" media="all" /> 
	<link rel="stylesheet" href="./css/font-awesome.css"> 

	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800&amp;subset=latin-ext" rel="stylesheet">

</head>

<body>

	<!-- main -->
	<div class="center-container">
		<!--header-->
		<div class="header-w3l">
			<a href="index.php">
				<h1 style="font-size: 40px; color:blue"> ULTIMATE <am style="color: red; font-size: 100px;">Laptop</am>
				</h1>
			</a>
		</div>
		<!--//header-->
		<div class="main-content-agile">
			<div class="sub-main-w3">
				<div class="wthree-pro">
					<h2 style="color: white;">Login Quick</h2>
				</div>
				<form action="" method="post">
					<div class="pom-agile">
						<input placeholder="User Name" name="Tk" id="UN" class="user" type="text">
						<span class="icon1"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
					<div class="pom-agile">
						<input placeholder="Password" name="MK" class="pass" type="password">
						<span class="icon2"><i class="fa fa-unlock" aria-hidden="true"></i></span>
					</div>
					<div class="sub-w3l">
						<h6><a href="#" style="color: aliceblue;">Forgot Password?</a></h6>
						<div class="right-w3l">
							<input type="submit" name="DNhap" value="Đăng Nhập">
							<a href="pageDK.php"><input type="button" value="Đăng Kí"> </a>

						</div>
					</div>
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p> COPYRIGHT © 2021 ULTIMATE LAPTOP CO., LTD. - DESIGN: NOTME <a href="index.php" style="color: red;">ULTIMATE LAPTOP</a></p>
		</div>
		<!--//footer-->
	</div>
</body>

</html>