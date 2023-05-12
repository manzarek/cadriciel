@extends('master')
@section('title', "A propos de Lord Stampee")
@section('content')

<main>
    <div class="container">
      <div class="lord-presentation decorateur">
        <div class="lord-txt">
          <div class="lord-title">
            <h2>Rencontrez Monsieur Spiro</h2>
          </div>
          <div class="lord-subtitle">
            <h3>Sa réputation de réparateur n'est plus à faire.</h3>
          </div>
          <div class="lord-subtitle">
            <h3>Son expertise en aspirateurs est reconnue par les gens du monde entier.</h3>
          </div>
          <a class="lord-link" href="">
            <span>Le contacter</span>
          </a>
        </div>
        <img src="{{asset('assets/img/mr_spiro.jpeg')}}" alt="Photo de Monsieur Spiro">
      </div>
    </div>
</main>

@endsection