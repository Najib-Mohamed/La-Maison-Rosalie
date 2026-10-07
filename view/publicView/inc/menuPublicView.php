<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <!-- Font Awesome : nous donne les icônes (YouTube, Facebook, Instagram...) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Police manuscrite pour le logo / Footer /  Maison Rosalie -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Allura&display=swap">
    <!-- lines pour la page liste des recettes -->
     <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" rel="stylesheet">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect">
    <script src="https://cdn.tailwindcss.com"></script>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    "colors": {
                        "outline": "#807572",
                        "on-primary-fixed-variant": "#4e4542",
                        "background": "#fcf9f4",
                        "tertiary-container": "#271900",
                        "outline-variant": "#d1c4c0",
                        "on-tertiary-container": "#a17e41",
                        "primary-container": "#211a18",
                        "error": "#ba1a1a",
                        "on-primary": "#ffffff",
                        "on-background": "#1c1c19",
                        "surface-variant": "#e5e2dd",
                        "surface-container-low": "#f6f3ee",
                        "primary": "#000000",
                        "secondary-fixed": "#ffdea5",
                        "surface-bright": "#fcf9f4",
                        "surface-container-lowest": "#ffffff",
                        "on-secondary-container": "#785a1a",
                        "on-secondary-fixed": "#261900",
                        "inverse-surface": "#31302d",
                        "on-surface-variant": "#4e4542",
                        "secondary-fixed-dim": "#e9c176",
                        "inverse-primary": "#d1c4c0",
                        "surface-tint": "#665c59",
                        "on-secondary": "#ffffff",
                        "surface-container-highest": "#e5e2dd",
                        "secondary": "#775a19",
                        "surface-container": "#f0ede9",
                        "surface": "#fcf9f4",
                        "on-secondary-fixed-variant": "#5d4201",
                        "tertiary-fixed-dim": "#e9c07d",
                        "secondary-container": "#fed488",
                        "tertiary": "#000000",
                        "surface-dim": "#dcdad5",
                        "primary-fixed": "eedfdc",
                        "on-tertiary-fixed": "#271900",
                        "surface-container-high": "#ebe8e3",
                        "tertiary-fixed": "#ffdeab",
                        "on-tertiary": "#ffffff",
                        "on-surface": "#1c1c19",
                        "inverse-on-surface": "#f3f0eb",
                        "error-container": "#ffdad6",
                        "on-primary-container": "#8d817e",
                        "primary-fixed-dim": "#d1c4c0",
                        "on-error": "#ffffff",
                        "on-primary-fixed": "#211a18",
                        "on-tertiary-fixed-variant": "#5d4209",
                        "on-error-container": "#93000a"
                    },
                    "borderRadius": {
                        "DEFAULT": "0.125rem",
                        "lg": "0.25rem",
                        "xl": "0.5rem",
                        "full": "0.75rem"
                    },
                    "spacing": {
                        "space-sm": "0.5rem",
                        "space-xs": "0.25rem",
                        "space-xl": "2.5rem",
                        "margin": "3rem",
                        "margin-mobile": "1.25rem",
                        "gutter-mobile": "1rem",
                        "space-md": "1rem",
                        "space-xxl": "4rem",
                        "gutter": "1.5rem",
                        "space-lg": "1.75rem"
                    },
                    "fontFamily": {
                        "label-lg": ["EB Garamond"],
                        "headline-lg": ["Playfair Display"],
                        "headline-lg-mobile": ["Playfair Display"],
                        "display-lg-mobile": ["Playfair Display"],
                        "body-md": ["EB Garamond"],
                        "label-md": ["EB Garamond"],
                        "body-lg": ["EB Garamond"],
                        "label-sm": ["EB Garamond"],
                        "headline-md": ["Playfair Display"],
                        "headline-sm": ["Playfair Display"],
                        "display-lg": ["Playfair Display"],
                        "body-sm": ["EB Garamond"]
                    },
                    "fontSize": {
                        "label-lg": ["15px", {
                            "lineHeight": "20px",
                            "letterSpacing": "0.08em",
                            "fontWeight": "600"
                        }],
                        "headline-lg": ["36px", {
                            "lineHeight": "44px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "500"
                        }],
                        "headline-lg-mobile": ["28px", {
                            "lineHeight": "36px",
                            "letterSpacing": "0em",
                            "fontWeight": "500"
                        }],
                        "display-lg-mobile": ["38px", {
                            "lineHeight": "46px",
                            "letterSpacing": "-0.01em",
                            "fontWeight": "400"
                        }],
                        "body-md": ["17px", {
                            "lineHeight": "26px",
                            "fontWeight": "400"
                        }],
                        "label-md": ["13px", {
                            "lineHeight": "18px",
                            "letterSpacing": "0.1em",
                            "fontWeight": "600"
                        }],
                        "body-lg": ["20px", {
                            "lineHeight": "32px",
                            "fontWeight": "400"
                        }],
                        "label-sm": ["11px", {
                            "lineHeight": "16px",
                            "letterSpacing": "0.12em",
                            "fontWeight": "600"
                        }],
                        "headline-md": ["26px", {
                            "lineHeight": "34px",
                            "fontWeight": "500"
                        }],
                        "headline-sm": ["20px", {
                            "lineHeight": "28px",
                            "fontWeight": "600"
                        }],
                        "display-lg": ["56px", {
                            "lineHeight": "64px",
                            "letterSpacing": "-0.02em",
                            "fontWeight": "400"
                        }],
                        "body-sm": ["15px", {
                            "lineHeight": "22px",
                            "fontWeight": "400"
                        }]
                    }
                }
            }
        };
    </script>
    <title>Maison Rosalie</title>
</head>

<body>

    <nav class="mx-auto flex flex-wrap items-center justify-between gap-4 px-6 py-4 fixed z-20 w-full texte-white menu" aria-label="Navigation principale">

        <a href="./?pages=home">
            <img src="./assets/logo/logo-text-only.svg" alt="Maison Rosalie, retour à l'accueil" class="h-8">
        </a>

        <input type="checkbox" id="menuToggle" class="peer sr-only" aria-label="Afficher le menu">
        <label for="menuToggle" class="cursor-pointer text-3xl md:hidden" aria-hidden="true">&#9776;</label>

        <div class="hidden w-full flex-col gap-6 rounded-md bg-espresso p-4 peer-checked:flex md:flex md:bg-transparent md:p-0 md:w-auto md:flex-1 md:flex-row md:items-center md:justify-between">
            <ul class="flex flex-col gap-4 text-lg md:ml-10 md:flex-row md:gap-8">
                <li><a href="./?pages=home" class="hover:text-gold">Accueil</a></li>
                <li><a href="./?pages=about" class="hover:text-gold">À propos</a></li>
                <li><a href="./?pages=recettes" class="hover:text-gold">Recettes</a></li>
                <li><a href="./?pages=contact" class="hover:text-gold">Contact</a></li>
            </ul>

            <button id="connexion" type="button" command="show-modal" commandfor="loginModal"
                class="text-white box-border border border-transparent focus:ring-4 focus:ring-warning-medium shadow-xs font-medium leading-5 text-sm px-4 py-2.5 focus:outline-none">
                Connexion
            </button>
        </div>

    </nav>