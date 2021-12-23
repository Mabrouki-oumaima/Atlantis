<?php
/*$cnx= new mysqli("localhost","root","","reserv_piscine") or die("echec de connexion");
if($cnx->connect_errno)
{
  echo "probleme \n";
  exit;

}else {
  echo "connecte";
}*/
$host="127.0.0.1"; //or 127.0.0.1*
//rajja3 esm el base
$database="reserv_piscine";
$user="root";
$password="";
try{
    $cnx= new PDO("mysql:host=$host;dbname=$database",$user,$password);
    echo "connecte";

}catch(PDOException $e){$e->getMessage();}



?>
