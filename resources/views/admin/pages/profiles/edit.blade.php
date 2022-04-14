@extends('adminlte::page')

@section('title', 'Edit Profile')

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item"><a href="{{route('profiles.index')}}">Profile</a> </li>
        <li class="breadcrumb-item"><a href="">Edit Profile</a> </li>
        <li class="breadcrumb-item active"><a href=""><b>{{$profile->name}}</b></a> </li>
    </ol>

@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Edit Profile </h1>


            <form action="{{route('profiles.update', $profile->id)}}" class="form" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Name:"value="{{$profile->name}}">
                </div>

                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control"
                           placeholder="Description:" value="{{$profile->description}}">
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-dark">Confirm</button>
                </div>
            </form>

        </div>
    </div>

@endsection
