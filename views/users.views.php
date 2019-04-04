<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link href="./images/logo.png" rel="icon" type="image/png" width=100>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/header1.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <title>Relever de code</title>

</head>
<body>

<?php include'./config/header1.php';?>
<br>


<div class="container-fluid">
    <div class="row">
        <table class="table table-striped table-bordered">
	    <thead>
    		<tr>
    		    <th>Ville de depart</th>
    			<th>Ville d'arrivee</th>
    		    <th>Numero du ticket</th>
    			<th>Tarification</th>
    		    <th>Annuler voyage</th>
    			<th>Voyage Effectuer</th>
    		</tr>
		</thead>
	   <tbody>
	   <?php
     
       $iduser = $_SESSION['logged_id'];
		   $sql = "SELECT* FROM trajet WHERE id_user = '$iduser'";
		   $result = mysqli_query($conn, $sql);
		    include './config/config.php';
		   while($rows = mysqli_fetch_assoc($result)){
		  	$ok = $rows['ticketutilise'];
     ?>
		  <tr>
		     <td><?php echo $rows['depart'];?></td>
			 <td><?php echo $rows['arrive'];?></td>
			 <td><?php echo $rows['ticket'];?></td>
			 <td><?php echo $rows['montant'];?></td>
			 <td>
            <?php
			if($ok == 'utilise'){
				?>
         <center>
    			 <a class="btn  disabled"href="delete.php?id_trajet=<?php echo $rows['id_trajet'];?>"
    			 onclick = "return confirm('voulez vous annuler votre voyage ?')">
    			 <img src="./images/del22.png" alt="" width="30">
    			 </a>
         </center>
			 <?php
			 }else{
				 ?>
           <center>
    				<a class="btn  "href="./delete.php?id_trajet=<?php echo $rows['id_trajet'];?>"
    			       onclick = "return confirm('voulez vous annuler votre voyage ?')">
    			       <img src="./images/del2.png" alt="" width="30">
    			  </a>
           </center>
			 <?php
			 }
			 ?>
			 </td>
			 <td>
			<?php
			//$ok = $rows['ticketutilise'];
			   if($ok == 'utilise'){

                  echo '<center> <img src = "./images/ok.png" width = 30px></center>';
			   }else{
				   echo '<center>--------</center>';
			   }
			?>
			 </td>
		   </tr>
		   <?php
		   }
		   ?>
	  </tbody>
	  </table>
    </div>
    </div>

<?php include'./config/footer.php';?>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</body>
</html>
