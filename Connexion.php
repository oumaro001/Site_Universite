<?php

require_once 'header.php';
require_once 'footer.php';
require_once 'menuConnect.php'
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
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Mots de passe</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Mots de passe">
  </div>
  <button type="submit" class="btn btn-primary">Connexion</button>
</form>
  
</body>
<style>

.form-group{
    margin: 10px 20px;
    
}

button{

    margin-left:20px;
}
<style>
</html>