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
        @foreach($tweets as $tweet)
            <li>
                {!! $tweet->getText() !!}
            </li>
        @endforeach
        </ul>
    </div>
@stop
