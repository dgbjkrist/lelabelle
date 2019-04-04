<?php
  session_start();
  include 'config/config.php';
  // declaration des variables
  $nom = '';
  $prenom = '';
  $datenaiss = '';
  $telephone = '';
  $email = '';
  $password = '';
  $passwordconfirm = '';


  // tableau d'erreur
  $errors = array();

  // quand le formulaire est soumis
  if (isset($_POST['enregistrer'])) {
    $nom = addslashes($_POST['nom']);
    $prenom = addslashes($_POST['prenom']);
    $datenaiss = addslashes($_POST['datenaiss']);
    $sexe = $_POST['sexe'];
    $telephone = addslashes($_POST['telephone']);
    $email = addslashes($_POST['email']);
    $password = $_POST['password'];
    $passwordconfirm = $_POST['passwordconfirm'];


    // validation du formulaire
    if (empty($nom)) {
      array_push($errors,"Le champ nom est obligatoire");
    }
    if (empty($prenom)) {
      array_push($errors,"Le champ prenom est obligatoire");
    }
    if (empty($datenaiss)) {
      array_push($errors,"Le champ date de naissance est obligatoire");
    }
    if (empty($telephone)) {
      array_push($errors,"Le champ telephone est obligatoire");
    }
    if (empty($email)) {
      array_push($errors,"Le champ email est obligatoire");
    }
    if (empty($password)) {
      array_push($errors,"Le mot de passe est obligatoire");
    }
    if (empty($passwordconfirm)) {
      array_push($errors,"La confirmation du mot de passe est obligatoire");
    }

    if ($password != $passwordconfirm) {
      array_push($errors,"Echec de confirmation du Password");
    }


    // verification si l'utlisateur a deja un compte
    // requete
    $user_check_query = "SELECT * FROM user WHERE tel='$telephone' LIMIT 1";
    // execution de la requete
    $user_check_result = mysqli_query($conn,$user_check_query);
    // recuperation du retour de la requete
    $user = mysqli_fetch_assoc($user_check_result);

    if ($user) {

      // si le numero de telephone existe deja
      if ($user['tel']===$telephone) {
        array_push($errors,"Le numero de telephone est deja utilise");
      }

    }


    // verification du tableau d'erreur
    if (count($errors) == 0) {
      //cryptage du mot de passe
      $password = md5($password);


      // execution de la requete
      mysqli_query($conn,"INSERT INTO user (nom,prenom,datenaiss,sexe,tel,email,mdp,date_create) VALUES ('$nom','$prenom','$datenaiss','$sexe','$telephone','$email','$password','$datepost')");


      // redirection de l'utilisateur
       echo '<script language="Javascript">';
       echo 'document.location.replace("./login.php")'; // -->
       echo ' </script>';
    }

    // close database
    mysqli_close($conn);
  }
?>


<?php include 'views/register.views.php'; ?>
