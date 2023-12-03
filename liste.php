<?php 

include_once "conexion.php";

$result = mysqli_query($cnx, "select * from etudiant order by id desc")

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom et prenom</th>
      <th scope="col">class</th>
      <th scope="col">email</th>
      <th scope="col">tel</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    <?php   while ($p=$result -> fetch_assoc()) { ?>
       
     
    <tr>
      <th scope="row"><?=$p['id'] ?></th>
      <td><?=$p['name'] ?></td>
      <td><?=$p['class'] ?></td>
      <td><?=$p['email'] ?></td>
      <td><?=$p['tel'] ?></td>
      <td><a class="btn btn-danger"  href="del.php?id=<?=$p['id']?>">Supprimer</a>
        <!-- <a class="btn btn-success" href="liste.php?id=<?=$p['id']?>">Consulter</a> -->
        </td>
    </tr>
  <?php }?>
  </tbody>
</table>
</body>
</html>