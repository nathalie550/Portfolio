<?php
/*
 * Template Name: MonParcours
 */
?>
<?php get_header(); ?>

<section>
    <div class="Parcours">
        <div class="MonParcours">
            <h2 class="parcours-title">Voici mon histoire</h2>

            <p class="monHistoire">
                Apprenez-en un peu plus sur moi, comment je me suis lancé dans le web et comment j'ai construit ma carrière.................
            </p>
            <p class="monHistoire">
                Depuis mon enfance, j'ai toujours était créative et une passion pour le dessin. Je me voyais déjà en faire mais métier mais le destin en a décider autrement.
            </p>
            <p class="monHistoire">
                Plus tard, je me suis passionnée pour l'informatique et les nouvelles technologies. Mais commençons par le début de ma carrière professionnelle. Après avoir fait des études dans le secrétariat,
                j'ai recherché mon premier job et j'ai étais embauché en tant que vendeuse/caissière OUI JE SAIS RIEN A VOIR mais j'avais besoin de ce travail.
                J'y suis restée pendant environ 10 ans, ce qui m'a permis d'acquérir des compétences dans la vente. Quand le magasin a fermé, je me suis décidé à faire un autre métier mais pour cela, j'ai dû faire une remise à niveau à l'Afpa
                J'ai ensuite travaillé dans le domaine du secrétariat dans diverses entreprises ou j'ai acquis des nouvelles compétences. J'ai exercé durant ces années plusieurs métiers, ce qui me permet de m'adapter plus facilement.<br>

                <img class="photo" src="<?= get_stylesheet_directory_uri() . '/images/portrait.png' ?>">

            <p class="monHistoire">
                En 2020, je me suis mise à mon compte en tant "qu'assistante administrative " PUIS la pandémie du Covid est arrivée
                <span id="dots">...</span><span id="more" style="display: none;"> j'ai cessé mon activité pour revenir dans le monde salarial et c'est à ce moment que j'ai décidé de tout faire pour décrocher une formation dans le domaine du web.<br>
                    Pour mettre toutes les chances de mon côté, je me suis déjà formée en autodidacte pour avoir un minimum de bases....<br>
                    ET j'ai obtenu mon entrée en formation chez OpenClassrooms. </span>
            </p>
            <button id="myBtn">Lire la suite</button>
        </div>
    </div>
    </div>
    </div>
</section>

<section class="formation">
    <div class="parallax"></div>
    <div style="height:490px;background-color:white;font-size:35px;font-family:'Playwrite NZ', cursive;padding-top:15px;font-weight:600;padding-left:150px;color:black;border:12px solid black">
        Ma formation :<br>
        <img class="mesImages" src="<?= get_stylesheet_directory_uri() . '/images/image1.png' ?>">
        <img class="mesImages" src="<?= get_stylesheet_directory_uri() . '/images/image2.png' ?>">
        <img class="mesImages2" src="<?= get_stylesheet_directory_uri() . '/images/image3.png' ?>">
        <img class="mesImages2" src="<?= get_stylesheet_directory_uri() . '/images/image4.png' ?>">
        <img class="mesImages3" src="<?= get_stylesheet_directory_uri() . '/images/image5.png' ?>">
        <img class="mesImages3" src="<?= get_stylesheet_directory_uri() . '/images/image6.png' ?>">
    </div>
    </div>
</section>






</section>

<?php get_footer(); ?>