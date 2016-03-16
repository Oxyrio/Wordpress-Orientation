
<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p style="text-align:justify">Orientation.fr<br>
                Le site de l'orientation scolaire personnalisée<br>
                - Orientation - Orientation scolaire <br>
                - Tests d'orientation<br>
                - Coaching scolaire<br></p>
            </div>

            <div class="col-md-6 col-sm-6 ">
                <p style="text-align:justify">Orientation<br>
                Agrément n° NO7/01/09/F078S002,<br>
                conformément aux dispositions de l'article<br>
                L 7232-1-2-3-4-5 du code du travail,<br>
                pour la fourniture de services aux personnes<br></p>
                <form method="post" action="traitement.php">
                    <p><input type="text" name="pseudo" style ="float:right" /></p>
                </form>
            </div>

            <div class=""
                <h4>
                    <strong>©Copyright 2016 Tous droits réservés</strong>
                </h4>
                <nav id="navigation_footer">
                    <?php wp_nav_menu(array('theme_location' => 'secondaire')); ?>
                </nav>
        </div>
    </div>
</footer>

</body>
<?php // wp_footer(); ?>
</html>