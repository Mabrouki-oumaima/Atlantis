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
  echo "<html><script>alert('existe déja')</script></html>";
  echo "<script>window.location.href='../inscri.html'</script>";

}else {
  $cnx = new PDO("mysql:host=$host;dbname=$database",$user,$password);
  //cryptage mdp
  $hashed_password= password_hash($mdp,PASSWORD_DEFAULT);
  //var_dump($hashed_password);
  $sql = "INSERT INTO personne (CIN,Nom,Prenom,Date_naiss,Email,Password) values ('$cin','$nom','$prenom','$date','$mail','$hashed_password')";
  $cnx->prepare($sql);
  $resultat = $cnx->exec($sql) or die(print_r($Cnx->errorInfo(), true));
  echo $resultat;
  if ($resultat > 0) {
    $_SESSION['full-name']= $nom;
    $_SESSION['prenom']= $prenom;

    echo "<html><script>alert('Bienvenue')</script></html>";
    echo "<script>window.location.href='../welcome.html'</script>";
  }
  else {
    echo "non ajouté";
  }


}

?>
