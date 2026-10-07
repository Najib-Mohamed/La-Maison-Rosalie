/* JAVASCRIPT DE LA PAGE À PROPOS — Maison Rosalie
   Script en JS natif (vanilla), chargé uniquement sur la page À propos.

   Principe : les chiffres clés (.about__stat-number) contiennent déjà leur vraie
   valeur dans le HTML. Quand ils arrivent à l'écran, on les fait défiler de 0
   jusqu'à leur attribut data-count. Sans JavaScript, ou si le visiteur a demandé
   à réduire les animations, les chiffres restent simplement affichés tels quels. */

document.addEventListener('DOMContentLoaded', function () {

  let numbers = document.querySelectorAll('#about .about__stat-number[data-count]');
  if (numbers.length === 0) return;

  // le visiteur préfère moins d'animations (réglage du système) : on n'anime pas
  if (window.matchMedia('(prefers-reduced-motion: reduce)').matches) return;

  // navigateur trop ancien : les chiffres restent affichés, sans animation
  if (!('IntersectionObserver' in window)) return;

  let duration = 1500; // durée de l'animation en millisecondes

  // fait défiler un chiffre de 0 à sa valeur finale
  function animate(element) {
    let target = parseInt(element.getAttribute('data-count'), 10);
    let suffix = element.getAttribute('data-suffix') || '';
    let start  = null;

    function step(timestamp) {
      if (start === null) start = timestamp;
      let progress = Math.min((timestamp - start) / duration, 1); // de 0 à 1
      let eased    = 1 - Math.pow(1 - progress, 3);                // ralentit à la fin
      element.textContent = Math.round(target * eased) + suffix;
      if (progress < 1) requestAnimationFrame(step);
    }

    requestAnimationFrame(step);
  }

  // lance l'animation d'un chiffre la première fois qu'il est visible à moitié
  let observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (!entry.isIntersecting) return;
      animate(entry.target);
      observer.unobserve(entry.target); // une seule fois
    });
  }, { threshold: 0.5 });

  numbers.forEach(function (number) {
    observer.observe(number);
  });
});
