<?php include ('header.php'); ?>
<section class="simple place">
    <div class="wrap">
        <div class="row">
            <?php $nb = $dbh->query("Select sum(nb_place) From inscriptions");
                $nb = $nb->fetch();
            ?>
            <h1 class="stati">Nombre d'inscrits : <?php echo $nb[0];?></h1>
            <?php $subscribers = $dbh->query("Select * From inscriptions");
            foreach($subscribers as $subscriber) : ?>
                <div class="row">
                    <div class="col-md-8 stati">
                        <h2 class="speaker-title"><?php echo $subscriber['firstname'].' '.$subscriber['lastname'] ?></h2>
                        <p class="speaker-descri"><?php echo 'Email :  '.$subscriber['email'].' Nombre de place : '.$subscriber['nb_place']?></p>
                        <?php if($subscriber['num_etu'] != 0) : ?>
                            <p class="speaker-descri"><?php echo 'Etudiant, numéro : '.$subscriber['num_etu']?></p>
                        <?php else : ?>
                            <p class="speaker-descri"><?php echo 'Non étudiant' ?></p>
                        <? endif ?>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>
<?php include ('footer.php'); ?>