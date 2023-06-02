@extends('layouts.app')
@section('title', config('app.name'))

@section('content')
        <div class="row">
            <div class="col-12 text-center">
                <h2>
                    Voir les étudiants du Collège de Maisonneuve
                </h2>
                <a href="{{ route('college.index')}}" class="btn btn-outline-primary">Afficher les étudiants</a>
            </div>
        </div>
@endsection