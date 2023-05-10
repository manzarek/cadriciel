<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <title>Enchères Stampee's</title>
  <meta name="Description" content="Travail final">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lovers+Quarrel">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cinzel">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Mulish">
  <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- <link rel="stylesheet" href="./assets/styles/main.css"> -->
  <link href="{{asset('css/main.css')}}" rel="stylesheet" />
  <script type="module" src="./assets/js/main.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header class="header">
    <div class="bg-container bg--dark-blue">
    </div>
    <nav class="container">
      <ul class="header-menu-container header-container">
        <li class="menu-item">
          <a href="." class="">
            <h2 class="title--logo-primary">Stampee's</h2>
          </a>
        </li>
        <li class="menu-item">
          <div class="search-group">
            <label class="hidden-menu" for="champ-recherche">Recherche</label>
            <input class="champ-recherche" id="champ-recherche" type="text" placeholder="Rechercher ici">
            <div class="loupe__wrapper">
              <span class="material-icons loupe">search</span>
            </div>
          </div>
        </li>
        <li class="menu-item"><a href="catalogue">Enchères</a></li>
        <li class="menu-item"><a href="about">À propos</a></li>
        <li class="menu-item"><a href="inscription">S'inscrire</a></li>
      </ul>
    </nav>
    <nav class="container">
      <div class="burger-menu-container">
        <div>
          <a href="index.html" class="">
            <h2 class="title--logo-primary">Stampee's</h2>
          </a>
        </div>
        <a class="burger-loupe-container" href="timbre.html">
          <span class="material-icons burger-loupe">search</span>
        </a>
        <button class="hamburger">
          <span class="menu-icon material-icons">menu</span>
          <span class="close-icon material-icons">close</span>
        </button>
        <ul class="burger-menu">
          <li><a href="timbre.html">Enchères</a></li>
          <li><a href="timbre.html">Actualités</a></li>
          <li><a href="timbre.html">Se connecter</a></li>
          <li><a href="timbre.html">S'inscrire</a></li>
        </ul>
      </div>
    </nav>
  </header>
 <!-- content-->
