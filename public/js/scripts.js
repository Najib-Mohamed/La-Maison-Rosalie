/* JAVASCRIPT DU CAROUSEL — Maison Rosalie
   Script en JS natif (vanilla), aucune dépendance (pas de jQuery, etc.).

   Principe :
     - On récupère tous les slides, dots et vignettes.
     - La fonction goTo(index) active la slide n° index et désactive les autres,
       en ajoutant/retirant la classe .is-active sur les 3 groupes d'éléments.
     - Les vignettes sont DYNAMIQUES : elles affichent toujours les 2 slides
       suivantes dans l'ordre (pas la slide active). Quand la slide change,
       les images des vignettes sont mises à jour avec un effet de fondu.
     - Les dots, vignettes et flèches appellent goTo() au clic.
     - Un autoplay fait défiler les slides toutes les 8 secondes.
       Il se relance après chaque interaction (clic) pour éviter un changement
       de slide juste après que l'utilisateur ait cliqué.

   Relation entre les éléments :
     - Slides et dots → liés par index (dot 0 = slide 0, dot 1 = slide 1, etc.)
     - Vignettes → la cible est CALCULÉE au moment du clic avec la formule
       (current + i + 1) % total, ce qui garantit que le clic mène toujours
       à l'image affichée, sans décalage possible.

   Exemple avec 4 slides (couple=0, chocolatier=1, tablette=2, fèves=3) :
     - Slide 0 active → vignette grande = slide 1, vignette petite = slide 2
     - Slide 1 active → vignette grande = slide 2, vignette petite = slide 3
     - Slide 2 active → vignette grande = slide 3, vignette petite = slide 0
     - Slide 3 active → vignette grande = slide 0, vignette petite = slide 1 */

