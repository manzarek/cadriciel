@extends('master')
@section('title', "Catalogue de timbres")
@section('content')

  <main>
    <div class="container">
      <div class="filters__main-container">
        <aside class="filters">
          <details class="filter-box">
            <summary class="filter-title">
              <h2>Origine</h2>
            </summary>
            <div class="filter-group">
              <input type="hidden" name="origine[]">
              <label class="checkbox-label">
                <input type="checkbox">
                Afrique
                <span class="count">(3,949)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Asie
                <span class="count">(4,274)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Australie & Océanie
                <span class="count">(7,847)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Canada
                <span class="count">(10,567)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Commonwealth
                <span class="count">(52,528)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Caraïbes
                <span class="count">(2,3409)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Europe
                <span class="count">(34,456)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Grande-Bretagne
                <span class="count">(15,843)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Amérique centrale & du sud
                <span class="count">(6,429)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Moyen-Orient
                <span class="count">(3,948)</span>
              </label>
            </div>
          </details>

          <details class="filter-box">
            <summary class="filter-title">
              <h2>Condition</h2>
            </summary>
            <div class="filter-group">
              <input type="hidden" name="origine[]">
              <label class="checkbox-label">
                <input type="checkbox">
                Impeccable
                <span class="count">(52,734)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Non utilisé
                <span class="count">(23,857)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Utilisé
                <span class="count">(56,957)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Enveloppe premier jour
                <span class="count">(7,474)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Non spécifié
                <span class="count">(2,635)</span>
              </label>
            </div>
          </details>

          <details class="filter-box">
            <summary class="filter-title">
              <h2>Centrage</h2>
            </summary>
            <div class="filter-group">
              <input type="hidden" name="origine[]">
              <label class="checkbox-label">
                <input type="checkbox">
                Superbe
                <span class="count">(7,174)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                XF/Superbe
                <span class="count">(4,409)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                XF
                <span class="count">(13,760)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                VF/XF
                <span class="count">(10,915)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                VF
                <span class="count">(51,845)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Bien
                <span class="count">(38,350)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                VG et moins
                <span class="count">(581)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Non spécifié
                <span class="count">(10,845)</span>
              </label>
            </div>
          </details>

          <details class="filter-box">
            <summary class="filter-title">
              <h2>A un certificat</h2>
            </summary>
            <div class="filter-group">
              <input type="hidden" name="origine[]">
              <label class="checkbox-label">
                <input type="checkbox">
                Oui
                <span class="count">(2,174)</span>
              </label>
              <label class="checkbox-label">
                <input type="checkbox">
                Non
                <span class="count">(133,834)</span>
              </label>
            </div>
          </details>

          <details class="filter-box">
            <summary class="filter-title">
              <h2>Année de parution</h2>
            </summary>
            <div class="filter-group">

              <input id="year_from" type="text" name="year_from[]">
              -
              <input id="year_to" type="text" name="year_to[]">
              <div class="label-intervalle">
                <label for="year_from">(Début</label>
                <span> - </span>
                <label for="year_to">Fin)</label>
              </div>
            </div>
          </details>
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
            <h1>Parcourir toutes les enchères.</h1>
            <div class="listing-options">
              <ul>
                <li>
                  <a class="browsing-link active" href="timbre.html">Toutes les enchères</a>
                </li>
                <li>
                  <a class="browsing-link desactive" href="timbre.html">Enchères courantes</a>
                </li>
                <li>
                  <a class="browsing-link desactive" href="timbre.html">Enchères passées</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="browsing-header">
            <div>
              <p> <strong>135498</strong> annonces trouvées. Affichage des résultats <strong>1</strong> à
                <strong>12</strong>.
              </p>
            </div>
          </div>

          <div class="grid grid--quatre mt-small">
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/1.webp')}}" alt="USA 1918 #C1 -- Used Airmail -- Curtis Jenny, orange">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>USA 1918 #C1 -- Used Airmail -- Curtis Jenny, orange</h2>
                    <div class="pricing-container">
                      <span>4.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        9h 4m | <span>9</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/2.webp')}}" alt="DERATE 1862 Sc #4 Pair Stone 3 VF MNH PSAG Cert. Cat $1500++">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>CONFEDERATE 1862 Sc #4 Pair Stone 3 VF MNH PSAG Cert. Cat $1500++</h2>
                    <div class="pricing-container">
                      <span>749.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        12h 5m | <span>25</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
                <span class="coup-de-coeur material-symbols-outlined">
                  favorite
                </span>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/3.webp')}}"
                    alt="24 F-VF original gum previously hinged with nice color cv $ 140 ! see pic !">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>24 F-VF original gum previously hinged with nice color cv $ 140 ! see pic !</h2>
                    <div class="pricing-container">
                      <span>57.50$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        14h 7m | <span>3</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/4.webp')}}"
                    alt="Stamps-Great Britain-Scott# MH165-MH167 - Mint Never Hinged Part Set of 3 Stamps">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Stamps-Great Britain-Scott# MH165-MH167 - Mint Never Hinged Part Set of 3 Stamps</h2>
                    <div class="pricing-container">
                      <span>2.83$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        15h 12m
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/5.webp')}}" alt="Danzig Used #J47 has no faults">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Danzig Used #J47 has no faults</h2>
                    <div class="pricing-container">
                      <span>55.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        1 jour 20h | <span>5</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/6.webp')}}" alt="Aden States Mint H -Kathirs State of Seiyun #1-">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Aden States Mint H -Kathirs State of Seiyun #1-41 +Quaiti of Shihr+Mukalla #1-52</h2>
                    <div class="pricing-container">
                      <span>225.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        1 jour 21h | <span>17</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/7.webp')}}" alt="Great Britain # 180 used">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Great Britain # 180 used</h2>
                    <div class="pricing-container">
                      <span>65.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        1 jour 23h | <span>6</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/8.webp')}}" alt="3986: GB: SG526 9d Bronze-Green 1954. MM Mint. Sc303 Mi268X. c£23">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>3986: GB: SG526 9d Bronze-Green 1954. MM Mint. Sc303 Mi268X. c£23</h2>
                    <div class="pricing-container">
                      <span>3.90$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        2 jours 4h | <span>2</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
                <span class="coup-de-coeur material-symbols-outlined">
                  favorite
                </span>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/9.webp')}}" alt="Stamps - Great Britain - Scott# 39 - Used Single Stamp">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Stamps - Great Britain - Scott# 39 - Used Single Stamp</h2>
                    <div class="pricing-container">
                      <span>28.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        2 jours 22h | <span>9</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/10.webp')}}"
                    alt="Stamps - Great Britain - Scott# MH170, MH175 - Used Part Set of 2 Machin Stamps">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Stamps - Great Britain - Scott# MH170, MH175 - Used Part Set of 2 Machin Stamps</h2>
                    <div class="pricing-container">
                      <span>4.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        3 jours 17h
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/11.webp')}}"
                    alt="Great Britain #141a (SG #319) Very Fine Used Bright Blue **With Certificate**">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Great Britain #141a (SG #319) Very Fine Used Bright Blue **With Certificate** </h2>
                    <div class="pricing-container">
                      <span>227.50$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        4 jours 20h | <span>11</span>
                        mises
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>
            <div class="tile">
              <a href="timbre.html">
                <div class="image">
                  <img src="{{asset('assets/img/12.webp')}}" alt="Great Britain a small lot of better pre decimal items">
                </div>
                <div class="title">
                  <div class="title-container">
                    <h2>Great Britain a small lot of better pre decimal items</h2>
                    <div class="pricing-container">
                      <span>8.00$</span>
                    </div>
                    <div class="auction-container">
                      <div class="bid-ends">
                        4 jours 21h | <span>42</span>
                        mises
                      </div>
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
                <li><a class="active browsing-link" href="timbre.html">12</a></li>
                <li><a class="desactive browsing-link" href="timbre.html">24</a></li>
                <li><a class="desactive browsing-link" href="timbre.html">48</a></li>
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
                <li><a class="browsing-link active" href="timbre.html">1</a></li>
                <li><a class="browsing-link desactive" href="timbre.html">2</a></li>
                <li><a class="browsing-link desactive" href="timbre.html">3</a></li>
                <li><a class="browsing-link desactive" href="timbre.html">4</a></li>
                <li><a class="browsing-link desactive" href="timbre.html">5</a></li>
                <li><a class="browsing-link desactive" href="timbre.html">...</a></li>
                <li><a class="browsing-link desactive" href="timbre.html">Suivant</a></li>
              </ul>
            </div>
          </div>
        </section>
      </div>
    </div>
  </main>
  
@endsection