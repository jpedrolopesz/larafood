@extends('adminlte::page')

@section('title', 'Add Profile')

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('profiles.index')}}">Profiles</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('profiles.index')}}"><b>Create</b></a> </li>
    </ol>

@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Create a new profile</h1>
            @include('admin.includes.alerts')
            <form action="{{route('profiles.store')}}" class="form" method="POST">
                @csrf

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Name:">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control" placeholder="Description:">
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-dark">Confirm</button>
                </div>
            </form>

        </div>
    </div>

@endsection
