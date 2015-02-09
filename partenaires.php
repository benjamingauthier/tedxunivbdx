<?php include('header.php'); ?>
<section class="speaker-header">
    <div class="jumbotron speaker-jumbotron">
        <h1>Ils nous <span class="red">soutiennent</span> !</h1>
        <p>
            Si vous pensez que les valeurs de votre organisation sont en phase avec celles qui nous animent,
            et que vous souhaitez devenir partenaire de cette édition (ou des prochaines), n’hésitez pas à
            nous <a href="mailto:tedxuniversitedebordeaux@gmail.com" >contacter</a> !
        </p>
    </div>
</section><!-- simple -->
<section class="speaker">
    <div class="wrap">
            <?php $partners= $dbh->query("Select name, description, picture, website From partners");
            foreach($partners as $partner) : ?>
                <div class="row partners">
                    <div class="col-md-4 partners-descri partners-frame">
                            <span class="helper"></span><img class="img-center partners-img" src="<?php echo $partner['picture'] ?>">
                    </div>
                    <div class="col-md-8 partners-descri">
                        <h2 class="speaker-title"><a class="red" target="_blank" href="<?php echo $partner['website']?>"><?php echo $partner['name'] ?></a></h2>
                        <p class="speaker-descri"><?php echo $partner['description'] ?></p>
                    </div>
                </div>
            <?php endforeach ?>
    </div><!-- wrap -->
</section><!-- simple -->
<?php include('footer.php'); ?>