// On attend que tout le DOM soit chargé avant d'exécuter le script
document.addEventListener('DOMContentLoaded', function () {

  // 1. RÉCUPÉRATION DES ÉLÉMENTS

  // La section héro, identifiée par son ID
  // Si elle n'existe pas sur cette page (ex: page recette), on arrête tout
  let hero = document.getElementById('hero');
  if (!hero) return;

  // Les images du carousel (empilées, une seule visible à la fois)
  let slides = hero.querySelectorAll('.hero__slide');

  // Les dots de navigation à gauche (un par slide)
  let dots = hero.querySelectorAll('.hero__dot');

  // Les 2 vignettes en bas à droite (aperçu des slides suivantes)
  let thumbs = hero.querySelectorAll('.hero__thumb');

  // Le bloc texte (titre + accroche + bouton) et le voile sombre :
  // ils ne s'affichent QUE sur la slide 0 (couple en terrasse).
  // Sur les autres slides, l'image occupe tout l'espace sans texte par-dessus.
  let content = hero.querySelector('.hero__content');
  let overlay = hero.querySelector('.hero__overlay');

  // 2. VARIABLES D'ÉTAT

  // Index de la slide actuellement affichée (0, 1, 2 ou 3)
  let current = 0;

  // Nombre total de slides (4 dans notre cas)
  let total = slides.length;

  // Référence du setInterval pour l'autoplay (null = pas d'autoplay en cours)
  let timer = null;

  // 3. COLLECTE ET PRÉCHARGEMENT DES IMAGES

  // On récupère le chemin (src) de l'image de chaque slide et on le stocke
  // dans un tableau. Ce tableau sera utilisé dans goTo() pour mettre à jour
  // dynamiquement les images des vignettes quand on change de slide.
  let slideSources = [];
  slides.forEach(function (slide) {
    slideSources.push(slide.querySelector('img').getAttribute('src'));
  });

  // On précharge toutes les images dans le cache du navigateur.
  // Ça permet que le changement d'image dans les vignettes soit instantané
  // (pas d'attente de chargement réseau).
  slideSources.forEach(function (src) {
    let img = new Image();
    img.src = src;
  });

  // 4. FONCTION PRINCIPALE : goTo(index)
  // Affiche la slide n° index et met à jour tous les éléments liés.
  // Le modulo (%) permet de boucler : après la dernière slide on revient
  // à la 1re, et avant la 1re on va à la dernière.
  function goTo(index) {

    // Calcul de l'index avec boucle circulaire
    // Ex : goTo(4) avec 4 slides → (4 + 4) % 4 = 0 → retour à la 1re
    // Ex : goTo(-1) avec 4 slides → (-1 + 4) % 4 = 3 → dernière slide
    current = (index + total) % total;

    // 4a. SLIDES : ajouter .is-active sur la slide courante, retirer des autres
    // C'est le CSS qui gère le fondu (opacity 0→1 avec transition)
    slides.forEach(function (slide, i) {
      slide.classList.toggle('is-active', i === current);
    });

    // 4b. DOTS : même logique, le dot actif devient doré via le CSS
    dots.forEach(function (dot, i) {
      dot.classList.toggle('is-active', i === current);
    });

    // 4c. CONTENU + VOILE : visibles uniquement sur la slide 0 (couple).
    // Sur les autres slides, on les masque pour laisser l'image en plein écran.
    if (current === 0) {
      content.style.display = 'flex';
      overlay.style.display = 'block';
    } else {
      content.style.display = 'none';
      overlay.style.display = 'none';
    }

    // 4d. VIGNETTES : mise à jour avec effet de fondu.
    // Étape 1 : on passe l'opacité de l'image à 0 (fondu sortant, 0.3s via CSS)
    // Étape 2 : après 300ms, on change le src et on repasse l'opacité à 1 (fondu entrant)
    // Comme ça l'ancienne image disparaît avant que la nouvelle apparaisse,
    // et il n'y a jamais de décalage entre l'image visible et la slide cible.
    thumbs.forEach(function (thumb, i) {

      // L'index de la slide que cette vignette doit montrer :
      // la (i+1)ème slide après la slide courante, en boucle
      let targetIndex = (current + i + 1) % total;

      // Récupérer l'élément <img> de la vignette
      let thumbImg = thumb.querySelector('img');

      // Fondu sortant : rendre l'image transparente
      thumbImg.style.opacity = '0';

      // Après la durée du fondu (300ms), changer l'image et la faire réapparaître
      setTimeout(function () {
        thumbImg.setAttribute('src', slideSources[targetIndex]);
        thumbImg.style.opacity = '1';
      }, 300);

      // La première vignette (i=0) a toujours la bordure dorée (.is-active)
      // car c'est la "prochaine" slide dans l'ordre
      thumb.classList.toggle('is-active', i === 0);
    });
  }

  // 5. FONCTIONS DE NAVIGATION

  // Passe à la slide suivante (current + 1, boucle gérée par goTo)
  function next() { goTo(current + 1); }

  // Passe à la slide précédente (current - 1, boucle gérée par goTo)
  function prev() { goTo(current - 1); }

  // 6. AUTOPLAY

  // Lance le défilement automatique : change de slide toutes les 8 secondes
  function startAutoplay() {
    stopAutoplay();                  // on arrête l'ancien timer s'il existe
    timer = setInterval(next, 8000); // toutes les 8000ms = 8 secondes
  }

  // Arrête le défilement automatique
  function stopAutoplay() {
    if (timer) clearInterval(timer);
  }

  // 7. ÉVÉNEMENTS CLIC

  // Clic sur un dot → aller à la slide correspondante (même index)
  // + relancer l'autoplay pour éviter un changement immédiat après le clic
  dots.forEach(function (dot, i) {
    dot.addEventListener('click', function () {
      goTo(i);
      startAutoplay();
    });
  });

  // Clic sur une vignette → on CALCULE la cible directement à partir de
  // l'index de la vignette (i) et de la slide courante (current).
  // Formule : (current + i + 1) % total
  // C'est la MÊME formule que dans goTo() pour mettre à jour les vignettes,
  // donc l'image affichée et la slide cible sont TOUJOURS synchronisées.
  // On n'utilise PAS data-slide car il peut être désynchronisé de l'image
  // visible (si l'image n'a pas fini de charger quand data-slide a déjà changé).
  thumbs.forEach(function (thumb, i) {
    thumb.addEventListener('click', function () {
      let target = (current + i + 1) % total;
      goTo(target);
      startAutoplay();
    });
  });

  // 8. INITIALISATION
  // Au chargement de la page : on affiche la slide 0 et on démarre l'autoplay
  goTo(0);
  startAutoplay();
});

