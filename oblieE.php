<?php
include_once'db.php';
session_name('sessionlogin');
session_start();
 
$username=($_POST['email']);
$tel=($_POST['tel']);

$result=mysql_query("SELECT * FROM entreprise WHERE email='$username' and tel='$tel'");
  if (mysql_num_rows($result)>0) {
    while($row = mysql_fetch_assoc($result)) { 
    $message= "Votre Mot de passe :".$row["password"];
    header('Refresh:3; URL=MdpE.php');
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
