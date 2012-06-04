
<!DOCTYPE HTML>
<meta charset='utf8'/>
<?php session_start();
if(isset($_SESSION['login'])){
	Header("Location:index.php") or die();
}
else
{
 ?>
<head>
	<title>
		вход
	</title>
</head>
<body>
	<?php 
	include "secure.php";
	include "config.php";

		

	

  		if($_SERVER['REQUEST_METHOD']=='POST'){
  		$sec=new Security();
  		$name=$sec->secure($_POST['login'],1);
  		$pass=md5($_POST['password']);

  			$STH=$DBH->query("SELECT pass FROM users WHERE login='$name' ");
			$STH->setFetchMode(PDO::FETCH_ASSOC);  
  			$row = $STH->fetch();
			if($pass==$row['pass']){
			 $_SESSION['login']=$name;
			 Header("Location:index.php");
			}
  	         		else {

  		Echo "не верно!";

  		}
}

	 ?>
<form method="POST">
	<p>Введите логин:</p>
<input type="text" name="login">
<p>введите пароль:</p>
<input type="password" name="password"></br>
<button>Log in!</button>
</form>
</body>
<?php
}
?>