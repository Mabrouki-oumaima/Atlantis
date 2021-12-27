<?php
require 'C:\xampp\htdocs\atlantis\phhp\connection.php';
session_start();
$mail = $_POST['mail'];
$mdp = $_POST['mdp'];
//$mdp="maryemmaryem";*/
//$hash="$2y$10$OrphKRfi6jbhe";

$result=$cnx->query("select Password from personne where Email='$mail'");
$i=$result->rowCount();
if($i!=0)
{
    $rows=$result->fetchAll(PDO::FETCH_ASSOC);
    foreach ($rows as $row)
    {
        $verify = password_verify($mdp,$row['Password']);
        if ($verify) echo "verified";
        else echo "incorrect";
    }
}



/*

if($verify)
{
    echo"verified";
}
else echo"incorrect";






/*$result = $cnx->query("select * from personne where Email='$mail' and Password='$mdp'",PDO::FETCH_ASSOC);
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
*/
?>