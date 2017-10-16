<?php 
$str = file_get_contents('splash-email-data.json');
$json = json_encode($str);
$json = json_decode($str, true);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Email Templates</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-loading">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">
					<div class="postal">
						<svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.85 95"><defs><style>.cls-1{fill:#fff;}</style></defs><title>noun_85037_cc</title><path class="cls-1" d="M74.13,15.39,43.59,2.77l-.18-.06c-2.64-.6-5.69,0-8.82,1.85A22.83,22.83,0,0,0,31.24,7L31.13,7c-.27.24-.54.48-.8.73l-.17.16-.41.4-.3.3-.28.29-.35.37-.23.25-.37.41-.55.64-.15.18-.46.57-.1.12-.51.68,0,0C22.53,17.46,20.06,24,20.07,29.63v0s0,.06,0,.09V84.12a1.1,1.1,0,0,0,.56,1l3.62,2,.06,0,.06,0,.08,0,.06,0,.09,0h.47l.06,0,.07,0,.06,0,.06,0,3.62-2a1.1,1.1,0,0,0,.56-1v-10L46.09,81V94.38a1.1,1.1,0,0,0,.56,1l3.62,2,.06,0,.06,0,.09,0h0l.13,0H51l.08,0,.06,0,.08,0,.07,0,.05,0h0l3.6-2a1.1,1.1,0,0,0,.56-1V80.92l15.15-8.73v8.07a1.1,1.1,0,0,0,.56,1l3.62,2a1.09,1.09,0,0,0,1,0l.2-.09,3.35-2a1.1,1.1,0,0,0,.53-.94V25.87C79.91,20.56,77.72,16.74,74.13,15.39ZM35.69,6.47C38.3,5,40.77,4.4,42.84,4.84L68.08,15.26a16.33,16.33,0,0,0-3.86,1.65,22.48,22.48,0,0,0-3,2.07L34,7.58A19.82,19.82,0,0,1,35.69,6.47ZM32.06,9.15,34,10V21L22.38,27.67a27.37,27.37,0,0,1,2.48-8.6A31.94,31.94,0,0,1,32.06,9.15Zm3.15,13.7,17.43,7.23a29.46,29.46,0,0,0-2.89,10.27L23.65,29.47Zm18.44,5.27L36.24,20.9v-10l23.12,9.67A33.42,33.42,0,0,0,53.66,28.12ZM22.27,31.27,49.7,42.7V54.65L22.27,43.22Zm5,52.21-1.42.8V72.58l1.42.59Zm20.3-4.2L25.21,69.92a1.1,1.1,0,0,0-1.52,1V84.28l-1.42-.8V45.6L49.7,57V94.53l-1.42-.8V80.29A1.1,1.1,0,0,0,47.61,79.28Zm25.26.34V70.93l1.42-.82v10.3Zm4.87,0-1.15.7V68.16a1.1,1.1,0,0,0-1.65-1L53.87,79.34a1.1,1.1,0,0,0-.55,1V93.74l-1.42.8V56.29h0V42.08s0,0,0-.07,0,0,0,0,0,0,0,0c0-8.51,6-18.85,13.42-23.11A11.81,11.81,0,0,1,71.06,17c4.1,0,6.66,3.39,6.67,8.84ZM36,53.32a1.32,1.32,0,0,0-1.31-.13,1.29,1.29,0,0,0-.55,1.19A4.08,4.08,0,0,0,36,57.59a1.32,1.32,0,0,0,1.31.13,1.3,1.3,0,0,0,.55-1.2A4.08,4.08,0,0,0,36,53.32Zm.75,3.45A.76.76,0,0,1,36,56.7a2.37,2.37,0,0,1-1.08-1.86A.66.66,0,0,1,36,54.22a2.37,2.37,0,0,1,1.07,1.86A.75.75,0,0,1,36.75,56.77Zm4.94-15-8.81-3.67a1.1,1.1,0,0,0-1.52,1v5.49a1.1,1.1,0,0,0,.68,1l8.81,3.67a1.1,1.1,0,0,0,1.52-1V42.82A1.1,1.1,0,0,0,41.69,41.81Zm-1.52,4.86-6.62-2.76V40.8l6.62,2.76Zm4.42-26.39,0-.11,0-.06,0,0,.06-.1.05-.08.07-.08.07-.08.07-.06.1-.07,0,0L47.79,18a1.1,1.1,0,1,1,1.1,1.9l-.75.43,5.06,2.1,2.21-1.28a1.1,1.1,0,1,1,1.1,1.9l-2.68,1.55,0,0-.06,0-.09,0-.05,0-.11,0h-.2l-.18,0H53l-.18-.06h0l-7.61-3.16h0l-.16-.09,0,0-.15-.12,0,0-.1-.13,0,0,0,0,0-.06,0-.11,0-.1,0-.1s0-.07,0-.11a1,1,0,0,1,0-.11,1,1,0,0,1,0-.11A1,1,0,0,1,44.59,20.28Z" transform="translate(-20.07 -2.5)"/></svg>
					</div>
				<!-- Intro -->
					<div id="intro">
						<h1>Email<br />
						</h1>
						<p>We're here to help. Take a look at some of the prebuilt templates to help get you going</p>
						<ul class="actions">
							<li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo">Email</a>
					</header>

				<!-- Nav -->
					<!-- <nav id="nav">
						<ul class="links">
							<li class="active"><a href="index.html">This is Massively</a></li>
							<li><a href="generic.html">Generic Page</a></li>
							<li><a href="elements.html">Elements Reference</a></li>
						</ul>
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</nav> -->

				<!-- Main -->
					<div id="main">

						<!-- Featured Post -->
							<!-- <article class="post featured">
								<header class="major">
									<span class="date">April 25, 2017</span>
									<h2><a href="#">And this is a<br />
									massive headline</a></h2>
									<p>Aenean ornare velit lacus varius enim ullamcorper proin aliquam<br />
									facilisis ante sed etiam magna interdum congue. Lorem ipsum dolor<br />
									amet nullam sed etiam veroeros.</p>
								</header>
								<a href="#" class="image main"><img src="images/pic01.jpg" alt="" /></a>
								<ul class="actions">
									<li><a href="#" class="button big">More Info</a></li>
								</ul>
							</article> -->

						<!-- Posts -->
					
							<section class="posts">

							<?php 	foreach($json as $emailTemplate) { ?>
								<article>
									<header>	
										<h2><?php echo $emailTemplate['name'] ?></h2>
									</header>
									<img src="<?php echo $emailTemplate['image'] ?>" alt="<?php echo $emailTemplate['name'] ?>" />
									<ul class="actions">
										<li><a href="#" class="button">More Info</a></li>
									</ul>
								</article>
								<?php } ?>
							</section>


					</div>
			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>