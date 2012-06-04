
<!DOCTYPE HTML>
<meta charset='utf8'/>
<?php session_start();
if(isset($_SESSION['login'])){
	echo "Привет"." ". $_SESSION['login'];
}
else{
	echo "<a href='reg.php'>Регистрация</a>";
}
?>

<a href="exit.php">выход</a>