<?php
include_once 'db.php';
$name=$_POST['name'];
$domaine=$_POST['domaine'];
$address=$_POST['add'];
$email=$_POST['email'];
$password=$_POST['pass'];
$query ="INSERT INTO entreprise (Nom,domaine,adresse,email,password) VALUES ('$name','$domaine','$address','$email','$password')";
$result = mysql_query($query);
if($result){
echo ' ajoute avec success';
header('Refresh:1; URL=acceuillENT.php');
}else{
echo ' echec opsssss';
header('Refresh:1; URL=signupE.php');
}
?>
