<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/register.css">
    <title>ENREGISTREMENT</title>
  </head>
  <body>

    <?php include './config/header.php';?>
    <?php include 'views/errors.views.php'; ?>
    <div class="box">
        <h2>Enregistrement <hr> </h2>

           <br>
        <form class="" action="register.php" method="post" enctype="multipart/form-data">
          <div class="inputBox">
            <input type="text" name="nom" value="<?php echo $nom ?>" id="nom" required="">
            <label>Nom</label>
          </div>
          <div class="inputBox">
            <input type="text" name="prenom" value="<?php echo $prenom ?>" id="prenom" required>
            <label>Prenom</label>
          </div>
          <div class="inputBox">
            <input type="date"  name="datenaiss" value="<?php echo $datenaiss ?>" id="datenaiss" required>
            <label>Date de naissance</label>
          </div>
          <div class="inputBox1">
            <input type="radio" name="sexe" value="Homme" checked="checked"> <span>Homme</span>
            <input type="radio" name="sexe" value="Femme"> <span>Femme</span><br><br>
          </div><br>
          <div class="inputBox">
            <input type="tel" name="telephone" value="<?php echo $telephone ?>" id="telephone" required>
            <label>Numero</label>
          </div>
          <div class="inputBox">
            <input type="email" name="email" value="<?php echo $email ?>" id="email" required>
            <label>Email</label>
          </div>
          <div class="inputBox">
              <input type="password" name="password" value="" id="password" required>
            <label>Mot de passe</label>
          </div>
          <div class="inputBox">
            <input type="password"  name="passwordconfirm" value="" id="passwordconfirm" required>
            <label>Confirmer </label>
          </div>

            <input type="submit" name="enregistrer" value="Enregistrer">
        </form>

        <p>Avez-vous déjà un compte ?<a href="login.php"> Connectez-vous</a>. </p>
    </div>

<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php include './config/footer.php';?>
    </div>
  </div>
</div>

  </body>
</html>
