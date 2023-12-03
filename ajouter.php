<?php 

include_once "conexion.php";

extract($_POST);

// $photo=$_FILES['photo']['name'];
// $tmp=$_FILES['photo']['tmp_name'];
// $to="image/$nom";
// move_uploaded_file($tmp,$to);


$result=mysqli_query($cnx,"insert into etudiant(name,class,email,tel) values ('$nom','$class','$email',$tel) ");



header("Location:liste.php");
?>