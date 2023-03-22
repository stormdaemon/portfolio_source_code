<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"
    />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.all.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Théo LAFONT</title>
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.css">
  </head>

  <body>
    <header>
      <div class="navbar">
        <nav>
          <ul>
            <h1 class="navbar-brand">THÉO LAFONT</h1>
            <li>
              <a href="#accueil"> ACCUEIL </a>
            </li>
            <li>
              <a href="#portfolio"> PORTFOLIO </a>
            </li>
            <li>
              <a href="#contact"> CONTACT </a>
            </li>
            <div class="profil-picture"></div>
          </ul>
        </nav>
      </div>
    </header>
    <section id="accueil">
      <div class="accueil">
        <h2>Présentation :</h2>
        <p>
          Je m'appelle Théo LAFONT et je suis passionné par le développement web
          depuis mon plus jeune âge. Au fil de l'expérience acquise via des
          projets personnels, j'ai pu acquérir une maîtrise intermédiaire
          d'HTML5 et CSS3. Actuellement, mon objectif est d'apprendre JavaScript
          et par la suite, le framework React. Je suis actuellement en parcours
          de formation intégrateur web en alternance avec OpenClassrooms et je
          suis à la recherche d'un employeur pour réaliser cette formation. Bien
          que mon parcours atypique ne soit pas axé sur l'éducation formelle,
          j'ai une expérience solide en commerce. Cependant, ma passion
          dévorante pour le développement web m'a amené à entreprendre une
          reconversion professionnelle pour poursuivre ma passion et réaliser
          mes objectifs dans le domaine.
        </p>
      </div>
    </section>
    <section id="portfolio">
      <div class="portfolio">
        <h2>Mes réalisations* :</h2>

        <p>Intégration de la maquette de Benjamin Code</p>
        <img
          class="bencode"
          src="./assets/ben.png"
          alt="Maquette Benjamin Code"
          onclick="expandImage(this)"
        />
        <p>Réalisation du Front-End d'un CMS rétro habbo pour un ami</p>
        <img
          class="xbbo"
          src="./assets/xbbocms2.png"
          alt="Front du CMS XBBO"
          onclick="expandImage(this)"
        />
        <p>Extraction et amélioration du front end d'un cms existant</p>
        <img
          class="hpixel"
          src="./assets/hpixelcms.png"
          alt="Font du CMS Habbo Pixel"
          onclick="expandImage(this)"
        />
        <div class="github-container">
          <p class="github">
            *toutes mes réalisations sont disponible sur
            <a target="_blank" href="https://github.com/stormdaemon"
              >mon github</a
            >
          </p>
          <svg
            width="30"
            height="30"
            viewBox="0 0 30 30"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M15 2.5C8.09644 2.5 2.5 8.09644 2.5 15C2.5 21.9036 8.09644 27.5 15 27.5C21.9036 27.5 27.5 21.9036 27.5 15C27.5 8.09644 21.9036 2.5 15 2.5ZM0 15C0 6.71575 6.71575 0 15 0C23.2842 0 30 6.71575 30 15C30 23.2842 23.2842 30 15 30C6.71575 30 0 23.2842 0 15Z"
              fill="white"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M11.9896 28.4198C11.8686 28.2637 11.8686 26.8734 11.9896 24.2488C10.6946 24.2936 9.8765 24.2037 9.53519 23.9792C9.02312 23.6426 8.51056 22.6042 8.05569 21.8725C7.60087 21.1407 6.59144 21.0251 6.18378 20.8615C5.77614 20.6979 5.6738 20.0311 7.30706 20.5354C8.94025 21.0397 9.01994 22.413 9.53519 22.7341C10.0504 23.0552 11.2822 22.9147 11.8405 22.6575C12.3989 22.4002 12.3577 21.4424 12.4573 21.063C12.5832 20.7088 12.1396 20.6302 12.1298 20.6274C11.5847 20.6274 8.72119 20.0046 7.93469 17.2317C7.14812 14.4588 8.16131 12.6464 8.70181 11.8672C9.06219 11.3478 9.03031 10.2408 8.60619 8.54612C10.1459 8.34937 11.3342 8.83399 12.1709 10.0001C12.1717 10.0068 13.2678 9.34831 15.0002 9.34831C16.7325 9.34831 17.3471 9.88468 17.8214 10.0001C18.2957 10.1156 18.675 7.95887 21.6042 8.54612C20.9927 9.74812 20.4806 11.2501 20.8714 11.8672C21.2624 12.4844 22.7966 14.4467 21.8541 17.2317C21.2259 19.0884 19.9908 20.2202 18.149 20.6274C17.9378 20.6947 17.8322 20.8035 17.8322 20.9535C17.8322 21.1786 18.1177 21.2031 18.5291 22.2574C18.8033 22.9602 18.8231 24.9676 18.5885 28.2794C17.9941 28.4307 17.5317 28.5323 17.2013 28.5842C16.6154 28.6763 15.9793 28.7279 15.3543 28.7479C14.7293 28.7678 14.5122 28.7656 13.6481 28.6851C13.0721 28.6315 12.5192 28.5431 11.9896 28.4198Z"
              fill="white"
            />
          </svg>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="contact">
        <h2>Me contacter</h2>

        <div class="contact-form">
        <form id="contact-form">
            @csrf
            <label for="name"></label>
            <input
              type="text"
              name="name"
              id="name"
              placeholder="Nom"
              required
            />
            <label for="firstname"></label>
            <input
              type="text"
              name="firstname"
              id="firstname"
              placeholder="Prénom"
              required
            />
            <label for="email"></label>
            <input
              type="email"
              name="email"
              id="email"
              placeholder="Email"
              required
            />
            <label for="message"></label>
            <textarea
              name="message"
              id="message"
              placeholder="Message"
              required
            ></textarea>
            <div class="submit">
              <button type="submit" id="submit-form">
                <span>Envoyer</span
                ><svg
                  class="send"
                  width="16"
                  height="16"
                  viewBox="0 0 16 16"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M15.3187 0.681289C15.2344 0.597335 15.1278 0.539208 15.0116 0.513743C14.8953 0.488278 14.7742 0.496534 14.6625 0.537539L0.912501 5.53754C0.793918 5.58252 0.691825 5.66251 0.619782 5.76689C0.547739 5.87126 0.509155 5.99509 0.509155 6.12191C0.509155 6.24874 0.547739 6.37256 0.619782 6.47694C0.691825 6.58132 0.793918 6.66131 0.912501 6.70629L6.28125 8.85004L10.2438 4.87504L11.125 5.75629L7.14375 9.73754L9.29375 15.1063C9.34006 15.2226 9.42023 15.3223 9.52387 15.3925C9.6275 15.4627 9.74983 15.5002 9.875 15.5C10.0013 15.4974 10.1239 15.4566 10.2265 15.383C10.3292 15.3094 10.4071 15.2064 10.45 15.0875L15.45 1.33754C15.4926 1.22696 15.5029 1.10656 15.4796 0.990366C15.4564 0.874175 15.4006 0.766983 15.3187 0.681289Z"
                    fill="white"
                  />
                </svg>
              </button>
            </div>
          </form>
        </div>
      </div>
    </section>

    <footer>
      <p>Théo LAFONT - 2023 - <a target="_blank" href="https://github.com/stormdaemon">Code Source du portfolio</a></p>
      <a target="_blank" href="https://github.com/stormdaemon"><svg
            width="30"
            height="30"
            viewBox="0 0 30 30"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M15 2.5C8.09644 2.5 2.5 8.09644 2.5 15C2.5 21.9036 8.09644 27.5 15 27.5C21.9036 27.5 27.5 21.9036 27.5 15C27.5 8.09644 21.9036 2.5 15 2.5ZM0 15C0 6.71575 6.71575 0 15 0C23.2842 0 30 6.71575 30 15C30 23.2842 23.2842 30 15 30C6.71575 30 0 23.2842 0 15Z"
              fill="white"
            />
            <path
              fill-rule="evenodd"
              clip-rule="evenodd"
              d="M11.9896 28.4198C11.8686 28.2637 11.8686 26.8734 11.9896 24.2488C10.6946 24.2936 9.8765 24.2037 9.53519 23.9792C9.02312 23.6426 8.51056 22.6042 8.05569 21.8725C7.60087 21.1407 6.59144 21.0251 6.18378 20.8615C5.77614 20.6979 5.6738 20.0311 7.30706 20.5354C8.94025 21.0397 9.01994 22.413 9.53519 22.7341C10.0504 23.0552 11.2822 22.9147 11.8405 22.6575C12.3989 22.4002 12.3577 21.4424 12.4573 21.063C12.5832 20.7088 12.1396 20.6302 12.1298 20.6274C11.5847 20.6274 8.72119 20.0046 7.93469 17.2317C7.14812 14.4588 8.16131 12.6464 8.70181 11.8672C9.06219 11.3478 9.03031 10.2408 8.60619 8.54612C10.1459 8.34937 11.3342 8.83399 12.1709 10.0001C12.1717 10.0068 13.2678 9.34831 15.0002 9.34831C16.7325 9.34831 17.3471 9.88468 17.8214 10.0001C18.2957 10.1156 18.675 7.95887 21.6042 8.54612C20.9927 9.74812 20.4806 11.2501 20.8714 11.8672C21.2624 12.4844 22.7966 14.4467 21.8541 17.2317C21.2259 19.0884 19.9908 20.2202 18.149 20.6274C17.9378 20.6947 17.8322 20.8035 17.8322 20.9535C17.8322 21.1786 18.1177 21.2031 18.5291 22.2574C18.8033 22.9602 18.8231 24.9676 18.5885 28.2794C17.9941 28.4307 17.5317 28.5323 17.2013 28.5842C16.6154 28.6763 15.9793 28.7279 15.3543 28.7479C14.7293 28.7678 14.5122 28.7656 13.6481 28.6851C13.0721 28.6315 12.5192 28.5431 11.9896 28.4198Z"
              fill="white"
            />
          </svg>
          </a>
          <a target="_blank" href="https://www.linkedin.com/in/th%C3%A9o-lafont-30572b26a/">
          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 15 15"><path fill="currentColor" fill-rule="evenodd" d="M2 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H2Zm1.05 5h1.9v6h-1.9V6Zm2.025-1.995a1.075 1.075 0 1 1-2.15 0a1.075 1.075 0 0 1 2.15 0ZM12 8.357c0-1.805-1.167-2.507-2.326-2.507a2.206 2.206 0 0 0-1.095.231c-.257.13-.526.424-.734.938h-.053V6H6v6.005h1.906V8.81c-.027-.327.077-.75.291-1.001c.215-.252.52-.312.753-.342h.073c.606 0 1.056.375 1.056 1.32v3.217h1.906L12 8.357Z" clip-rule="evenodd"/></svg>
          </a>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="./js/index.js"></script>
  </body>
</html>
