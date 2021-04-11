<!DOCTYPE html>

<?php include'../controller/header.php';?>
<title>Inscription</title>
</head>
<body>
	<div id="inscription"> 
		<form method="post" id="formulaire_inscription">
			
			<h2 id="titre_inscription">Inscription</h2>
			
			<div id="image_inscription">
				<img src="../img/honey.svg" alt="pot_de_miel" id="image_miel_inscription">
			</div>
			
			<div id="nom_prenom_inscription">
				<div id="nom_inscription">
					<label id="inscription_nom_label">Nom</label>
					<input type="text" id="inscription_nom_input" class="inscription_nom_prenom" name="nom">
				</div>
				
				<div id="prenom_inscription">
					<label id="inscription_prenom_label">Prenom</label>
					<input type="text" id="inscription_prenom_input" class="inscription_nom_prenom" name="prenom">
				</div>
			</div>
			
			<div id="email_emailconfirm_inscription">
				<div id="email_inscription">
					<label id="inscription_email_label">Email</label>
					<input type="text" id="inscription_email_input" class="inscription_email" name="email">
				</div>
				
				<div id="confirm_email_inscription">
					<label id="inscription_confirm_email_label">Confirm Email</label>
					<input type="text" id="inscription_confirm_email_label" class="inscription_email" name="confirm_email">
				</div>
			</div>
			
			<div id="password_confirm_password_inscription">
				<div id="inscription_password">
					<label id="inscription_password_label">Password</label>
					<input type="password" id="inscription_password_label" class="inscription_password" name="password">
				</div>
				
				<div id="inscription_password_confirm">
					<label id="inscription_password_confirm_label">Confirm Password</label>
					<input type="password" id="inscription_password_confirm_input" class="inscription_password" name="confirm_password">
				</div>
			</div>
			
			<div id="inscription_valide">
				<input type="submit" id="inscription_valide_btn" name="valide" value="Inscrire">
			</div>
			
		</form>
	</div>
	
</body>
</html>