<?php include('header.php'); ?>
    <section class="speaker-header">
        <div class="jumbotron speaker-jumbotron">
            <h1>10 <span class="red">speakers</span>, pour une mise en lumière</h1>
            <p>Cette année, ce sont dix speakers qui nous font l'honneur de participer à cette première édition du TEDx Université de Bordeaux. Ils apporteront chacun leur expertise sur le néthème de cette édition : Lumière 2.0. Scientifique, entrepreneur, professeur ou passionné, découvrez le parcours de chacun.</p>
        </div>
    </section><!-- simple -->
    <section class="speaker">
        <div class="wrap">
                <?php $speakers= $dbh->query("Select lastname, firstname, description, picture From speakers");
                foreach($speakers as $speaker) : ?>
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-thumbnail speaker-img" src="/images/mathieu.jpg">
                        </div>
                        <div class="col-md-8">
                            <h2 class="speaker-title"><span class="red">1/10</span> <?php echo $speaker['firstname'].' '.$speaker['lastname'].$speaker['position'] ?></h2>
                            <p class="speaker-descri"><?php echo $speaker['description'] ?></p>
                        </div>
                    </div>
                <?php endforeach ?>
           <br><br><br> <h3>Rendez-vous le <span class="red">01 Février</span> pour découvrir le prochain speaker !</h3>
        </div><!-- wrap -->
    </section><!-- simple -->
<?php include('footer.php'); ?>