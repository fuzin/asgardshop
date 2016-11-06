<div class="box-header">
    <h4 class="box-title">
        <span class="box-head">
            {{ trans("place::place.form.address") }}
        </span>
    </h4>
</div>

<div class="box-body">
    <div class='form-group{{ $errors->has("zip") ? ' has-error' : '' }}'>
        {!! Form::label("zip", trans('place::places.form.zip')) !!}
        <?php $old = $place->zip ? $place->zip: '' ?>
        {!! Form::text("zip", old("zip", $old), ['class' => 'form-control slug', 'data-zip' => 'target', 'placeholder' => trans('page::place.form.zip')]) !!}
        {!! $errors->first("zip", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("city") ? ' has-error' : '' }}'>
        {!! Form::label("city", trans('place::places.form.city')) !!}
        <?php $old = $place->city ? $place->city: '' ?>
        {!! Form::text("city", old("city", $old), ['class' => 'form-control slug', 'data-city' => 'target', 'placeholder' => trans('page::place.form.city')]) !!}
        {!! $errors->first("city", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("streetName") ? ' has-error' : '' }}'>
        {!! Form::label("streetName", trans('place::places.form.streetName')) !!}
        <?php $old = $place->streetName ? $place->streetName: '' ?>
        {!! Form::text("streetName", old("streetName", $old), ['class' => 'form-control slug', 'data-streetName' => 'target', 'placeholder' => trans('page::place.form.streetName')]) !!}
        {!! $errors->first("streetName", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("streetNumber") ? ' has-error' : '' }}'>
        {!! Form::label("streetNumber", trans('place::places.form.streetNumber')) !!}
        <?php $old = $place->streetNumber ? $place->streetNumber: '' ?>
        {!! Form::number("streetNumber", old("streetNumber", $old), ['class' => 'form-control slug', 'data-streetNumber' => 'target', 'placeholder' => trans('page::place.form.streetNumber')]) !!}
        {!! $errors->first("streetNumber", '<span class="help-block">:message</span>') !!}
    </div>
    <div class='form-group{{ $errors->has("addressInfo") ? ' has-error' : '' }}'>
        {!! Form::label("addressInfo", trans('place::places.form.addressInfo')) !!}
        <?php $old = $place->addressInfo ? $place->addressInfo: '' ?>
        {!! Form::text("addressInfo", old("addressInfo", $old), ['class' => 'form-control slug', 'data-addressInfo' => 'target', 'placeholder' => trans('page::place.form.addressInfo')]) !!}
        {!! $errors->first("addressInfo", '<span class="help-block">:message</span>') !!}
    </div>
</div>

