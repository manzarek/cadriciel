@extends('layouts.app')
@section('title', config('app.name'))
@section('titleHeader', config('app.name'))
@section('content')
        <div class="row">
            <div class="col-12 text-center">
                <p>
                    Voir les étudiants du Collège de Maisonneuve
                </p>
                <a href="{{ route('college.index')}}" class="btn btn-outline-primary">Afficher les étudiants</a>
            </div>
        </div>
@endsection