<?php 
require_once(__DIR__ . '/db_connection.php');
require_once(__DIR__ . '/functions.php');
require_once(__DIR__ . '/variables.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
h1
{
    text-align: center;
    margin: 40px;
}
.wrapper{
  width : 90%;
  margin: auto;
}
.filter-wrapper{
  display: flex;
  gap: 20px;
}
 
  
</style>
</head>
<body>
<div class="wrapper"> 
<h1> Connection to Database</h1>


<form action="" method="GET">
  <div class="filter-wrapper"> 
<label for="inputText" class="form-label">Recherche</label>
<input type="text" id="inputText"  name ="search" class="form-control" aria-describedby="passwordHelpBlock">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
</div>
  <select name = "order" class="form-select" aria-label="Default select example">
  <option selected>Ordre Alphabétique</option>
  <option value="ASC">A-Z</option>
  <option value="DESC">Z-A</option>
</select>


<!-- Add the organism dropdown select menu -->
            <select name="category" class="form-select" aria-label="Default select example">
                <option selected disabled>Choisissez un categorie</option>
                <?php
       echo  generateSelectOptions($films, 'category')
                ?>
            </select>

<button type="submit" class="btn btn-primary">Filtre</button>
</div>

</form>

    <table class="table ">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Prix</th>
      <th scope="col">Durée</th>
      <th scope="col">Rating</th>
      
    </tr>
  </thead>
<tbody class="table-group-divider">
   <?php foreach ($filterData as $film) : ?>
     <tr>
    <td> <?php echo $film['FID']; ?> </td>
    <td> <?php echo $film['title']; ?></td>
    <td> <?php echo $film['description']; ?> </td>
    <td> <?php echo $film['category']; ?> </td>
        <td> <?php echo $film['price']; ?> </td>
        
        <td> <?php echo $film['length']; ?> </td>
        <td> <?php echo $film['rating']; ?> </td>
     
   </tr>
 

   <?php endforeach ; ?>
    </tbody>
   </table>
    </div>
</body>
</html>


