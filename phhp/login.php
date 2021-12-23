<?php
$db_username = 'root';
$db_password = '';
$db_name     = 'reserv_piscine';
$db_host     = 'localhost';
$db = mysqli_connect("localhost", "root", "","reserv_piscine")
           or die('could not connect to database');
$mail = mysqli_real_escape_string($db,htmlspecialchars($_POST['mail']));
$mdp = mysqli_real_escape_string($db,htmlspecialchars($_POST['mdp']));

if($mail !== "" && $mdp !== "")
   {
       $requete = "SELECT count(*) FROM Personne where
             Email = '".$mail."' and password = '".$mdp."' ";
       $exec_requete = mysqli_query($db,$requete);
       $reponse      = mysqli_fetch_array($exec_requete);
       $count = $reponse['count(*)'];
       if($count!=0) // nom d'utilisateur et mot de passe correctes
       {
          $_SESSION['username'] = $username;
          header('Location: principale.php');
       }
       else
       {
          header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
       }
   }


/*session_start();
require_once ('Connection.php');

if(isset($_POST['btnlogin'])) {

    $mail =($_POST["mail"]);
    $Mdp = $_POST["mdp"];
    $result=$mysqli->query("select NOM,Prenom,password from Personne where Email= '$mail' and password='$Mdp'");
    if($result)
    {
      if (mysql_num_rows($result)>0) {
        session_regenerate_id();
        $personne = mysql_fetch_assoc($result);
        $_SESSION['']
      }
    }*/
    /*$i = $Cnx->query($sql) or die(print_r($Cnx->errorInfo()));
    $Resultat = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($Resultat);
    if($rows==1){
      $_SESSION['Email'] = $mail;
      header("Location: index.html);
  }else{
    $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
  }





}
