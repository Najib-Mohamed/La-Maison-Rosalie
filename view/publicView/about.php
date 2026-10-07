<?php require_once "./../view/publicView/inc/menuPublicView.php" ?>
    <!--
    PAGE À PROPOS (FE-40)
    Structure (maquette du designer) :
    1. .about__intro   → titre "À propos" + texte de présentation, centrés
    2. .about__story   → 2 colonnes : photo de la boutique à gauche, "Notre Histoire" à droite
                         (empilées sur mobile)
    Les styles sont dans public/css/style.css, tous préfixés par #about.
-->
    <main id="about">

        <!-- 1. INTRODUCTION -->
        <section class="about__intro">
            <h1 class="about__title about__title--diamond-left">À propos</h1>
            <span class="about__divider"></span>

            <p class="about__lead">
                Nous sommes une équipe passionnée par la cuisine, les bons produits et les moments de partage.
                Notre établissement est un lieu où l'on se retrouve autour de plats simples et authentiques,
                préparés avec soin.
            </p>
        </section>

        <!-- 2. NOTRE HISTOIRE -->
        <section class="about__story">

            <!-- photo de la boutique : chargée seulement quand elle arrive à l'écran (FE-66) -->
            <figure class="about__media">
                <img src="./assets/images/Untitleaaad.jpg"
                    alt="Façade de la boutique Maison Rosalie avec sa terrasse et ses chaises en rotin"
                    width="600" height="620" loading="lazy">
            </figure>

            <div class="about__text">
                <h2 class="about__title about__title--small about__title--diamond-right">Notre Histoire</h2>
                <span class="about__divider"></span>

                <p class="about__tagline">L'élégance du chocolat belge depuis 1987</p>

                <p>
                    Inspirée par l'art de vivre belge et les grandes maisons européennes, Rosalie a imaginé
                    des chocolats conçus comme des bijoux gustatifs. Chaque création est une rencontre entre
                    la noblesse des matières premières, la précision artisanale et une élégance intemporelle.
                </p>

                <p>
                    Plus qu'une chocolaterie, Maison Rosalie est une maison où chaque détail célèbre l'art
                    du chocolat : la finesse, la délicatesse et le raffinement.
                </p>

                <p>
                    Rosalie a rencontré un tel succès qu'elle a voulu se lancer dans la création de recettes
                    à base de son chocolat, celui qu'elle utilise pour la création de ses délicieuses pralines.
                </p>

                <p>Vous découvrirez ici quelques merveilleuses recettes facilement réalisables.</p>

                <p>Bonne dégustation.</p>
            </div>

        </section>

    </main>
    <?php require_once "./../view/publicView/inc/footer.php" ?>
    <script src="./js/scripts.js"></script>