@extends('layouts.app')
@push('css_lib')
    <link rel="stylesheet" href="{{asset('vendor/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/dropzone/min/dropzone.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
@endpush
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-bold">{{trans('lang.e_service_plural')}} <small class="mx-3">|</small><small>{{trans('lang.e_service_desc')}}</small>
                    </h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb bg-white float-sm-right rounded-pill px-4 py-2 d-none d-md-flex">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}"><i class="fas fa-tachometer-alt"></i> {{trans('lang.dashboard')}}</a></li>
                        <li class="breadcrumb-item">
                            <a href="{!! route('eServices.index') !!}">{{trans('lang.e_service_plural')}}</a>
                        </li>
                        <li class="breadcrumb-item active">{{trans('lang.e_service_table')}}</li>
                    </ol>
                    {{-- @php
                        $countries=\App\Models\Country::all()->pluck('name','id');
                    @endphp
                    {!! Form::open(['method' => 'get']) !!}
                    <div class="form-group align-items-baseline d-flex flex-column flex-md-row">
                        {!! Form::label('country_id', trans('lang.app_country'), ['class' => 'col-3 control-label text-right']) !!}
                        <div class="col-9">
                            {!! Form::select('country_id', $countries, request()->get('country_id'), ['class' => 'select2 form-control', 'onchange'=>"this.form.submit()"]) !!}
                        </div>
                    </div>
                    {!! Form::close() !!} --}}
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
        <div class="clearfix"></div>
        @include('flash::message')
        <div class="card shadow-sm">
            <div class="card-header">
                <ul class="nav nav-tabs d-flex flex-md-row flex-column-reverse align-items-start card-header-tabs">
                    <div class="d-flex flex-row">
                        <li class="nav-item">
                            <a class="nav-link active" href="{!! url()->current() !!}"><i class="fa fa-list mr-2"></i>{{trans('lang.e_service_table')}}</a>
                        </li>
                        @can('eServices.create')
                            <li class="nav-item">
                                <a class="nav-link" href="{!! route('eServices.create') !!}"><i class="fa fa-plus mr-2"></i>{{trans('lang.e_service_create')}}
                                </a>
                            </li>
                        @endcan
                    </div>
                    @include('layouts.right_toolbar', compact('dataTable'))
                </ul>
            </div>
            <div class="card-body">
                @include('e_services.table')
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
@endsection

@push('scripts_lib')
    <script src="{{asset('vendor/select2/js/select2.full.min.js')}}"></script>
    <script src="{{asset('vendor/summernote/summernote.min.js')}}"></script>
    <script src="{{asset('vendor/dropzone/min/dropzone.min.js')}}"></script>
    <script src="{{asset('vendor/moment/moment.min.js')}}"></script>
    <script src="{{asset('vendor/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
    <script type="text/javascript">
        Dropzone.autoDiscover = false;
        var dropzoneFields = [];
    </script>
@endpush