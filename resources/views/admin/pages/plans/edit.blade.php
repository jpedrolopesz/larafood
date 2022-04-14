@extends('adminlte::page')

@section('title', 'Edit Plan')

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Plans</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Edit</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('plans.index')}}"><b>{{$plan->name}}</b></a> </li>
    </ol>

@stop

@section('content')

    <div class="card">
        <div class="card-body">
            <h1>Edit Plan </h1>


            <form action="{{route('plans.update', $plan->url)}}" class="form" method="POST">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control"
                           placeholder="Name:"value="{{$plan->name}}">
                </div>
                <div class="form-group">
                    <label>Price:</label>
                    <input type="text" name="price" class="form-control"
                           placeholder="Price:" value="{{$plan->price}}">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control"
                           placeholder="Description:" value="{{$plan->description}}">
                </div>
                <div class="form-group">

                    <button type="submit" class="btn btn-dark">Confirm</button>
                </div>
            </form>

        </div>
    </div>

@endsection
