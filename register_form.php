<?php

function isEmail($email) {
    return(preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

if($_POST) {

    $firstname = ($_POST['firstname']);
    $lastname = ($_POST['lastname']);
    $email = ($_POST['address']);
    $nb_place = ($_POST['nb-place']);
    $etu = ($_POST['etu']);
    if($etu == 1)
    {
        $num_etu = ($_POST['num']);
        if($nb_place == 2 )
        {
            $num_etu2 = ($_POST['num2']);
        }
        else {
            $num_etu2 = 0;
        }
    }
    else
    {
        $num_etu = 0;
        $num_etu2 = 0;
    }

    if(!isEmail($email) || !checkdnsrr(array_pop(explode("@",$email)),"MX")) {
        header("HTTP/1.1 404 Not Found");
    }
    else {


       /* $dns = 'mysql:host=lasttram.fr.mysql;dbname=lasttram_fr';
        $utilisateur = 'lasttram_fr';
        $motDePasse = 'n54wWwZ7';
        $dbh = new PDO( $dns, $utilisateur, $motDePasse );*/
        $dbh = new PDO('mysql:host=mysql.pl-vm39.siteinternet.local;dbname=tedxunivbdx', "tedxunivbdx", "SQL_ukS33M-l!s");
        try
        {
            $stmt = $dbh->prepare("INSERT INTO inscriptions (firstname, lastname, email, nb_place, num_etu, num_etu2) VALUES (:firstname, :lastname, :email, :nb_place, :num_etu, :num_etu2)");
            $stmt->bindValue(':firstname', $firstname);
            $stmt->bindValue(':lastname', $lastname);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':nb_place', $nb_place);
            $stmt->bindValue(':num_etu', $num_etu);
            $stmt->bindValue(':num_etu2', $num_etu2);

            $stmt->execute();

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

                mail($email,
                        "Confirmation de votre inscription !",
                        $codehtml,
                        "From: \"TEDxUniversitédeBordeaux\"<tedxuniversitedebordeaux@gmail.com>\r\n".
                        "Reply-To: \"TEDxUniversitédeBordeaux\"<tedxuniversitedebordeaux@gmail.com>\r\n".
                        "Content-Type: text/html; charset=\"utf-8\"\r\n");

                $stmt = $dbh->prepare(" UPDATE inscriptions SET mailed = 1 WHERE email = :email");
                $stmt->bindValue(':email', $email);
                $stmt->execute();

        }
        catch (PDOException $ex)
        {
            header("HTTP/1.1 404 Not Found");
        }

    }

}

?>