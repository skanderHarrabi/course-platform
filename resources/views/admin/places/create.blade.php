@extends('layouts.app')

@section('content')
    <h3 class="page-title">Class</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['admin.places.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_create')
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nom', 'Place Name'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('nom', old('nom'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nom'))
                        <p class="help-block">
                            {{ $errors->first('nom') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('nombre_de_place', 'Number of place'.'*', ['class' => 'control-label']) !!}
                    {!! Form::number('nombre_de_place', old('nombre_de_place'), ['class' => 'form-control', 'placeholder' => '', 'required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('nombre_de_place'))
                        <p class="help-block">
                            {{ $errors->first('nombre_de_place') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('disponibilite', 'Avaibility'.'*', ['class' => 'control-label']) !!}
                    {!! Form::hidden('disponibilite', 0) !!}
                    {!! Form::checkbox('disponibilite', 1, old('disponibilite', true), ['required' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('disponibilite'))
                        <p class="help-block">
                            {{ $errors->first('disponibilite') }}
                        </p>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    {!! Form::label('localisation_address', 'Location'.'*', ['class' => 'control-label']) !!}
                    {!! Form::text('localisation_address', old('localisation_address'), ['class' => 'form-control map-input', 'id' => 'localisation-input', 'required' => '']) !!}
                    {!! Form::hidden('localisation_latitude', 0 , ['id' => 'localisation-latitude']) !!}
                    {!! Form::hidden('localisation_longitude', 0 , ['id' => 'localisation-longitude']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('localisation'))
                        <p class="help-block">
                            {{ $errors->first('localisation') }}
                        </p>
                    @endif
                </div>
            </div>
            
            <div id="localisation-map-container" style="width:100%;height:200px; ">
                <div style="width: 100%; height: 100%" id="localisation-map"></div>
            </div>
           
            
            
        </div>
    </div>

    {!! Form::submit(trans('quickadmin.qa_save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@stop

@section('javascript')
    @parent
   <script src="/adminlte/js/mapInput.js"></script>
   <script src="https://maps.googleapis.com/maps/api/js?key={{ env('GOOGLE_MAPS_API_KEY') }}&libraries=places&callback=initialize" async defer></script>

@stop