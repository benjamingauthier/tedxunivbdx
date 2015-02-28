<?php include('header.php'); ?>
        <section class="simple place">
            <div class="wrap">
                <div class="row">
                    <div class="col-md-8 nopadding">
                        <div class="subscribe-title red">Je réserve ma place !</div>
                               <div class="place-note">Afin de participer au tirage au sort pour obtenir une place pour assister à l'évènement, merci de remplir ce formulaire !</div>
                        <div class="subscribe-form clearfix">
                    </div>
                        <form class="form-horizontal" role="form" action="register_form.php" id="subscribeForm" method="POST">
                            <div class="form-group" >
                                <div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0" id="divEmail">
                                    <input type="text" id="firstname" placeholder="Prénom" required="required" name="firstname" class="subscribe-email"><br><br><br>
                                    <input type="text" id="lastname" placeholder="Nom" required="required" name="lastname" class="subscribe-email"><br><br><br>
                                    <input type="email" id="address" placeholder="Votre email" data-validate="validate(required, email)" required="required" name="address" class="subscribe-email"><br><br><br>
                                    <div id="choix-place">
                                        <div id="nb-place"><br>
                                            <label for="place" class="label-place">Nombre de place :        </label><br>
                                            <input id="nb-place" type="radio" name="nb-place" value="1" checked required class="">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;
                                            <input id="nb-place" type="radio" name="nb-place" value="2" class="">&nbsp;&nbsp;&nbsp;2
                                        </div><br>
                                        <div id="num-etu">
                                            <label for="place" class="label-place">Êtes-vous étudiant ?       </label><br>
                                            <input id="etu" type="radio" name="etu" value="1" required onclick="activer()"/>&nbsp;&nbsp;&nbsp;Oui&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input id ="etu" type="radio" name="etu" value="0" onfocus="desactiver()" />&nbsp;&nbsp;&nbsp;Non
                                        </div><br>
                                    </div>
                                    <input type="text" id="num" placeholder="Numéro Étudiant" required="required" name="num" class="subscribe-email" disabled="true"><br><br><br><br><br>
                                    <button id="submitButton" type="submit"  class="btn place-button btn-lg btn-block">Je réserve</button>
                                </div>
                            </div>
                        </form>
                    </div><!-- subscribe-form -->
                </div>
            </div><!-- wrap -->
        </section><!-- subscribe -->

<?php include ('footer.php'); ?>