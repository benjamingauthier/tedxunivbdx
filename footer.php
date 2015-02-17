<footer>
    <div class="wrap">
        <div class="logo">
            <a href="#">
                <img src="images/TEDxUB.png" width="164" height="52" alt="TedX Université de Bordeaux">
            </a>
        </div><!-- logo -->
        <!--<div class="istore"><a href="#">Available in Apple Store</a></div>-->
        <div class="copy">
            <p class="footer-text">This independent TEDx event is operated under license from TED<br>Images Courtesy of Shutterstock - <a class="red" href="about.php">A propos </a></p>
        </div><!-- copy -->
        <div class="social">
            <ul class="clearfix">
                <li><a target="_blank" class="social-facebook" href="https://www.facebook.com/TEDxUnivBdx" title="facebook">facebook</a></li>
                <li><a target="_blank" class="social-twitter" href="https://twitter.com/TEDxUnivBx" title="twitter">twitter</a></li>
                <li><a target="_blank" class="social-googleplus" href="https://plus.google.com/u/0/106062365287448144773/posts" title="google plus">google plus</a></li>
            </ul>
        </div><!--social -->
    </div><!-- wrap -->
</footer>
</section><!-- main -->
<script src="js/jquery.js"></script>
<script src="js/library.js"></script>
<script src="js/script.js"></script>
<script src="js/retina.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript">
    function IsEmail(email) {
        var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,6})+$/;
        return regex.test(email);
    }
    $(document).ready(function() {
        // lorsque je soumets le formulaire
        $('#subscribeForm').on('submit', function() {
            var $this = $(this);

            var mail = $('#address').val();

            // je vérifie une première fois pour ne pas lancer la requête HTTP
            // si je sais que mon PHP renverra une erreur
            if(mail === '' || !IsEmail(mail)) {
                $("#divEmail").addClass('has-error');
            } else {
                $("#divEmail").removeClass('has-error').removeClass('has-success');
                $("#submitButton").attr('class', 'subscribe-button warning').html('<i class="fa fa-circle-o-notch fa-fw fa-spin"></i>');
                $.ajax({
                    url: $this.attr('action'), // le nom du fichier indiqué dans le formulaire
                    type: $this.attr('method'), // la méthode indiquée dans le formulaire (get ou post)
                    data: $this.serialize(), // je sérialise les données (voir plus loin), ici les $_POST
                    success: function(html) { // je récupère la réponse du fichier PHP
                        $("#divEmail").addClass('has-success');
                        $("#submitButton")
                            .removeClass('btn-warning')
                            .addClass('btn-success')
                            .html('<i class="fa fa-check-square fa-fw"></i>');
                    },
                    error: function(html) { // je récupère la réponse du fichier PHP
                        $("#divEmail").addClass('has-error');
                        $("#submitButton")
                            .removeClass('btn-warning')
                            .addClass('btn-danger')
                            .html('<i class="fa fa-times fa-fw"></i>');
                    }
                });
            }
            return false; // j'empêche le navigateur de soumettre lui-même le formulaire
        });
    });
</script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59046294-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>


