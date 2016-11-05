@extends('layouts.master')

@section('content-header')
    <h1>
        {{ trans('place::places.title.create place') }}
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> {{ trans('core::core.breadcrumb.home') }}</a></li>
        <li><a href="{{ route('admin.place.place.index') }}">{{ trans('place::places.title.places') }}</a></li>
        <li class="active">{{ trans('place::places.title.create place') }}</li>
    </ol>
@stop

@section('styles')
    {!! Theme::script('js/vendor/ckeditor/ckeditor.js') !!}

    <link href="{!! Module::asset('media:css/dropzone.css') !!}" rel="stylesheet" type="text/css" />
    <style>
        .dropzone {
            border: 1px dashed #CCC;
            min-height: 227px;
            margin-bottom: 20px;
        }
    </style>
@stop

@section('content')
    {!! Form::open(['route' => ['admin.place.place.store'], 'method' => 'post']) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                @include('partials.form-tab-headers')
                <div class="tab-content">
                    <?php $i = 0; ?>
                    @foreach (LaravelLocalization::getSupportedLocales() as $locale => $language)
                        <?php $i++; ?>
                        <div class="tab-pane {{ locale() == $locale ? 'active' : '' }}" id="tab_{{ $i }}">
                            @include('place::admin.places.partials.create-fields', ['lang' => $locale])
                        </div>
                    @endforeach

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary btn-flat">{{ trans('core::core.button.create') }}</button>
                        <button class="btn btn-default btn-flat" name="button" type="reset">{{ trans('core::core.button.reset') }}</button>
                        <a class="btn btn-danger pull-right btn-flat" href="{{ route('admin.place.place.index')}}"><i class="fa fa-times"></i> {{ trans('core::core.button.cancel') }}</a>
                    </div>
                </div>
            </div> {{-- end nav-tabs-custom --}}
        </div>
    </div>
    {!! Form::close() !!}

    {{--
    <div class="row">
        <div class="col-md-12">
            <form method="POST" class="dropzone">
                {!! Form::token() !!}
            </form>
        </div>
    </div>
    --}}

@stop

@section('footer')
    <a data-toggle="modal" data-target="#keyboardShortcutsModal"><i class="fa fa-keyboard-o"></i></a> &nbsp;
@stop
@section('shortcuts')
    <dl class="dl-horizontal">
        <dt><code>b</code></dt>
        <dd>{{ trans('core::core.back to index') }}</dd>
    </dl>
@stop

@section('scripts')
@section('scripts')
    <script src="{!! Module::asset('media:js/dropzone.js') !!}"></script>
    <?php $config = config('asgard.media.config'); ?>
    <script>
        var maxFilesize = '<?php echo $config['max-file-size'] ?>',
                acceptedFiles = '<?php echo $config['allowed-types'] ?>';
    </script>
    <script src="{!! Module::asset('media:js/init-dropzone.js') !!}"></script>

    <script type="text/javascript">
        $( document ).ready(function() {
            $(document).keypressAction({
                actions: [
                    { key: 'b', route: "<?= route('admin.place.place.index') ?>" }
                ]
            });
        });
    </script>
    <script>
        $( document ).ready(function() {
            $('input[type="checkbox"].flat-blue, input[type="radio"].flat-blue').iCheck({
                checkboxClass: 'icheckbox_flat-blue',
                radioClass: 'iradio_flat-blue'
            });
        });
    </script>

@stop



