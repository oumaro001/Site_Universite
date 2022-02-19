<?php
  session_start();
require_once 'header.php';
require_once 'footer.php';
require_once 'menuConnect.php';

if(isset($_POST['btn'])){

  if(isset($_POST['email'])){
  @$email = $_POST['email'];
  $_SESSION['email']=$email;

  }else{
  $erreurMail= "<p>Email incorrect</p>";
  }

  if(empty($_POST['password'])){
  @$password = $_POST['password'];
  $_SESSION['password']=$password;

  }else{
    $erreurPassword= "<p>Mot de passe incorrect<p>";
  }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
<form action="#" method="POST"> 
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" placeholder="Entrer email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mots de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Mots de passe">
  </div>
  <button type="submit" class="btn btn-primary" name="btn">Connexion</button>
</form>

</body>
<style>

.form-group{
    margin: 10px 20px;
    
}

button{

    margin-left:20px;
}

<?php  
echo $erreurMail; 
echo $erreurPassword;
?>
</style>
</html>