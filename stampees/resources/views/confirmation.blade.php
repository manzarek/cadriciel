@extends('master')
@section('title', "Confirmation d'inscription")
@section('content')

<main>
    <div class="container">
        <div class="inscription-confirmation">
            <h2>Bravo! Vous êtes maintenant inscrit à Stampee's. Vos informations:</h2>
            <br>
            <h2>Prénom: {{$data->prenom}}</h2>
            <h2>Nom: {{$data->nom}}</h2>
            <h2>Nom d'usager: {{$data->nom_usager}}</h2>
            <h2>Courriel: {{$data->courriel}}</h2>
        </div>

    </div>
</main>

@endsection