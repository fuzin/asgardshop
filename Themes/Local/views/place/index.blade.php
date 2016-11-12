@extends('layouts.master')

@section('title')
    | @parent
@stop

@section('meta')
    <meta name="title" content="" />
    <meta name="description" content="" />
@stop

@section('content')
    <style>
        .thumbnail {
            position: relative;
            background-color: #fff;
            z-index: 1;
            color: #000;
        }

        .thumbnail img {
            opacity: 0.9;
        }
        .caption {
            position: absolute;
            top: 45%;
            left: 0;
            width: 100%;
            z-index: 2;
            opacity: 1;
            color: #000;
            font-weight: 700;
        }

        .caption span {
            background-color: #fff;
            padding: 10px;
            font-size: large;
            font-family: 'Montserrat', sans-serif;;
        }

    </style>
    <div id="app">

        {!! Form::open(['route' => ['place.store'], 'method' => 'post']) !!}
            <div class='form-group{{ $errors->has("name") ? ' has-error' : '' }}'>
                <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
                    <input data-name="target"
                           placeholder="{!! trans('place::places.form.filter') !!}"
                           name="q"
                           id="q"
                           v-model="q"
                           class="form-control slug"
                           type="text">
                </div>
            </div>
        {!! Form::close() !!}


        <div class="row">
            @foreach($places as $place)
                <place
                        :q = 'q'
                        name="{!! $place->name !!}"
                        image=""
                        href="{{ route('place.show', [$place->slug]) }}"
                        zip="{!! $place->zip !!}"
                        city="{!! $place->city !!}"
                        phone="{!! $place->phone !!}"
                ></place>
            @endforeach
        </div>
    </div>

@stop



@section('scripts')

    <template id="place-template">
        <div class="col-xs-12 col-sm-6 col-md-4">
            <div style="bottom-top: 1px solid #42424 ; margin: 15px 0;" v-show="isVisible">
                <div class="thumbnail text-center">
                    <img src="https://static.pexels.com/photos/2232/vegetables-italian-pizza-restaurant.jpg" class="img-responsive" alt="">
                    <div class="caption">
                        <span>@{{ name }}</span>
                    </div>
                </div>
                <div>
                    @{{ zip + ' ' + city }} <br/>
                    T: @{{ phone }}
                </div>
            </div>
        </div>
    </template>

    <script type="text/javascript">

        Vue.component('place', {
            template: '#place-template',

            props: ['name', 'image', 'href', 'q'],

            data: function () {
                return {
                    name: '',
                    image: '/default.png',
                    href: '/404',
                    zip: '96317',
                    city: 'Kronach',
                    phone: '09261 33 883 33',
                    isVisible: true
                }
            },

            watch: {
                q: function () {

                    // check if q is in name
                    if(this.q == '') {
                        this.isVisible = true;
                    } else if(this.name.toLowerCase().indexOf(this.q) == -1) {
                        this.isVisible = false;
                    }

                }
            }

        });


        $vue = new Vue({
            el: "#app",
            data: {
                q: '',  // when q changes
                numberOfPlaces: '',
            },
            computed: {
                // visibily of components place should change when q changes

            },
            watch: {
                q: function () {
                    // alert('hihi');
                }
            }
        });

    </script>
@stop
