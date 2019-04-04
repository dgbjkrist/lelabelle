<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="css/header1.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Second header</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">

        <nav class="navbar navbar-expand-md bg-light">
  <!--Logo -->
        <a class="navbar-brand" href="#">
            <img src="images/lelabelle.png" alt="logo" style="width:200px;">
         </a>
        </nav>
        </div>
        <div class="col-md-6 ">
        <nav class="navbar navbar-expand-md bg-light">
          <?php if(isset($_SESSION['logged_in'])): ?>

            <nav >
            <span id="login">
                Bienvenue, <?php echo "<strong>".$_SESSION['prenom']."</strong>"; ?>
            </span> <br>
            <span class="login">
                Votre solde :   <?php
                  include 'config/config.php';
                          $iduser =$_SESSION['logged_id'];
                          $query = "SELECT * FROM user WHERE iduser='$iduser' ";
                          // execution de la requete
                            $results = mysqli_query($conn,$query);
                            if (mysqli_num_rows($results) == 1) {
                              // stocker le retour de la requete dans un tableau
                              $array = $results -> fetch_assoc();
                              $solde = $array['solde'];
                              echo "<strong>".$solde." f CFA </strong>";
                            }
                  ?>
            </span id="login"> <br>
            <span style='color:orange'>
                <a href="users.php?logout='true'">Déconnexion</a>
            </span>
            </nav>
            <?php endif ?>
        </div>
    </div>
</div>

<div class="container menu">
    <div class="row">
        <div class="col-md-2">
            <a href="users.php">Accueil</a>
        </div>
        <div class="col-md-2">
            <a href="profile.php">Editer</a>
        </div>
        <div class="col-md-2">
            <a href="offres.php">Offres</a>
        </div>
        <div class="col-md-2">
            <a href="voyage.php">Voyage</a>
        </div>
         <div class="col-md-2">
            <a href="message.php">Message</a>
        </div>
        <div class="col-md-2">
            <a href="recharger.php">Credit</a>
        </div>
    </div>
</div>
</body>
</html>
