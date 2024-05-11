<!DOCTYPE html>
<html>
	<header>
		<meta charset="utf-8">
		<title>Sistema de Inventario</title>
	</header>

	<body>
		<?php 
			session_start();
			ob_start();
			if ($_SESSION['errores']) {
				print($_SESSION['errores']);
				$_SESSION['errores'] = [];
			}
		?>
		<h1>Sistema de Inventario</h1>

		<form name="login" action="../controller/controller_user.php/" method="post">
			
			<label for="user">Usuario</label>
			<input id="user" name="user_account" type="text" pattern="[a-z]{4,12}" minlength="4" maxlength="12" placeholder="Por ejemplo, Leo" required>
			
			<label for="pass">Contraseña</label>
			<input id="pass" name="password" type="password" minlength="8" maxlength="16" placeholder="Contraseña" required>

			<input type="submit" value="Login">
		</form>

	</body>

</html>