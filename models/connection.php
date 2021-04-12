<!DOCTYPE html>

<?php include'../controller/header.php';?>
<title>Connection</title>
</head>

<body>
	<div id="connection">
		<form method=post id="formulaire_connection">
			
			<h2 id="titre_connection">Connection</h2>
			
			<div id="image_connection">
				<img src="../img/bee.svg" alt="image_abeille" id="image_abeille_connection">
			</div>
			
			<div id="email_connection">
				<label id="connection_email_label">Email</label>
				<input type="text" id="connection_email_input" name="connection_email">
			</div>
			
			<div id="password_connection">
				<label id="connnection_password_label">Mot De Passe</label>
				<input type="text" id="connection_password_input" name="connection_password">
			</div>
			
			<div id="connection_valide">
				<input type="submit" id="connection_valide_btn" name="connection_btn" value="Connection">
			</div>
		</form>
	</div>
</body>
</html>