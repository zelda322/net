<!DOCTYPE HTML>
<meta charset='utf8'/>
<head>
	<title>
		Регистрация нового юзера
	</title>
</head>
<body>
<form method='POST'>
	<p>логин:</br>
	<input type='text' name='login' placeholder='login' required></p>
	<p>email:</br>
	 <input type='email' name='email' placeholder='email' required></p>
	<p>пароль:</br>
	<input type='password' name='password' placeholder='pass' required></p>
	<p>потвердите пароль:</br>
	<input type='password' name='password2' placeholder='pass' required></p>
	<button>SEND DATA</button>
</form>
</body>
<?php

if($_SERVER['REQUEST_METHOD']=='POST')
	
{	include "secure.php";
	if(!empty($_POST['login']) and !empty($_POST['email']) and !empty($_POST['password']))
	{
		if($_POST['password']==($_POST['password2'])){
			$sec=new Security();
			$name=$sec->secure($_POST['login'],1);
			$email=$sec->secure($_POST['email'],1);
			$pass=md5($_POST['password']);
			include "config.php";
			$data = array($name, $email, $pass);
			$STH=$DBH->prepare("INSERT INTO users(login,email,pass)values(?,?,?)");
			$STH->execute($data);
			Header("Location:index.php");
		}
		else{
			echo 'password incorrect';

		}
	}
}




?>