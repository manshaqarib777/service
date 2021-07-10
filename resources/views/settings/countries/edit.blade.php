@extends('layouts.settings.default')
@push('css_lib')
    <!-- iCheck -->
    <link rel="stylesheet" href="{{asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <!-- select2 -->
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{asset('vendor/summernote/summernote-bs4.min.css')}}">
    {{--dropzone--}}
    <link rel="stylesheet" href="{{asset('vendor/dropzone/min/dropzone.min.css')}}">
@endpush
@section('settings_title',trans('lang.country'))
@section('settings_content')
  @include('flash::message')
  @include('adminlte-templates::common.errors')
  <div class="clearfix"></div>
  <div class="card">
    <div class="card-header">
      <ul class="nav nav-tabs align-items-end card-header-tabs w-100">
        @can('countries.index')
          <li class="nav-item">
            <a class="nav-link" href="{!! route('countries.index') !!}"><i class="fa fa-list mr-2"></i>{{trans('lang.country_table')}}</a>
          </li>
        @endcan
        @can('countries.create')
          <li class="nav-item">
            <a class="nav-link" href="{!! route('countries.create') !!}"><i class="fa fa-plus mr-2"></i>{{trans('lang.country_create')}}</a>
          </li>
        @endcan
        <li class="nav-item">
          <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-pencil mr-2"></i>{{trans('lang.country_edit')}}</a>
        </li>
      </ul>
    </div>
    <div class="card-body">
      {!! Form::model($country, ['route' => ['countries.update', $country->id], 'method' => 'patch']) !!}
      <div class="row">
        @include('settings.countries.fields')
      </div>
      {!! Form::close() !!}
      <div class="clearfix"></div>
    </div>
  </div>
  @include('layouts.media_modal',['collection'=>null])
@endsection


@push('scripts_lib')
    <!-- iCheck -->

    <!-- select2 -->
    <script src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
    {{--dropzone--}}
    <script src="{{asset('vendor/dropzone/min/dropzone.min.js')}}"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
@endpush