/* VALIDATION DU FORMULAIRE DE CONTACT (côté client — FE-41, FE-61)
   Vérifie champs requis, formats (regex) et longueurs AVANT l'envoi,
   et affiche un message précis près de chaque champ concerné.
   Ne s'exécute que sur la page contact (sinon le formulaire n'existe pas).
   Rappel CDC : cette validation améliore l'expérience mais ne remplace
   jamais celle du serveur (sécurité PHP faite séparément). */

document.addEventListener('DOMContentLoaded', function () {

  const form = document.querySelector('.contact__form');
  if (!form) return;

  // RÈGLES DE VALIDATION
  // Les formats ne sont pas imposés par le cahier des charges : ce sont des
  // choix raisonnables. Les longueurs (message 3–500, sujet ≤120) viennent
  // du CDC (section 6.1).
  const rules = {
    // Nom : lettres (avec accents), espaces, tirets et apostrophes, 2 à 100 caractères.
    name: {
      regex: /^[A-Za-zÀ-ÖØ-öø-ÿ'’\- ]{2,100}$/,
      required: true,
      messages: {
        empty: 'Le nom est obligatoire.',
        invalid: 'Le nom doit contenir 2 à 100 lettres (espaces, tirets et apostrophes autorisés).'
      }
    },
    // Email : format standard adresse@domaine.ext
    email: {
      regex: /^[^\s@]+@[^\s@]+\.[^\s@]+$/,
      required: true,
      messages: {
        empty: "L'adresse email est obligatoire.",
        invalid: "L'adresse email n'est pas valide."
      }
    },
    // Sujet : facultatif, maximum 120 caractères (CDC section 6.1)
    subject: {
      regex: /^.{0,120}$/,
      required: false,
      messages: {
        invalid: 'Le sujet ne doit pas dépasser 120 caractères.'
      }
    },
    // Message : 3 à 500 caractères une fois les espaces superflus retirés (CDC section 6.1)
    message: {
      regex: /^[\s\S]{3,500}$/,
      required: true,
      messages: {
        empty: 'Le message est obligatoire.',
        invalid: 'Le message doit contenir entre 3 et 500 caractères.'
      }
    }
  };

  // Récupère le champ et sa zone d'erreur à partir du nom
  function getField(name) {
    return {
      input: form.querySelector('[name="' + name + '"]'),
      error: form.querySelector('[data-error-for="' + name + '"]')
    };
  }

  // Affiche un message d'erreur sous un champ et le passe en rouge (--error)
  function showError(name, message) {
    const { input, error } = getField(name);
    if (error) error.textContent = message;
    if (input) {
      input.classList.add('contact__input--error');
      input.classList.remove('contact__input--valid');
    }
  }

  // Marque un champ comme valide : passe en vert (--valid), efface l'erreur
  function showValid(name) {
    const { input, error } = getField(name);
    if (error) error.textContent = '';
    if (input) {
      input.classList.add('contact__input--valid');
      input.classList.remove('contact__input--error');
    }
  }

  // Remet un champ à l'état neutre (ni rouge ni vert) : champ vide facultatif
  function clearState(name) {
    const { input, error } = getField(name);
    if (error) error.textContent = '';
    if (input) {
      input.classList.remove('contact__input--error', 'contact__input--valid');
    }
  }

  // Valide un champ selon ses règles ; renvoie true si valide
  function validateField(name) {
    const rule = rules[name];
    const { input } = getField(name);
    if (!rule || !input) return true;

    // on enlève les espaces superflus avant/après (comme le fera le serveur)
    const value = input.value.trim();

    // champ requis mais vide
    if (rule.required && value === '') {
      showError(name, rule.messages.empty);
      return false;
    }

    // champ facultatif et vide : état neutre, pas de vert ni de rouge
    if (!rule.required && value === '') {
      clearState(name);
      return true;
    }

    // test du format via la regex
    if (!rule.regex.test(value)) {
      showError(name, rule.messages.invalid);
      return false;
    }

    // tout est bon : on passe le champ en vert
    showValid(name);
    return true;
  }

  // Validation en temps réel : pendant la frappe (input) ET quand on quitte le champ (blur)
  Object.keys(rules).forEach(function (name) {
    const { input } = getField(name);
    if (input) {
      input.addEventListener('input', function () {
        validateField(name);
      });
      input.addEventListener('blur', function () {
        validateField(name);
      });
    }
  });

  // À l'envoi : on valide tous les champs, on bloque si au moins un est invalide
  form.addEventListener('submit', function (event) {
    let allValid = true;

    Object.keys(rules).forEach(function (name) {
      if (!validateField(name)) {
        allValid = false;
      }
    });

    // si un champ est invalide, on empêche l'envoi et on place le focus sur le 1er champ en erreur
    if (!allValid) {
      event.preventDefault();
      const firstError = form.querySelector('.contact__input--error');
      if (firstError) firstError.focus();
    }
  });
});
/* ANIMATION D'APPARITION AU SCROLL — section Top 3 (page d'accueil)
   Révèle les cartes (fondu + glissement vers le haut) quand elles entrent
   dans l'écran, via IntersectionObserver. Ne s'exécute que s'il y a des
   éléments [data-reveal] sur la page (sinon ne fait rien).
   Le style de départ/arrivée est dans style.css (.is-visible). */

document.addEventListener('DOMContentLoaded', function () {

  const revealItems = document.querySelectorAll('[data-reveal]');
  if (revealItems.length === 0) return;

  // Si le navigateur ne supporte pas IntersectionObserver : on affiche tout
  // directement (pas d'animation, mais le contenu reste visible).
  if (!('IntersectionObserver' in window)) {
    revealItems.forEach(function (item) {
      item.classList.add('is-visible');
    });
    return;
  }

  // L'observateur ajoute .is-visible quand l'élément est visible à ~15%,
  // puis arrête de l'observer (l'animation ne se joue qu'une fois).
  const observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        observer.unobserve(entry.target);
      }
    });
  }, {
    threshold: 0.15
  });

  revealItems.forEach(function (item) {
    observer.observe(item);
  });
});
/* NAVBAR TRANSPARENTE QUI SE COLORE AU SCROLL
   En haut de page, la navbar (.menu) est transparente.
   Dès qu'on scrolle (plus de 50px), on lui ajoute la classe .menu--scrolled
   qui lui donne un fond (couleur de la page) via le CSS.
   Retrait de la classe quand on revient tout en haut. */

document.addEventListener('DOMContentLoaded', function () {

  const navbar = document.querySelector('.menu');
  if (!navbar) return;

  // seuil de déclenchement en pixels de défilement vertical
  const scrollThreshold = 50;

  function onScroll() {
    // on lit le défilement de plusieurs sources pour couvrir tous les cas
    // (certaines pages défilent via window, d'autres via l'élément racine)
    const scrolled = window.scrollY
      || window.pageYOffset
      || document.documentElement.scrollTop
      || document.body.scrollTop
      || 0;

    if (scrolled > scrollThreshold) {
      navbar.classList.add('menu--scrolled');
    } else {
      navbar.classList.remove('menu--scrolled');
    }
  }

  // on vérifie l'état au chargement (si la page est déjà défilée) puis à chaque scroll.
  // { passive: true } : meilleure performance au défilement.
  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
});