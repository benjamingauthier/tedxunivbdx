<?php include('header.php'); ?>
<section class="speaker-header">
    <div class="jumbotron speaker-jumbotron">
        <h1>Découvrez l'<span class="red">équipe</span> !</h1>
        <p>
            Les bénévoles impliqués sur l’organisation du TEDx le font par pur plaisir de découvrir de
            nouvelles idées et de contribuer à la transmission de connaissances. De plus, un événement TEDx
            ne saurait voir le jour sans le support d’une communauté partageant ces mêmes valeurs.
        </p>
    </div>
</section><!-- simple -->
<section class="speaker">
    <div class="wrap">
        <div class="row team-descri">
            <div class="col-md-4  team-descri frame">
                <span class="helper"></span>
                <img class="img-circle team-img img-center" src="/images/poles/bureau.jpg">
            </div>
            <div class="col-md-8">
                <h2 class="speaker-title red">Bureau</h2>
                <p class="speaker-title justify">
                <span class="red bold">La présidente</span>, Vanessa Bouaroudj :
                    Vanessa détient la licence accordée par TED pour organiser le
                    premier TEDx universitaire bordelais. Cette ingénieur-économiste, ancienne joueuse de rugby au
                    caractère bien trempé, globe-trotter dans l’âme, coordonne donc toutes les actions des pôles et
                    veille au bon déroulement de l’événement. Elle découvre TED il y a de cela plusieurs années, et
                    c’est sa rencontre avec l’organisatrice du TEDxBordeaux, en 2013, qui la motive à se lancer dans
                    l’aventure. Sa devise : « nothing worth having comes easy ». Au boulot donc !<br>
                <span class="red bold">Le vice-président</span>, Mathieu Bourdenx :
                    Mathieu est l’unique représentant de la gente masculine
                    pour ce quatuor initiateur du premier TEDxUniversitéDeBordeaux. Étudiant en thèse de
                    neurosciences, il découvre TED par le biais des TED Lunchs organisés dans son laboratoire de
                    thèse. Passionné de technologie, son intérêt pour la production et la diffusion des savoirs a motivé
                    son implication dans l’aventure qu’est l’organisation de ce premier TEDxUniversitéDeBordeaux. La
                    phrase illustrant le mieux cet état d’esprit est probablement la maxime de Socrate : « je ne sais
                    qu’une chose, c’est que je ne sais rien».<br>
                <span class="red bold">La secrétaire</span>, Julie Jezequel :
                    ”Celui qui dit "moi, je sais !" est plus ignorant que l'ignorant ; il faut
                    toujours savoir apprendre des autres.” Ostad Elahi. Cette phrase illustre parfaitement la
                    philosophie de vie de Julie. Ouvrir grand les yeux, observer le monde et apprendre de ce et ceux
                    qui nous entourent pour toujours nourrir sa pensée. C’est cette soif de savoir qui l’a poussée vers
                    le monde de la recherche et des neurosciences, comme elle l’a poussé à prendre part à
                    l’organisation de ce TEDx. Transmission et partage des connaissances sont les maîtres mots
                    d’une société éclairée, les garants d’un meilleur avenir incarnés par l’Université mais aussi par
                    l’esprit de TED. Rejoindre l’aventure de ce premier TEDxUniversitedeBordeaux était donc une
                    évidence !<br>
                <span class="red bold">La trésorière</span>, Camille Forgeau :
                    Camille fait de l’aqua-poney, de l’escalade (un peu) et, dès qu’elle
                    a du temps libre, part explorer le monde. Dans la vraie vie, elle travaille à l’université de Bordeaux
                    depuis quelques années, est passionnée par la diffusion des savoirs et organise des rencontres
                    entre les scientifiques et les artistes. C’est parce qu’elle aime imaginer des trucs qui n’existent pas
                    encore et qu’elle a été dans « la com’ » qu’elle a décidé de rejoindre l’équipe et l'aventure du
                    TEDxuniversitédeBordeaux.
                </p>
            </div>
        </div>
        <?php $poles= $dbh->query("Select id, name, picture, description From poles where id <> 1 AND id <>  3");
        foreach($poles as $pole) : ?>
            <div class="row team-descri">
                <div class="col-md-4  team-descri frame">
                    <span class="helper"></span>
                    <img class="img-circle team-img img-center" src="<?php echo $pole['picture'] ?>">
                </div>
                <div class="col-md-8">
                    <h2 class="speaker-title red"><?php echo $pole['name'] ?></h2>
                    <?php $members= $dbh->query("Select firstname, lastname From members where poles_id = ".$pole['id']);
                    $name = '';
                    foreach ($members as $member): ?>
                        <?php
                        $name = $name.utf8_encode($member['lastname'].' '.strtoupper($member['firstname']).', ')
                        ?></p>
                    <?php endforeach ?>
                    <?php $name = substr($name,0,-2).'.' ?>

                    <p class="speaker-title justify"><?php echo $pole['description'] ?><br><br><?php echo $name ?></p>
                </div>
            </div>
         <?php endforeach ?>
      </div>
    </div><!-- wrap -->
</section><!-- simple -->
<?php include('footer.php'); ?><
