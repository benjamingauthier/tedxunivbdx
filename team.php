<?php include('header.php'); ?>
<section class="speaker-header">
    <div class="jumbotron speaker-jumbotron">
        <h1>Voici l'équipe!</h1>
        <p>Découvrez nos différents poles ainsi que les personnes qui s'investissent pour TEDx</p>
    </div>
</section><!-- simple -->
<section class="speaker">
    <div class="wrap">
        <div class="row">

        <?php $poles= $dbh->query("Select id, name, picture From poles");
        foreach($poles as $pole) : ?>
            <div class="col-md-4">
                <img class="img-thumbnail speaker-img" src="<?php echo $pole['picture'] ?>">
            </div>
            <div class="col-md-8">
                <h2 class="speaker-title"><?php echo utf8_encode($pole['name'])?></h2>
            </div>

            <?php $members= $dbh->query("Select firstname, lastname From members where poles_id = ".$pole['id']);

            foreach ($members as $member): ?>

                <div class="col-md-8">
                    <p class="speaker-title"><?php echo utf8_decode($member['firstname'].' '.$member['lastname']) ?></p>
                </div>
             <?php endforeach ?>

         <?php endforeach ?>
        </div>
    </div><!-- wrap -->
</section><!-- simple -->
<?php include('footer.php'); ?><
