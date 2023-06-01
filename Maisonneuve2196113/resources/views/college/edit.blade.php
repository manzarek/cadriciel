@extends('layouts.app')
@section('title', 'Modifier un étudiant')
@section('titleHeader', 'Modifier un étudiant')
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        Formulaire
                    </div>
                    <div class="card-body">
                        <label for="title">Nom</label>
                        <input type="text" id="nom" name="nom" class="form-control" value="{{$etudiant->nom}}">
                        <label for="adresse">Adresse</label>
                        <input  type="text" id="adresse" name="adresse" class="form-control" value="{{$etudiant->adresse}}">
                        <label for="telephone">Téléphone</label>
                        <input  type="text" id="telephone" name="telephone" class="form-control" value="{{$etudiant->telephone}}">
                        <label for="email">Courriel</label>
                        <input  type="email" id="email" name="email" class="form-control" value="{{$etudiant->email}}">
                        <label for="date_naissance">Date de naissance</label>
                        <input  type="text" id="date_naissance" name="date_naissance" class="form-control" value="{{$etudiant->date_naissance}}">
                        <label for="ville">Ville</label>
                        <select name="ville_id" id="ville" class="form-control">
                            @foreach($villes as $ville)
                            <option value="{{ $ville->id }}" {{ $etudiant->ville_id == $ville->id ? 'selected' : ''}}>{{ $ville->nom }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection