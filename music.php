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
	<body>
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php require_once 'header.php'; ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Generic Page</h1>
							
							<span class="image main"><img src="images/pic13.jpg" alt="" /></span>
							<hr>
							<div class="row">
								<div class="6u" >
								<button onclick='prevSong()' style="float: left;">Previous</button>
								</div>
								<div class="6u" >
								<button onclick='nextSong()' style="float: right;">Next</button>
								</div>
							</div>
							<br>
							<div class="row">
								<div class="6u" style="text-align: left;">
									<div class="row">
									<h2><span id="liner">Some random sentence.</span></h2>
									</div>
									<div class="row">
										<div class="12u$">
													<textarea name="demo-message" id="demo-message" placeholder="Enter your message" rows="6"></textarea>
										</div>
									</div>
									<div class="row" style="padding-top: 5px;">
										<div class="12u$">
												<ul class="actions">
													<li><input type="submit" value="Send Message" class="special" /></li>
												</ul>
											</div>
									</div>
								</div>
								<div class="6u" style="text-align: center;overflow-y: scroll;overflow-x: hidden;word-wrap: break-word;height:300px;">
									<span id="lyrics">
									Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.
									</span>
			
								</div>
							</div>

							<br>
							<div class="row">
								<div class="12u">
								<audio id='audio' controls src='' style="width:100%;"></audio>
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
			<script>
				var songs = ['http://www.tonycuffe.com/mp3/tail%20toddle.mp3', 'http://www.tonycuffe.com/mp3/cairnomount.mp3', 'http://www.tonycuffe.com/mp3/pipers%20hut.mp3'];
				var quote=['text1','text2','text3'];
				var lyrics=['Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.Lyrics.','mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.mast.','done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.done.'];

				var details = ['Song 1 / Artist 1', 'Song 2 / Artist 2', 'Song 3 / Artist 3'];

				var counter = 0;

				changeSong();

				function prevSong(){
				    counter = counter - 1;
				    if (counter ==-1){
				        counter =songs.length-1 ;
				    };
				    changeSong();
				};
				function nextSong(){
					counter = counter + 1;
				    if (counter ==songs.length){
				        counter = 0;
				    };
				    changeSong();
				};
				function changeSong(){
				    var newSong = songs[counter];
				    var player = document.getElementById('audio');
				    player.setAttribute('src', newSong);
				    player.load();
				    //player.play();
				    document.getElementById('liner').innerHTML=quote[counter];
				    document.getElementById('lyrics').innerHTML=lyrics[counter];
				    
				};
				   
			</script>

	</body>
</html>