<?php
include_once 'db.php';
if (isset($_POST['submit'])){
    $zone1=mysql_real_escape_string(htmlspecialchars(trim($_POST['zone1'])));
    if(empty($zone1)){
        echo "<span class='erreur'>Verifier votre champs</span>";
        header('Refresh:1; URL=rechercheE.php');
    }
    else{
        result($zone1);
        header('Refresh:10; URL=rechercheE.php');
    }
}
function result($zone1){
    $where ="";
    $zone1= preg_split('/[\s\-]/',$zone1);
    $count_keywords=count($zone1);
    foreach($zone1 as $key=>$zone){
        $where="competance LIKE '%$zone%'";
        if($key != ($count_keywords - 1)){
            $where .=" AND ";
        }
    }
    $query =mysql_query("select * from user where $where");
    $rows =mysql_num_rows($query);
    if($rows){
        while($domaine = mysql_fetch_assoc($query)){
            echo"<strong>Competance :".$domaine['competance']."</strong></br><strong>Titre :".$domaine['titre']."</strong></br><u>Email:</u></br>".$domaine['email']."</br><u>Experiance:</u></br>".$domaine['experiance']."</br>";
        }

    }else {
        echo"pas de resultat trouve.....";
        header('Refresh:1; URL=rechercheE.php');
    }
}
?>