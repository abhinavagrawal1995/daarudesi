
<header id="header">
	<div class="inner" id="abi">

		<!-- Logo 
			<a href="index.php" class="logo">
				<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">HBD Angel</span>
			</a>-->

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
		<li><a href="index.php">Janamdin Mubarak</a></li>
		<li><a href="music.php">Gaana bajadey</a></li>
		<li><a href="gallery">Timeless Images</a></li>
	</ul>
</nav>
<script>
var h=document.getElementById('menu');
var pas=localStorage.getItem("passed");
if(pas!="yes")
h.innerHTML='Pehle sara <a href="riddles.php" style="color: #FF7979;">riddles</a> unlock karo.';
</script>