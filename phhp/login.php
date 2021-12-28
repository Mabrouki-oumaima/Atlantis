<?php
require 'C:\xampp\htdocs\atlantis\phhp\connection.php';
session_start();
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$result=$cnx->query("select * from personne where Email='$mail';");
$i=$result->rowCount();
if($i>0)
{
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);
 foreach ($rows as $row){
     $verify = password_verify($mdp,$row['Password']);
     if($verify){
         $nom=$row['Nom'];
         $prenom=$row['Prenom'];
         $role =$row['rôle'];
         if ($role =='admin') {
             echo "<script>localStorage.setItem('Mail','$mail')</script>";
             echo "<script>localStorage.setItem('Nom','$nom')</script>";
             echo "<script>localStorage.setItem('Prenom','$prenom')</script>";
             echo "<html><script>alert('Bienvenue')</script></html>";
             echo "<script>document.getElementById('SC').style.display='none'</script>";
             echo "<script>window.location.href='../dashboard.html'</script>";
         }
     }else{
          echo "<html><script>alert('email ou mot de passe erroné ')</script></html>";
         echo "<script>window.location.href='../login.html'</script>";
     }
 }
 }else{
    echo "<html><script>alert('utilisateur non trouvé')</script></html>";
}
?>