@extends('layouts.master')

@section('title')
    | @parent
@stop
@section('meta')
    <meta name="title" content="" />
    <meta name="description" content="" />
@stop

@section('content')
    <div class="row">
        <h1>{!! $place->name !!}</h1>
        <div>
            {!! $place->description !!}
        </div>
    </div>

    <div class="row">
        <a href="">{!! trans('place::places.go-to-index') !!}</a>
    </div>
@stop
