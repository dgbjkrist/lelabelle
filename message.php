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

<?php include 'views/message.views.php' ?>
