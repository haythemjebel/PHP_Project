<?php
include_once'db.php';
session_name('sessionlogin');
session_start();
 
$username=($_POST['email']);
$tel=($_POST['TEL']);

$result=mysql_query("SELECT * FROM user WHERE email='$username' and tel='$tel'");
  if (mysql_num_rows($result)>0) {
    while($row = mysql_fetch_assoc($result)) { 
    $message= "Votre Mot de passe Monsieur :".$row["password"];
    header('Refresh:3; URL=Mdp.php');
   }
 } else{
  $message= 'Wrong Username or Password!';
  header('Refresh:2; URL=Login.php');
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
