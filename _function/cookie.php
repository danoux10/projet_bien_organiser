<?php

/*function str_secur($string)
{
	return trim(htmlspecialchars($string));
}*/

function str_random($length)
{
	$alphabet = "0123456789azertyuiopqsdfghjklmwxcvbnAZERTYUIOPQSDFGHJKLMWXCVBN";
	return substr(str_shuffle(str_repeat($alphabet,$length)),0,$length);
}

function unauthorized()
{
	
	if (session_status() == PHP_SESSION_NONE) {

		session_start();

	}

	if (!isset($_SESSION['auth'])) {
		
		$_SESSION['flash']['danger'] = "Vous n'avez pas le droit d'accéder à cette page";
		header('location: connexion.php');
		exit();

	}

}

function reconnect_from_cookie()
{
	if (isset($_COOKIE['remember']) && !isset($_SESSION['auth'])) {
		require_once '../_config/config.php';
		require_once '../_config/bdd.php';

		if (!isset($bdd_user)) {
			global $bdd_user;
		}

		$remember_token = $_COOKIE['remember'];
		$parts = explode('==', $remember_token);
		$user_id = $parts[0];
		$req = $bdd_user-> prepare('SELECT * FROM utilisateur WHERE id = ?');
		$req-> execute([$user_id]);
		$user = $req->fetch();

		if ($user) {
			$expected = $user_id . '==' . $user->remember_token . sha1($user_id . 'ratonlaveurs');
			if ($expected == $remember_token) {
				session_start();
				$_SESSION['auth'] = $user;
				setcookie('remember', $remember_token, time() + 60);
			} else {
				setcookie('remember', NULL, -1);
			}
		} else {
			setcookie('remember', NULL, -1);
		}
	}
}
?>