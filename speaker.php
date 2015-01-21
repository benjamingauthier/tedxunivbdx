<?php include('header.php'); ?>
    <section class="speaker-header">
        <div class="jumbotron speaker-jumbotron">
            <h1>10 <span class="red">speakers</span>, pour une mise en lumière</h1>
            <p>Cette année ce sont dix speaker qui nous font l'honneur de participer à cette première édition du TEDx Université de Bordeaux. Ils apporteront chacun leur expertise sur le néthème de cetteédition : Lumière 2.0. Scientifique, entrepreuneur, professeur ou passionné, découvrez le parcours de chacun.</p>
        </div>
    </section><!-- simple -->
    <section class="speaker">
        <div class="wrap">
            <div class="row">
                <?php $speakers= $dbh->query("Select lastname, firstname, description, picture From speakers");
                foreach($speakers as $speaker) : ?>
                        <div class="col-md-4">
                            <img class="img-thumbnail speaker-img" src="<?php echo $speaker['picture'] ?>">
                        </div>
                        <div class="col-md-8">
                            <h2 class="speaker-title"><?php echo $speaker['firstname'].' '.$speaker['lastname'].', '.$speaker['position'] ?></h2>
                            <p class="speaker-descri"><?php echo utf8_encode($speaker['description']) ?></p>
                        </div>
                <?php endforeach ?>
            </div>
        </div><!-- wrap -->
    </section><!-- simple -->
<?php include('footer.php'); ?>