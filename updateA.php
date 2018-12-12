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
<title><?php echo $lang['UPD'] ?> ADMIN</title>
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
position: fixed;
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
          <a class="navbar-brand" href="acceuillAdmin.php"><img src="images/logofisrjob.png"
            width="200px" height="37px" /></a>
        </div>

        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown"><a class="dropdown-toggle"
            data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span>
            <?php echo $lang['profil'] ?></a><ul class="dropdown-menu">
              <li><a href="acceuillAdmin.php"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php echo $lang['ACING1'] ?></a></li>
              <li><a href="deconnexionA.php"><span class="glyphicon glyphicon-log-out"></span>&nbsp;<?php echo $lang['lgou'] ?></a></li>
                </ul>
                </li>
              </li>
              <li class="dropdown"><a class="dropdown-toggle"
				data-toggle="dropdown" ><?php echo $lang['Langue'] ?><span class="caret"></span></a>
				<ul class="dropdown-menu">
					<li><a href="updateA.php?lang=fr"><img src="images/fr.png" width="25px"
							height="25px" /><?php echo $lang['lang_fr'] ?></a></li>
					<li><a href="updateA.php?lang=en"><img src="images/en.png" width="25px"
							height="25px" /><?php echo $lang['lang_en'] ?></a></li>
				</ul></li>
        </ul>
      </div>
</nav>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="container-fluid content col-sm-8" align="center">
  <form methode="GET" action='delete1.php'>
    <div class="form-group">
      <label for="exampleInputEmail1"><?php echo $lang['FOE'] ?></label>
      <input type="text" class="form-control" id ="first" name="first" placeholder="<?php echo $lang['FOE'] ?>" required>
    </div>
    <button type="submit" class="btn btn-danger"><?php echo $lang['del'] ?></button>
 </form>
 
<form methode="GET" action='delete2.php'>
<div class="form-group">
<label for="exampleFormControlSelect1"><?php echo $lang['FOEC'] ?></label>
    <select class="form-control" id="exampleFormControlSelect1" name="sel">
    <?php
 include_once 'db.php';
 $query="SELECT Nom FROM `entreprise`";
 $result=mysql_query($query);
 if (mysql_num_rows($result)>0) {
  while($row = mysql_fetch_assoc($result)) { 
?>
      <option value="<?php echo $row['Nom'] ;?>"><?php echo $row['Nom'] ;?></option>
      <?php
        }
    }
    ?>
    </select>
</div>
  <button type="submit" class="btn btn-danger"><?php echo $lang['del'] ?></button>
</form>

		</div>
		<div class="col-sm-2"></div>
	</div>
	<div class="footer">
	<p>
			<a href="https://www.facebook.com/sergio.haythem"><img
				src="images/face.png"
				class="social_media" /></a><a href="https://github.com/haythemjebel">
				<img src="images/git.png"
				class="social_media" />
			</a> <a href="https://www.linkedin.com/in/haythem-jebel/"> <img src="images/link.png"  class="social_media" /></a> <a data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"> <img
				src="images/gmail1.png"  class="social_media" />
			</a>
		</p>
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
