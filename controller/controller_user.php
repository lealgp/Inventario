<?php
	session_start();
	ob_start();

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {

		if (empty($_POST['user_account']) || empty($_POST['password'])) {
			$_SESSION['errores'] = "¡El campo usuario y/o contraseña es obligatorio!";
			header('Location: ../../view/index.php');
			die();		
		}
	}

?>