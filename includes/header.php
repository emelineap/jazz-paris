<?php
      // On recupere l'URL de la page pour ensuite affecter class = "active" aux liens de nav
$page = $_SERVER['REQUEST_URI'];
$page = str_replace("/wcs_projets/jazz-paris/", "",$page);

function ispageactive($currentpage)
{
      	//global permet de récupérer une variable qu'on définit en dehors de la fonction
	global $page;
	if($currentpage == $page)
	{
		return 'active';
	}
}
?>

<header class="container">
	<div class="in-header">
		<a href="index.html"><img src="assets/pictures/Glenn_Branca-15_logo.jpg" alt="banner jazz paris"></a>

		<nav>
			<ul class="header-nav row">
				<li class="col-xs-2 col-lg-2">
					<h1><a href="index.php">JAZZ PARIS</a></h1>
				</li>
				<li class="col-offset-2 col-xs-2 col-lg-2 <?php echo ispageactive('index.php') ?>">
					<a href="index.php">Accueil</a>
				</li>
				<li class="col-offset-2 col-xs-2 col-lg-2 <?php echo ispageactive('origins.php') ?>">
					<a href="origins.php">Les origines</a>
				</li>
				<li class="col-offset-2 col-xs-2 col-lg-2 <?php echo ispageactive('styles.php') ?>">
					<a href="styles.php">Les styles</a>
				</li>
				<li class="col-offset-2 col-xs-2 col-lg-2 <?php echo ispageactive('today.php') ?>">
					<a href="today.php">Aujourd'hui</a>
				</li>
				<li class="col-offset-2 col-xs-2 col-lg-2 <?php echo ispageactive('about.php') ?>">
					<a href="about.php">Contact</a>
				</li>
			</ul>
		</nav>
	</div>	
</header>
