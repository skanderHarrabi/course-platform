@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    
    {!! Form::open(['method' => 'POST', 'route' => ['admin.settings.update'], 'files' => true]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('site_name', 'site_name'.'*', ['class' => 'control-label','placeholder' =>'{{$user->name}}']) !!}
                    <textarea name="site_name"  cols="1" rows="1" class="form-control">{{$settings->site_name}}</textarea>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('address', 'address'.'*', ['class' => 'control-label']) !!}
                    <textarea name="address"  cols="1" rows="1" class="form-control">{{$settings->addess}}</textarea>
                   
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contact_number', 'contact number'.'*', ['class' => 'control-label']) !!}
                    <textarea name="contact_number"  cols="1" rows="1" class="form-control">{{$settings->contact_number}}</textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('contact_email', 'contact email'.'*', ['class' => 'control-label']) !!}
                    <textarea name="contact_email" cols="1" rows="1" class="form-control">{{$settings->contact_email}}</textarea>
                    
                </div>
            
        </div>
    </div>

    {!! Form::submit('Update site settings', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

