@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.formation.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('quickadmin.formation.fields.title')</th>
                            <td field-key='title'>{{ $formation->title }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.featured')</th>
                            <td field-key='featured'>@if($formation->featured)<a href="{{ asset(env('UPLOAD_PATH').'/' . $formation->featured) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $formation->featured) }}"/></a>@endif</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.category')</th>
                            <td field-key='category'>{{ $formation->category->name or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.date-debut-formation')</th>
                            <td field-key='date_debut_formation'>{{ $formation->date_debut_formation }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.tag-id')</th>
                            <td field-key='tag_id'>
                                @foreach ($formation->tag_id as $singleTagId)
                                    <span class="label label-info label-many">{{ $singleTagId->tag }}</span>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.duree')</th>
                            <td field-key='duree'>{{ $formation->duree }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.place')</th>
                            <td field-key='place'>{{ $formation->place->nom or '' }}</td>
                        </tr>
                        <tr>
                            <th>@lang('quickadmin.formation.fields.description')</th>
                            <td field-key='description'>{!! $formation->description !!}</td>
                        </tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.formations.index') }}" class="btn btn-default">@lang('quickadmin.qa_back_to_list')</a>
        </div>
    </div>
@stop
