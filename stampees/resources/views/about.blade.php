@extends('master')
@section('title', "A propos de Lord Stampee")
@section('content')

<main>
    <div class="container">
      <div class="lord-presentation decorateur">
        <div class="lord-txt">
          <div class="lord-title">
            <h2>Rencontrez Lord Reginald Stampee III</h2>
          </div>
          <div class="lord-subtitle">
            <h3>Sa réputation de collectionneur n'est plus à faire.</h3>
          </div>
          <div class="lord-subtitle">
            <h3>Son expertise en timbres rares est reconnue par les philatélistes du monde entier.</h3>
          </div>
          <a class="lord-link" href="timbre.html">
            <span>Le contacter</span>
          </a>
        </div>
        <img src="{{asset('assets/img/lord.webp')}}" alt="Photo de Lord Stampee">
      </div>
    </div>
</main>

@endsection