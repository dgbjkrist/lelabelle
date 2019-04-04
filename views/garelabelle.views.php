<?php
include('./config/config.php');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/header1.css">
  
    <title>Voyage</title>
</head>
<body>
  <?php include './config/header1.php';?>


   <form  action="garelabelle.php" method="POST">

      <div class="form-group col-md-4">
          <label for="inputState" class="col-sm-2 col-form-label"> De :</label>
              <select id="inputState" class="form-control" name="villeDepart" required>
                  <option value="" selected>choisir la ville </option>
                  <?php
                      $rqt=mysqli_query($conn, "SELECT DISTINCT ville FROM ville");
                      while ($dep=mysqli_fetch_array($rqt))
                      {
                    ?>
                    <option value="<?php echo $dep['ville']; ?>"><?php echo $dep['ville']; ?></option>
                  <?php
                  }
                  ?>
               </select>
        </div>

              <div class="form-group col-md-4">
                 <label for="inputState" class="col-sm-2 col-form-label">  a :</label>
                    <select id="inputState" class="form-control" name="villeArrive" value="nom" required>
                        <option value="" selected>choisir la ville </option>
                          <?php
                            $rqt =mysqli_query($conn, "SELECT DISTINCT ville FROM ville");
                            while($arriv=mysqli_fetch_array($rqt))
                            {
                          ?>
                            <option value="<?php echo $arriv['ville']; ?>"> <?php echo $arriv['ville']; ?></option>
                          <?php } ?>
                    </select>
               </div>
                <div class="form-group col-md-4">
                    <label for="formGroupExampleInput">Montant</label>
                    <input type="text" name = "montant" class="form-control" id="formGroupExampleInput" placeholder="Entrez le montant du trajet">
                </div>
               <div class="form-group row">
                  <div class="col-sm-10">
      <button type="submit" class="btn btn-primary" name="valider"
      onclick = "return confirm('voulez-vous effectuer l\'enregistrement ?')">Enregistrer</button>
        </form>
    </div>
  </div>



  <?php include'./config/footer.php';?>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.js"></script>

</body>
</html>
