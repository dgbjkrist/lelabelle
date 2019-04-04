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
//Database Connection
include 'config/config.php';


  // quand le formulaire est soumis
  if (isset($_POST['update'])) {

    $iduser = $_SESSION['logged_id'];
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $datenaiss = addslashes($_POST['datenaiss']);
    $sexe = $_POST['sexe'];
    $telephone = addslashes($_POST['telephone']);
    $email = addslashes($_POST['email']);
    $password = $_POST['password'];


      //cryptage du mot de passe
      $password = md5($password);

      // ----Requete pour mettre a jour la base de donnees
     $update = "UPDATE user SET nom='$nom', prenom='$prenom', datenaiss='$datenaiss', sexe='$sexe', email='$email' ,tel='$telephone',mdp='$password' WHERE iduser='$iduser' ";
     $conn->query($update);
     // redirection de l'utilisateur
      echo '<script language="Javascript">';
      echo 'alert("Mise à jour effectuée avec succès")'; // -->
      echo ' </script>';

      echo '<script language="Javascript">';
      echo 'document.location.replace("./login.php")'; // -->
      echo ' </script>';

    }
      mysqli_close($conn);


?>

<?php include 'views/profile.views.php'; ?>
