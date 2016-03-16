<?php
/*
    Template Name: Contact
*/
?>
<?php get_header(); ?>



    <div class="text-vertical-center">
        <h1>Contact</h1>
    </div>
</header>

<!-- Main -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div id="txt_qsn">
                    <h3>Coordonnées</h3>
                    <ul class="infos">
                        <li>
                            Tel :<b>03 44 53 78 89</b>
                        </li>
                        <li>
                            Mail : <b>love@wordpress.com</b>
                        </li>
                        <li>
                            Adresse : <b>34 av Louis Legrand, Avignon</b>
                        </li>
                    </ul>
                    <br/>
                    <a href="" class="btn btn-warning">Nous envoyer un mail !</a>
                </div>
            </div>
            <div class="col-md-5 col-md-offset-1">
                <div id="img_qsn">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Adresse mail</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nom Prénom</label>
                            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-default" href="mailto:san@antonio.net">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
