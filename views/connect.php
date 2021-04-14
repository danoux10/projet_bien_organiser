<?php 
	//ajout visuel
	include '../models/connection.php';

    require_once '../_function/cookie.php';
    
    reconnect_from_cookie();
    if (isset($_SESSION['auth'])) {
	   header('location:index.php');
	exit();
}
?>    

<?php if (isset($_SESSION['flash'])): ?>
	<?php foreach ($_SESSION['flash'] as $type => $message): ?>
		<div class="alert alert-<?=$type;?>">
	        <?=$message;?>
		</div>
	<?php endforeach ?>
	<?php unset($_SESSION['flash']); ?>
	<?php endif; ?>

 <?php 
        if (!empty($_POST) && !empty($_POST['email']) && !empty($_POST['password'])) {

				require_once '../_config/config_local.php';
				require_once '../_config/bdd.php';


				$req = $bdd_user -> prepare('SELECT * FROM utilisateur WHERE (email = :email OR  password = :email)');
				$req -> execute(['email' => $_POST['email']]);
				$user = $req -> fetch();
            

				if (password_verify($_POST['password'],  $user['password'])) {

					$_SESSION['auth'] = $user;
					$_SESSION['flash']['success'] = 'Vous êtes maintenant connecté';
					if ($_POST['remember']) {
						$remember_token = str_random(250);
						$bdd_user->prepare('UPDATE user SET remember_token = ? WHERE id = ?')-> execute([$remember_token, $user->id]);
						setcookie('remember', $user->id . '==' . $remember_token . sha1($user->id . 'ratonlaveurs'), time() + 60);
					}
					header('location:accueil.php');
					exit();

				} else {

					$_SESSION['flash']['danger'] = 'Identifiant ou mot de passe incorrecte';

				}

			}
    ?>