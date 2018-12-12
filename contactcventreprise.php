<?php
 
  // (1) Code PHP pour traiter l'envoi de l'email
 
  // Récupération des variables et sécurisation des données
  $nom     = htmlentities($_POST['Nom']); // htmlentities() convertit des caractères "spéciaux" en équivalent HTML
  $prenom     = htmlentities($_POST['Prenom']);
  $email   = htmlentities($_POST['email']);
  $message = htmlentities($_POST['message']);
  $cv = htmlentities($_POST['cv']);
 
  // Variables concernant l'email
 
  $destinataire = 'haythemjebel2@gmail.com'; // Adresse email du webmaster (à personnaliser)
  $sujet = 'site web PHP'; // Titre de l'email
  $contenu = '<html><head><title>Titre du message</title></head><body>';
  $contenu .= '<p>Bonjour, vous avez reçu un message à partir de votre site web.</p>';
  $contenu .= '<p><strong>Nom</strong>: '.$nom.'</p>';
  $contenu .= '<p><strong>Prenom</strong>: '.$prenom.'</p>';
  $contenu .= '<p><strong>Email</strong>: '.$email.'</p>';
  $contenu .= '<p><strong>Message</strong>: '.$message.'</p>';
  $contenu .= '<p><strong>cv</strong>: '.$cv.'</p>';
  $contenu .= '</body></html>'; // Contenu du message de l'email (en XHTML)
 
  // Pour envoyer un email HTML, l'en-tête Content-type doit être défini
  $headers = 'MIME-Version: 1.0'."\r\n";
  $headers .= 'From: Your name <info@address.com>' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1'."\r\n";
 
  // Envoyer l'email
  mail($destinataire, $sujet, $contenu, $headers); // Fonction principale qui envoi l'email
  echo '<h2>Message envoyéhhhhhhhh!</h2>';// Afficher un message pour indiquer que le message a été envoyé
  //header('Refresh:2; URL=acceuillING.php');
  // (2) Fin du code pour traiter l'envoi de l'email
?>