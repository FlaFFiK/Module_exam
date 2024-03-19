<?php 
	$host = 'localhost'; // имя хоста
	$user = 'root';      // имя пользователя
	$pass = '';          // пароль
	$name = 'module359';      // имя базы данных
	$link = mysqli_connect($host, $user, $pass, $name);
	if (!empty($_POST['main_person_login']) && !empty($_POST['main_person_password'])) {
		$login = $_POST['main_person_login'];
		$password = $_POST['main_person_password'];
		$password_two = $_POST['main_person_password_two'];
		$email = $_POST['main_person_email'];
		$familya = $_POST['main_person_family'];
		$name = $_POST['main_person_name'];

		$query = "INSERT INTO users SET login='$login', password='$password', email='$email', familya='$familya', name='$name'";
		mysqli_query($link, $query);
		session_start();
			$_SESSION['auth'] = $login;
		header("Location: index.php"); 
	}
?>