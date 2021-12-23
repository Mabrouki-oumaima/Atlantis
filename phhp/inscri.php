<?php

require 'C:\xampp\htdocs\atlantis\phhp\connection.php';
session_start();
$nom=$_POST["full-name"];
$prenom=$_POST['prenom'];
$mail=$_POST['your-email'];
$cin=$_POST['CIN'];
$date=$_POST['date'];
$mdp=$_POST['password'];
echo "hi";

$result =$cnx->query("select * from personne where CIN='$cin'",PDO::FETCH_ASSOC);
$i=$result->rowCount();
if($i>0)
{
  echo "<script>alert('existe déja')</script>";
  //header('location:C:\xampp\htdocs\atlantis\inscri.html');
  //$cnx=null;
}else {
  $cnx = new PDO("mysql:host=$host;dbname=$database",$user,$password);
  //cryptage mdp
  //echo $mdp;
  password_hash(string $mdp, string|int|null $algo, array $options = []): string;
  $sql = "INSERT INTO personne (CIN,Nom,Prenom,Date_naiss,Email,Password) values ('$cin','$nom','$prenom','$date','$mail','$mdp')";
  $cnx->prepare($sql);
  $resultat = $cnx->exec($sql) or die(print_r($Cnx->errorInfo(), true));
  echo $resultat;
  if ($resultat > 0) {
    $_SESSION['full-name']= $nom;
    $_SESSION['prenom']= $prenom;
    header('location:../index.html');
  }
  else {
    echo "non ajouté";
  }


}

?>
