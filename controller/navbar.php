<?php include 'header.php'; ?>
<body>
	<?php 
		if(session_status()== PHP_SESSION_NONE ){ 
			session_start();
		}
	?>
	 <header id="navbar">
		<nav class="navbar_nav">
		  <ul class="nav">
		  <a href="#" class="li_a"> <li class="nav_li">Acceuil</li> </a>
			<!------------------------------------------------------------------------------------>

			<?php if(isset($_SESSION['auth']) && $_SESSION['auth'] != NULL):?>
			<a href="selection_ruche.php" class="li_a"> <li class="nav_li suite">Donner Ruche</li> </a>
			<a href="affichage_utilisateur.php" class="li_a"> <li class="nav_li suite">administre utilisateur</li> </a>   
			<a href="deco.php" class="li_a"> <li class="nav_li suite">se deconnecter</li> </a>
			<!------------------------------------------------------------------------------------>

			<?php else: ?>
				<a href="connection.php" class="li_a"> <li class="nav_li suite">se connecter</li> </a>
			<?php endif;?>
		  </ul>
		</nav> 
	</header>
</body>
</html>