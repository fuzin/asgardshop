<div class="box-header">
    <h4 class="box-title">
        <span class="box-head">
            {{ trans("place::places.form.basicInfo") }}
        </span>
    </h4>
</div>
<div class="box-body">
    <div class='form-group{{ $errors->has("name") ? ' has-error' : '' }}'>
        {!! Form::label("name", trans('place::places.form.name')) !!}
        <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-cutlery"></i></span>
            <?php $old = $place->name ? $place->name: '' ?>
            {!!
                Form::text(
                    "name",
                    old("name", $old),
                    [
                        'class' => 'form-control slug',
                        'data-name' => 'target',
                        'placeholder' => trans('place::places.form.name')
                    ])
            !!}
        </div>
        {!! $errors->first("name", '<span class="help-block">:message</span>') !!}
    </div>

    <div class="box-group" id="accordion">
        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <div class="panel box box-primary">
            <div class="box-header">
                <h4 class="box-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseAddress">
                        {{ trans('place::places.form.address') }}
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapseAddress" class="panel-collapse collapse">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("zip") ? ' has-error' : '' }}'>
                        {!! Form::label("zip", trans('place::places.form.zip')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <?php $old = $place->zip ? $place->zip: '' ?>
                            {!! Form::text("zip", old("zip", $old), ['class' => 'form-control slug', 'data-zip' => 'target', 'placeholder' => trans('place::places.form.zip')]) !!}
                        </div>
                        {!! $errors->first("zip", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("phone") ? ' has-error' : '' }}'>
                        {!! Form::label("phone", trans('place::places.form.phone')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <?php $old = $place->phone ? $place->phone: '' ?>
                            {!! Form::text("phone", old("phone", $old), ['class' => 'form-control slug', 'data-phone' => 'target', 'placeholder' => trans('place::places.form.phone')]) !!}
                        </div>
                        {!! $errors->first("phone", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("streetName") ? ' has-error' : '' }}'>
                        {!! Form::label("streetName", trans('place::places.form.streetName')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <?php $old = $place->streetName ? $place->streetName: '' ?>
                            {!! Form::text("streetName", old("streetName", $old), ['class' => 'form-control slug', 'data-streetName' => 'target', 'placeholder' => trans('place::places.form.streetName')]) !!}
                        </div>
                        {!! $errors->first("streetName", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("streetNumber") ? ' has-error' : '' }}'>
                        {!! Form::label("streetNumber", trans('place::places.form.streetNumber')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <?php $old = $place->streetNumber ? $place->streetNumber: '' ?>
                            {!! Form::number("streetNumber", old("streetNumber", $old), ['class' => 'form-control slug', 'data-streetNumber' => 'target', 'placeholder' => trans('place::places.form.streetNumber')]) !!}
                        </div>
                        {!! $errors->first("streetNumber", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("addressInfo") ? ' has-error' : '' }}'>
                        {!! Form::label("addressInfo", trans('place::places.form.addressInfo')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                            <?php $old = $place->addressInfo ? $place->addressInfo: '' ?>
                            {!! Form::text("addressInfo", old("addressInfo", $old), ['class' => 'form-control slug', 'data-addressInfo' => 'target', 'placeholder' => trans('place::places.form.addressInfo')]) !!}
                        </div>
                        {!! $errors->first("addressInfo", '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>


        <div class="panel box box-primary">
            <div class="box-header">
                <h4 class="box-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseContact">
                        {{ trans('place::places.form.contact_data') }}
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapseContact" class="panel-collapse collapse">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("email") ? ' has-error' : '' }}'>
                        {!! Form::label("email", trans('place::places.form.email')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <?php $old = $place->email ? $place->email: '' ?>
                            {!! Form::text("email", old("email", $old), ['class' => 'form-control slug', 'data-email' => 'target', 'placeholder' => trans('place::places.form.email')]) !!}
                        </div>
                        {!! $errors->first("email", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("phone") ? ' has-error' : '' }}'>
                        {!! Form::label("phone", trans('place::places.form.phone')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <?php $old = $place->phone ? $place->phone: '' ?>
                            {!! Form::text("phone", old("phone", $old), ['class' => 'form-control slug', 'data-phone' => 'target', 'placeholder' => trans('place::places.form.phone')]) !!}
                        </div>
                        {!! $errors->first("phone", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("website") ? ' has-error' : '' }}'>
                        {!! Form::label("website", trans('place::places.form.website')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-desktop"></i></span>
                            <?php $old = $place->website ? $place->website: '' ?>
                            {!! Form::text("website", old("website", $old), ['class' => 'form-control slug', 'data-website' => 'target', 'placeholder' => trans('place::places.form.website')]) !!}
                        </div>
                        {!! $errors->first("website", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("faxNumber") ? ' has-error' : '' }}'>
                        {!! Form::label("faxNumber", trans('place::places.form.faxNumber')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-fax"></i></span>
                            <?php $old = $place->faxNumber ? $place->faxNumber: '' ?>
                            {!! Form::number("faxNumber", old("faxNumber", $old), ['class' => 'form-control slug', 'data-faxNumber' => 'target', 'placeholder' => trans('place::places.form.faxNumber')]) !!}
                        </div>
                        {!! $errors->first("faxNumber", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("smsNumber") ? ' has-error' : '' }}'>
                        {!! Form::label("smsNumber", trans('place::places.form.smsNumber')) !!}
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                            <?php $old = $place->smsNumber ? $place->smsNumber: '' ?>
                            {!! Form::text("smsNumber", old("smsNumber", $old), ['class' => 'form-control slug', 'data-smsNumber' => 'target', 'placeholder' => trans('place::places.form.smsNumber')]) !!}
                        </div>
                        {!! $errors->first("smsNumber", '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
