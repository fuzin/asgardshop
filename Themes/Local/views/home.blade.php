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

    <div class="container-fluid text-center" style="
        background-image: url('/themes/local/img/Under-constructionweb.jpg');
        background-size: cover;
        height: 100px;
        padding-top: 40px">
        <span style="color: #FFF; background: #000; font-size: 40px">Under construction</span>
    </div>


    <div class="container">
        <div class="row">

            <div class="text-center">
                <h1>Anonymous Chat Rooms</h1>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h2><i class="fa fa-comments-o"></i></h2>
                </div>
                <div class="text-center">
                    Free Messenger. Create public or private room.
                </div>
            </div>

            <div class="col-md-4">
                <div class="text-center">
                    <h2><i class="fa fa-file-o"></i></h2>
                </div>
                <div class="text-center">
                    Easily share files. Upload file and other room members can download it. Files are automaticlly delted after they expeire.
                </div>
            </div>

            <div class="col-md-4 text-center">
                <div>
                    <h2><i class="fa fa-shield"></i></h2>
                </div>
                <div>
                    All messages and files are deleted after room is inactive for 3hours.
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-8 col-md-offset-2">
                <div class="form-group">
                    <div class="input-group">
                        <!--
                        <span class="input-group-addon" id="basic-addon1">Room</span>
                        -->
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
                        <input type="search" name="searchBy" id="searchBy" class="form-control" />
                        <span class="input-group-btn">
                            <button id="filter" class="btn btn-primary btn-block" onclick="searchStationTable();">
                                <span class="glyphicon glyphicon-plus"></span>
                            </button>
                        </span>
                    </div>
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
