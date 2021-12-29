<?php
function connection(){
    $dsn = 'mysql:dbname=piscine;host=localhost';
    $user = 'root';
    $password = '';
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");


    try{
        $cnx= new PDO($dsn, $user, $password,$options);

        echo "<br>";
        return $cnx;
    
    }catch(PDOException $e){$e->getMessage();}
}




?>
