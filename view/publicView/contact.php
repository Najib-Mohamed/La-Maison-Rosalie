<?php
include "./../view/publicView/inc/menuPublicView.php";
?>

  <!-- PAGE CONTACT
       Structure :
         1. .contact__header  → logo + titre "Contactez-nous"
         2. .contact__main     → carte (gauche) + formulaire (droite)
         3. .contact__infos    → appel / email / localisation (bas)
  -->

  <div class="div-contact">

  <section id="contact" class="contact">

    <!-- 1. EN-TÊTE -->
    <div class="contact__header">
      <h1 class="contact__title">Contactez-nous</h1>
      <!-- logo en haut à droite -->
      <img src="./assets/logo.svg" alt="Maison Rosalie" class="contact__logo">
    </div>

    <!-- 2. CARTE + FORMULAIRE -->
    <div class="contact__main">

      <!-- Carte interactive Leaflet (initialisée par le script en bas de page) -->
      <div id="contactMap" class="contact__map"></div>

      <!-- Formulaire de contact -->
      <!-- novalidate : on désactive la validation native du navigateur pour utiliser
           la nôtre (messages précis près des champs, comme demandé par FE-41). -->
      <form class="contact__form" action="./?pg=contact" method="post" novalidate>

        <!-- Nom -->
        <div class="contact__field">
          <input type="text" name="name" id="contactName" class="contact__input" placeholder="Nom" aria-label="Votre nom" required>
          <!-- message d'erreur affiché près du champ (FE-41) -->
          <span class="contact__error" data-error-for="name"></span>
        </div>

        <!-- Email -->
        <div class="contact__field">
          <input type="email" name="email" id="contactEmail" class="contact__input" placeholder="Adresse Email" aria-label="Votre adresse email" required>
          <span class="contact__error" data-error-for="email"></span>
        </div>

        <!-- Sujet (facultatif, max 120 caractères — cahier des charges section 6.1) -->
        <div class="contact__field">
          <input type="text" name="subject" id="contactSubject" class="contact__input" placeholder="Sujet (facultatif)" aria-label="Sujet du message" maxlength="120">
          <span class="contact__error" data-error-for="subject"></span>
        </div>

        <!-- Message (3 à 500 caractères — cahier des charges section 6.1) -->
        <div class="contact__field">
          <textarea name="message" id="contactMessage" class="contact__input contact__textarea" placeholder="Message" aria-label="Votre message" rows="5" required></textarea>
          <span class="contact__error" data-error-for="message"></span>
        </div>

        <!-- Bouton d'envoi -->
        <button type="submit" class="contact__submit">Envoyer</button>
      </form>

    </div>

    <!-- 3. INFOS DE CONTACT -->
    <div class="contact__infos">

      <!-- Appel -->
      <div class="contact__info">
        <svg class="contact__info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/>
        </svg>
        <div class="contact__info-text">
          <span class="contact__info-label">Appel</span>
          <span class="contact__info-value">0492874931</span>
        </div>
      </div>

      <!-- Email -->
      <div class="contact__info">
        <svg class="contact__info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/>
        </svg>
        <div class="contact__info-text">
          <span class="contact__info-label">Email</span>
          <span class="contact__info-value">Danthegreat@gmail.com</span>
        </div>
      </div>

      <!-- Localisation -->
      <div class="contact__info">
        <svg class="contact__info-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
          <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/>
        </svg>
        <div class="contact__info-text">
          <span class="contact__info-label">Localisation</span>
          <span class="contact__info-value">Bruxelles, Belgique</span>
        </div>
      </div>

    </div>

  </section>

  <!-- Leaflet : feuille de style (obligatoire pour positionner les tuiles)
       puis script de la bibliothèque, puis initialisation de la carte -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script>
    /* CONFIGURATION DE LA CARTE
       Tout ce qui est à renseigner se trouve ici en haut.
       - center : coordonnées du centre de la carte [latitude, longitude]
       - zoom   : niveau de zoom (plus le chiffre est grand, plus c'est zoomé)
       - points : liste des marqueurs à afficher sur la carte
                  chaque point = { lat, lng, title, popup }
                    lat / lng : coordonnées du marqueur
                    title     : texte affiché au survol (optionnel)
                    popup     : contenu de la bulle au clic (optionnel, HTML autorisé)
       Pour trouver des coordonnées : clic droit sur Google Maps →
       "Plus d'infos sur cet endroit" affiche lat, lng. */
    const config = {
      center: [50.8503, 4.3517],
      zoom: 16,
      points: [
        {
          lat: 50.8503,
          lng: 4.3517,
          title: 'Maison Rosalie',
          popup: '<strong>Maison Rosalie</strong><br>Bruxelles, Belgique<br>0492 87 49 31'
        }
        // Pour ajouter un point, copie le bloc ci-dessus avec une virgule devant :
        // ,{ lat: 50.8512, lng: 4.3540, title: 'Boutique 2', popup: 'Notre 2e boutique' }
      ]
    };

    /* INITIALISATION (normalement rien à modifier en dessous) */

    // Création de la carte centrée selon la config
    const map = L.map('contactMap').setView(config.center, config.zoom);

    // Fond de carte OpenStreetMap (gratuit, pas de clé API)
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>',
      maxZoom: 19
    }).addTo(map);

    // Ajout de tous les marqueurs définis dans config.points
    config.points.forEach(function (point) {
      const marker = L.marker([point.lat, point.lng]).addTo(map);

      // titre au survol (si renseigné)
      if (point.title) {
        marker.bindTooltip(point.title);
      }

      // bulle au clic (si renseignée)
      if (point.popup) {
        marker.bindPopup(point.popup);
      }
    });

    // Force Leaflet à recalculer la taille de la carte une fois la page rendue.
    // Évite les tuiles mal placées quand le conteneur prend sa taille finale après l'init.
    window.addEventListener('load', function () {
      map.invalidateSize();
    });
  </script>

  </div><!-- /.div-contact : on ferme AVANT le footer pour qu'il ne soit pas dans le conteneur contact -->

<?php
include "./../view/publicView/inc/footer.php";
?>

  <!-- Script commun (carousel + validation du formulaire de contact) -->
  <script src="../../public/js/scripts.js"></script>

</div>
</body>

</html>