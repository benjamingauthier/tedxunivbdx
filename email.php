<?php
$mail = 'benjamin-gauthier@live.fr'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Bonjour, nous vous informons que votre inscirption au tirage au sort pour participer à la conférence TEDx Université de Bordeaux à bien était prise en compte.";
$message = "
<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head>
<body>
<img src='http://www.tedxuniversitedebordeaux.com/images/TEDxUB.png' height='50px' width='240px'><br><br>
Félicitations !<br> <br>

Votre participation au tirage au sort pour participer au TEDxUniversitéDeBordeaux à bien été prise en compte. Vous serez informé de l'issue du tirage au sort le 9 Mars.<br>

Vous avez demandé deux places étudiantes; pouvez-vous nous confirmer les deux numéros de carte étudiant associés ?<br>

Le tirage au sort sera réalisé par ordinateur jusqu'à ce que le quota de 100 places soit atteint. Vous pourrez alors payer vos places sous 48h - passé ce délai, nous donnerons votre place à une personne placée en liste d'attente !<br>

Si vous n'êtes pas tirés au sort, rassurez-vous: des lieux-relais sont mis en place afin que vous puissiez suivre l'événement en direct. Plus d'informations à ce sujet très prochainement !<br>
<br><br>
L'équipe du TEDxUniversitéDeBordeaux
</body>
</html>";


//=====Définition du sujet.
$sujet = "Confirmation de votre inscription !";
//=========

//=====Création du header de l'e-mail.
$header = "From: \"TEDxUniversitédeBordeaux\"<tedxuniversitedebordeaux@googlegroups.com>".$passage_ligne;
$header.= "Reply-to: \"TEDx Universite de Bordeaux\" <tedxuniversitedebordeaux@googlegroups.com>".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: text/plain; charset='utf-8'".$passage_ligne;
//==========


$message.= $passage_ligne;

var_dump(mail($mail,$sujet,$message,$header));

//==========
?>