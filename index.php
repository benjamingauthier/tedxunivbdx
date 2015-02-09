<?php include('header.php'); ?>
<?php include('register_form.php'); ?>
        <section class="subscribe">
            <div class="wrap">
                <div class="subscribe-title">Ideas Worth Spreading</div>
                <div class="subscribe-note">Le TEDx de l'Université de Bordeaux arrive ! Inscrivez vous à notre newsletter pour rester informé.</div>
                <div class="subscribe-form clearfix">
                    <form class="form-horizontal" role="form" action="register_form.php" id="subscribeForm" method="POST">
                        <div class="form-group" >
                            <div class="" id="divEmail">
                                <p id="errorMessage" style="color:red;" class="help-block text-danger"></p>
                                <input type="email" id="address" placeholder="Votre email" data-validate="validate(required, email)" required="required" name="email" class="subscribe-email">

                                <button id="submitButton" type="submit" class="subscribe-button">Valider</button>
                            </div>
                        </div>
                    </form>
                </div><!-- subscribe-form -->
            </div><!-- wrap -->
        </section><!-- subscribe -->
        <section class="simple home">
            <div class="wrap">
                <div class="row">
                    <div class="col-md-6 nopadding">
                        <h2><i class="fa fa-lightbulb-o fa-2x red"></i>  Bienvenue !</h2>
                       <p class="home-text">
                           Toute l’équipe est heureuse d’annoncer la première édition universitaire d’un TEDx sur le campus
                           bordelais ! Nous travaillons dur pour que cette première édition soit un succès, et qu’elle marque le
                           début d’une longue histoire entre l’Université de Bordeaux et la communauté TED. Le
                           TEDxUniversiteDeBordeaux se tiendra le 21 mars 2015, à l’Agora du Haut-Carré, à Talence. Notre
                           objectif ? Vous offrir une journée lumineuse…
                       </p>
                    </div>
                    <div class="col-md-6 nopadding">
                        <h2><i class="fa fa-lightbulb-o fa-2x red"></i>  Qu'est ce que TEDx ?</h2>
                        <p class="home-text">
                            TED est une organisation à but non-lucratif dédiée au partage d’idées, sous la forme de
                            conférences brèves et convaincantes (18 minutes au maximum). Lancée en 1984 comme une
                            conférence sur les thèmes de la Technologie, du Divertissement et du Design, TED couvre
                            aujourd’hui une large palette de sujets – des sciences dures aux problématiques globales – dans
                            plus de 100 langues différentes. Les TEDx sont des événements locaux et indépendants destinés
                            à décupler le partage d’idées tout en conservant l’esprit et le format de TED.
                        </p>
                    </div>
                </div>
            </div><!-- wrap -->
        </section><!-- simple -->
        <section class="stat">
            <div class="wrap stat-wrap">
                <div class="stat-text">
                    <p><span class="red">1</span> thème <span class="red">10</span> sujets <span class="red">10</span> speakers <span class="red">100</span> personnes</p>
                </div>
            </div><!-- wrap -->
        </section><!-- subscribe -->
<?php include('footer.php'); ?>