<?php
/*
 * Template Name: MesRealisations
 */
?>
<?php get_header(); ?>

<main class="realisations">

    <section class="projets"></section>

    <h2>Koukaki</h2>

    <div class="banner">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/logo-koukaki.png'; ?> " alt=" Fleurs d'oranger & chats errants">
        <video id="background-video" autoplay loop muted>
            <source src="<?php echo get_stylesheet_directory_uri() . '\images\video_koukaki.mp4'; ?>" type="video/mp4">
        </video>

        <div class="projets-explications">
            <div class="projets-title-h3">
                <h3>Contexte</h3>
            </div>
            <p>Je travaille en tant qu’intégrateur WordPress chez MyCustomiWP, une agence spécialisée dans le développement de thèmes personnalisés.
                Ma mission est de dynamiser le site internet du studio d’animation Koukaki, dont le dernier film a été nominé aux Oscars du meilleur court-métrage d’animation !</p>
        </div>

        <div class="etapes">
            <button class="clicky" onclick="typeWriter()">Click pour voir les étapes</button>
            <p id="demo"></p>
        </div>
    </div>
    <script>
        var i = 0;
        var txt = ' Analyser les tâches à réaliser. /  Modifiez l affichage général du site. /  Ajoutez la vidéo dans le hero header. / Animez les personnages avec un carrousel en js. / Animez les éléments d interface du lieu.  / Dynamisez le menu du site. / Finalisez les livrables';

        var speed = 50;

        function typeWriter() {
            if (i < txt.length) {
                document.getElementById("demo").innerHTML += txt.charAt(i);
                i++;
                setTimeout(typeWriter, speed);
            }
        }
    </script>
    </section>

    <section class="projets2"></section>

    <h2>Chic Dressing</h2>

    <div class="Chic">
        <img src="<?php echo get_stylesheet_directory_uri() . '/images/chic-dressing.png'; ?> " alt="logo Fleurs d'oranger & chats errants">

        <div class="chic-explications">
            <div class="chic-title">
                <h3>Contexte</h3>
            </div>
            <p>Je travaille en tant qu'intégrateur WordPress en freelance à la recherche de nouvelles missions. Dans une démarche de prospection, j'analyse le site “Chic Dressing” boutique de vêtements et d’accessoires de luxe de seconde main qui a un démarrage difficile</p>
        </div>

        <div class="etapes2">
            <button class="clicko" onclick="typeWriter2()">Click pour voir les étapes</button>
            <p id="demo2"></p>
        </div>
    </div>

    <script>
        var j = 0;
        var txt = ' Importez le site en local. /  Optimisez les performances du site. /  Optimisez le SEO et l accessibilité. / Effectuez un diagnostic postoptimisation';

        var speed = 50;

        function typeWriter2() {
            if (j < txt.length) {
                document.getElementById("demo2").innerHTML += txt.charAt(j);
                j++;
                setTimeout(typeWriter2, speed);
            }
        }
    </script>
    </section>
</main>
<?php get_footer(); ?>