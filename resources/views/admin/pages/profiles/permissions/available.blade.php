@extends('adminlte::page')

@section('title', 'Permissions')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}" class="active">Profile</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.permissions', $profile) }}">Permissions</a></li>
        <li class="breadcrumb-item active"><a href="" class="active"><b>Profile Permissions</b></a></li>
    </ol>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">
                    <h1>Permissions</h1>
                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <form action="{{ route('profiles.permissions.available', $profile->id) }}" method="POST" class="form form-inline">
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
                        <th width="50px">#</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>

                    <form action="{{ route('profiles.permissions.attach', $profile->id) }}"
                          method="POST">
                        @csrf

                        @foreach ($permissions as $permission)
                            <tr>
                                <td>
                                    <input type="checkbox" name="permissions[]"
                                           value="{{$permission->id}}">
                                </td>
                                <td>
                                    {{ $permission->name }}
                                </td>

                                <td style=width:300px>
                                </td>
                            </tr>
                        @endforeach
                        <tr>
                            <td colspan="500">
                                @include('admin.includes.alerts')

                                <button type="submit" class="btn btn-success">Confirm</button>
                            </td>
                        </tr>
                    </form>

                    </tbody>
                </table>
            </div>
            <div class="card-footer">

            </div>
        </div>
@stop
