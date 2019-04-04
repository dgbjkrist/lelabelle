
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

  // deconnexion
  if (isset($_GET['logout'])) {
    // destruction de la sesssion
    session_destroy();
    // destruction des variables
    unset($_SESSION['logged_in']);
    unset($_SESSION['logged_id']);
    unset($_SESSION['solde']);
    unset($_SESSION['nom']);
    unset($_SESSION['prenom']);
    unset($_SESSION['datenaiss']);
    unset($_SESSION['telephone']);
    unset($_SESSION['email']);

    header('location: index.php');
  }
?>

<?php include 'views/users.views.php' ?>
