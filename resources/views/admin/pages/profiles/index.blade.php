@extends('adminlte::page')

@section('title', 'Profiles')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('profiles.index') }}" class="active"><b>Profiles</b></a></li>
    </ol>

@stop

@section('content')

    <div class="card">


        <div class="card-header">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">

                    <h1>Profiles <a href="{{ route('profiles.create') }}" class="btn btn-dark">Add</a></h1>

                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <form action="{{ route('profiles.search') }}" method="POST" class="form form-inline">
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
                @foreach ($profiles as $profile)
                    <tr>
                        <td>
                            {{ $profile->name }}
                        </td>
                        <td style=width:300px>
                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-info">Edit</a>
                            <a href="{{ route('profiles.show', $profile->id) }}" class="btn btn-warning">
                                <i class="fas fa-eye"></i></a>
                            <a href="{{ route('profiles.permissions', $profile->id) }}" class="btn btn-warning">
                                <i class="fas fa-lock"></i></a>
                             </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif
        </div>
    </div>
@stop
