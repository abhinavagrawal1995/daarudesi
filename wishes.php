<!DOCTYPE HTML>
<!--
	daarudesi by Abhinav Agrawal
	abhinavagrawal.in
-->
<html>
	<head>
		<title>HBD Angel</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body style="background-image: url('images/wishes.jpg');background-size: 100%; ">
		<!-- Wrapper -->
			<div id="wrapper" >

				<!-- Header -->
					<?php require_once 'header.php'; ?>

				<!-- Main -->
					<div id="main">
						<div class="inner" style="text-align: center;">
							<h1 style="color:white;">wishes wishes wishes wishes</h1>
							<hr>
							<ul class="actions">
								<li style="text-align: center;"><a href="bday.pdf" download="bday.pdf" class="button" style="color:white;">That long message.</a></li>
							</ul>
							<ul class="actions">
								<li style="text-align: center;"><a href="#" class="button" onclick="play()" style="color:white;">Happy budday</a></li>
							</ul>
							<a href="riddles.php" class="logo">
							<span class="title" style="color:white;">Aage badhne ke liye, yaha dabaye.</span>
							</a>
							<hr>
						</div>
					</div>
					<audio src="songs/wish.mp3" id="audio">
				<p>If you are reading this, it is because your browser does not support the audio element.</p>
				<embed src="song.mp3" width="180" height="90" hidden="true" />
			</audio>

				<!-- Footer -->
					<?php require_once 'footer.php';?>

			</div>

		<!-- Scripts -->
		<script>
			 function play(){
		       var audio = document.getElementById("audio");
		       audio.play();
                }
		</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>