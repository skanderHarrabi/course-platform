@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.users.title')</h3>
    
    {!! Form::open(['method' => 'POST', 'route' => ['admin.user.profile.update'], 'files' => true]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('name', trans('quickadmin.users.fields.name').'*', ['class' => 'control-label','placeholder' =>'{{$user->name}}']) !!}
                     <textarea name="name" id="name" cols="1" rows="1" class="form-control">{{$user->name}}</textarea>
                    
                    <p class="help-block"></p>
                    @if($errors->has('name'))
                        <p class="help-block">
                            {{ $errors->first('name') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('email', trans('quickadmin.users.fields.email').'*', ['class' => 'control-label']) !!}
                    <textarea name="email" id="email" cols="1" rows="1" class="form-control">{{$user->email}}</textarea>
                    <p class="help-block"></p>
                    @if($errors->has('email'))
                        <p class="help-block">
                            {{ $errors->first('email') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    @if ($user->featured)
                        <a href="{{ asset(env('UPLOAD_PATH').'/'.$user->featured) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/'.$user->featured) }}"></a>
                    @endif
                    {!! Form::label('avatar','Avatar'.'*', ['class' => 'control-label']) !!}
                    <input type="file" id="avatar" style="margin-top: 4px" name="avatar" class="form-control">
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('facebook', 'Facebook'.'*', ['class' => 'control-label']) !!}
                    <textarea name="facebook" id="facebook" cols="1" rows="1" class="form-control">{{$user->profile->facebook}}</textarea>

                    <p class="help-block"></p>
                    @if($errors->has('facebook'))
                        <p class="help-block">
                            {{ $errors->first('facebook') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('linkedin', 'linkedin'.'*', ['class' => 'control-label']) !!}
                    <textarea name="linkedin" id="linkedin" cols="1" rows="1" class="form-control">{{$user->profile->linkedin}}</textarea>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                {!! Form::label('about', 'About', ['class' => 'control-label']) !!}
                <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{$user->profile->about}}</textarea>
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

