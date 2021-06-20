<?php
require_once 'DB.php';
$login = trim($_POST['login']);
$password = trim($_POST['password']);
$name = trim($_POST['name']);
if (!empty($login) && !empty($password)) {
	$sql_check = 'SELECT EXISTS(SELECT login FROM user WHERE login = :login)';
	$stmt_check = $pdo->prepare($sql_check);
	$stmt_check->execute([':login'=> $login]);
	if ($stmt_check->fetchColumn()) {
		die('Пользователь с таким логином уже существует');
	}
	$password = password_hash($password, PASSWORD_DEFAULT);
	$sql = 'INSERT INTO user(login, password, date_of_registration) VALUES(:login, :password, NOW() )';
	$param = [':login' => $login, ':password' => $password, ':name'=>$name];
	$stmt = $pdo->prepare($sql);
	$stmt->execute($param);
	echo 'Вы успешно зарегестрировались!';
}else{
	echo 'Пожалуйста, заполните все поля';
}
?>
