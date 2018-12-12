<?php
include_once 'db.php';
$first = $_GET['first'];
$query ="DELETE FROM user WHERE firstname = '$first'" ;
$result = mysql_query($query);
if($result){
echo ' delete avec success';
header('Refresh:1; URL=acceuillAdmin.php');
}else{
echo ' echec opsssss';
header('Refresh:1; URL=updateA.php');
}
?>
