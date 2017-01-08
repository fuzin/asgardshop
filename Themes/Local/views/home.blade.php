@extends('layouts.master')

@section('title')
    {{ $page->title }} | @parent
@stop
@section('meta')
    <meta name="title" content="{{ $page->meta_title}}" />
    <meta name="description" content="{{ $page->meta_description }}" />
@stop

@section('content')

    <!--
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
    -->

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['route' => ['chat.user'], 'method' => 'post']) !!}
                <div class="form-group">
                    <div class="input-group">
                        <!--
                        <span class="input-group-addon" id="basic-addon1">Room</span>
                        -->
                        <!--
                        <div class="input-group-btn">
                            <div class="btn-group">
                                <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">
                                    <span data-bind="label" id="searchLabel">Public</span>
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Public</a></li>
                                    <li><a href="#">Private</a></li>
                                </ul>
                            </div>
                        </div>
                        -->

                        <span class="input-group-addon" id="basic-addon1">Chat room</span>
                        <input type="text" name="room" id="room" class="form-control" />
                        <span class="input-group-btn">
                            <button id="filter" class="btn btn-primary btn-block" onclick="searchStationTable();">
                                {!! trans('Join Room') !!}
                            </button>
                        </span>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="text-center">
                    <h2><i class="fa fa-comments-o"></i></h2>
                </div>
                <div class="text-center">
                    {!! trans("landing.messenger.teaser-text") !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h2><i class="fa fa-file-o"></i></h2>
                </div>
                <div class="text-center">
                    {!! trans("landing.files-sharing.teaser-text") !!}
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div>
                    <h2><i class="fa fa-shield"></i></h2>
                </div>
                <div>
                    {!! trans("landing.privacy.teaser-text") !!}
                </div>
            </div>

        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="text-center">
                    <h2><i class="fa fa-mobile"></i></h2>
                </div>
                <div class="text-center">
                    {!! trans("landing.platform-independent.teaser-text") !!}
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h2><i class="fa fa-gears"></i></h2>
                </div>
                <div class="text-center">
                    {!! trans("landing.performance.teaser-text") !!}
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div>
                    <h2><i class="fa fa-group"></i></h2>
                </div>
                <div>
                    {!! trans("landing.group.teaser-text") !!}
                </div>
            </div>
        </div>
    </div>



    <!--
    <div class="row">

        <h1>{!! trans('Local restaurants') !!}</h1>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="text-center">{!! trans('restaurants') !!}</p>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <p class="text-center">{!! trans('food') !!}</p>
        </div>

    </div>
    -->

@stop
