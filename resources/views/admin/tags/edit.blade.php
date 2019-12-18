@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.tag.title')</h3>
    
    {!! Form::model($tag, ['method' => 'PUT', 'route' => ['admin.tags.update', $tag->id]]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_edit')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('tag', trans('quickadmin.tag.fields.tag').'*', ['class' => 'control-label']) !!}
                    {!! Form::text('tag', old('tag'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('tag'))
                        <p class="help-block">
                            {{ $errors->first('tag') }}
                        </p>
                    @endif
                </div>
            </div>
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_update'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

