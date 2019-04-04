<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <?php include './config/header.php';?>
      <?php include 'views/errors.views.php'; ?>

      <div class="container">
        <div class="box">
            <h2 class="">Login <hr> </h2>
            <br>

            <form class="" action="login.php" method="post">
              <div class="inputBox">
                <input type="tel" name="telephone" value="<?php echo $telephone ?>" id="telephone" required>
                <label>Telephone</label>
              </div>
              <div class="inputBox">
                <input type="password" name="password" value="" id="password" required>
                <label>Password</label>
              </div>
                <input type="submit" name="login" value="Connexion">
            </form>

            <p>Vous n’avez pas de compte ? <a href="register.php"> Enregistrer-vous</a>. </p>
        </div>

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
