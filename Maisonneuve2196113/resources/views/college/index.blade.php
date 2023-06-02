@extends('layouts.app')
@section('title', 'Liste des étudiants')
@section('titleHeader', 'Étudiants')
@section('content')
        <div class="row">
            <div class="col-8">
                <p>Cliquez sur un étudiant pour voir les infos</p>
            </div>
            <div class="col-4">
                <p>Créer un nouvel étudiant</p>
                <a href="{{route('college.create')}}"class="btn btn-primary btn-sm">Ajouter</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Liste des étudiants</h4>
                    </div>
                    <div class="card-body">
                        <!-- <ul>
                            @forelse($etudiants as $etudiant)
                                <li><a href="{{ route('college.show', $etudiant->id)}}">{{$etudiant->nom}}</a></li>
                            @empty
                                <li class="text-danger">Aucun étudiant trouvé</li>
                            @endforelse
                        </ul> -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                     <th scope="col">
                                        Id
                                    </th>
                                    <th scope="col">
                                        Nom de l'étudiant
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @forelse($etudiants as $etudiant)
                                <tr>
                                    <td>
                                        {{$etudiant->id}}
                                    </td>
                                    <td>
                                        <a href="{{ route('college.show', $etudiant->id)}}">{{$etudiant->nom}}</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>
                                        ND
                                    </td>
                                    <td>
                                        <p class="text-danger">Aucun étudiant trouvé</p>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection