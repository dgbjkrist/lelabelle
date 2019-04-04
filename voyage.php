<!-- TRAITEMENT POUR GENERER LE CODE DE VOYAGE DU GAR ET L'AFFICHER -->
<?php
  session_start();

    //  voir si l'utilisateur est connecte
    if (!isset($_SESSION['logged_in'])) {
      // redirection de l'utilisateur
       echo '<script language="Javascript">';
       echo 'document.location.replace("./login.php")'; // -->
       echo ' </script>';
    }

?>

<?php
 include 'config/config.php';
         $iduser =$_SESSION['logged_id'];
         $query = "SELECT * FROM user WHERE iduser='$iduser' ";
         // execution de la requete
           $results = mysqli_query($conn,$query);
           if (mysqli_num_rows($results) == 1) {
             // stocker le retour de la requete dans un tableau
             $array = $results -> fetch_assoc();
             $solde = $array['solde'];
           }
 ?>
<?php
include 'config/config.php';
include './views/voyage.views.php';

$depart = "";
$arrive = "";
$ticket = "";
$montant = '';



  if(isset($_POST['valider'])){
      $depart = $_POST['villeDepart'];
      $arrive = $_POST['villeArrive'];
      $ticket='TK'.uniqid();
      //----------- SELECTION DU MONTANT DANS LA TABLE TRAJET OU LE DEPART ET L'ARRIVE CORRESPONDENT AUX VARIABLE DE L'USER
      if(!empty($depart) || !empty($arrive)){
        $trouveville = mysqli_query($conn, "SELECT * FROM destination WHERE departville = '$depart' AND arriveville = '$arrive'");
        $rows = mysqli_num_rows($trouveville);
        if ($rows == 0) {
          echo 'cet itineraire n\'est pas encore disponible';
        } else {
          //$newcredit = 0;
          $trouveville = mysqli_fetch_array($trouveville);
          $tarif = $trouveville['montant'];
          $newcredit = $solde - $tarif;
         //-----------INSERTION DES INFOS DU CLIENTS DANS LA TABLE
        $sql = mysqli_query($conn, "INSERT INTO trajet(depart, arrive, ticket, montant,id_user) VALUES ('$depart', '$arrive', '$ticket', '$tarif', '$iduser')");
        echo 'Pour votre voyage de '.$depart.'  a  '.$arrive.', le numero de votre ticket est le suivant ' .$ticket .', avec un tarif de ' . $tarif;
        if($sql){
          $UpdateQuery ="UPDATE user SET solde ='$newcredit' WHERE iduser='$iduser'";
          $conn->query($UpdateQuery);
         ?>
         <script>alert('Reservation pris avec succes !')</script>

         <?php
         echo '<script language="Javascript">';
         echo 'document.location.replace("./users.php")'; // -->
         echo ' </script>';
        }else{
          ?>
          <script>alert("Erreur d'annulation")</script>
          <?php
        }
     }
     }
  }
  ?>
