@extends('layouts.app')
@section('title', trans('lang.text_list_articles'))
@section('titleHeader', trans('lang.text_articles'))
@section('content')

@php $lang = session('locale') @endphp

        <div class="row">
            <div class="col-8">
                <p>@lang('lang.text_click_articles')</p>
            </div>
            <div class="col-4">
                <p>@lang('lang.text_create_articles')</p>
                <a href="{{route('forum.create')}}"class="btn btn-primary btn-sm">Ajouter</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('lang.text_list_articles')</h4>
                    </div>
                    <div class="card-body">
                        <ul>
                            @forelse($posts as $post)
                                @if($post->language_id == 3)
                                    @if($lang == 'en')
                                        <li><a href="{{ route('forum.show', $post->id)}}">{{$post->title}}</a></li>
                                    @else
                                        <li><a href="{{ route('forum.show', $post->id)}}">{{$post->title_fr}}</a></li>
                                    @endif
                                @elseif($post->language_id == 1)
                                    <li><a href="{{ route('forum.show', $post->id)}}">{{$post->title}}</a></li>
                                @elseif($post->language_id == 2)
                                    <li><a href="{{ route('forum.show', $post->id)}}">{{$post->title_fr}}</a></li>
                                @endif
                            @empty
                                <li class="text-danger">@lang('lang.text_no_article_found')</li>
                            @endforelse
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@endsection