<?php session_start();?>
<?php 

if (isset($_POST['submit'])){
    $dsn = 'mysql:dbname=piscine;host=localhost';
    $user = 'root';
    $password = '';
    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8");
    $pdo = new PDO($dsn, $user, $password,$options);
    $sql = "select * from reservation where id_pisc = '".$_SESSION['id']."'and id_pisc = '".$_SESSION['id']."' ";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    if ($stmt->rowCount()==0){
    $sql = "INSERT INTO reservation (date_res,id_pisc,id_user,prix) values ('".$_SESSION['date']."','".$_SESSION['id']."','".$_SESSION['id_user']."','".$_SESSION['prix']."')";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
  echo "resérvation confirmée. Vous allez reçevoir une confirmation dans les brefs délais."?><a href="../index.html">cliquer ici pour revenir à la page d'acceuil.</a>
  <?php 
}else{
    echo "réservation déja effectué."?><a href="../index.html"><br>Veuiller répéter la recherche</a> <?php   
}

}
?>