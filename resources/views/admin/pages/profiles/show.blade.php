@extends('adminlte::page')

@section('title', "Profile Details {$profile->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('profiles.index')}}">Profile</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('profiles.index')}}">View</a> </li>
        <li class="breadcrumb-item active"><a href=""><b>{{$profile->name}}</b></a> </li>
    </ol>

@stop

@section('content')

    <div class="card">

        <div class="card-body">
            <h2>Profile Details</h2>
            <ul>
                <li>
                    <strong>
                        Name:
                    </strong> {{$profile->name}}
                </li>
                <li>
                    <strong>
                        Description:
                    </strong> {{$profile->description}}
                </li>
            </ul>

            <form action="{{route('profiles.destroy', $profile->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>
@endsection
