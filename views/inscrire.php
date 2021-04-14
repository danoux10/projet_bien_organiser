<?php 
	//ajout visuel
	include '../models/inscription.php';

	if (!empty($_POST)) {
		$errors = array();
		if (empty($_POST['nom'])) {
			$errors['nom']="champ vide nom";
		}
		/*Unicite des compte pseudo*/
		else{
			$req = $bdd_user -> prepare('SELECT id FROM utilisateur WHERE nom = ?');
			$req ->execute([$_POST['nom']]);
			$user = $req -> fetch();
		}

        if (empty($_POST['prenom'])) {
			$errors['prenom']="prenom champ vide";
		}
		/*Unicite des compte pseudo*/
		else{
			$req = $bdd_user -> prepare('SELECT id FROM utilisateur WHERE prenom = ?');
			$req ->execute([$_POST['prenom']]);
			$user = $req -> fetch();
		}

		/*pas necessaire controle par le navigateur*/
		if (empty($_POST['email']) && empty($_POST['confirm_email'])|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) ||$_POST['email']!=$_POST['confirm_email']) {
			$errors['email']= "Votre email n'est pas conforme";
		}
		/*Unicite des compte mail*/
		else{
			$req = $bdd_user -> prepare('SELECT id FROM utilisateur WHERE email = ?');
			$req ->execute([$_POST['email']]);
			$email = $req -> fetch();
			if ($email) {
				$errors['email']='Ce mail est deja pris';
			}
		}

		if (empty($_POST['password'])||$_POST['password']!=$_POST['confirm_password']) {
			$errors['password'] = "Vous devez saisir un mot de passe !";
		}

		/*cryptage mot de passe*/
		if(empty($errors)){
			//session_start();
			$req = $bdd_user->prepare("INSERT INTO utilisateur SET nom = ?, prenom = ?, password = ?, email = ?, token=?");
			$password = password_hash($_POST['password'],PASSWORD_BCRYPT);
            $token = str_random(60);
			$req -> execute([$_POST['nom'],$_POST['prenom'],$password,$_POST['email'], $token]);
			$user_id = $bdd_user -> lastInsertId();
			//exit();
		}
        header('location:affichage_utilisateur.php');
        exit();
	}

	//debug($errors)
	?>

<?php if (!empty($errors)): ?>
			<div class="alert alert-danger">
				<p>Vous n'avez pas rempli le formulaire correctement</p>
				<ul>
					<?php foreach ($errors as $error): ?>
						<li><?=$error;?></li>
					<?php endforeach; ?>
				</ul>
			</div>

<?php endif; ?>