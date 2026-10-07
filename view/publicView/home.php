<?php require_once "./../view/publicView/inc/header.php" ?>

    <!-- TOP 3 DES RECETTES LES MIEUX NOTÉES (FE-11, FE-12, BE-30)
         Données attendues depuis la base (tri BE-30). En attendant le backend,
         $topRecipes contient 3 recettes d'EXEMPLE. Le style est dans style.css
         (#top-recipes) et l'animation d'apparition dans scripts.js.
    -->
    <?php
    $topRecipes = $topRecipes ?? [
        [
            'rank'  => '1er', 'badge' => 'Coup de cœur',
            'slug'  => 'fondant-noir',
            'title' => 'Fondant Noir Cœur Coulant',
            'desc'  => "Un cœur onctueux et coulant au chocolat noir 72% de plantation, relevé d'une pointe de fleur de sel.",
            'time'  => 25, 'level' => 'Facile',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuBDj6EsqLaSnWy9yIHDfbcrd6fd68IgSZcriE-S1Chq6H_aOFR_U9c9wjrnBXos1u_S_CncTV9cfSa14e9_iumez5bt3XUaa4QLnJNOw3Z1H3K56UznyKXA_HnUy4OF2qNQPptrJXnNjxzwhoLjzTIW5nqomrDXZz6i5gQFClrhiR1KWgvRgMfpYsSSuFTKFEdUJlOpr0eluE_bKfSBQ56j_czE4Ta_4TBlmBCJL2rifqMfJn2Zdu2C',
        ],
        [
            'rank'  => '2e', 'badge' => 'Classique',
            'slug'  => 'truffes-or',
            'title' => "Truffes Pur Cacao & Feuille d'Or",
            'desc'  => "Ganache soyeuse infusée à la vanille bourbon de Madagascar, poudrée de cacao brut ambré.",
            'time'  => 40, 'level' => 'Intermédiaire',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuDys4OTH0mCZHuaYu-rUCveOYzOweq6IdhWEoWMh-X_9t_FTJM6ebDiuREJynozADX0NkjyvDYfHr4uhOwI45OkjeUr-pGKLkRBN6kfaIOxue4Ln6hXBgVpwhwpEJK7NlwvIPfrN_R3WVXhLc332RQbbS0QH08xcTB4feupz7jEPhtXqikwYdDtDq5yIv8QKTkPbx8stkd0bhFdcY46ZTUl6uGKInTCRDS7UdhP3xNEsJPH7sig-pld',
        ],
        [
            'rank'  => '3e', 'badge' => 'Réconfort',
            'slug'  => 'chocolat-chaud',
            'title' => "Chocolat Chaud à l'Ancienne",
            'desc'  => "Chocolat fondu au lait entier fermier, bâton de cannelle de Ceylan et volutes de chocolat noir râpé.",
            'time'  => 15, 'level' => 'Très facile',
            'image' => 'https://lh3.googleusercontent.com/aida-public/AB6AXuCZmbbTZYf7URk1ntCFDC0jvoGlXU_kf40WO2LZ4llxwErV7IoYqTEUFaZAkDg_8Zc1mWTVfVLREdyNjezQonL7SNAh_XlbJoMl0jENu79EKm5gk4-aaLLKek21N1iI6r3JeZuNn0lZkxG2N9nqkbQXXq-w_pADPUWFIX3-DfiMNAjZJC25MHUB6RcUHI8_1uuX_u3UDkGjusUm1k6KuW6EjhoXsZS4lLYvkOLRvRfdKpGsh4rJmipS',
        ],
    ];
    ?>

    <section id="top-recipes" class="top-recipes" aria-labelledby="top-recipes-title">
        <div class="top-recipes__inner">

            <!-- En-tête de section -->
            <div class="top-recipes__heading">
                <span class="top-recipes__eyebrow">Sélection Signature</span>
                <h2 id="top-recipes-title" class="top-recipes__title">Notre Top 3 des recettes</h2>
                <div class="top-recipes__ornament" aria-hidden="true">
                    <span class="top-recipes__ornament-line"></span>
                    <i class="fa-solid fa-cookie-bite"></i>
                    <span class="top-recipes__ornament-line"></span>
                </div>
                <p class="top-recipes__subtitle">Découvrez les trois recettes préférées de notre communauté.</p>
            </div>

            <?php if (empty($topRecipes)): ?>
                <!-- État "aucune recette notée" (FE-12) -->
                <p class="top-recipes__empty">
                    Les recettes les mieux notées apparaîtront ici dès que les premiers avis seront déposés.
                </p>
            <?php else: ?>
                <!-- Grille : 3 colonnes ordinateur, 1 colonne mobile (FE-11) -->
                <div class="top-recipes__grid">
                    <?php foreach ($topRecipes as $recipe): ?>
                        <!-- data-reveal : ciblé par scripts.js pour l'animation d'apparition au scroll -->
                        <article class="recipe-card" data-reveal>

                            <!-- Visuel + badge de rang -->
                            <div class="recipe-card__media">
                                <img class="recipe-card__image"
                                     src="<?= htmlspecialchars($recipe['image']) ?>"
                                     alt="<?= htmlspecialchars($recipe['title']) ?>"
                                     loading="lazy">
                                <span class="recipe-card__badge">
                                    <?= htmlspecialchars($recipe['rank']) ?> &bull; <?= htmlspecialchars($recipe['badge']) ?>
                                </span>
                            </div>

                            <!-- Contenu -->
                            <div class="recipe-card__body">
                                <div>
                                    <p class="recipe-card__meta">
                                        <i class="fa-regular fa-clock" aria-hidden="true"></i>
                                        <?= (int) $recipe['time'] ?> min &bull; <?= htmlspecialchars($recipe['level']) ?>
                                    </p>
                                    <h3 class="recipe-card__title"><?= htmlspecialchars($recipe['title']) ?></h3>
                                    <p class="recipe-card__desc"><?= htmlspecialchars($recipe['desc']) ?></p>
                                </div>

                                <a class="recipe-card__btn"
                                   href="./?pages=recipe&amp;slug=<?= urlencode($recipe['slug']) ?>">
                                    Voir la recette
                                </a>
                            </div>

                        </article>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>
    </section>

    <?php require_once "./../view/publicView/inc/footer.php" ?>
    <script src="./js/scripts.js"></script>
</body>

</html>