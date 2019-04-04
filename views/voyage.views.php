<?php
include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header1.css">

    <title>Voyage</title>
</head>
<body>
  <?php include('./config/header1.php'); ?>

   <form  action="voyage.php" method="POST">

      <div class="form-group col-md-4">
          <label for="inputState" class="col-sm-2 col-form-label"> De :</label>
              <select id="inputState" class="form-control" name="villeDepart" required>
                  <option value="" selected>choisir la ville de depart</option>
                  <?php
                      $rqt=mysqli_query($conn, "SELECT departville FROM destination");
                      while ($dep=mysqli_fetch_array($rqt))
                      {
                    ?>
                    <option value="<?php echo $dep['departville']; ?>"><?php echo $dep['departville']; ?></option>
                  <?php
                  }
                  ?>
               </select>
        </div>

              <div class="form-group col-md-4">
                 <label for="inputState" class="col-sm-2 col-form-label">  a :</label>
                    <select id="inputState" class="form-control" name="villeArrive" value="nom" required>
                        <option value="" selected>choisir la ville d'arriver</option>
                          <?php
                            $rqt =mysqli_query($conn, "SELECT arriveville FROM destination");
                            while($arriv=mysqli_fetch_array($rqt))
                            {
                          ?>
                            <option value="<?php echo  $arriv['arriveville']; ?>"> <?php echo $arriv['arriveville']; ?></option>
                          <?php } ?>
                    </select>
               </div>
               <div class="form-group row">
                  <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="valider"
      onclick = "return confirm('voulez-vous effectuer votre reservation pour ce itineraire ?')">Enregistrer</button>
        </form>
    </div>
  </div>

  <?php include('./config/footer.php'); ?>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
