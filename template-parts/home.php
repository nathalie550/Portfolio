<?php
/*
 * Template Name: home
 */
?>
<?php get_header(); ?>

<main class="main-page-portfolio">

    <section class="section-portfolio">
        <div class="my">
            <img class="avatar-img" src="<?= get_stylesheet_directory_uri() . '/images/moi2.png' ?>">
            <h1>Je suis Nathalie,</h1>

            <div class="container-typed">
                <div class="typed-out"> développeur WordPress, je m'interesse à Html, Css, Javascript, php.......</div>
            </div>
        </div>
    </section>

    <section class="langages">
        <h2>Cliquez sur les icones...</h2>
        <div class="images-langages morph">
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/html.png' ?>" alt="Html" style="width:120px;height:80px" /></div>
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/css.png' ?>" alt="Css" style="width:120px;height:80px" /></div>
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/php.png' ?>" alt="Php" style="width:120px;height:80px" /></div>
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/js.png' ?>" alt="Js" style="width:120px;height:80px" /></div>
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/mysql.png' ?>" alt="Mysql" style="width:120px;height:80px" /></div>
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/git.png' ?>" alt="Git" style="width:120px;height:80px" /></div>
            <div class="morph"><img src="<?= get_stylesheet_directory_uri() . '/images/github.png' ?>" alt="Github" style="width:120px;height:80px" /></div>
        </div>
    </section>

    <section class="pourquoi">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <img src="<?= get_stylesheet_directory_uri() . '/images/pourquoi.png'; ?>" style="width:500px;height:500px;">
                </div>
                <div class="flip-card-back">
                    <h1>Le candidat parfait n'existe pas mais mes capacités rempliront au mieux les enjeux du poste.</h1>
                    <p>Parce que j'ai la motivation l'envie de faire ce métier.</p>
                    <p>Je suis une personne rigoureuse, sérieuse, créative.... </p>
                    <p>J'ai une capacité d’adaptation ce qui me permets de m'adapter aux changements du marché.</p>
                    <p>L'envie d'apprendre, de se développer et d'évoluer de façon professionnelle. </p>
                    <p> Les compétences requises pour le poste.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="A-voir">
        <div id="monImage" class="imagy">
            <img src="<?= get_stylesheet_directory_uri() . '/images/parcours.jpg'; ?>" style="width:700px;height:500px;">
            <a href="http://localhost:8888/Portfolio/wordpress/mon-parcours/" class="monButton">Voir mon parcours</a>
        </div>
        </div>
    </section>

    <section class="hobby">
        <h2>Mes loisirs</h2>
        <p>Cliquez sur le dessin pour l'agrandir</p>
        <div class="loisirs">
            <img src="<?= get_stylesheet_directory_uri() . '/images/dessin.png'; ?>" id="myImg" alt=" Dessin" style="width:100%;max-width:300px;margin-left:150px">
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>
            <div id="caption"></div>
        </div>
    </section>

    <section class="musique">
        <h3>Musique</h3>
        <img src="<?= get_stylesheet_directory_uri() . '/images/guitare.png'; ?>" alt=" Guitare">
        </div>
    </section>
</main>
<?php get_footer(); ?>