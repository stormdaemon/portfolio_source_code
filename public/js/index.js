// Sélectionne tous les liens avec un href qui commence par #
let links = document.querySelectorAll('a[href^="#"]');

// Initialise la variable pour stocker le temps de départ de l'animation
let startTime = null;

// Boucle sur chaque lien
links.forEach((link) => {
  // Écoute l'événement click
  link.addEventListener("click", function (e) {
    // Empêche le comportement par défaut de l'ancre
    e.preventDefault();

    // Vérifie si une animation est déjà en cours
    if (startTime !== null) {
      return;
    }

    // Récupère l'ID de la section à laquelle l'ancre pointe
    let id = this.getAttribute("href");

    // Récupère la section
    let target = document.querySelector(id);

    // Calcule la distance de la section depuis le haut de la page
    let distance = target.offsetTop;

    // Définit la durée de l'animation en millisecondes
    let duration = 300; // 1 seconde

    // Récupère le temps de départ de l'animation
    startTime = performance.now();

    // Définit la fonction d'animation personnalisée
    let animateScroll = function (timestamp) {
      // Calcule le temps écoulé depuis le début de l'animation
      let elapsed = timestamp - startTime;

      // Calcule la position actuelle de la page
      let progress = Math.min(elapsed / duration, 1);
      let position = distance * progress;

      // Déplace la page à la position actuelle
      window.scrollTo(0, position);

      // Si l'animation n'est pas terminée, continue l'animation
      if (progress < 1) {
        window.requestAnimationFrame(animateScroll);
      } else {
        // Réinitialise la variable pour permettre une nouvelle animation
        startTime = null;
      }
    };

    // Démarre l'animation
    window.requestAnimationFrame(animateScroll);
  });
});

function expandImage(image) {
  // créer un élément <div> pour ajouter le fond d'écran semi-transparent
  var overlay = document.createElement("div");
  overlay.className = "overlay";
  document.body.appendChild(overlay);

  // ajouter une classe CSS au fond d'écran semi-transparent pour appliquer l'effet de flou
  overlay.classList.add("blurred");

  // créer un élément <img> pour afficher l'image agrandie
  var expandedImage = document.createElement("img");
  expandedImage.src = image.src;
  expandedImage.className = "expanded-image";
  overlay.appendChild(expandedImage);

  // cacher l'image agrandie avec une opacité de 0
  gsap.set(expandedImage, { opacity: 0 });

  // animer l'agrandissement de l'image avec une transition en fondu
  gsap.to(expandedImage, {
    duration: 0.5,
    opacity: 1,
    scale: 1.2,
    ease: "power2.inOut",
  });

  // ajouter un événement "onclick" pour fermer l'image agrandie
  expandedImage.onclick = function () {
    // animer la fermeture de l'image agrandie avec une transition en fondu
    gsap.to(expandedImage, {
      duration: 0.5,
      opacity: 0,
      scale: 1,
      ease: "power2.inOut",
      onComplete: function () {
        // supprimer l'overlay
        overlay.remove();
        // supprimer la classe CSS pour annuler l'effet de flou
        overlay.classList.remove("blurred");
      },
    });
  };
}

const contactSection = document.querySelector("#contact");
const githubContainer = document.querySelector(".github-container");

window.addEventListener("scroll", function () {
  if (isElementInViewport(contactSection)) {
    githubContainer.style.display = "none";
  } else {
    githubContainer.style.display = "flex";
  }
});

function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight)
  );
}

// Récupération de tous les liens de la page
const pageLinks = document.querySelectorAll("a");

// Parcours de chaque lien
pageLinks.forEach((link) => {
  // Si le lien pointe vers une section existante dans la page
  if (link.hash && document.querySelector(link.hash)) {
    // Ajout d'un écouteur d'événement pour changer la couleur du lien lorsque la section est visible
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            link.style.color = "#f5a142"; // Change la couleur du lien en #f5a142
          } else {
            link.style.color = ""; // Réinitialise la couleur du lien
          }
        });
      },
      { threshold: 0.5 }
    );
    observer.observe(document.querySelector(link.hash));
  }
});


document.addEventListener('DOMContentLoaded', () => {
  const contactForm = document.querySelector('#contact-form');

  contactForm.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(contactForm);
    const response = await fetch('/contact', {
      method: 'POST',
      headers: {
        'X-Requested-With': 'XMLHttpRequest',
        'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value,
      },
      body: formData,
    });

    if (response.ok) {
      const data = await response.json();

      if (data.status === 'success') {
        Swal.fire({
          imageUrl: './assets/success.gif',
          title: 'Succès',
          text: 'Votre message a été envoyé avec succès.',
        });
      } else {
        Swal.fire({
          icon: 'error',
          title: 'Erreur',
          text: 'Une erreur est survenue lors de l\'envoi de votre message.',
        });
      }
    } else {
      Swal.fire({
        icon: 'error',
        title: 'Erreur',
        text: 'Une erreur est survenue lors de l\'envoi de votre message.',
      });
    }
  });
});

