<?php
//include_once'dbConnection.php';
//include_once'personne.php';
include_once'db.php';
session_name('sessionlogin');
session_start();
 
$username=($_POST['email']);
$password=($_POST['password']);

$result=mysql_query("SELECT * FROM entreprise WHERE email='$username' and password='$password'");
/*$count=mysql_fetch_array($result)or die(mysql_error());
if($count>0){
  $_SESSION['email']=$username;
  //session_register("email");
  $_SESSION['password']=$password;
  //session_register("password");
  $message= "Bienvenu Monsieur : ";
  header('Refresh:2; URL=index1.php');
  ///print_r($_SESSION);
  //echo $_SESSION['email'] ;
  //echo $_SESSION['password'] ;
} else {
  $message= 'Wrong Username or Password!';
  header('Refresh:2; URL=Login.php');
  }*/
  if (mysql_num_rows($result)>0) {
    while($row = mysql_fetch_assoc($result)) { 
    $message= "Bienvenu :".$row["Nom"];
    header('Refresh:2; URL=acceuillENT.php');
   }
 } else{
  $message= 'Wrong Username or Password!';
  header('Refresh:2; URL=LoginE.php');
   } 
?>
<html>
<head><title>Identification</title></head>
<body>
<h1>
  <?php echo $message ?>
</h1>
</body>
</html>
