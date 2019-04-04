<?php
include 'config/config.php';
include './views/garelabelle.views.php';

$depart = "";
$arrive = "";
$montant = "";

  if(isset($_POST['valider'])){
      $depart = $_POST['villeDepart'];
      $arrive = $_POST['villeArrive'];
      $montant = $_POST['montant'];
      //$montant='TK'.uniqid();
      if(!empty($depart) || !empty($arrive)){
        $sql=  "INSERT INTO destination
        (departville, arriveville, montant) VALUES ('$depart', '$arrive', '$montant')";
        $result = mysqli_query($conn,$sql);
   }
        if($result){
          ?>
          <script>alert('Enregistrement reussit !')</script>
          <?php
          echo '<script type = "text/javascript"> window.location = "garelabelle.php";</script>';
      }else{
        ?>
        <script>alert("Erreur d'annulation")</script>
        <?php
      }
  }
  ?>
