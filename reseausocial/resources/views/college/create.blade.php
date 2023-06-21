@extends('layouts.app')
@section('title', trans('lang.text_add_student'))
@section('titleHeader', trans('lang.text_add_student'))
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    <div class="card-header">
                        @lang('lang.text_form')
                    </div>
                    <div class="card-body">
                        <label for="title">@lang('lang.text_name')</label>
                        <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}" required>
                        <label for="email">@lang('lang.text_email')</label>
                        <input  type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        <label for="password">@lang('lang.text_password')</label>
                        <input  type="password" id="" name="password" class="form-control" value="{{ old('password') }}" required minlength="2" maxlength="20">
                        <label for="password">@lang('lang.text_password_confirmation')</label>
                        <input  type="password" id="password_confirmation" name="password_confirmation" class="form-control" value="{{ old('password') }}" required minlength="2" maxlength="20">
                        <label for="adresse">@lang('lang.text_address')</label>
                        <input  type="text" id="adresse" name="adresse" class="form-control" value="{{ old('adresse') }}" required>
                        <label for="telephone">@lang('lang.text_phone')</label>
                        <input  type="text" id="telephone" name="telephone" class="form-control" value="{{ old('telephone') }}" required>
                        <label for="date_naissance">@lang('lang.text_birth_date')</label>
                        <input  type="text" id="date_naissance" name="date_naissance" class="form-control" value="{{ old('date_naissance') }}" required>
                        <label for="ville">@lang('lang.text_city')</label>
                        <select name="ville_id" id="ville" class="form-control">
                            @foreach($villes as $ville)
                            <option value="{{ $ville->id }}">{{ $ville->nom }}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="@lang('lang.text_btn_save')">
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection