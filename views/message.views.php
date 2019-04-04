<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php
      include './config/header1.php';
      include './config/config.php';
      $telephone = $_SESSION['telephone'];
      $sql= mysqli_query($conn,"SELECT* FROM message WHERE statut=0 or usertel='$telephone' ");
      $rows = mysqli_num_rows($sql);

    if ($sql) {
     ?>
    <br><br>  <center>  <H1>MA MESSAGERIE</H1> </center>
    <center> <div class="container ">
       <table class="table table-bordered table-md ">
         <thead class="table-warning">
           <tr>
             <th>N*</th>
             <th>DE</th>
             <th>A</th>
             <th>OBJET</th>
             <th>MESSAGE</th>
             <th>DATE ET HEURE</th>
           </tr>
         </thead>
     <?php

     while($tbmsg = mysqli_fetch_assoc($sql)) {

        $idsms = $tbmsg['idmsg'];
        $emetteur = $tbmsg['emetteur'];
        $recepteur = $tbmsg['recepteur'];
        $objet = $tbmsg['objet'];
        $sms = $tbmsg['sms'];
        $dateposte = $tbmsg['dateposte'];

?>
        <tbody>
          <tr>
            <td><?php echo $idsms; ?></td>
            <td><?php echo $emetteur; ?></td>
            <td><?php echo $recepteur; ?></td>
            <td><?php echo $objet; ?></td>
            <td><?php echo $sms; ?></td>
            <td><?php echo $dateposte; ?></td>
          </tr>



<?php

     }

    }
    ?>


  </tbody>
</table>

</div> </center>







    <?php include 'config/footer.php' ?>
  </body>
</html>
