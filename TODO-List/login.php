<?php  
session_start();
?>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Авторизация</title>
</head>
<body>

<?php

require('connect.php'); 

if (isset($_POST['username']) and isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		$_SESSION['username'] = $username;		
	}else {
		$fmsg = "Не верно введены данные";
	}

}
?>

	<div class="container">
		<form action="" class="form-signin" method="POST">
		<h2>Авторизация</h2>
			<?php 
			if (isset($fmsg)) { ?> <div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div> <?php } ?>
		<input type="text" name="username" class="form-control" placeholder="Имя" required>
		<input type="password" name="password" class="form-control" placeholder="Пароль" required>
		<button type="submit">Авторизоваться</button>
		<a class="url" href="registration.php" class="btn btn-lg btn-primary btn-block">Зарегистрироваться</a>
		</form>
	</div>
<?php 
	if (isset($_SESSION['username'])) {
		$username = $_SESSION['username'];
		echo "<div class='signin-text'>Добро пожаловать " .$username. "! </div>";
		echo "<br><div class='signin-text'>Вы вошли!</div>";
		echo "<a href='index.php' class='signin-text'>На главную страницу</a>";
	}
 ?>

	
</body>
</html>