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
	<body onload="solve()">
		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<?php require_once 'header.php'; ?>

				<!-- Main -->
					<div id="main">
						<div class="inner">
							<h1>Thora sawaal-jawab ho jaye?</h1>
							<span class="image main"><img src="images/08.jpg" alt="" style="height: 500px;"/></span>
							<hr>
							<div class="row">
								<div class="7u 12u$(medium)">
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
			<script>
				var c=-1;
				var que=['Mera naam','tera naam','question 3','question 4','question 5'];
				var hint=['hint 1','hint 2','hint 3','hint 4','hint 5'];
				var ans=['abhinav','mayank','a3','a4','a5'];
				var imgs = ['images/riddles/pic01.jpg','images/riddles/pic02.jpg','images/riddles/pic03.jpg','images/riddles/pic04.jpg','images/riddles/pic05.jpg'];
				function chkenter(e)
				{
					var key=e.keyCode || e.which;
					  if (key==13){
					     check();
					  }
				}
				function solve(){	
								
					c++;
					if(c==2)
					{
						localStorage.setItem("passed", "yes");
						window.location="music.php";
					}
					else
					{
				   		document.getElementById("myImg").src = imgs[c];
				   		document.getElementById('ques').innerHTML=que[c];
				   		document.getElementById('hint').innerHTML=hint[c];
					}
				};
				function check(){
				if((document.getElementById('ans').value)==ans[c])
				{
					window.alert("Sahi Jawaab!");
					document.getElementById('ans').value="";
					solve();
				}
				else
					window.alert("Galat.");	
				}
				function change(str){
					str=str.toLowerCase();
					str=str.replace(/ /g,'');
					return str;
				}

			</script>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>