
<header id="header">
	<div class="inner" id="abi">

		<!-- Logo -->
			<a href="index.php" class="logo">
				<span class="symbol"><img src="images/logo.svg" alt="" /></span><span class="title">Random</span>
			</a>

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
		<li><a href="index.php">Hosame</a></li>
		<li><a href="generic.php">Ipsum veroeros</a></li>
		<li><a href="generic.php">Tempus etiam</a></li>
		<li><a href="generic.php">Consequat dolor</a></li>
		<li><a href="elements.php">Elements</a></li>
	</ul>
</nav>
<script>
var h=document.getElementById('menu');
var pas=localStorage.getItem("passed");
if(pas!="yes")
h.innerHTML='Pehle sara <a href="riddles.php" style="color: #FF7979;">riddles</a> unlock karo.';
</script>