<?php
# public/index.php 

/****************************
 * Chargement des dépendances
 * ici seulement config.php
 * qui se trouve 1 niveau en
 * dessous
 ****************************/
require_once '../config.php';
// si non existence de la variable
// $_GET nommée 'p'
if (!isset($_GET['pages'])) {

    // Nous sommes sur l'accueil
    // chargement de view/homepage.php
    include BASE_URL . "/view/publicView/home.php";

    // sinon si la variable get 'pages' est dans le
    // tableau VALID_PAGES    
} elseif (in_array($_GET['pages'], VALID_PAGES)) {
    // inclusion de la vue autorisée
    include BASE_URL . "/view/publicView/" . $_GET['pages'] . ".php";

    // sinon (pages non valide)    
} else {
    include BASE_URL . "/view/publicView/404view.php";
}
