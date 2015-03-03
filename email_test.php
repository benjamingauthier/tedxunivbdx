<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head>
<body>
<?php


$codehtml=
"<html>
<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
</head>
<body>
    <img src='http://www.tedxuniversitedebordeaux.com/images/TEDxUB.png' height='50px' width='210px'><br><br>
    Félicitations !<br> <br>

    Votre participation au tirage au sort pour participer au TEDxUniversitéDeBordeaux a bien été prise en compte. Vous serez informé de l'issue du tirage au sort le 9 Mars. <br>

    Le tirage au sort sera réalisé par ordinateur jusqu'à ce que le quota de 100 places soit atteint. Vous pourrez alors payer vos places sous 48h - passé ce délai, nous donnerons votre place à une personne placée en liste d'attente ! <br>

    Si vous n'êtes pas tiré au sort, rassurez-vous: des lieux-relais sont mis en place afin que vous puissiez suivre l'événement en direct. Plus d'informations à ce sujet très prochainement ! <br>
    <br><br>
    L'équipe du TEDxUniversitéDeBordeaux.

</body>
</html>";


$dbh = new PDO('mysql:host=mysql.pl-vm39.siteinternet.local;dbname=tedxunivbdx', "tedxunivbdx", "SQL_ukS33M-l!s");
try
{
    $subscribers = $dbh->query("SELECT email FROM inscriptions where email NOT IN (
SELECT email FROM inscriptions WHERE nb_place = 2 AND num_etu <> 0)");
    foreach($subscribers as $subscriber) {
        /*mail($subscriber[0],
            "Confirmation de votre inscription !",
            $codehtml,
            "From: \"TEDxUniversitédeBordeaux\"<tedxuniversitedebordeaux@gmail.com>\r\n".
            "Reply-To: \"TEDxUniversitédeBordeaux\"<tedxuniversitedebordeaux@gmail.com>\r\n".
            "Content-Type: text/html; charset=\"utf-8\"\r\n");*/
        echo "Ce script envoie un mail au format HTML à $subscriber[0]";
        echo '<br>';
    }
}
catch (PDOException $ex)
{
    header("HTTP/1.1 404 Not Found");
}

echo "Envoi réussi !";
?>
</body>
</html>