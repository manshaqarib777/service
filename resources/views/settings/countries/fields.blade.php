@if ($customFields)
    <h5 class="col-12 pb-4">{!! trans('lang.main_fields') !!}</h5>
@endif
<div style="flex: 50%;max-width: 50%;padding: 0 4px;" class="column">
    <!-- Name Field -->
    <div class="form-group row ">
        {!! Form::label('name', trans('lang.country_name'), ['class' => 'col-4 control-label text-right']) !!}
        <div class="col-8">
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => trans('lang.country_name_placeholder')]) !!}
            <div class="form-text text-muted">
                {{ trans('lang.country_name_help') }}
            </div>
        </div>
    </div>
    <div class="form-group row ">
        {!! Form::label('distance_unit', trans("lang.app_setting_distance_unit"),['class' => 'col-4 control-label text-right']) !!}
        <div class="col-8">
            {!! Form::select('distance_unit',
            [
            'km' => trans('lang.app_setting_km'),
            'mi' => trans('lang.app_setting_mi'),
            ]
            , null, ['class' => 'select2 form-control']) !!}
            <div class="form-text text-muted">{{ trans("lang.app_setting_distance_unit_help") }}</div>
        </div>
    </div>
    <div class="form-group row">
        {!! Form::label('default_tax', trans('lang.app_setting_default_tax'), ['class' => 'col-4 control-label text-right']) !!}
        <div class="col-8">
            {!! Form::text('default_tax', null,  ['class' => 'form-control','placeholder'=>  trans('lang.app_setting_default_tax_placeholder')]) !!}
            <div class="form-text text-muted">
                {!! trans('lang.app_setting_default_tax_help') !!}
            </div>
        </div>
    </div>

    <!-- Code Field -->
    <div class="form-group row ">
        {!! Form::label('code', trans('lang.country_code'), ['class' => 'col-4 control-label text-right']) !!}
        <div class="col-8">
            {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => trans('lang.country_code_placeholder')]) !!}
            <div class="form-text text-muted">
                {{ trans('lang.country_code_help') }}
            </div>
        </div>
    </div>
    <div class="form-group row">
      {!! Form::label('currency_id', trans('lang.app_setting_default_currency'), ['class' => 'col-4 control-label text-right']) !!}
      <div class="col-8">
          {!! Form::select('currency_id',
          $currencies
          ,null, ['class' => 'select2 form-control']) !!}
          <div class="form-text text-muted">{{ trans("lang.app_setting_default_currency_help") }}</div>
      </div>
  </div>
    <div class="form-group row ">
      {!! Form::label('active', trans("lang.country_active"),['class' => 'col-4 control-label text-right']) !!}
      <div class="checkbox icheck">
          <label class="col-8 ml-2 form-check-inline">
              {!! Form::hidden('active', 0) !!}
              {!! Form::checkbox('active', 1, null) !!}
          </label>
      </div>
  </div>
</div>
@if ($customFields)
    <div class="clearfix"></div>
    <div class="col-12 custom-field-container">
        <h5 class="col-12 pb-4">{!! trans('lang.custom_field_plural') !!}</h5>
        {!! $customFields !!}
    </div>
@endif
<!-- Submit Field -->
<div class="form-group col-12 text-right">
    <button type="submit" class="btn btn-{{ setting('theme_color') }}"><i class="fa fa-save"></i>
        {{ trans('lang.save') }} {{ trans('lang.country') }}</button>
    <a href="{!! route('countries.index') !!}" class="btn btn-default"><i class="fa fa-undo"></i> {{ trans('lang.cancel') }}</a>
</div>
