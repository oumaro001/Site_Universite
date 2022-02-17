<?php

require_once 'header.php';
require_once 'footer.php';
require_once 'menuConnect.php';
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Contact</title>
</head>
<body>
<form action="#" method= "POST">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Nom</label>
  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="nom">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Prenom</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="prenom">
</div>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="nom@exemple.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Message</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<button type="submit" class="btn btn-primary">Envoyer</button>
</form>
</body>
<style>
.mb-3{
    margin: 0 20px;
    
}

button{

    margin-left:20px;
}
<style>
</html>