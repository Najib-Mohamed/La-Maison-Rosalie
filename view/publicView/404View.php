<?php
// Envoie le vrai code HTTP 404 au navigateur (important : la page n'existe pas).
// À placer avant tout affichage. Si les en-têtes sont déjà envoyés ailleurs,
// cette ligne est ignorée sans casser la page.
if (!headers_sent()) {
    http_response_code(404);
}

include "./../view/publicView/inc/menuPublicView.php";
?>

  <!-- PAGE 404 — page introuvable
       Même structure que les autres pages : navbar incluse au-dessus,
       footer inclus en dessous, contenu scopé sous #error404. -->

  <div class="div-error">

    <section id="error404" class="error404">

      <!-- Grand code d'erreur -->
      <p class="error404__code">404</p>

      <!-- Logo de la marque -->
      <img src="./assets/logo.svg" alt="Maison Rosalie" class="error404__logo">

      <!-- Titre + message -->
      <h1 class="error404__title">Oups, cette page s'est volatilisée</h1>
      <p class="error404__text">
        La page que vous cherchez n'existe pas ou a été déplacée.
        Reprenez une douceur et retournons sur des sentiers connus.
      </p>

      <!-- Actions : retour accueil + voir les recettes -->
      <div class="error404__actions">
        <a href="./?pages=home" class="error404__btn error404__btn--primary">Retour à l'accueil</a>
        <a href="./?pages=recettes" class="error404__btn error404__btn--ghost">Voir les recettes</a>
      </div>

    </section>

  </div><!-- /.div-error -->

<?php
include "./../view/publicView/inc/footer.php";
?>

  <!-- Script commun -->
  <script src="../../public/js/scripts.js"></script>

</body>

</html>