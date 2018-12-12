<?php
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script
		src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- Bibliotheque de style d'écriture nommé Merienda One comme le standard Times New Roman -->
	<link href='http://fonts.googleapis.com/css?family=Merienda+One'
		rel='stylesheet' type='text/css'>
<title><?php echo $lang['ACING1'] ?></title>
<style>
.hint {
font: 400 18px/1.7 'Merienda One', Helvetica, sans-serif;
color: rgba(0, 0, 0, 0.7);
}

h2 {
font: 400 30px/1.0 'Merienda One', Helvetica, sans-serif;
color: orange;
text-shadow: 3px 3px 3px #fff;
}

.footer {
position: fixed-buttom;
right: 40;
bottom: 0;
width: 100%;
height: 10%;
background-color: black;
color: white;
text-align: right;
}

.form-group {
margin-top: 40px;
}

.margin-item {
margin-top: 25px;
}

.margin-left {
margin-left: 35px;
}

.size_but {
width: 30%;
}

body {
background-color: #f1f1f1;
}

.content {
height: auto;
background-color: #fff;

}

.social_media {
margin-right: 30px;
margin-top: 27px;
width : 40px;
height : 40px;

}

.btn-warning {
background-color: orange;
color: white;
}
</style>
</head>
<body dir="ltr">
  <nav class="navbar navbar-inverse ">
    <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="Login.php"><img src="images/logofisrjob.png"
            width="200px" height="37px" /></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a class="dropdown-toggle"
            data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
            <?php echo $lang['profil'] ?></a><ul class="dropdown-menu">
              <li><a href="recherche.php"><span class="glyphicon glyphicon-search"></span>&nbsp;<?php echo $lang['rech'] ?></a></li>
              <li><a href="update.php"><span class="glyphicon glyphicon-wrench"></span>&nbsp;<?php echo $lang['upd'] ?></a></li>
              <li><a href="deconnexion.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;<?php echo $lang['lgou'] ?></a></li>
                </ul>
                </li>
              </li>
              <li class="dropdown"><a class="dropdown-toggle"
				data-toggle="dropdown" ><?php echo $lang['Langue'] ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="acceuillING.php?lang=fr"><img src="images/fr.png" width="25px"
							height="25px" /><?php echo $lang['lang_fr'] ?></a></li>
					<li><a href="acceuillING.php?lang=en"><img src="images/en.png" width="25px"
							height="25px" /><?php echo $lang['lang_en'] ?></a></li>
				</ul></li>
        </ul>
      </div>
</nav>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="container-fluid content col-sm-8" align="center">
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col"><?php echo $lang['t1'] ?></th>
      <th scope="col"><?php echo $lang['t2'] ?></th>
      <th scope="col"><?php echo $lang['t3'] ?></th>
      <th scope="col"><?php echo $lang['t4'] ?></th>
      <th scope="col"><?php echo $lang['t5'] ?></th>
      <th scope="col"><?php echo $lang['t6'] ?></th>
      <th scope="col"><?php echo $lang['t7'] ?></th>
    </tr>
  </thead>
  <tbody>
  <?php
  include_once 'db.php';
   $query="SELECT logo ,Nom ,domaine ,adresse ,tel ,email ,site_web FROM `entreprise`";
   $result=mysql_query($query);
   if (mysql_num_rows($result)>0) {
    while($row = mysql_fetch_assoc($result)) { 
            ?>
                <tr>
                    <td><?php echo '<img width="140px" height ="140px" src="images/' . $row["logo"] . '">'; ?></td>
                    <td><?php echo $row['Nom'] ;?></td>
                    <td><?php echo $row['domaine'] ;?></td>
                    <td><?php echo $row['adresse'] ;?></td>
                    <td><?php echo $row['tel'] ;?></td>
                    <td><?php echo $row['email'] ;?></td>
                    <td><?php echo $row['site_web'] ;?></td>
                    <!--<td><a data-toggle="modal" data-target="#exampleModalCenter" href ="edit.php?nom=<?php echo $row['Nom']; ?>"><span class="glyphicon glyphicon-edit"></span></a></td>-->
                    <td><a data-toggle="modal" data-target="#exampleModalCenter"><span class="glyphicon glyphicon-edit"></span></a></td>
                 </tr>   
            <?php
        }
    }
    ?>
  </tbody>
</table>
		</div>
		<div class="col-sm-2"></div>
	</div>
	<footer class="footer">
		<p>
		<a href="https://www.facebook.com/sergio.haythem"><img
				src="images/face.png"
				class="social_media" /></a> <a href="https://github.com/haythemjebel">
				<img src="images/git.png"
				class="social_media" />
			</a> <a href="https://www.linkedin.com/in/haythem-jebel/"> <img src="images/link.png"  class="social_media" /></a> <a data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> <img
				src="images/gmail1.png"  class="social_media" />
			</a>
		</p>
	</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle"><?php echo $lang['m1'] ?></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="contactcventreprise.php" class="form-group" method='POST'>
      <div class="modal-body">
                <label><?php echo $lang['m2'] ?><span style="color:#ff0000;">*</span>:</label>
                <input type="text" class="form-control" name="Nom" placeholder="<?php echo $lang['m2'] ?>" required>
                <label><?php echo $lang['m3'] ?><span style="color:#ff0000;">*</span>:</label>
                <input type="text" class="form-control" name="Prenom" placeholder="<?php echo $lang['m3'] ?>" required>
                <label><?php echo $lang['m4'] ?><span style="color:#ff0000;">*</span>:</label>
                <input type="email" class="form-control" name="email" placeholder="<?php echo $lang['m4'] ?>" required>
                <label><?php echo $lang['m5'] ?><span style="color:#ff0000;">*</span>:</label>
                <textarea class="form-control" name="message" rows="4" placeholder="<?php echo $lang['m5'] ?> "></textarea>
                <p style="color:red;" >*<?php echo $lang['m6'] ?>*</p>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="cv">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['m7'] ?></button>
        <button type="submit" class="btn btn-primary"><?php echo $lang['m8'] ?></button>
      </div>
      </form>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo $lang['titMessage'] ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="col-form-label"><?php echo $lang['Recipient'] ?></label>
            <input type="text" class="form-control" id="recipient-name" value="haythemjebel@gmail.com" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo $lang['close'] ?></button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
