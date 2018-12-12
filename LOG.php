<?php
include_once'db.php';
 
$username=($_POST['email']);
$password=($_POST['password']);

$result=mysql_query("SELECT * FROM admin WHERE email='$username' and password='$password'");
  if (mysql_num_rows($result)>0) {
    while($row = mysql_fetch_assoc($result)) { 
    $message= "Bienvenu Monsieur :".$row["name"];
    header('Refresh:2; URL=acceuillAdmin.php');
   }
 } else{
  $message= 'Wrong Username or Password!';
  header('Refresh:2; URL=signupA.php');
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
