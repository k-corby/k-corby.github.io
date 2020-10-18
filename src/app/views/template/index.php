<!DOCTYPE html>
<html>

<head>
	<link rel="shortcut icon" href="img/favicon.png" />
	<title>Algortihms</title>
	<!-- Bootstrap core CSS -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/grid.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
	<div class="grid">
		<header>
			<nav>
				<div id="logo">
					<a href="/">algo</a>
				</div>
				<div id="menu">
					<div id="search">
						<h1>Search</h1>
					</div>
					<a class="push main-link" href="/">Learning</a>
					<a class="main-link" href="/algorithm/index">Algorithms <span class=""></span></a>
					<a class="main-link" href="/structures/index">Data Structures </a>
					<input type="checkbox" id="searchCheck">


					<a class="main-link main-link-search" href="#"><label for="searchCheck">Search&rarr;</label></a>
					<div id="search">
						<label for="searchCheck">close</label>
						<h1>Search</h1>
					</div>
					<a class="main-link" href="/algorithm/index"><svg xmlns="http://www.w3.org/2000/svg" id="hamburger-nav" width="32" height="20" viewBox="0 0 32 18">
							<g fill="none" fill-rule="evenodd" stroke="#1E2122" stroke-linecap="square" stroke-width="3" transform="translate(2)">
								<path d="M0 1L30 1M0 9L30 9M0 17L30 17"></path>
							</g>
						</svg></a>
				</div>
			</nav>
		</header>

		<main>
			<?php include "../app/views/" . $view . ".php"; ?>
		</main>

		<footer>
			Footer
		</footer>
	</div>

	<!--
	<nav class="fixed">
		<div class="container-wrapper">
			<div class="container">
				<div class="row nav" id="nav">
					<div class="col-20" id="logo">
						<main>
							<span>
								<a href="/">algo</a>
							</span>
						</main>
					</div>
					<div class="col-80" id="menu">
						<a class="push main-link" href="/">Learning</a>
						<a class="main-link" href="/algorithm/index">Algorithms <span class="">&#8711;</span></a>
						<a class="main-link" href="/structures/index">Data Structures &darr;</a>
						<a class="main-link" href="/admin/index">Search&rarr;</a>
						<a class="main-link" href="/algorithm/index"><svg xmlns="http://www.w3.org/2000/svg" id="hamburger-nav" width="32" height="20" viewBox="0 0 32 18">
								<g fill="none" fill-rule="evenodd" stroke="#1E2122" stroke-linecap="square" stroke-width="3" transform="translate(2)">
									<path d="M0 1L30 1M0 9L30 9M0 17L30 17"></path>
								</g>
							</svg></a>
					</div>
					<a class="push icon" href="javascript:void(0);" onclick="myFunction()">&#9776;</a>

				</div>
			</div>
		</div>
	</nav>
	<main>
		<div class="container-wrapper-fluid">
			<div class="container">
				<?php include "../app/views/" . $view . ".php"; ?>
			</div>
		</div>
	</main>
	<footer>
		<div class="container-wrapper footer">
			<div class="container">
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
			</div>
	</footer>
-->

	<script src="js/jquery/jquery.min.js"></script>
	<!-- Plugin JavaScript -->
	<script src="js/jquery-easing/jquery.easing.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
	<!-- Custom JavaScript for this theme -->
	<script src="js/custom.js"></script>
</body>

</html>