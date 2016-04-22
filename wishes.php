<!DOCTYPE HTML>
<!--
	daarudesi by Abhinav Agrawal
	abhinavagrawal.in
-->
<html>
	<head>
		<title>Random</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body onload="solve()">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php require_once 'header.php'; ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>wishes wishes wishes wishes</h1>
							<hr>
							<div class="row">
								<div class ="7u 12u$(medium)">
									<div class="row">
										<h3 id="ques">question 1</h3>
									</div>
									<div class="row">
										<h4 id="hint">hint 1</h4>
									</div>
									<div class="row">
										<span class="image fit"><img id="myImg" src="images/pic02.jpg" alt="" style="height: 300px;"></span>
									</div>
								</div>

								<div class="4u 12u$(medium)" style="float:right;padding-top: 100px;">
									<div class="field" >
										<input type="text" name="ans" id="ans" onKeydown="chkenter(event);" placeholder="Answer" />
									</div>
									<br>
									<ul class="actions">
										<button onclick='check()' style="float: right;">Submit</button>
									</ul>
								</div>
							</div>
							<hr>
						</div>
					</div>

				<!-- Footer -->
					<?php require_once 'footer.php';?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>