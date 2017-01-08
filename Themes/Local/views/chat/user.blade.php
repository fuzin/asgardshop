@extends('layouts.master')

@section('title')
    Join Room | @parent
@stop
@section('meta')
    <meta name="title" content="Select user" />
@stop

@section('content')

    <div class="container">
        <div class="row" style="margin-top: 50px">
            <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['route' => ['chat.room'], 'method' => 'post']) !!}
                <div class="form-group">
                    <label for="username">Please choose username for room: {!! $room !!}</label>
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

                        <span class="input-group-addon" id="basic-addon1">Username</span>
                        <input type="hidden" name="room" value="{!! $room !!}">
                        <input type="text" name="username" id="username" class="form-control" />
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


@endsection


