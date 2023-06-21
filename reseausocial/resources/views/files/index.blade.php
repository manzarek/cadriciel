@extends('layouts.app')
@section('title', trans('lang.text_files'))
@section('titleHeader',  trans('lang.text_files'))
@section('content')

@php $lang = session('locale') @endphp

        <div class="row">
            <div class="col-8">
                <p>@lang('lang.text_click_files')</p>
            </div>
            <div class="col-4">
                <p>@lang('lang.text_upload_files')</p>
                <a href="{{route('files.create')}}"class="btn btn-primary btn-sm">@lang('lang.text_btn_add')</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>@lang('lang.text_list_files')</h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-striped">
                            <thead>
                                <tr>
                                     <th scope="col">
                                        @lang('lang.text_title_file')
                                    </th>
                                    <th scope="col">
                                        @lang('lang.text_user')
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                            @forelse($posts as $post)
                                <tr>
                                    <td>
                                    @if($post->language_id == 3)
                                        @if($lang == 'en')
                                            <a href="{{ route('files.show', $post->id)}}">{{$post->title}}</a>
                                        @else
                                            <a href="{{ route('files.show', $post->id)}}">{{$post->title_fr}}</a>
                                        @endif
                                    @elseif($post->language_id == 1)
                                        <a href="{{ route('files.show', $post->id)}}">{{$post->title}}</a>
                                    @elseif($post->language_id == 2)
                                        <a href="{{ route('files.show', $post->id)}}">{{$post->title_fr}}</a>
                                    @endif

                                    </td>
                                    <td>
                                        {{$post->name}}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td>
                                        ND
                                    </td>
                                    <td>
                                        <p class="text-danger">@lang('lang.text_no_file_found')</p>
                                    </td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
            {{ $posts->links('pagination::bootstrap-4') }}



@endsection