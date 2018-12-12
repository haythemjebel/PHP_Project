<?php
$servername='localhost';
$username='root';
$password='';
$dbname='pdo';
try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch(PDOExecption $e){
     echo 'Error :'.$e->getMessage();
}
include_once'personne.php';
$person=new personBD($conn);
?>