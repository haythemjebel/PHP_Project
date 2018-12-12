<?php
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo $lang['titlegenral'] ?></title>
    <style>
    .social_media {
	margin-right: 30px;
	margin-top: 27px;
	width : 40px;
	height : 40px;
}
    </style>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/css/uikit.min.css" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.25/js/uikit-icons.min.js"></script>
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/full-slider.css" rel="stylesheet">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
      <a class="navbar-brand" href="signupA.php"><img src="images/logofisrjob.png"
				width="200px" height="37px" /></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
<div style ="height: 820px "class="uk-height-medium uk-flex uk-flex-center uk-flex-middle uk-background-cover uk-light" data-src="images/job1.jpg" uk-img>
    <div style="margin-right:30px"><a href="Login.php"><button type="button" class="btn btn-outline-primary btn-lg">Ingenieur</button></div></a>
    <div><a href="LoginE.php"><button type="button" class="btn btn-outline-success btn-lg">Entreprise</button></div></a>
</div>

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container" style="height : 50px">
        <p class="m-0 text-center text-white">Copyright &copy; developped by Haythem JEBEL</p>
        <p class ="text-center">
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
    </footer>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label class="col-form-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name" value="haythemjebel@gmail.com" disabled>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
