@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.place.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.place.fields.nom')</th>
                            <td field-key='nom'>{{ $place->nom }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.place.fields.nombre-de-place')</th>
                            <td field-key='nombre_de_place'>{{ $place->nombre_de_place }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.place.fields.disponibilite')</th>
                            <td field-key='disponibilite'>{{ Form::checkbox("disponibilite", 1, $place->disponibilite == 1 ? true : false, ["disabled"]) }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.place.fields.localisation')</th>
                            <td field-key='localisation'>{{ $place->localisation_address }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#formation" aria-controls="formation" role="tab" data-toggle="tab">Formation</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="formation">
<table class="table table-bordered table-striped {{ count($formations) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
            <th>@lang('quickadmin.formation.fields.title')</th>
                        <th>@lang('quickadmin.formation.fields.featured')</th>
                        <th>@lang('quickadmin.formation.fields.category')</th>
                        <th>@lang('quickadmin.formation.fields.date-debut-formation')</th>
                        <th>@lang('quickadmin.formation.fields.tag-id')</th>
                        <th>@lang('quickadmin.formation.fields.duree')</th>
                        <th>@lang('quickadmin.formation.fields.place')</th>
                        <th>@lang('quickadmin.formation.fields.description')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
        </tr>
    </thead>

    <tbody>
        @if (count($formations) > 0)
            @foreach ($formations as $formation)
                <tr data-entry-id="{{ $formation->id }}">
                    <td field-key='title'>{{ $formation->title }}</td>
                                <td field-key='featured'>@if($formation->featured)<a href="{{ asset(env('UPLOAD_PATH').'/' . $formation->featured) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $formation->featured) }}"/></a>@endif</td>
                                <td field-key='category'>{{ $formation->category->name or '' }}</td>
                                <td field-key='date_debut_formation'>{{ $formation->date_debut_formation }}</td>
                                <td field-key='tag_id'>
                                    @foreach ($formation->tag_id as $singleTagId)
                                        <span class="label label-info label-many">{{ $singleTagId->tag }}</span>
                                    @endforeach
                                </td>
                                <td field-key='duree'>{{ $formation->duree }}</td>
                                <td field-key='place'>{{ $formation->place->nom or '' }}</td>
                                <td field-key='description'>{!! $formation->description !!}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['formations.restore', $formation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['formations.perma_del', $formation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('view')
                                    <a href="{{ route('formations.show',[$formation->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('edit')
                                    <a href="{{ route('formations.edit',[$formation->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['formations.destroy', $formation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="13">@lang('quickadmin.qa_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.places.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
