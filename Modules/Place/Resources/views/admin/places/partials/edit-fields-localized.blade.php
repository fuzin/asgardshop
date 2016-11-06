<div class="box-body">
    <p>
    <div class="box-body">
        <div class='form-group{{ $errors->has("{$lang}.name") ? ' has-error' : '' }}'>
            {!! Form::label("{$lang}[name]", trans('place::places.form.name')) !!}
            <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->name: '' ?>
            {!! Form::text("{$lang}[name]", old("{$lang}.name", $old), ['class' => 'form-control', 'data-slug' => 'source', 'placeholder' => trans('place::places.form.name')]) !!}
            {!! $errors->first("{$lang}.name", '<span class="help-block">:message</span>') !!}
        </div>
        <div class='form-group{{ $errors->has("{$lang}.slug") ? ' has-error' : '' }}'>
            {!! Form::label("{$lang}[slug]", trans('place::places.form.slug')) !!}
            <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->slug: '' ?>
            {!! Form::text("{$lang}[slug]", old("{$lang}.slug", $old), ['class' => 'form-control slug', 'data-slug' => 'target', 'placeholder' => trans('place::places.form.slug')]) !!}
            {!! $errors->first("{$lang}.slug", '<span class="help-block">:message</span>') !!}
        </div>

        <div class='{{ $errors->has("{$lang}.description") ? ' has-error' : '' }}'>
            {!! Form::label("{$lang}[description]", trans('place::places.form.description')) !!}
            <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->description: '' ?>
            <textarea class="ckeditor" name="{{$lang}}[description]" rows="10" cols="80">{{ old("$lang.description", $old) }}</textarea>
            {!! $errors->first("{$lang}.description", '<span class="help-block">:message</span>') !!}
        </div>
        <?php if (config('asgard.place.config.partials.translatable.create') !== []): ?>
        <?php /* foreach (config('asgard.place.config.partials.translatable.create') as $partial): ?>
        @include($partial)
        <?php endforeach; */ ?>
        <?php endif; ?>
    </div>
    <div class="box-group" id="accordion">
        <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
        <div class="panel box box-primary">
            <div class="box-header">
                <h4 class="box-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo-{{$lang}}">
                        {{ trans('place::places.form.meta_data') }}
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapseTwo-{{$lang}}" class="panel-collapse collapse">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("{$lang}[meta_title]") ? ' has-error' : '' }}'>
                        {!! Form::label("{$lang}[meta_title]", trans('place::places.form.meta_title')) !!}
                        <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->meta_title: '' ?>
                        {!! Form::text("{$lang}[meta_title]", old("$lang.meta_title", $old), ['class' => "form-control", 'placeholder' => trans('place::places.form.meta_title')]) !!}
                        {!! $errors->first("{$lang}[meta_title]", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("{$lang}[meta_description]") ? ' has-error' : '' }}'>
                        {!! Form::label("{$lang}[meta_description]", trans('place::places.form.meta_description')) !!}
                        <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->meta_description: '' ?>
                        <textarea class="form-control" name="{{$lang}}[meta_description]" rows="10" cols="80">{{ old("$lang.meta_description", $old) }}</textarea>
                        {!! $errors->first("{$lang}[meta_description]", '<span class="help-block">:message</span>') !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="panel box box-primary">
            <div class="box-header">
                <h4 class="box-title">
                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFacebook-{{$lang}}">
                        {{ trans('place::places.form.facebook_data') }}
                    </a>
                </h4>
            </div>
            <div style="height: 0px;" id="collapseFacebook-{{$lang}}" class="panel-collapse collapse">
                <div class="box-body">
                    <div class='form-group{{ $errors->has("{$lang}[og_title]") ? ' has-error' : '' }}'>
                        {!! Form::label("{$lang}[og_title]", trans('place::places.form.og_title')) !!}
                        <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->og_title: '' ?>
                        {!! Form::text("{$lang}[og_title]", old("{$lang}.og_title", $old), ['class' => "form-control", 'placeholder' => trans('place::places.form.og_title')]) !!}
                        {!! $errors->first("{$lang}[og_title]", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class='form-group{{ $errors->has("{$lang}[og_description]") ? ' has-error' : '' }}'>
                        {!! Form::label("{$lang}[og_description]", trans('place::places.form.og_description')) !!}
                        <?php $old = $place->hasTranslation($lang) ? $place->translate($lang)->og_description: '' ?>
                        <textarea class="form-control" name="{{$lang}}[og_description]" rows="10" cols="80">{{ old("$lang.og_description", $old) }}</textarea>
                        {!! $errors->first("{$lang}[og_description]", '<span class="help-block">:message</span>') !!}
                    </div>
                    <div class="form-group{{ $errors->has("{$lang}[og_type]") ? ' has-error' : '' }}">
                        <label>{{ trans('place::places.form.og_type') }}</label>
                        <select class="form-control" name="{{ $lang }}[og_type]">
                            <option value="website" {{ old("$lang.og_type") == 'website' ? 'selected' : '' }}>{{ trans('place::places.facebook-types.website') }}</option>
                            <option value="product" {{ old("$lang.og_type") == 'product' ? 'selected' : '' }}>{{ trans('place::places.facebook-types.product') }}</option>
                            <option value="article" {{ old("$lang.og_type") == 'article' ? 'selected' : '' }}>{{ trans('place::places.facebook-types.article') }}</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </p>
</div>
