<div class="box-body">
    <div class="box-body">
        <div class='form-group{{ $errors->has("EAN") ? ' has-error' : '' }}'>
            <?php $oldEAN = isset($product->EAN) ? $product->EAN : '' ; ?>
            {!! Form::label("EAN", trans('product::products.form.EAN')) !!}
            {!! Form::text("EAN", old("EAN", $oldEAN), ['class' => 'form-control slug', 'data-EAN' => 'target', 'placeholder' => trans('product::products.form.EAN')]) !!}
            {!! $errors->first("EAN", '<span class="help-block">:message</span>') !!}
        </div>
    </div>
</div>