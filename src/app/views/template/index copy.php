<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="img/favicon.png" />
	<title>Algortihms</title>
	<!-- Bootstrap core CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<!-- Navigation Bar -->
	<div class="fixed">
		<div class="container-wrapper">
			<div class="container">
				<div class="topnav" id="myTopnav">
					<div id="logo">
						<main>
							<span>
								<a href="/">algo</a>
							</span>
						</main>
						<!--<a class="logo-link" href="/">ALGO</a>-->
					</div>
					<div id="links">
						<a class="push main-link" href="/">Learning</a>
						<a class="main-link" href="/algorithm/index">Algorithms</a>
						<a class="main-link" href="/structures/index">Data Structures</a>
						<a class="main-link" href="/admin/index">Search</a>
						<a class="main-link" href="/algorithm/index">&#9776;</a>
					</div>
					<a class="push icon" href="javascript:void(0);" onclick="myFunction()">&#9776;</a>

				</div>
			</div>
		</div>
	</div>
	<!--<div class="fixed-sub topnav" id="myTopnav">
		<div class="container-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-90">
						<div id="sub-links">
							<a class="push main-link" href="/">Home</a>
							<a class="main-link" href="/algorithm/index">Algorithms</a>
							<a class="main-link" href="/structures/index">Data Structures</a>
							<a class="main-link" href="/admin/index">Blog</a>
							<a class="push main-link" href="/">Register</a>
							<a class="main-link" href="/algorithm/index">Login</a>
						</div>
					</div>
					<div class="col-20">
						<form class="form">
							<input type="text" class="form-item">
							<button class="search-icon">GO</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>-->
	<div class="container-wrapper">
		<div class="container">

			<?php include "../app/views/" . $view . ".php"; ?>
		</div>
	</div>
	<div class="container-wrapper footer">
		<div class="container">
			<footer>
				<div class="row">
					<div class="col-60">
						<h6>About</h6>
						<p class="text-justify">Scanfcode.com <i>CODE WANTS TO BE SIMPLE </i> is an initiative to help the upcoming programmers with the code. Scanfcode focuses on providing the most efficient code or snippets as the code wants to be simple. We will help programmers build up concepts in different programming languages that include C, C++, Java, HTML, CSS, Bootstrap, JavaScript, PHP, Android, SQL and Algorithm.</p>
					</div>

					<div class="col-20">
						<h6>Categories</h6>
						<ul class="footer-links">
							<li><a href="http://scanfcode.com/category/c-language/">C</a></li>
							<li><a href="http://scanfcode.com/category/front-end-development/">UI Design</a></li>
							<li><a href="http://scanfcode.com/category/back-end-development/">PHP</a></li>
							<li><a href="http://scanfcode.com/category/java-programming-language/">Java</a></li>
							<li><a href="http://scanfcode.com/category/android/">Android</a></li>
							<li><a href="http://scanfcode.com/category/templates/">Templates</a></li>
						</ul>
					</div>

					<div class="col-20">
						<h6>Quick Links</h6>
						<ul class="footer-links">
							<li><a href="http://scanfcode.com/about/">About Us</a></li>
							<li><a href="http://scanfcode.com/contact/">Contact Us</a></li>
							<li><a href="http://scanfcode.com/contribute-at-scanfcode/">Contribute</a></li>
							<li><a href="http://scanfcode.com/privacy-policy/">Privacy Policy</a></li>
							<li><a href="http://scanfcode.com/sitemap/">Sitemap</a></li>
						</ul>
					</div>
				</div>
				<hr>
				<div class="row">
					<div class="col-66">
						<p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by
							<a href="#">Scanfcode</a>.
						</p>
					</div>

					<div class="col-33">
						<ul class="social-icons">
							<li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</footer>
		</div>
		<!--
				<center>
					<div id="copyright">Copyright &copy; 2020 Algorythmes</div>
					<div id="footer-menu">
						<a href="index.php">Home</a>
						<a href="sports.php">Algorithms</a>
						<a href="signup.php">Blog</a>
						<a href="admin.php">Admin</a>
					</div>
				</center>-->

		<script src="js/jquery/jquery.min.js"></script>
		<!-- Plugin JavaScript -->
		<script src="js/jquery-easing/jquery.easing.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
		<!-- Custom JavaScript for this theme -->
		<script src="js/custom.js"></script>
</body>

</html>