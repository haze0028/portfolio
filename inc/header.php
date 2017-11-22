<div id="logo-bg"></div>
<header class="row">
	<div class="col-lg-12" id="nav-div">
		<nav>
			<a <?php if (strpos($_SERVER[ 'PHP_SELF'], 'home.php')) echo 'class="active"';?>
				href="home.php">Home</a>
			<a <?php if (strpos($_SERVER[ 'PHP_SELF'], 'about.php')) echo 'class="active"';?>
				href="about.php">About</a>
			<a <?php if (strpos($_SERVER[ 'PHP_SELF'], 'work.php')) echo 'class="active"';?>
				href="work.php">Work</a>
			<a <?php if (strpos($_SERVER[ 'PHP_SELF'], 'contact.php')) echo 'class="active"';?>
				href="contact.php">Contact</a>
		</nav>
	</div>
	<div class="col-xl-9 offset-xl-1">
		<a href="home.php">

			<?php include "inc/logo.php"; ?>

				<h1>Greg Hazelton</h1></a>
		<div id="social">
			<a href="https://www.facebook.com/haze9greg" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i>
</a>
			<a href="https://www.youtube.com/channel/UCZIS71MVWwL2rjmDsIhzLYg" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i>
</a>
			<a href="https://www.linkedin.com/in/greg-hazelton-a0374549/" target="_blank"><i class="fa fa-linkedin-square" aria-hidden="true"></i>
</a>
			<!--
			<a href="skype:haze.greg?add" target="_blank" id="skype-btn"><i class="fa fa-skype" aria-hidden="true"></i>
</a>
-->
			<a href="https://plus.google.com/104382084165474082046" target="_blank"><i class="fa fa-google-plus-square" aria-hidden="true"></i>
</a>
			<a href="https://github.com/haze0028" target="_blank"><i class="fa fa-github-square" aria-hidden="true"></i>

</a>
		</div>
		<!--		<h2 class="h6"><i class="fa fa-wrench" aria-hidden="true"></i> Under Maintenance</h2>-->
	</div>


</header>