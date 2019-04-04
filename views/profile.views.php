<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/editer.css">
    <title>Profile</title>
  </head>
  <body>

<?php include 'config/header1.php' ?>

      <div class="box">

          <h2>Profile settings<hr> </h2>

             <br>

          <form class="" action="profile.php" method="post" enctype="multipart/form-data">
            <div class="inputBox">
              <input type="hidden" id="custId" name="id" value="<?php $_SESSION['logged_id'];?>">
            </div>
            <div class="inputBox">
              <input type="text" name="nom" value="<?php echo $_SESSION['nom']; ?>" id="nom" required>
              <label>Nom</label>
            </div>
            <div class="inputBox">
              <input type="text" name="prenom" value="<?php echo $_SESSION['prenom'];?>" id="prenom" required>
              <label>Prenom</label>
            </div>
            <div class="inputBox">
              <input type="date"  name="datenaiss" value="<?php echo $_SESSION['datenaiss'];?>" id="datenaiss" required>
              <label>Date de naissance</label>
            </div>
            <div class="inputBox1">
              <input type="radio" name="sexe" value="Homme" checked="checked"> <span>Homme</span>
              <input type="radio" name="sexe" value="Femme"> <span>Femme</span><br><br>
            </div><br>
            <div class="inputBox">
              <input type="email" name="email" value="<?php echo $_SESSION['email'];?>" id="email" required>
              <label>Email</label>
            </div>
            <div class="inputBox">
              <input type="tel" name="telephone" value="<?php echo $_SESSION['telephone'];?>" id="telephone" required>
              <label>Numero</label>
            </div>
            <div class="inputBox">
                <input type="password" name="password" value="" id="password" required>
              <label>Mot de passe</label>
            </div>

              <input type="submit" name="update" value="Mettre a jour">
          </form>

      </div>
<?php include 'config/footer.php' ?>
  </body>
</html>
