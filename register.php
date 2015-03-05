<?php include('header.php'); ?>
    <section class="simple place">
        <div class="wrap">
            <div class="row">
                <div class="col-md-7 nopadding">
                    <div class="subscribe-title red">Je réserve ma place !</div>
                    <div class="place-note">Parce qu'un TEDx est un moment d'exception, 100 places seulement sont mises en vente pour assister au premier TEDxUniversitéDeBordeaux.<br>Un tirage au sort sera effectué si nous avons plus de 100 inscrits.<br>Pour vous inscrire, il vous suffit de remplir le formulaire ci-dessous, vous avez jusqu'au 8 mars à minuit !</div>
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
                                        <label for="place" class="label-place">Nombre de places :        </label><br>
                                        <input id="nb-place" type="radio" name="nb-place" value="1" onClick="cacher();" checked required class="">&nbsp;&nbsp;&nbsp;1&nbsp;&nbsp;
                                        <input id="nb-place" type="radio" name="nb-place" value="2" onClick="afficher();" class="">&nbsp;&nbsp;&nbsp;2
                                    </div><br>
                                    <div id="num-etu">
                                        <label for="place" class="label-place">Êtes-vous étudiant ?       </label><br>
                                        <input id="etu" type="radio" name="etu" value="1" required onclick="activer()"/>&nbsp;&nbsp;&nbsp;Oui&nbsp;&nbsp;&nbsp;&nbsp;
                                        <input id ="etu" type="radio" name="etu" value="0" onfocus="desactiver()" />&nbsp;&nbsp;&nbsp;Non
                                    </div><br>
                                </div>
                                <p id="champ_cache">
                                    <input type="text" id="num" placeholder="Numéro Étudiant" name="num" class="subscribe-email" disabled="true"><br><br><br>
                                </p>
                                <input type="text" id="num2" placeholder="Numéro Étudiant" required="required" name="num2" class="subscribe-email" disabled="true"><br><br><br><br><br>
                                <button id="submitButton" type="submit"  class="btn place-button btn-lg btn-block">Je réserve</button>
                            </div>
                        </div>
                    </form>
                </div><!-- subscribe-form -->
                <div class="col-md-1"></div>
                <div class="col-md-4">
                    <div class="subscribe-title red">Informations pratiques</div>
                    <div class="place-note">Planning de la journée du 21 mars 2015 :<br>14h-19h : Talks des intervenants<br>19h30-23h00 : Buffet et échanges conviviaux<br><br>
                        Prix des places :<br>Etudiant : 15€<br>Non-Etudiant : 30€<br><br>Le prix de la place inclut l'accès à l'après-midi de conférences, la pause-goûter et le buffet du soir !</div>
                </div>
            </div>
        </div><!-- wrap -->
    </section><!-- subscribe -->
    <script type="text/javascript">
        document.getElementById("champ_cache").style.display = "none";

        function afficher()
        {
            document.getElementById("champ_cache").style.display = "block";
        }

        function cacher()
        {
            document.getElementById("champ_cache").style.display = "none";
        }
    </script>
    <script type="text/javascript">
        function activer() {
            document.getElementById("num").disabled=false;
            document.getElementById("num2").disabled=false;
            document.getElementById("num").attributes["required"] = "required";
        }

        function desactiver() {
            document.getElementById("num").disabled=true;
            document.getElementById("num2").disabled=true;
            document.getElementById("num").value="";
            document.getElementById("num2").value="";
            document.getElementById("num").attributes["required"] = "";
        }
    </script>
<?php include ('footer.php'); ?>