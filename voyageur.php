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

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      include 'config/header1.php';
      include './config/config.php';
      $tel = $_SESSION['telephone'];
      $sql= mysqli_query($conn,"SELECT* FROM message WHERE statut=0 or usertel=$tel");
     $rows = mysqli_num_rows($sql);

    if ($sql) {
     echo'<p> </p>';
     echo'<table border="1">';
     echo'<tr><td><B>MESSAGE</B></td><td><B>DATE RECEPTION</B></td></tr>';
     while($tbmsg = mysqli_fetch_assoc($sql)) {

        $idsms = $tbmsg['idmsg'];
        $sms = $tbmsg['sms'];
        $dateposte = $tbmsg['dateposte'];


        echo'<tr><td>'.$sms.'</td><td>'.$dateposte.' </td></tr>';

     }
     echo'</table>';
    }
    ?>


<br><br>



    <?php include './config/footer.php'; ?>
  </body>
</html>
