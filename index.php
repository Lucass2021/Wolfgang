<?php

include './login/config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
	header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");
	} else {
		echo "<h2 class='alert alert-danger'>E-mail ou senha incorreta</h2>";
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
				<p class="login-text" style="font-size: 2rem; font-weight: 800;">Wolfgang</p>
				<div class="input-group">
					<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
				</div>
				<div class="input-group">
					<input type="password" placeholder="Senha" name="password" value="<?php echo $_POST['password']; ?>" required>
				</div>
				<div class="input-group">
					<button name="submit" class="btn">Login</button>
				</div>
				<p class="login-register-text">Não tem conta? <a href="register.php">Cadastra-se aqui</a></p>
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