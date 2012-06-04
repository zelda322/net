<?php 
class Security{

	function secure($value,$type){
		if($type==1){

			$res = strip_tags($value);
			$res = htmlspecialchars($res);
			$res = mysql_real_escape_string($res);
			$res = trim($res);
			return $res;

		}
		elseif($type==2){
			$res=	intval($value);
			return $res;
			header('Location:index.php');
		}
		else{
			die();
		}
	}
}
