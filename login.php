<?php
  session_start();
  include 'config/config.php';

  $telephone = '';
  $password = '';
  $errors = array();


  if (isset($_POST['login'])) {
    $telephone = addslashes($_POST['telephone']);
    $password = addslashes($_POST['password']);

    // validation du fomulaire
    if(empty($telephone)){
      array_push($errors, "Le telephone est obligatoire");
    }

    if (empty($password)) {
      array_push($errors, "Le mot de passe est obligatoire");
    }


    // verification s'il n'y a pas d'erreur

    if (count($errors)==0) {
      // cryptage du mot de passe
      $password = md5($password);
      // verification si l'utilisateur a un compte
      // requete
      $query = "SELECT * FROM user WHERE tel='$telephone' AND mdp='$password' LIMIT 1";
      // execution de la requete
      $results = mysqli_query($conn,$query);


      // voir l'etats de requete

      if (mysqli_num_rows($results) == 1) {
        // stocker le retour de la requete dans un tableau
        $array = $results -> fetch_assoc();
        $_SESSION['logged_in'] = true;
        $_SESSION['logged_id'] = $array['iduser'];
        $_SESSION['solde'] = $array['solde'];
        $_SESSION['nom'] = $array['nom'];
        $_SESSION['prenom'] = $array['prenom'];
        $_SESSION['password'] = $array['mdp'];
        $_SESSION['datenaiss'] = $array['datenaiss'];
        $_SESSION['telephone'] = $array['tel'];
        $_SESSION['email'] = $array['email'];

        // redirection de l'utilisateur
         echo '<script language="Javascript">';
         echo 'document.location.replace("./users.php")'; // -->
         echo ' </script>';
      } else {
        array_push($errors, "Numero ou Password incorrect, Reessayez");
      }
    }
    mysqli_close($conn);
  }

?>



<?php include 'views/login.views.php'; ?>
