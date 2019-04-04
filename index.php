<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/boostrap.min.css">
    <link rel="stylesheet" href="css/style1.css">
    <title>accueil</title>

    <style>

  .carousel-inner img {
      width: 100%;
      height: 100%;
  }
  </style>

</head>
<body>
	
<?php include'config/header.php';?>

 <!-- SLIDE -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <div id="demo" class="carousel slide" data-ride="carousel">

       <!-- Indicators -->
       <ul class="carousel-indicators">
         <li data-target="#demo" data-slide-to="0" class="active"></li>
         <li data-target="#demo" data-slide-to="1" class="active"></li>
         <li data-target="#demo" data-slide-to="2"></li>
       </ul>

       <!-- The slideshow -->
       <div class="carousel-inner">
         <div class="carousel-item active">
           <img src="images/labelle.jpg" alt="Abidjqn" width="1000" height="400">
         </div>
         <div class="carousel-item">
           <img src="images/labelle1.jpg" alt="Yakro" width="1000" height="400">
         </div>
         <div class="carousel-item">
           <img src="images/labelle2.jpg" alt="Bouake" width="1000" height="400">
         </div>
       </div>

       <!-- Left and right controls -->
       <a class="carousel-control-prev" href="#demo" data-slide="prev">
         <span class="carousel-control-prev-icon"></span>
       </a>
       <a class="carousel-control-next" href="#demo" data-slide="next">
         <span class="carousel-control-next-icon"></span>
       </a>
     </div>

    </div>
  </div>
</div>


<div class="container-fluid body">
    <div class="row">
        <div class="col-md-6">
            <h2 style="color:red">QUI SOMMES-NOUS</h2>
            <h5>SOCIETE «GROUPE LE LABELLE SARL»</h5>
            <p>Siège social : ANYAMA PK 18 EXTENSION LOT 971-973 ILOT 107, 03 BP 740 ABJ 03

Aux termes de la DSV et des Statuts SSP en date du 03 Oct. 2017, et enregistrés au CEPICI le 09 Oct. 2017, il a été constitué une SARL aux caractéristiques suivantes :

Dénomination: « GROUPE LE LABELLE SARL » .

Objet:
- Le transport public et privé de marchandises et de personnes ;
- La création et la gestion d'établissements scolaires et de toutes sortes d'écoles de formation; - La création et la gestion d'établissements hôteliers, de restaurants, de salles de spectacles; -
Le commerce général, le négoce, l'import-export, la vente, la commercialisation et la distribution de marchandises diverses ;
- Les services et prestations divers. </p><br>
<p>Et pour la réalisation de l'objet social :
- l'acquisition, la location et la vente de tous biens meubles et immeubles.
- L'emprunt de toutes sommes auprès de tous établissements financiers avec possibilité de donner en garantie tout ou partie des biens sociaux.
- La prise en location-gérance de tout fonds de commerce.
- La prise de participation dans toute société existante ou devant être créée.
- Et généralement toutes opérations financières, commerciales, industrielles, mobilières et immobilières se rapportant directement ou indirectement à l'objet social ou pouvant en faciliter l'extension ou le développement.
</p>
        </div>
        <div class="col-md-6">
        <video width="480" height="640" controls>
            <source src="images/marcory.mp4" type="video/mp4">
        </video>
        </div>
    </div>
</div>



<?php include'config/footer.php';?>
</body>
</html>
