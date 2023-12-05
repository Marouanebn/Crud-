<?php 

function ajouterunproduit(){
    include_once "conexion.php";

    extract($_POST);
    $name=$_FILES['photo']['name'];
    $tmp=$_FILES['photo']['tmp_name'];
    $to="image/$name";
move_uploaded_file($tmp,$to);

    $result=mysqli_query($cnx,"insert into etudiant(name,class,email,tel,photo) values ('$nom','$class','$email',$tel,'$to') ");

    header("Location:liste.php");

}
function suprimerunproduit(){
    $id = $_GET["id"];
include_once "conexion.php";
$result = mysqli_query($cnx, "delete from etudiant where id=$id");


header("Location:liste.php");

}


?>