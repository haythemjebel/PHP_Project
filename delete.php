<?php
include_once'dbConnection.php';
if (isset($_POST['btn_delete'])) {
    $id =$_GET['delete_id'];

if ($person->delete($id)) {
    header('location:index1.php');
}
}
if (isset($_GET['delete_id'])) {
    $id=$_GET['delete_id'];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PDO PROJECT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="Static\css\uikit.min.css" />
        <link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="Static\js\uikit.min.js"></script>
        <script src="Static\js\uikit-icons.min.js"></script>
    </head>
    <body>
 
<nav class="uk-navbar-container uk-margin" uk-navbar>
    <div class="uk-navbar-left">

        <a class="uk-navbar-item uk-logo" href="#">Logo</a>

        <ul class="uk-navbar-nav">
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right"></span>
                    Home
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right" ></span>
                    Features
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right"></span>
                    About
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="uk-icon uk-margin-small-right" ></span>
                    Contact
                </a>
            </li>

        </ul>
    </div>
    <div class="uk-navbar-right">

    <ul class="uk-navbar-nav">
      <li><button class="uk-button uk-button-default uk-margin-small-right" type="submit" uk-toggle="target: #modal-example"><i class="fas fa-plus-circle fa-2x"></i></button></li>
    </ul>

</div>
</nav>
<table class="uk-table">
    <thead>
        <tr>
        <th>ID</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>E-mail</th>
        <th>Address</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <?php 
         $query="SELECT * FROM `users` where id=:id";
         $stmt = $conn->prepare($query);
         $stmt->execute(array(":id"=>$_GET['delete_id']));
             while($row=$stmt->fetch(PDO::FETCH_BOTH)){
                 ?>
                     <tr>
                         <td><?php echo $row['id']; ?></td>
                         <td><?php echo $row['firstname'] ;?></td>
                         <td><?php echo $row['lastname'] ;?></td>
                         <td><?php echo $row['email'] ;?></td>
                         <td><?php echo $row['address'] ;?></td>

                        <td>
                            <form method="POST">
                                 <button class="uk-button uk-button-danger" type="submit"name="btn_delete">Delete</button>
                            </form>
                        </td>
                    </tr>
       <?php 
             }
        ?>
    </tbody>
</table>
       
</body>
</html>