@extends('master')
@section('title', "Aspirateurs Spiro")
@section('content')
 
 <main class="main">
    <div class="spiro-hero">
      <div class="container">
        <div class="hero-container">
          <img src="{{asset('assets/img/hero-spiro.webp')}}" alt="Image d'un aspirateur">
            <div class="spiro-hero-txt">
              <h1>Les aspirateurs, notre passion</h1>
            </div>
        </div>

      </div>
    </div>


    <div class="statement">
      <div class="container">
        <div class="statement-container">
          <div class="statement-block">
            <div class="statement-title">
              <h2>Tout sur les aspirateurs</h2>
            </div>
            <div class="statement-subtitle">
              <h3>Notre plateforme est spécialement conçue pour comprendre vos besoins.</h3>
            </div>
          </div>
          <div class="statement-block">
            <div class="statement-title">
              <h2>Soyez en confiance</h2>
            </div>
            <div class="statement-subtitle">
              <h3>Les aspirateurs offerts sur Spiro sont choisis soigneusement et garantis par la
                protection PayPal. </h3>
            </div>
          </div>
          <div class="statement-block">
            <div class="statement-title">
              <h2>Plus de 250 modèles</h2>
            </div>
            <div class="statement-subtitle">
              <h3>Parcourez des modèles d'aspirateurs du monde entier.</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <div class="container">
      <div class="newsletter decorateur">
        <img src="{{asset('assets/img/newsletter2.webp')}}" alt="Photo d'un aspirateur">
        <div class="newsletter-txt">
          <div class="newsletter-header">
            <h2>Suivez les offres vedettes!</h2>
          </div>
          <div class="newsletter-txt__subtitle">
            <h3>Inscrivez-vous à l'infolettre Spiro ! </h3>
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