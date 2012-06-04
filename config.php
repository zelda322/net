
<?php
$mysql_user='root';
$mysql_pass='';
$dbname='net';
$mysql_host='localhost';


try {  
    #connect to MySQL via PDO_MYSQL  
  $DBH = new PDO("mysql:host=$mysql_host;dbname=$dbname", $mysql_user, $mysql_pass);  
}  
catch(PDOException $e) {  
    echo $e->getMessage('connection unreal');  
}