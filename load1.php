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
	<body>
		<!-- Wrapper -->
		<div id="wrapper">
				
			<header id="header">
				<div class="inner" id="abi" style="text-align: center;">
						<a href="riddles.php" class="logo">
						<span class="title">Aage badhne ke liye, yaha dabaye.</span>
						</a>
						<br>
						<ul class="actions">
							<li><a href="#" class="button special" onclick="play()">Gaana bajade</a></li>
						</ul>
					<!-- Nav -->
						<nav>
							<ul>
								<li><a href="#menu">Menu</a></li>
							</ul>
						</nav>
				</div>
			</header>
			<!-- Menu -->
			<nav id="menu">
				<h2>Menu</h2>
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="riddles.php">Riddles</a></li>
				</ul>
			</nav>

			<script>
				var h=document.getElementById('menu');
				var pas=localStorage.getItem("passed");
				if(pas!="yes")
				h.innerHTML='Pehle sara <a href="riddles.php" style="color: #FF7979;">riddles</a> unlock karo.';
			</script>

			<audio src="songs/daarudesi.mp3" id="audio">
				<p>If you are reading this, it is because your browser does not support the audio element.     </p>
				<embed src="song.mp3" width="180" height="90" hidden="true" />
			</audio>
				<!-- Main -->
			<div id="main">
				<div class="inner">
					<span class="image main" style="background: url('images/party.gif');background-repeat:no-repeat;background-size:contain;background-position:center;width: 90vw;height: 60vh;"></span>
				</div>
			</div>
			<!-- Footer -->
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