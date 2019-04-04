
<?php session_start(); ?>
<?php include 'views/recharger.views.php' ?>
<?php

if (isset($_POST['valider']) && !empty($_POST['codedebon'])) {

  include './config/config.php';
    $codedebon = $_POST['codedebon'];
    $iduser = $_SESSION['logged_id'];

        $result=mysqli_query($conn,"SELECT * FROM user WHERE iduser='$iduser' ");
        while($tbuser = mysqli_fetch_assoc($result)) {
            $credit= $tbuser['solde'];
            $bon = 0;
         $getBons = mysqli_query($conn,"SELECT montant FROM bons WHERE code='$codedebon'");
         while($comp = mysqli_fetch_assoc($getBons)){
            $bon = $comp['montant'];
         }
          $credit=$credit+$bon;

          $UpdateQuery ="UPDATE user SET solde ='$credit' WHERE iduser='$iduser'";
          $conn->query($UpdateQuery);
          

          // redirection de l'utilisateur
          echo '<script language="Javascript">';
        //  echo 'document.location.replace("./recharger.php")'; // -->
          echo ' </script>';

    }
  }

?>
