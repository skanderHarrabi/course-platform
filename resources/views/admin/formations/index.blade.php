@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('quickadmin.formation.title')</h3>
    @can('formation_create')
    <p>
        <a href="{{ route('admin.formations.create') }}" class="btn btn-success">@lang('quickadmin.qa_add_new')</a>
        
    </p>
    @endcan

    @can('formation_delete')
    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.formations.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">All</a></li> |
            <li><a href="{{ route('admin.formations.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">Trash</a></li>
        </ul>
    </p>
    @endcan


    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.qa_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($formations) > 0 ? 'datatable' : '' }} @can('formation_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('formation_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('quickadmin.formation.fields.title')</th>
                        <th>@lang('quickadmin.formation.fields.featured')</th>
                        <th>@lang('Category')</th>
                        <th>@lang('Start date cource')</th>
                        <th>@lang('Teacher')</th>
                        <th>@lang('Duration')</th>
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
                                @can('formation_delete')
                                    @if ( request('show_deleted') != 1 )<td></td>@endif
                                @endcan

                                <td field-key='title'>{{ $formation->title }}</td>
                                <td field-key='featured'>@if($formation->featured)<a href="{{ asset(env('UPLOAD_PATH').'/' . $formation->featured) }}" target="_blank"><img src="{{ asset(env('UPLOAD_PATH').'/thumb/' . $formation->featured) }}"/></a>@endif</td>
                                <td field-key='category'>{{ $formation->category->name or '' }}</td>
                                <td field-key='Start date cource'>{{ $formation->date_debut_formation }}</td>
                                <td field-key='Teacher'>{{$formation->formateur}} </td>
                                <td field-key='duration'>{{ $formation->duree }}</td>
                                <td field-key='place'>{{ $formation->place->nom or '' }}</td>
                                <td field-key='description'>{!! substr($formation->description,0,50) !!}...</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    @can('formation_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.formations.restore', $formation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                    @can('formation_delete')
                                                                        {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.formations.perma_del', $formation->id])) !!}
                                    {!! Form::submit(trans('quickadmin.qa_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                @endcan
                                </td>
                                @else
                                <td>
                                    @can('formation_view')
                                    <a href="{{ route('admin.formations.show',[$formation->id]) }}" class="btn btn-xs btn-primary">@lang('quickadmin.qa_view')</a>
                                    @endcan
                                    @can('formation_edit')
                                    <a href="{{ route('admin.formations.edit',[$formation->id]) }}" class="btn btn-xs btn-info">@lang('quickadmin.qa_edit')</a>
                                    @endcan
                                    @can('formation_delete')
                                  {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("quickadmin.qa_are_you_sure")."');",
                                        'route' => ['admin.formations.destroy', $formation->id])) !!}
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
@stop

@section('javascript') 
    <script>
        @can('formation_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.formations.mass_destroy') }}'; @endif
        @endcan

    </script>
@endsection