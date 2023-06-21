@extends('layouts.app')
@section('title', trans('lang.text_students'))
@section('titleHeader',  trans('lang.text_students'))
@section('content')

        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('lang.text_student_list')</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        @lang('lang.text_student_name')
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @forelse($etudiants as $etudiant)
                                <tr>
                                    <td>
                                        {{$etudiant->name}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>
                                        <p class="text-danger">@lang('lang.text_student_not_found')</p>
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