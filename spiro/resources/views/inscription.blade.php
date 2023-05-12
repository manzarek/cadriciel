@extends('master')
@section('title', "Inscription")
@section('content')

<main>
    <div class="container">
    <div class="inscription-container">
        <section class="inscription">

        <div class="inscription-header">
            <h1>S'inscrire à Spiro</h1>
        </div>

        <form method="POST" action="inscription">
        @csrf
            <label>Nom d'usager</label>
            <input name="nom_usager" value="{{$data->nom_usager ?? ''}}">
            <span>&nbsp;{{$erreurs['nom_usager'] ?? ''}}</span>

            <label>Courriel</label>
            <input name="courriel" value="{{$data->courriel ?? ''}}">
            <span>&nbsp;{{$erreurs['courriel'] ?? ''}}</span>

            <label>Mot de passe</label>
            <input name="mot_de_passe" type="password" value="{{$data->mot_passe ?? ''}}">
            <span>&nbsp;{{$erreurs['mot_passe'] ?? ''}}</span>

            <label>Prénom</label>
            <input name="prenom" value="{{$data->prenom ?? ''}}">
            <span>&nbsp;{{$erreurs['prenom'] ?? ''}}</span>

            <label>Nom</label>
            <input name="nom" value="{{$data->nom ?? ''}}">
            <span>&nbsp;{{$erreurs['nom'] ?? ''}}</span>

            <input type="submit" value="Envoyer">

        </form>
        </section>
    </div>

    </div>
</main>

@endsection