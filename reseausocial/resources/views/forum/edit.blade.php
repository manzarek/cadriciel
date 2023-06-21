@extends('layouts.app')
@section('title', trans('lang.text_modify_article'))
@section('titleHeader', trans('lang.text_modify_article'))
@section('content')
@php $lang = session('locale') @endphp
    <div class="row mt-4 justify-content-center">
        <div class="col-6">
            <div class="card">
                <form method="post">
                    @csrf
                    @method('put')
                    <div class="card-header">
                        @lang('lang.text_form')
                    </div>
                    <div class="card-body">

                        <fieldset>
                            <label for="language">@lang('lang.text_article_language')</label>
                            <div>
                                <input type="radio" id="french" name="language" value="french" {{$forumPost->language_id == 2 ? 'checked' : ''}}>
                                <label for="french">@lang('lang.text_french')</label>
                            </div>
                            <div>
                                <input type="radio" id="english" name="language" value="english" {{$forumPost->language_id == 1 ? 'checked' : ''}}>
                                <label for="english">@lang('lang.text_english')</label>
                            </div>
                            <div>
                                <input type="radio" id="bilingual" name="language" value="bilingual"  {{$forumPost->language_id == 3 ? 'checked' : ''}}>
                                <label for="bilingual">@lang('lang.text_bilingual')</label>
                            </div>
                        </fieldset>                        
                        <br>
                        <label for="titleFrench">@lang('lang.text_title_french')</label>
                        <input type="text" id="title" name="titleFrench" class="form-control" value="{{$forumPost->title_fr}}">
                        <label for="bodyFrench">@lang('lang.text_article_french')</label>
                        <textarea name="bodyFrench" id="article-french" class="form-control">{{$forumPost->body_fr}}</textarea>
                        <br>
                        <label for="titleEnglish">@lang('lang.text_title_english')</label>
                        <input type="text" id="title" name="titleEnglish" class="form-control" value="{{$forumPost->title}}">
                        <label for="bodyEnglish">@lang('lang.text_article_english')</label>
                        <textarea name="bodyEnglish" id="article-english" class="form-control">{{$forumPost->body}}</textarea>

                    </div>
                    <div class="card-footer text-center">
                        <input type="submit" class="btn btn-success" value="@lang('lang.text_btn_save')">
                    </div>
                </form> 
            </div>
        </div>
    </div>
@endsection