@yield('content')

  <footer class="footer">
    <div class="bg-container bg--dark-blue">
    </div>
    <nav class="container">
      <div class="menu-container py-xlarge">
        <!-- Logos et adresse -->
        <div class="footer-column">
          <div class="footer-column-group">
            <a href="#">
              <h2 class="title--logo-primary">Stampee's</h2>
            </a>
            <div class="footer-column-heading">
              <h2 class="title--logo-secondary">Enchères internationales</h2>
            </div>

            <div class="footer-column-heading">
              <p>101 Downing Street</p>
              <p>London SW1A 2AA, UK</p>
            </div>
          </div>

          <div class="footer-column-group">
            <div class="footer-column-heading">
              <h3 class="">Nous suivre</h3>
            </div>

            <!-- Facebook -->
            <span class="footer__item">
              <svg role="img" xmlns="http://www.w3.org/2000/svg" class="social-icon" viewBox="0 0 400 400">
                <path
                  d="M27.6 16C15.7 16 6.2 25 6.2 36.3v327.4c0 11.3 9.5 20.3 21.4 20.3h185.6V241.4h-50.4v-55.6h50.4V145c0-47.5 30.5-73.4 75.2-73.4 21.4 0 39.7 1.5 45.2 2.1v49.6h-30.9c-24.2 0-29 10.9-29 27v35.5h57.9l-7.5 55.6h-50.4V384h98.6c11.9 0 21.4-9 21.4-20.3V36.3C393.6 25 384.1 16 372.2 16H27.6z"
                  fill="#fff" />
              </svg>
            </span>

            <!-- Twitter -->
            <span class="footer__item">
              <svg role="img" xmlns="http://www.w3.org/2000/svg" class="social-icon" viewBox="0 0 400 400">
                <path
                  d="M127.1 359.3c148 0 228.9-122.5 228.9-228.9 0-3.5 0-6.9-.2-10.4 15.7-11.4 29.4-25.5 40.2-41.7-14.7 6.5-30.2 10.8-46.1 12.7 16.7-10 29.4-25.9 35.3-44.5-15.7 9.4-33.1 15.9-51 19.6-30.4-32.5-81.5-33.9-113.7-3.5-20.8 19.6-29.8 49-23.3 76.8-64.7-3.3-124.9-33.7-165.8-84.1C9.9 92 20.9 139 56.3 162.7c-12.9-.4-25.3-3.9-36.5-10v1c0 38.4 26.9 71.3 64.5 78.8-11.8 3.3-24.3 3.7-36.3 1.4 10.6 32.7 40.6 55.1 75.1 55.9-28.4 22.5-63.7 34.5-99.8 34.5-6.3 0-12.9-.4-19.2-1.2 36.4 23.7 79.3 36.2 123 36.2"
                  fill="#fff" />
              </svg>
            </span>

            <!-- Instagram -->
            <span class="footer__item">
              <svg role="img" xmlns="http://www.w3.org/2000/svg" class="social-icon" viewBox="0 0 400 400">
                <g fill="#fff">
                  <path
                    d="M282.4 16H117.6C61.5 16 16 61.5 16 117.6v164.9c0 56 45.5 101.6 101.6 101.6h164.9c56 0 101.6-45.5 101.6-101.6V117.6C384 61.5 338.5 16 282.4 16zm68.9 266.4c0 38-30.9 68.9-68.9 68.9H117.6c-38 0-68.9-30.9-68.9-68.9V117.6c0-38 30.9-68.9 68.9-68.9h164.9c38 0 68.9 30.9 68.9 68.9v164.8h-.1z" />
                  <path
                    d="M200 105.1c-52.3 0-94.9 42.5-94.9 94.9 0 52.3 42.5 94.9 94.9 94.9s94.9-42.6 94.9-94.9-42.6-94.9-94.9-94.9zm0 157.1c-34.3 0-62.2-27.9-62.2-62.2s27.9-62.2 62.2-62.2 62.2 27.9 62.2 62.2-27.9 62.2-62.2 62.2zM298.8 77.5c-6.3 0-12.5 2.6-16.9 7-4.5 4.4-7 10.6-7 16.9 0 6.3 2.6 12.5 7 16.9 4.4 4.4 10.6 7 16.9 7s12.5-2.6 16.9-7c4.5-4.5 7-10.7 7-16.9 0-6.3-2.6-12.5-7-16.9-4.4-4.5-10.5-7-16.9-7z" />
                </g>
              </svg>
            </span>
          </div>

          <div class="footer-column-group">
            <!-- Modes de paiement -->
            <div class="footer-column-heading">
              <h3 class="">Nos partenaires</h3>
            </div>

            <!-- Mastercard -->
            <span class="footer__item">
              <a href="timbre.html"><img class="u-margin-right-tiny" src="img/master_card.webp" alt="Mastercard"></a>
            </span>

            <!-- Visa -->
            <span class="footer__item">
              <a href="timbre.html"><img src="img/visa.webp" alt="Visa"></a>
            </span>
          </div>
        </div>

        <!-- Menu-secondaire -->
        <div class="footer-column">
          <div class="footer-column-group">
            <div class="footer-column-heading">
              <h3 class="">Nous contacter</h3>
            </div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="timbre.html">Royaume-Uni</a></li>
              <li class="menu-item"><a href="timbre.html">Canada</a></li>
              <li class="menu-item"><a href="timbre.html">US</a></li>
              <li class="menu-item"><a href="timbre.html">Australie</a></li>
            </ul>
          </div>

          <div class="footer-column-group">
            <div class="footer-column-heading">
              <h3 class="">Aide</h3>
            </div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="timbre.html">Créer un compte</a></li>
              <li class="menu-item"><a href="timbre.html">Suivre une enchère</a></li>
              <li class="menu-item"><a href="timbre.html">Trouver l’enchère désirée</a></li>
              <li class="menu-item"><a href="timbre.html">Comment placer une offre</a></li>
              <li class="menu-item"><a href="timbre.html">Contacter le webmestre</a></li>
            </ul>
          </div>
        </div>


        <!-- Menu-secondaire -->
        <div class="footer-column">
          <div class="footer-column-group">
            <div class="footer-column-heading">
              <h3 class="">À propos de Lord Reginald Stampee III</h3>
            </div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="timbre.html">La philatélie, c’est la vie</a></li>
              <li class="menu-item"><a href="timbre.html">Biographie du Lord</a></li>
              <li class="menu-item"><a href="timbre.html">Historique familial</a></li>
              <li class="menu-item"><a href="timbre.html">Choix des coups de coeur</a></li>
            </ul>
          </div>
          <div class="footer-column-group">
            <div class="footer-column-heading">
              <h3 class="">À propos de Stampee's</h3>
            </div>
            <ul class="footer-menu">
              <li class="menu-item"><a href="timbre.html">Termes et conditions</a></li>
              <li class="menu-item"><a href="timbre.html">Politique de confidentialité</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </footer>
</body>

</html>