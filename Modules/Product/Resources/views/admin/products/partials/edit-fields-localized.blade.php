<div class="box-body">
    <div class="box-body">

        <div class='form-group{{ $errors->has("{$lang}.name") ? ' has-error' : '' }}'>
            <?php $oldName = $product->hasTranslation($lang) ? $product->translate($lang)->name : '' ?>
            {!! Form::label("{$lang}[name]", trans('product::products.form.name')) !!}
            {!! Form::text("{$lang}[name]", old("{$lang}.name", $oldName), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('product::products.form.name')]) !!}
            {!! $errors->first("{$lang}.name", '<span class="help-block">:message</span>') !!}
        </div>
        <div class='form-group{{ $errors->has("{$lang}.slug") ? ' has-error' : '' }}'>
            <?php $oldSlug = $product->hasTranslation($lang) ? $product->translate($lang)->slug : '' ?>
            {!! Form::label("{$lang}[slug]", trans('product::products.form.slug')) !!}
            {!! Form::text("{$lang}[slug]", old("{$lang}.slug", $oldSlug), ['class' => 'form-control slug', 'data-slug' => 'target', 'placeholder' => trans('product::products.form.slug')]) !!}
            {!! $errors->first("{$lang}.slug", '<span class="help-block">:message</span>') !!}
        </div>

    </div>
    <div class="box-group" id="accordion">
        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <div class="panel box box-primary">
            <div class="box-header">
                <h4 class="box-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-{{$lang}}">
                        {{ trans('product::products.form.meta_data') }}
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapseTwo-{{$lang}}" class="panel-collapse collapse">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("{$lang}[meta_title]") ? ' has-error' : '' }}'>
                        <?php $oldMetaTitle = $product->hasTranslation($lang) ? $product->translate($lang)->meta_title : '' ?>
                        {!! Form::label("{$lang}[meta_title]", trans('product::products.form.meta_title')) !!}
                        {!! Form::text("{$lang}[meta_title]", old("$lang.meta_title", $oldMetaTitle), ['class' => "form-control", 'placeholder' => trans('product::products.form.meta_title')]) !!}
                        {!! $errors->first("{$lang}[meta_title]", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("{$lang}[meta_description]") ? ' has-error' : '' }}'>
                        <?php $oldMetaDescription = $product->hasTranslation($lang) ? $product->translate($lang)->meta_description : '' ?>
                        {!! Form::label("{$lang}[meta_description]", trans('product::products.form.meta_description')) !!}
                        <textarea class="form-control" name="{{$lang}}[meta_description]" rows="10" cols="80">{{ old("$lang.meta_description", $oldMetaDescription) }}</textarea>
                        {!! $errors->first("{$lang}[meta_description]", '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="panel box box-primary">
            <div class="box-header">
                <h4 class="box-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFacebook-{{$lang}}">
                        {{ trans('product::products.form.facebook_data') }}
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapseFacebook-{{$lang}}" class="panel-collapse collapse">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("{$lang}[og_title]") ? ' has-error' : '' }}'>
                        <?php $oldOgTitle = $product->hasTranslation($lang) ? $product->translate($lang)->og_title : '' ?>
                        {!! Form::label("{$lang}[og_title]", trans('product::products.form.og_title')) !!}
                        {!! Form::text("{$lang}[og_title]", old("{$lang}.og_title", $oldOgTitle), ['class' => "form-control", 'placeholder' => trans('product::products.form.og_title')]) !!}
                        {!! $errors->first("{$lang}[og_title]", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("{$lang}[og_description]") ? ' has-error' : '' }}'>
                        <?php $oldOgDescription = $product->hasTranslation($lang) ? $product->translate($lang)->og_description : '' ?>
                        {!! Form::label("{$lang}[og_description]", trans('product::products.form.og_description')) !!}
                        <textarea class="form-control" name="{{$lang}}[og_description]" rows="10" cols="80">{{ old("$lang.og_description", $oldOgDescription) }}</textarea>
                        {!! $errors->first("{$lang}[og_description]", '<span class="help-block">:message</span>') !!}
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
