<?php
session_start();
include('config/config.php');

if (isset($_GET['id_trajet'])) {
    $idtrajet = $_GET['id_trajet'];
    $iduser = $_SESSION['logged_id'];
    $solde =$_SESSION['solde'];

    $result=mysqli_query($conn,"SELECT * FROM user WHERE iduser='$iduser' ");

    while($tbuser = mysqli_fetch_assoc($result)) {
        $credit= $tbuser['solde'];
        $bon = 0;}
      //  echo $credit;
      //  echo '<br>';
        $getmontant = mysqli_query($conn,"SELECT montant FROM trajet WHERE id_trajet='$idtrajet'");
            while($comp = mysqli_fetch_assoc($getmontant )){
            $montant = $comp['montant'];
            }
      // echo $montant;
      // echo '<br>';
       $credit1=$credit+$montant;
      // echo '<br>';
      // echo $credit1;
       $UpdateQuery ="UPDATE user SET solde ='$credit1'";
       $conn->query($UpdateQuery);
    //echo $montant;
      $sql = "DELETE FROM trajet WHERE id_trajet=$idtrajet";
      $result = mysqli_query($conn, $sql);

      echo '<script language="Javascript">';
      echo 'document.location.replace("./users.php")'; // -->
      echo ' </script>';

 }
?>
