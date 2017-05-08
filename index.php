<!DOCTYPE html>
<html>
	<!-- website description -->
	<head>
		<title>Axel Verdier</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> <!-- Get font-awesome icons -->
		<link rel="stylesheet" href="Styles/Default/design.css">
		<meta charset="UTF-8">
		<meta name="description" content="Site Web d'Axel Verdier">
		<meta name="author" content="Axel Verdier">
		<meta name="keywords" content="Axel,Verdier">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"> <!-- Scale display on device screen -->
	</head>
	
	<!-- website content -->
	<body>
		<!-- header and nav -->
		<header>
			<?php include("Ressources/Parts/header.html"); ?>
		</header>
		<nav>
			<?php  include("Ressources/Parts/menu.html"); ?>
		</nav>

		<!-- content -->
		<main>
			<?php
				/* 
				Reactive content using the page variable
				The possibles values of 'page' are the keys
				in the $pages array.
				*/
				$pages = array(
					"accueil" => "accueil.html",
					"av" => "axelverdier.html",
					"denovogpu" => "denovogpu.html"
				);
				$pagesPath="Ressources/Pages/";

				/* if the page asked exist get it, else get the home */
				$contentpage="accueil.html";
				if(isset($_GET["page"]) && array_key_exists($_GET["page"], $pages)){$contentpage=$pages[$_GET["page"]];}
				include($pagesPath.$contentpage);
			?>
		</main>
		
		<!-- Mes divers coordonées -->
		<aside id="findme">
			<?php include("Ressources/Parts/findme.html"); ?>
		</aside>

		<!-- footer -->
		<footer>
			<?php  include("Ressources/Parts/menu.html"); ?>
		</footer>

		<!-- Détails : informations pouvant être cachées par l'utilisateur -->
		<details>
			<summary>Détails du site</summary>
			<p>Ce site est pleinement HTML5/CSS3 fonctionnel.</p>
			<a href="http://www.w3.org/html/logo/">
				<img src="https://www.w3.org/html/logo/badge/html5-badge-h-css3-semantics.png" width="165" height="64" alt="HTML5 Powered with CSS3 / Styling, and Semantics" title="HTML5 Powered with CSS3 / Styling, and Semantics">
			</a>
			<figure>
				<figcaption>Il est recommandé d'utiliser un des navigateurs suivants :</figcaption>
				<ul>
					<li>Firefox</li>
					<li>Chrome / Chromium</li>
					<li>Safari</li>
				</ul>
			</figure>
			<p>
				La plupart des icônes sont issues de <a href="http://fontawesome.io/" target="_blank">Font Awesome 4.7</a> à l'aide d'un
				<a href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" target="_blank">fichier de style externe</a>.
			</p>
		</details>
	</body>
</html>
