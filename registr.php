<!DOCTYPE html>
<html>
	<head>
		<title>Стадионы</title>
		<link rel="stylesheet" href="css/login.css">
	</head>
	<body>
		<div class="upbar">
			<img src="resources/logo.png" alt="" class="logo">
			<ul>
				<li class="bord"><a href="login.php"><b>Login</b></a></li>
				<li class="bord"><a href="main.php"><b>Main</b></a></li>
			</ul>
		</div>
		<div class="content">
			<div class="header">
				<h1>Регистрация</h1>
			</div>
			<div class="reg">
				<form action="DB.php" method="post" name="Sell">
					<input type="text" class="form-control" name="login" id="login" required placeholder="LOGIN"><br>
					<input type="text" class="form-control" name="name" id="name" required placeholder="NAME"><br>
					<input type="password" class="form-control" name="pass" id="pass" required placeholder="PASSWORD"><br>
					<input type="submit" value="Зарегестрироваться" id="forma" onclick="Complete();">
				</form>
			</div>
		</div>
	</body>
</html>
