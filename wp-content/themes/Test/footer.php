<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4>
                        <strong>Team WordPress</strong>
                    </h4>
                    <p>Pôle Léonard De Vinci</p>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <nav id="navigation_footer">
                        
                        <!-- <ul>
                            <li>
                                <a href="">Accueil</a>
                            </li>
                            <li>
                                <a href="">Mentions légales</a>
                            </li>
                            <li>
                                <a href="">Contact</a>
                            </li>
                        </ul> -->

                        <?php wp_nav_menu(array('theme_location' => 'menu2')); ?>


                    </nav>
                </div>
            </div>
        </div>
    </footer>

</body>

<?php wp_footer(); ?>

</html>