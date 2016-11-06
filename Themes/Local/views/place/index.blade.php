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
        <ul>
        @foreach($places as $place)
            <li><a href="{{ route('place.show', [$place->slug]) }}">{!! $place->name !!}, {!! $place->zip !!} {!! $place->city !!}, {!! $place->phone !!}</a></li>
        @endforeach
        </ul>
    </div>
@stop
