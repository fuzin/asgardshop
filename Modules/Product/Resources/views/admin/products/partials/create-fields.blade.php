<div class="box-body">
    <div class="box-body">
        <div class='form-group{{ $errors->has("EAN") ? ' has-error' : '' }}'>
            {!! Form::label("EAN", trans('product::products.form.EAN')) !!}
            {!! Form::text("EAN", old("EAN"), ['class' => 'form-control slug', 'data-EAN' => 'target', 'placeholder' => trans('product::products.form.EAN')]) !!}
            {!! $errors->first("EAN", '<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>



