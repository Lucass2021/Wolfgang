<?php

include './login/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
	header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM users WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO users (username, email, password)
					VALUES ('$username', '$email', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<h2 class='alert alert-success'>Usuário registrado</h2>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
			} else {
				echo "<h2 class='alert alert-danger'>Ocorreu algum erro, tente novamente</h2>";
			}
		} else {
			echo "<h2 class='alert alert-danger'>O E-mail já está cadastrado</h2>";
		}
	} else {
		echo "<h2 class='alert alert-danger'>As senhas são diferentes</h2>";
	}
}

?>

<!DOCTYPE html>
<html>

<?php include("templates/head.php"); ?>

<body>
	<div class="body-login">
		<div class="container-login">
			<form action="" method="POST" class="login-email">
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Cadastro</p>
				<div class="input-group">
					<input type="text" placeholder="Usuário" name="username" value="<?php echo $username; ?>" required>
				</div>
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Senha" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Confirme sua senha" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Cadastrar</button>
				</div>
				<p class="login-register-text">Já tem uma conta? <a href="index.php">Faça Login aqui</a></p>
			</form>
		</div>
	</div>

	<style>
		body {
			background: #000;
		}
	</style>
</body>


</html>