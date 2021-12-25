<?php
require 'C:\xampp\htdocs\atlantis\phhp\connection.php';
session_start();
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
$result = $cnx->query("select * from personne where Email='$mail' and Password='$mdp'",PDO::FETCH_ASSOC);
$i=$result->rowCount();
if($i==1)
{
    echo "<html><script>alert('Bienvenue')</script></html>";
    echo "<script>window.location.href='../welcome.html'</script>";
}
else
{
    echo "<html><script>alert('Mot de passe ou mail erroné')</script></html>";
    echo "<script>window.location.href='../login.html'</script>";
}












?>