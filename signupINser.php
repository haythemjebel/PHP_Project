<?php
include_once 'db.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['add'];
$email=$_POST['email'];
$password=$_POST['pass'];
$query ="INSERT INTO user (firstname,lastname,adresse,email,password) VALUES ('$fname','$lname','$address','$email','$password')";
$result = mysql_query($query);
if($result){
echo ' ajoute avec success';
header('Refresh:1; URL=acceuillING.php');
}else{
echo ' echec opsssss';
header('Refresh:1; URL=signup.php');
}
?>
