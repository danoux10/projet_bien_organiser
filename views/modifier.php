<!DOCTYPE html>

<?php include'../controller/header.php';?>
<title>Modifier</title>
</head>
<body>
	<div id="modifier"> 
		<form method="post" id="formulaire_modifier">
			
			<h2 id="titre_modifier">Modifier</h2>
			
			<div id="image_modifier">
				<img src="../img/honey.svg" alt="pot_de_miel" id="image_miel_modifier">
			</div>
			
			<div id="nom_prenom_modifier" class="modifier_partie">
				<div id="nom_modifier">
					<label id="modifier_nom_label" class="modifier_label">Nom</label>
					<input type="text" id="modifier_nom_input" class="modifier_nom_prenom" name="nom">
				</div>
				
				<div id="prenom_modifier">
					<label id="modifier_prenom_label" class="modifier_label">Prenom</label>
					<input type="text" id="modifier_prenom_input" class="modifier_nom_prenom" name="prenom">
				</div>
			</div>
			
			<div id="email_emailconfirm_modifier" class="modifier_partie">
				<div id="email_modifier">
					<label id="modifier_email_label" class="modifier_label">Email</label>
					<input type="text" id="modifier_email_input" class="modifier_email" name="email">
				</div>
				
				<div id="confirm_email_modifier">
					<label id="modifier_confirm_email_label" class="modifier_label">Confirm Email</label>
					<input type="text" id="modifier_confirm_email_input" class="modifier_email" name="confirm_email">
				</div>
			</div>
			
			<div id="password_confirm_password_modifier" class="modifier_partie">
				<div id="modifier_password">
					<label id="modifier_password_label" class="modifier_label">Password</label>
					<input type="password" id="modifier_password_label" class="modifier_password" name="password">
				</div>
				
				<div id="modifier_password_confirm">
					<label id="modifier_password_confirm_label" class="modifier_label">Confirm Password</label>
					<input type="password" id="modifier_password_confirm_input" class="modifier_password" name="confirm_password">
				</div>
			</div>
			
			<div id="modifier_valide">
				<input type="submit" id="modifier_valide_btn" name="valide" value="Modifier">
			</div>
			
		</form>
	</div>
	
</body>
</html>