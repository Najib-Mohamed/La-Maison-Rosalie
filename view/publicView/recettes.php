
<?php require_once "./../view/publicView/inc/menuPublicView.php" ?>
<section class="bg-surface font-body-md text-on-surface antialiased selection:bg-secondary-container selection:text-on-secondary-container">
    <main class="w-full bg-surface min-h-[calc(100vh-20rem)]">
        <div class="flex flex-col w-full">
            <section class="w-full bg-[#2F1B14] text-surface pt-25 pb-space-xl shadow-sm">
                <div class="max-w-[1280px] mx-auto px-margin">
                    <div class="flex flex-col items-center text-center max-w-2xl mx-auto space-y-space-xs">
                        <div class="flex items-center gap-space-xs text-[#fed488] mb-1"><span class="material-symbols-outlined text-[14px]">diamond</span><span class="font-label-sm text-label-sm uppercase tracking-[0.2em] font-semibold text-[#fed488]">Le Carnet Culinaire</span><span class="material-symbols-outlined text-[14px]">diamond</span></div>
                        <h1 class="font-headline-lg text-headline-lg text-surface tracking-tight">Nos Recettes</h1>
                        <p class="font-body-md text-body-md text-surface-variant max-w-lg pt-1">Savoir-faire artisanal &amp; inspirations gourmandes à savourer et partager</p>
                    </div>
                    <div class="mt-space-lg bg-white/10 backdrop-blur-sm p-space-sm rounded-DEFAULT shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-sm">
                        <div class="relative w-full md:w-96 flex items-center"><span class="material-symbols-outlined absolute left-3 text-[#fed488] text-[20px] pointer-events-none">search</span><input class="w-full pl-10 pr-space-md py-2 bg-[#211a18]/95 text-surface font-body-sm text-body-sm rounded-DEFAULT focus:outline-none placeholder:text-outline-variant shadow-sm" placeholder="Rechercher une recette, un ingrédient..." type="text"></div>
                        <div class="flex items-center gap-space-sm w-full md:w-auto justify-end flex-wrap">
                            <div class="relative inline-flex items-center"><select class="appearance-none bg-[#211a18]/95 text-surface font-body-sm text-body-sm pl-3 pr-8 py-2 rounded-DEFAULT shadow-sm cursor-pointer focus:outline-none">
                                    <option selected="" class="bg-[#211a18] text-surface">Catégorie : Toutes les catégories</option>
                                    <option class="bg-[#211a18] text-surface">Pâtisserie Fine</option>
                                    <option class="bg-[#211a18] text-surface">Chocolaterie &amp; Confiserie</option>
                                    <option class="bg-[#211a18] text-surface">Biscuits &amp; Sablés</option>
                                    <option class="bg-[#211a18] text-surface">Viennoiseries</option>
                                    <option class="bg-[#211a18] text-surface">Desserts de Saison</option>
                                </select><span class="material-symbols-outlined absolute right-2 text-[#fed488] text-[18px] pointer-events-none">expand_more</span></div>
                            <div class="relative inline-flex items-center"><select class="appearance-none bg-[#211a18]/95 text-surface font-body-sm text-body-sm pl-3 pr-8 py-2 rounded-DEFAULT shadow-sm cursor-pointer focus:outline-none">
                                    <option selected="" class="bg-[#211a18] text-surface">Niveau : Tous niveaux</option>
                                    <option class="bg-[#211a18] text-surface">Très Facile</option>
                                    <option class="bg-[#211a18] text-surface">Facile</option>
                                    <option class="bg-[#211a18] text-surface">Intermédiaire</option>
                                    <option class="bg-[#211a18] text-surface">Expert</option>
                                </select><span class="material-symbols-outlined absolute right-2 text-[#fed488] text-[18px] pointer-events-none">expand_more</span></div>
                            <div class="relative inline-flex items-center"><select class="appearance-none bg-[#211a18]/95 text-surface font-body-sm text-body-sm pl-3 pr-8 py-2 rounded-DEFAULT shadow-sm cursor-pointer focus:outline-none">
                                    <option selected="" class="bg-[#211a18] text-surface">Trier par : Plus populaires</option>
                                    <option class="bg-[#211a18] text-surface">Plus récents</option>
                                    <option class="bg-[#211a18] text-surface">Temps de préparation</option>
                                    <option class="bg-[#211a18] text-surface">Mieux notés</option>
                                </select><span class="material-symbols-outlined absolute right-2 text-[#fed488] text-[18px] pointer-events-none">expand_more</span></div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Recipe Grid: 4 Columns desktop -->
            <section class="w-full max-w-[1280px] mx-auto px-margin py-space-sm">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-gutter">
                    <!-- Card 1 -->
                    <article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between" style="border: 1.5px solid rgb(139, 94, 60);">
                        <div class="flex flex-col">
                            <!-- Frame Inner Wrapper -->
                            <div class="relative m-2 overflow-hidden rounded-DEFAULT bg-surface-container aspect-square">
                                <img alt="Biscuit S'more &amp; Ganache" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC23zp6xtQZXh7a4ywUaB4WuEGpXRjcxtVnlyvHwx6GuQAyx5G-Tg8p2hx7PekL26czAhnB6ASwAtKxugu8uzp1_HhEDp-ZcteY6EB2k29S1zw__klnYRe9-CJ7OIDg1R5qDtLKqs64PKjDu_3yl8fAT8cEDVCqQs1x9mYS-ApLIinX3M1Sg16Uqu3NOLYrT-prI5FEfhTx9fm0G_Mx8pkYPuS_tpdoyHPi5uqs0s5bwjsiz593CoxpKrRQPdpP0Yd7Jw">
                                <div class="absolute top-2 left-2 flex items-center gap-1.5">
                                    <span class="px-2 py-0.5 bg-surface/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT shadow-sm">
                                        nouveau
                                    </span>
                                </div>
                                <button aria-label="Aperçu rapide" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface/85 backdrop-blur-sm text-on-surface hover:bg-surface hover:text-secondary flex items-center justify-center transition-colors shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                            </div>
                            <!-- Content Details -->
                            <div class="px-4 pt-2 pb-1 flex flex-col">
                                <div class="flex items-center justify-between text-outline text-body-sm mb-1">
                                    <div class="flex items-center gap-1 text-secondary">
                                        <span class="flex items-center text-[13px] tracking-tight">
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px]">star_half</span>
                                        </span>
                                        <span class="text-outline font-body-sm text-xs ml-0.5">(48 avis)</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Biscuits</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mb-1">
                                    Biscuit S'more &amp; Ganache
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-snug mb-3">
                                    Sablé doré pur beurre, guimauve fondante vanille de Madagascar et nappage chocolat noir intense 70%.
                                </p>
                                <div class="bg-surface-container-low px-2.5 py-1.5 rounded-DEFAULT text-on-surface-variant font-body-sm text-xs flex items-center justify-between">
                                    <span class="">⏱ 25 min</span>
                                    <span class="">👥 4 pers.</span>
                                    <span class="font-medium text-secondary">Facile</span>
                                </div>
                            </div>
                        </div>
                        <!-- Footer Card -->
                        <div class="px-4 pb-4 pt-3 mt-1 flex items-center justify-between gap-2">
                            <span class="font-label-sm text-label-sm text-outline tracking-widest uppercase">Recette n°01</span>
                            <a class="px-3 py-1.5 bg-[#2F1B14] text-on-primary hover:bg-secondary transition-colors font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT" data-path="recette-smore-ganache" href="./?pages=recipe">
                                Voir la recette
                            </a>
                        </div>
                    </article>
                    <!-- Card 2 -->
                    <article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between" style="border: 1.5px solid rgb(139, 94, 60);">
                        <div class="flex flex-col">
                            <div class="relative m-2 overflow-hidden rounded-DEFAULT bg-surface-container aspect-square">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="Artisanal chocolate bars with toasted hazelnuts and coarse sea salt crystals scattered over glossy dark chocolate surface, warm cinematic bakery studio lighting, rich brown tones, high-end pastry monograph" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAFKbsfb6r0zMIKVJLLidCy_RdEam6wuKXvIcWmCcmKWCYU-wF3ZyldSMe1D9YTnus8e-9LorwFAwi9eqVpSt691ij0hNLHmvcX_9UWjZcxU4953RQLuWuWTElUf1rhAX5goelj8zkV0UqOVG9OQqZ5EEqRSlUzdFo4UtLzIgPcAm5MWNAj_OEfxQuoQJFKHRK2OfAoQkmkQd1_qqyqo2YEUdIZXbQqC6-x2IlBAwmcmY5DpPGfuvqZ">
                                <div class="absolute top-2 left-2 flex items-center gap-1.5">
                                    <span class="px-2 py-0.5 bg-surface/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT shadow-sm">
                                        nouveau
                                    </span>
                                </div>
                                <button aria-label="Aperçu rapide" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface/85 backdrop-blur-sm text-on-surface hover:bg-surface hover:text-secondary flex items-center justify-center transition-colors shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                            </div>
                            <div class="px-4 pt-2 pb-1 flex flex-col">
                                <div class="flex items-center justify-between text-outline text-body-sm mb-1">
                                    <div class="flex items-center gap-1 text-secondary">
                                        <span class="flex items-center text-[13px] tracking-tight">
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px]">star_border</span>
                                        </span>
                                        <span class="text-outline font-body-sm text-xs ml-0.5">(32 avis)</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Chocolaterie</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mb-1">
                                    Tablettes Praliné &amp; Fleur de Sel
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-snug mb-3">
                                    Chocolat de dégustation tempéré artisanalement, incrusté d'éclats de noisettes torréfiées et sel de Guérande.
                                </p>
                                <div class="bg-surface-container-low px-2.5 py-1.5 rounded-DEFAULT text-on-surface-variant font-body-sm text-xs flex items-center justify-between">
                                    <span class="">⏱ 45 min</span>
                                    <span class="">🍫 3 tablettes</span>
                                    <span class="font-medium text-secondary">Intermédiaire</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-3 mt-1 flex items-center justify-between gap-2">
                            <span class="font-label-sm text-label-sm text-outline tracking-widest uppercase">Recette n°02</span>
                            <a class="px-3 py-1.5 bg-[#2F1B14] text-on-primary hover:bg-secondary transition-colors font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT" data-path="recette-tablettes-praline" href="#">
                                Voir la recette
                            </a>
                        </div>
                    </article>
                    <!-- Card 3 -->
                    <article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between" style="border: 1.5px solid rgb(139, 94, 60);">
                        <div class="flex flex-col">
                            <div class="relative m-2 overflow-hidden rounded-DEFAULT bg-surface-container aspect-square">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="Handcrafted dark chocolate cocoa truffles dusted in rich Ecuadorian cocoa powder arranged inside an elegant vintage presentation box, tactile soft morning light, shallow depth of field, warm umber and cream palette" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAaR0xeQlR_ckXc_qAWXzlu97Knp1RZNA4cVo6gSgIsX6pxZ0BK_AGuBG5kLPrat-vJlAllglLgq2lvhKig8WpcNCBfau9eUPlZq7oahDgahYaFolZ8FNtNHX_jbP0TWRu9PXMag87PX552QK_SJZYl6534oEajpk9oj1W2lnqr5cwjrI0Sc2k4o_wKd8rFFblvlJBKHPonrEsC9X6dnbnYTqaqHpMPUf3o1l5ji2vhErdiVyYaQD4O">
                                <div class="absolute top-2 left-2 flex items-center gap-1.5">
                                    <span class="px-2 py-0.5 bg-secondary text-on-secondary font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT shadow-sm">
                                        coup de cœur
                                    </span>
                                </div>
                                <button aria-label="Aperçu rapide" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface/85 backdrop-blur-sm text-on-surface hover:bg-surface hover:text-secondary flex items-center justify-center transition-colors shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                            </div>
                            <div class="px-4 pt-2 pb-1 flex flex-col">
                                <div class="flex items-center justify-between text-outline text-body-sm mb-1">
                                    <div class="flex items-center gap-1 text-secondary">
                                        <span class="flex items-center text-[13px] tracking-tight">
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                        </span>
                                        <span class="text-outline font-body-sm text-xs ml-0.5">(56 avis)</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Douceurs</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mb-1">
                                    Truffes Cacao &amp; Infusion Café
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-snug mb-3">
                                    Une texture soyeuse ultra-fondante enrobée d'un voile de cacao amer d'Équateur avec une note d'espresso.
                                </p>
                                <div class="bg-surface-container-low px-2.5 py-1.5 rounded-DEFAULT text-on-surface-variant font-body-sm text-xs flex items-center justify-between">
                                    <span class="">⏱ 20 min (+2h)</span>
                                    <span class="">🍬 20 pièces</span>
                                    <span class="font-medium text-secondary">Très Facile</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-3 mt-1 flex items-center justify-between gap-2">
                            <span class="font-label-sm text-label-sm text-outline tracking-widest uppercase">Recette n°03</span>
                            <a class="px-3 py-1.5 bg-[#2F1B14] text-on-primary hover:bg-secondary transition-colors font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT" data-path="recette-truffes-cacao" href="#">
                                Voir la recette
                            </a>
                        </div>
                    </article>
                    <!-- Card 4 -->
                    <article class="group bg-surface-container-lowest rounded-DEFAULT overflow-hidden shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between" style="border: 1.5px solid rgb(139, 94, 60);">
                        <div class="flex flex-col">
                            <div class="relative m-2 overflow-hidden rounded-DEFAULT bg-surface-container aspect-square">
                                <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500 ease-out" data-alt="Wrapped artisan confectionary biscuits tied with twine, generous hazelnut gianduja chocolate filling visible through crisp shortbread cookies, culinary flatlay on linen surface, warm golden tones" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB7Z_5EJt4u2kFsc5gETD_AvRI_So6-EIBlvtrgT4EkjwAgGQ2c30I3Of4VdY3xd8Grc7gRc1EcNzjYvxytFhXodhQeG9tiIyUSXjoNfROEV9Crbkn3MmSkUUEIUwAiZgkNLoGsjDx-t5lm628ZOiV2pqjavUA_vIN0dXdJJxhA6DKzI1tte43-gLCk2O-0p17fwdWopEjaB6KrQcgNeoW17uzjXH3sDzREukXM1Y8ykSg8uo3hGz4F">
                                <div class="absolute top-2 left-2 flex items-center gap-1.5">
                                    <span class="px-2 py-0.5 bg-surface/90 backdrop-blur-sm text-on-surface font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT shadow-sm">
                                        nouveau
                                    </span>
                                </div>
                                <button aria-label="Aperçu rapide" class="absolute top-2 right-2 w-8 h-8 rounded-full bg-surface/85 backdrop-blur-sm text-on-surface hover:bg-surface hover:text-secondary flex items-center justify-center transition-colors shadow-sm" type="button">
                                    <span class="material-symbols-outlined text-[18px]">visibility</span>
                                </button>
                            </div>
                            <div class="px-4 pt-2 pb-1 flex flex-col">
                                <div class="flex items-center justify-between text-outline text-body-sm mb-1">
                                    <div class="flex items-center gap-1 text-secondary">
                                        <span class="flex items-center text-[13px] tracking-tight">
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px] fill-current" style="font-variation-settings: 'FILL' 1;">star</span>
                                            <span class="material-symbols-outlined text-[15px]">star_border</span>
                                        </span>
                                        <span class="text-outline font-body-sm text-xs ml-0.5">(41 avis)</span>
                                    </div>
                                    <span class="font-label-sm text-label-sm uppercase tracking-wider text-secondary font-semibold">Pâtisserie</span>
                                </div>
                                <h3 class="font-headline-sm text-headline-sm text-on-surface group-hover:text-secondary transition-colors line-clamp-1 mb-1">
                                    Sablé Noisette &amp; Cœur Gianduja
                                </h3>
                                <p class="font-body-sm text-body-sm text-on-surface-variant line-clamp-2 leading-snug mb-3">
                                    Pâte sablée croustillante aux noisettes du Piémont et garniture généreuse de gianduja onctueux.
                                </p>
                                <div class="bg-surface-container-low px-2.5 py-1.5 rounded-DEFAULT text-on-surface-variant font-body-sm text-xs flex items-center justify-between">
                                    <span class="">⏱ 35 min</span>
                                    <span class="">👥 6 pers.</span>
                                    <span class="font-medium text-secondary">Facile</span>
                                </div>
                            </div>
                        </div>
                        <div class="px-4 pb-4 pt-3 mt-1 flex items-center justify-between gap-2">
                            <span class="font-label-sm text-label-sm text-outline tracking-widest uppercase">Recette n°04</span>
                            <a class="px-3 py-1.5 bg-[#2F1B14] text-on-primary hover:bg-secondary transition-colors font-label-sm text-label-sm uppercase tracking-wider rounded-DEFAULT" data-path="recette-sable-noisette" href="#">
                                Voir la recette
                            </a>
                        </div>
                    </article>
                </div>
            </section>
            <!-- Pagination Component -->
            <nav aria-label="Pagination des recettes" class="w-full max-w-[1280px] mx-auto px-margin pt-space-xl pb-space-lg flex items-center justify-center">
                <div class="flex items-center gap-space-xs bg-surface-container-low p-1.5 rounded-full shadow-sm">
                    <button aria-label="Page précédente" class="w-9 h-9 rounded-full flex items-center justify-center text-outline hover:text-on-surface hover:bg-surface transition-colors" type="button">
                        <span class="material-symbols-outlined text-[20px]">chevron_left</span>
                    </button>
                    <div class="flex items-center gap-1 px-1">
                        <button aria-current="page" class="w-9 h-9 rounded-full bg-primary text-on-primary font-label-md text-label-md flex items-center justify-center shadow-sm" type="button">
                            1
                        </button>
                        <button class="w-9 h-9 rounded-full text-on-surface-variant hover:text-on-surface hover:bg-surface font-body-md text-body-md flex items-center justify-center transition-colors" type="button">
                            2
                        </button>
                        <button class="w-9 h-9 rounded-full text-on-surface-variant hover:text-on-surface hover:bg-surface font-body-md text-body-md flex items-center justify-center transition-colors" type="button">
                            3
                        </button>
                    </div>
                    <button aria-label="Page suivante" class="w-9 h-9 rounded-full flex items-center justify-center text-on-surface hover:bg-surface transition-colors" type="button">
                        <span class="material-symbols-outlined text-[20px]">chevron_right</span>
                    </button>
                </div>
            </nav>
            <!-- Newsletter & Culinary Note Callout (Editorial Section) -->
            <section class="w-full max-w-[1280px] mx-auto px-margin py-space-xl">
                <div class="relative bg-surface-container rounded-DEFAULT p-space-xl overflow-hidden shadow-sm flex flex-col md:flex-row items-center justify-between gap-space-lg">
                    <div class="max-w-xl space-y-space-xs z-10 text-left">
                        <span class="font-label-sm text-label-sm uppercase tracking-widest text-secondary font-semibold">Conseil de l'Atelier</span>
                        <h3 class="font-headline-md text-headline-md text-on-surface">La Température Parfaite du Chocolat</h3>
                        <p class="font-body-md text-body-md text-on-surface-variant">
                            Pour une brillance miroir et une cassure nette, respectez scrupuleusement la courbe de cristallisation : fonte à 50°C, descente à 27°C, puis remontée précise à 31°C avant moulage.
                        </p>
                    </div>
                    <div class="z-10 shrink-0">
                        <a class="px-space-lg py-space-sm bg-primary text-on-primary hover:bg-secondary font-label-md text-label-md uppercase tracking-wider rounded-DEFAULT transition-colors inline-block shadow-sm" data-path="la-maison" href="#">
                            Découvrir les fiches techniques
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once "./../view/publicView/inc/footer.php" ?>
</section>
</body>

</html>