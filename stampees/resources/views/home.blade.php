@extends('master')
@section('title', "Enchères Stampee's")
@section('content')
 
 <main class="main">
    <div class="hero">
      <div class="hero-img-container">
        <img src="{{asset('assets/img/hero.webp')}}" alt="Image d'une collection de timbres">
      </div>
      <div class="container">
        <div class="hero-txt">
          <div class="hero-title">
            <h1>Par les collectionneurs,
              pour les collectionneurs</h1>
          </div>
          <div class="hero-subtitle">
            <h2>Stampee's propose des enchères de timbres et de collections de timbres
              aux philatélistes du monde entier </h2>
          </div>
          <div class="hero-cta">
            <a href="catalogue" class="lord-link mt-xsmall">
              <span>Parcourir les enchères</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="carrousel-header">
        <h2>Enchères populaires</h2>
        <a href="timbre.html" class="carrousel-link">
          Voir toutes les fiches
          <span class="material-icons arrow">
            arrow_forward
          </span>
        </a>
      </div>
      <div class="carrousel">
        <div class="carrousel-grid grid--douze">
          <div class="tile">
            <a href="timbre.html">
              <div class="image">
                <img src="{{asset('assets/img/1.webp')}}" alt="USA 1918 #C1 -- Used Airmail -- Curtis Jenny, orange">
              </div>
              <div class="title">
                <div class="title-container">
                  <h3>USA 1918 #C1 -- Used Airmail -- Curtis Jenny, orange</h3>
                  <div class="pricing-container">
                    <span>40.00$</span>
                  </div>
                  <div class="auction-container">
                    <div class="bid-ends">
                      9h 4m | <span>29</span>
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
                <img src="{{asset('assets/img/2.webp')}}" alt="CONFEDERATE 1862 Sc #4 Pair Stone 3 VF MNH PSAG Cert. Cat $1500++">
              </div>
              <div class="title">
                <div class="title-container">
                  <h3>CONFEDERATE 1862 Sc #4 Pair Stone 3 VF MNH PSAG Cert. Cat $1500++</h3>
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
              <span class="coup-de-coeur material-icons">
                favorite
              </span>
            </a>
          </div>
          <div class="tile">
            <a href="timbre.html">
              <div class="image">
                <img src="{{asset('assets/img/3.webp')}}" alt="24 F-VF original gum previously hinged with nice color cv $ 140 ! see pic !">
              </div>
              <div class="title">
                <div class="title-container">
                  <h3>24 F-VF original gum previously hinged with nice color cv $ 140 ! see pic !</h3>
                  <div class="pricing-container">
                    <span>57.50$</span>
                  </div>
                  <div class="auction-container">
                    <div class="bid-ends">
                      14h 7m | <span>33</span>
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
                  <h3>Stamps-Great Britain-Scott# MH165-MH167 - Mint Never Hinged Part Set of 3 Stamps</h3>
                  <div class="pricing-container">
                    <span>280.00$</span>
                  </div>
                  <div class="auction-container">
                    <div class="bid-ends">
                      15h 12m | <span>41</span>
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
                <img src="{{asset('assets/img/5.webp')}}" alt="Danzig Used #J47 has no faults">
              </div>
              <div class="title">
                <div class="title-container">
                  <h3>Danzig Used #J47 has no faults</h3>
                  <div class="pricing-container">
                    <span>234.00$</span>
                  </div>
                  <div class="auction-container">
                    <div class="bid-ends">
                      1 jour 20h | <span>55</span>
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
                <img src="{{asset('assets/img/6.webp')}}"
                  alt="Aden States Mint H -Kathirs State of Seiyun #1-41 +Quaiti of Shihr+Mukalla #1-52">
              </div>
              <div class="title">
                <div class="title-container">
                  <h3>Aden States Mint H -Kathirs State of Seiyun #1-41 +Quaiti of Shihr+Mukalla #1-52</h3>
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
        
        </div>
        <button class="carrousel-right-btn">
          <span class="material-icons carrousel-chevron-right">
            chevron_right
          </span>
        </button>
      </div>
    </div>
    <div class="statement">
      <div class="container">
        <div class="statement-container">
          <div class="statement-block">
            <div class="statement-title">
              <h2>Tout sur les timbres</h2>
            </div>
            <div class="statement-subtitle">
              <h3>Notre plateforme est spécialement conçue pour comprendre les collectionneurs et leur passion.</h3>
            </div>
          </div>
          <div class="statement-block">
            <div class="statement-title">
              <h2>Soyez en confiance</h2>
            </div>
            <div class="statement-subtitle">
              <h3>Les timbres offerts sur Stampee's sont choisis soigneusement par Lord Stampee et garantis par la
                protection PayPal. </h3>
            </div>
          </div>
          <div class="statement-block">
            <div class="statement-title">
              <h2>Plus de 100 000 offres</h2>
            </div>
            <div class="statement-subtitle">
              <h3>Parcourez une collection exhaustive de timbres du monde entier.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="container">
      <div class="newsletter decorateur">
        <img src="{{asset('assets/img/newsletter.webp')}}" alt="Photo d'un timbre rare">
        <div class="newsletter-txt">
          <div class="newsletter-header">
            <h2>Suivez les enchères de timbres les plus courues</h2>
          </div>
          <div class="newsletter-txt__subtitle">
            <h3>Inscrivez-vous à l'infolettre Stampee's ! </h3>
          </div>
          <label class="hidden-menu" for="courriel">Inscription à l'infolettre</label>
          <form action="index.html">
            <div class="input-container">
              <input type="text" id="courriel" name="courriel" placeholder="Votre courriel">
            </div>
            <button><span>S'inscrire</span></button>
          </form>
          <div class="newsletter-agreement">
            <h4>En cliquant sur s'inscrire, je consens à ce que soient traitées mes données de courriel.</h4>
          </div>
        </div>
      </div>
    </div>

  </main>

  @endsection