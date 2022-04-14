@extends('adminlte::page')

@section('title', 'Permissions')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('permissions.index') }}" class="active"><b>Permissions</b></a></li>
    </ol>

@stop

@section('content')
    <div class="card">

        <div class="card-header">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">

                    <h1>Permissions <a href="{{ route('permissions.create') }}" class="btn btn-dark">Add</a></h1>

                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <form action="{{ route('permissions.search') }}" method="POST" class="form form-inline">
                            @csrf
                            <input type="text" name="filter" placeholder="Filter" class="form-control" value="{{ $filters['filter'] ?? '' }}">
                            <button type="submit" class="btn btn-dark">Filter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('admin.includes.alerts')

                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th width="270">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($permissions as $permission)
                        <tr>
                            <td>
                                {{ $permission->name }}
                            </td>
                            <td style="">
                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('permissions.show', $permission->id) }}" class="btn btn-warning">VER</a>
                                <a href="{{ route('permissions.profiles', $permission->id) }}" class="btn btn-info"><i class="fas fa-address-book"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $permissions->appends($filters)->links() !!}
            @else
                {!! $permissions->links() !!}
            @endif
        </div>
    </div>
@stop
