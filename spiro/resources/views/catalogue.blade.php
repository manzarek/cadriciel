@extends('master')
@section('title', "Catalogue d'aspirateurs")
@section('content')

  <main>
    <div class="container">
      <div class="filters__main-container">
        <aside class="filters">
          <details class="filter-box">
            <summary class="filter-title">
              <h2>Prix</h2>
            </summary>
            <div class="filter-group">
              <input id="price_from" type="text" name="price_from[]">
              $ -
              <input id="price_to" type="text" name="price_to[]">
              $
              <div class="label-intervalle">
                <label for="price_from">(Début</label>
                <span> - </span>
                <label for="price_to">Fin)</label>
              </div>
            </div>
          </details>
        </aside>
        <section class="content-container">
          <div class="browsing-header">
            <h1>Parcourir tous les modèles.</h1>
          </div>
          <div class="browsing-header">
            <div>
              <p> <strong>256</strong> modèles trouvés. Affichage des résultats <strong>1</strong> à
                <strong>4</strong>.
              </p>
            </div>
          </div>

          <div class="grid grid--quatre mt-small">
            <div class="tile">
              <a href="">
                <div class="image">
                  <img src="{{asset('assets/img/13.webp')}}" alt="Aspirateur poussières jvp180-james">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Aspirateur poussières jvp180-james</h2>
                    <div class="pricing-container">
                      <span>399.00$</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="">
                <div class="image">
                  <img src="{{asset('assets/img/2.jpg')}}" alt="Aspirateur eau & poussière 18V ONE+">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Aspirateur eau & poussière 18V ONE+</h2>
                    <div class="pricing-container">
                      <span>449.00$</span>
                    </div>
                  </div>
                </div>
                <span class="coup-de-coeur material-symbols-outlined">
                  favorite
                </span>
              </a>
            </div>
            <div class="tile">
              <a href="">
                <div class="image">
                  <img src="{{asset('assets/img/3.jpg')}}"
                    alt="BISSELL - Aspirateur à bidon - Zing Bagged- Léger et compact - Aspiration droite - Pour sols durs et tapis à poils courts - Rouge">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>BISSELL - Aspirateur à bidon - Zing Bagged- Léger et compact - Aspiration droite - Pour sols durs et tapis à poils courts - Rouge</h2>
                    <div class="pricing-container">
                      <span>199.99$</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="">
                <div class="image">
                  <img src="{{asset('assets/img/4.jpg')}}"
                    alt="iwoly V600 Aspirateur filaire sans sac et aspirateur à main avec cordon d'alimentation de 7 m de long">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>iwoly V600 Aspirateur filaire sans sac et aspirateur à main avec cordon d'alimentation de 7 m de long</h2>
                    <div class="pricing-container">
                      <span>69.99$</span>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            
          </div>
          <div class="browsing-footer">
            <div class="items-per-page">
              <ul>
                <li><span class="browsing-text browsing-link">Items par page:</span></li>
                <li><a class="active browsing-link" href="">4</a></li>
                <li><a class="desactive browsing-link" href="">12</a></li>
                <li><a class="desactive browsing-link" href="">24</a></li>
              </ul>
            </div>
            <div class="pagination">
              <ul>
                <li>
                  <label class="browsing-text browsing-link" for="numero_page">Aller à la page:</label>
                </li>

                <li>
                  <div class="browsing-text browsing-link">

                    <form action="fiche.html">
                      <input id="numero_page" type="text" value="1">
                    </form>
                  </div>
                </li>
              </ul>
            </div>
            <div class="pagination">
              <ul>
                <li><a class="browsing-link active" href="">1</a></li>
                <li><a class="browsing-link desactive" href="">2</a></li>
                <li><a class="browsing-link desactive" href="">3</a></li>
                <li><a class="browsing-link desactive" href="">4</a></li>
                <li><a class="browsing-link desactive" href="">5</a></li>
                <li><a class="browsing-link desactive" href="">...</a></li>
                <li><a class="browsing-link desactive" href="">Suivant</a></li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
  
@endsection