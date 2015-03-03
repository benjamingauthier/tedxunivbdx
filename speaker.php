<?php include('header.php'); ?>
    <section class="speaker-header">
        <div class="jumbotron speaker-jumbotron">
            <h1>13 <span class="red">speakers</span>, pour une mise en lumière</h1>
            <p>Cette année, ce sont treize speakers qui nous font l'honneur de participer à cette première édition du TEDx Université de Bordeaux. Ils apporteront chacun leur expertise sur le thème de cette édition : Lumières 2.0. Scientifique, entrepreneur, professeur ou passionné, découvrez le parcours de chacun.</p>
        </div>
    </section><!-- simple -->
    <section class="speaker">
        <div class="wrap">
            <?php $speakers= $dbh->query("Select lastname, firstname, description, picture From speakers");
            $i = 1;
            foreach($speakers as $speaker) : ?>
                <div class="row partners">
                    <div class="col-md-4 partners-descri speakers-frame">
                        <span class="helper"></span><img class="img-thumbnail speaker-img img-center" src="<?php echo $speaker['picture'] ?>">
                    </div>
                    <div class="col-md-8 partners-descri">
                        <h2 class="speaker-title"><span class="red"><? echo $i; ?>/13</span> <?php echo $speaker['firstname'].' '.$speaker['lastname'].$speaker['position'] ?></h2>
                        <p class="speaker-descri"><?php echo $speaker['description'] ?></p>
                    </div>
                </div>
                <?php $i = $i+1; ?>
            <?php endforeach ?>
            <br><br><br> <h3>Rendez vous le <span class="red">21 mars</span> pour découvrir l'ensemble des speakers !</h3>
        </div><!-- wrap -->
    </section><!-- simple -->
<?php include('footer.php'); ?>