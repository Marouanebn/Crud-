<?php 
$id=$_GET['id'];


include_once "conexion.php";
$result=mysqli_query($cnx,"delete from etudiant where id=$id");
header("location:liste.php");
?>