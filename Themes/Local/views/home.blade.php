@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')
    <div class="row">
        {!! $page->body !!}
        <h1>{!! trans('Excahnge market') !!}</h1>
    </div>

    <div class="row">

        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="text-center">{!! trans('give') !!}</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="text-center">{!! trans('get') !!}</p>
        </div>

    </div>


    <div class="row">

        <h1>{!! trans('Local restaurants') !!}</h1>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="text-center">{!! trans('restaurants') !!}</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="text-center">{!! trans('food') !!}</p>
        </div>

    </div>

@stop
