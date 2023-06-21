@extends('layouts.app')
@section('title',  trans('lang.text_add_file'))
@section('titleHeader', trans('lang.text_add_file'))
@section('content')
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        @lang('lang.text_form')
                    </div>
                    <div class="card-body">

                        <fieldset>
                            <label for="language">@lang('lang.text_files_language')</label>

                            <div>
                                <input type="radio" id="french" name="language" value="french" {{ old('language') =='french' ? 'checked' : ''}}>
                                <label for="french">@lang('lang.text_french')</label>
                            </div>
                            <div>
                                <input type="radio" id="english" name="language" value="english" {{ old('language') =='english' ? 'checked' : ''}}>
                                <label for="english">@lang('lang.text_english')</label>
                            </div>
                            <div>
                                <input type="radio" id="english" name="language" value="bilingual" {{ old('language') =='bilingual' ? 'checked' : ''}}>
                                <label for="bilingual">@lang('lang.text_bilingual')</label>
                            </div>
                        </fieldset>
                        <br>
                        <label for="titleFrench">@lang('lang.text_title_french')</label>
                        <input type="text" id="title" name="titleFrench" class="form-control" value="{{ old('titleFrench') }}">
                        <label for="titleEnglish">@lang('lang.text_title_english')</label>
                        <input type="text" id="title" name="titleEnglish" class="form-control" value="{{ old('titleEnglish') }}">
                        <label for="file">@lang('lang.text_file')</label>
                        <input type="file" accept=".zip, .pdf, .doc" id="file" name="file" class="form-control" required>
                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="@lang('lang.text_btn_save')">
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection