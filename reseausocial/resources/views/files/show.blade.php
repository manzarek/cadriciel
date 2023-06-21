@extends('layouts.app')
@section('title', trans('lang.text_file'))
@section('titleHeader', trans('lang.text_file'))
@section('content')

@php $lang = session('locale') @endphp

        <div class="row mt-5">
            <div class="col-12">
                <a href="{{route('files.index')}}" class="btn btn-outline-primary btn-sm">@lang('lang.text_btn_back')</a>
                <hr>
                <h2 class='display-6 mt-5' >
                  @if($filePost->language_id == 3)
                    @if($lang == 'en')
                        <a href="{{url('uploads', $filePost->filename)}}">{{$filePost->title}}</a>
                    @else
                        <a href="{{url('uploads', $filePost->filename)}}">{{$filePost->title_fr}}</a>
                    @endif
                  @elseif($filePost->language_id == 1)
                    <a href="{{url('uploads', $filePost->filename)}}">{{$filePost->title}}</a>
                  @elseif($filePost->language_id == 2)
                    <a href="{{url('uploads', $filePost->filename)}}">{{$filePost->title_fr}}</a>
                  @endif
                </h2>
                <p>
                    <strong>@lang('lang.text_user') :</strong> {{ $filePost->filePostHasUser->name }}
                </p>
            </div>
            <hr>
        </div>
        @if($user_id == $filePost->user_id)
        <div class="row">
            <div class="col-4">
                <a href="{{ route('files.edit', $filePost->id)}}" class="btn btn-success">@lang('lang.text_btn_modify')</a>
            </div>
            <div class="col-4">
               <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                    @lang('lang.text_btn_delete')
                </button>
            </div>
        </div>
        @endif


<!-- Modal -->
<div class="modal fade" id="modalDelete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">@lang('lang.text_btn_delete')</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @lang('lang.text_confirmation_delete') : {{ $filePost->id}} ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">@lang('lang.text_close')</button>
        <form method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value="@lang('lang.text_btn_delete')" class="btn btn-danger">
        </form>
      </div>
    </div>
  </div>
</div>


@endsection
