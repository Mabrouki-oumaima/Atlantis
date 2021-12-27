<?php
require 'C:\xampp\htdocs\atlantis\phhp\connection.php';
session_start();

if (isset($_POST['rechercher']))
{

    if (empty($_POST['Region']) && (empty($_POST['surface'])) &&(empty($_POST['quantity']))&&(empty($_POST['date']))) {
        echo "<html><script>alert('veuillez saisir le type de recherche')</script></html>";
        echo "<script>window.location.href='../index.html'</script>";
    } elseif (empty($_POST['surface']) && (!empty($_POST['Region'])) && empty($_POST['date']) && empty($_POST['quantity']))
    {
        $reg = $_POST['Region'];
        $rech = $cnx->query("select adresse,prix from piscine_tab where region = '$reg'");
        $i=$rech->rowCount();
        $rows = $rech->fetchAll(PDO::FETCH_ASSOC);
        if($i==0)
        {
            echo "<html><script>alert('pas de piscine dans cette region')</script></html>";
            echo "<script>window.location.href='../index.html'</script>";
        }
        else {
            $req = $cnx->query("select * from piscine_tab where region='$reg'");
            $piscine = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($piscine as $p) {
                echo "<html><img src=" . $p['image'] . " height='50' width='100' ></html>";
                echo "<br>";
                echo $p['libelle']."<br> Adresse:  ".$p['adresse']."<br> Prix:  ".$p['prix']."<br>";
                echo "<br><html><input type='submit' value='Plusdétails' name='Plusdétails'> <br> </html> ";
                echo "-------------------------------------------------------------------------------------------------";
                echo "<br>";
            }
        }

    }
    elseif (!empty($_POST['surface']) && (empty($_POST['Region'])) && empty($_POST['date']) && empty($_POST['quantity']))
    {
        $surf = $_POST['surface'];
        $rech = $cnx->query("select adresse,prix from piscine_tab where surface='$surf'");
        $i=$rech->rowCount();
        $rows = $rech->fetchAll(PDO::FETCH_ASSOC);
        if ($i==0)
        {
            echo "<html><script>alert('pas de piscine avec cette surface')</script></html>";
            echo "<script>window.location.href='../index.html'</script>";
        }
        else{
            $req = $cnx->query("select * from piscine_tab where surface='$surf'");
            $piscine = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($piscine as $p) {
                echo "<html><img src=" . $p['image'] . " height='50' width='100' ></html>";
                echo "<br>";
                echo $p['libelle']."<br> Adresse:  ".$p['adresse']."<br> Prix:  ".$p['prix']."<br>";
                echo "<br><html><input type='submit' value='Plusdétails' name='Plusdétails'> <br> </html> ";
                echo "-------------------------------------------------------------------------------------------------";
                echo "<br>";
            }
        }
    }
    elseif (!empty($_POST['surface']) && (!empty($_POST['Region'])) && empty($_POST['date']) && empty($_POST['quantity']))
    {
        $surf = $_POST['surface'];
        $reg = $_POST['Region'];
        $rech = $cnx->query("select adresse,prix from piscine_tab where surface='$surf' and Region='$reg'");
        $i=$rech->rowCount();
        $rows = $rech->fetchAll(PDO::FETCH_ASSOC);
        if ($i==0)
        {
            echo "<html><script>alert('pas de piscine avec cette surface dans cette région')</script></html>";
            echo "<script>window.location.href='../index.html'</script>";
        }
        else{
            $req = $cnx->query("select * from piscine_tab where surface='$surf' and Region='$reg'");
            $piscine = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($piscine as $p) {
                echo "<html><img src=" . $p['image'] . " height='50' width='100' ></html>";
                echo "<br>";
                echo $p['libelle']."<br> Adresse:  ".$p['adresse']."<br> Prix:  ".$p['prix']."<br>";
                echo "<br><html><input type='submit' value='Plusdétails' name='Plusdétails'> <br> </html> ";
                echo "-------------------------------------------------------------------------------------------------";
                echo "<br>";
            }
        }
    }
    elseif (!empty($_POST['surface']) && (!empty($_POST['Region'])) && empty($_POST['date']) && (!empty($_POST['quantity'])))
    {
        $nbre = $_POST['quantity'];
        $surf = $_POST['surface'];
        $reg = $_POST['Region'];
        $rech = $cnx->query("select adresse,prix from piscine_tab where surface='$surf' and Region='$reg' and nb_personne='$nbre'");
        $i=$rech->rowCount();
        $rows = $rech->fetchAll(PDO::FETCH_ASSOC);
        if ($i==0)
        {
            echo "<html><script>alert('pas de piscine veuillez resaisir votre recherche')</script></html>";
            echo "<script>window.location.href='../index.html'</script>";
        }
        else{
            $req = $cnx->query("select * from piscine_tab where surface='$surf' and Region='$reg' and nb_personne='$nbre'");
            $piscine = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($piscine as $p) {
                echo "<html><img src=" . $p['image'] . " height='50' width='100' ></html>";
                echo "<br>";
                echo $p['libelle']."<br> Adresse:  ".$p['adresse']."<br> Prix:  ".$p['prix']."<br>";
                echo "<br><html><input type='submit' value='Plusdétails' name='Plusdétails'> <br> </html> ";
                echo "-------------------------------------------------------------------------------------------------";
                echo "<br>";
            }
        }
    }
    elseif (empty($_POST['surface']) && (!empty($_POST['Region'])) && empty($_POST['date']) && (!empty($_POST['quantity'])))
    {
        $nbre = $_POST['quantity'];
        $reg = $_POST['Region'];
        $rech = $cnx->query("select adresse,prix from piscine_tab where nb_personne='$nbre' and Region='$reg'");
        $i=$rech->rowCount();
        $rows = $rech->fetchAll(PDO::FETCH_ASSOC);
        if ($i==0)
        {
            echo "<html><script>alert('pas de piscine disponible dans cette région avec ce nombre')</script></html>";
            echo "<script>window.location.href='../index.html'</script>";
        }
        else{
            $req = $cnx->query("select * from piscine_tab where nb_personne='$nbre' and Region='$reg'");
            $piscine = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($piscine as $p) {
                echo "<html><img src=" . $p['image'] . " height='50' width='100' ></html>";
                echo "<br>";
                echo $p['libelle']."<br> Adresse:  ".$p['adresse']."<br> Prix:  ".$p['prix']."<br>";
                echo "<br><html><input type='submit' value='Plusdétails' name='Plusdétails'> <br> </html> ";
                echo "-------------------------------------------------------------------------------------------------";
                echo "<br>";
            }
        }
    }
    elseif (!empty($_POST['surface']) && (empty($_POST['Region'])) && empty($_POST['date']) && (!empty($_POST['quantity'])))
    {
        $surf = $_POST['surface'];
        $nbre = $_POST['quantity'];
        $rech = $cnx->query("select adresse,prix from piscine_tab where surface='$surf' and nb_personne='$nbre'");
        $i=$rech->rowCount();
        $rows = $rech->fetchAll(PDO::FETCH_ASSOC);
        if ($i==0)
        {
            echo "<html><script>alert('pas de piscine dispo avec cette surface et ce nombre de personne')</script></html>";
            echo "<script>window.location.href='../index.html'</script>";
        }
        else{
            $req = $cnx->query("select * from piscine_tab where surface='$surf' and nb_personne='$nbre'");
            $piscine = $req->fetchAll(PDO::FETCH_ASSOC);
            foreach ($piscine as $p) {
                echo "<html><img src=" . $p['image'] . " height='50' width='100' ></html>";
                echo "<br>";
                echo $p['libelle']."<br> Adresse:  ".$p['adresse']."<br> Prix:  ".$p['prix']."<br>";
                echo "<br><html><input type='submit' value='Plusdétails' name='Plusdétails'> <br> </html> ";
                echo "-------------------------------------------------------------------------------------------------";
                echo "<br>";
            }
        }
    }

}
?>