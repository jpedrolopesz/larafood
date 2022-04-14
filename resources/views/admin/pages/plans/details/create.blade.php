@extends('adminlte::page')

@section('title', "Add new detail in plan")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Plans</a> </li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}"><b>{{$plan->name}}</b></a> </li>
        <li class="breadcrumb-item"><a href="{{route('details.plan.index', $plan->url)}}" class="active">Details</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('details.plan.create', $plan->url)}}" class="active"><b>New</b></a> </li>
    </ol>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">

                    <h1>Add new detail in plan {{$plan->name}}</h1>

                </div>
            </div>
            <form action="{{route('details.plan.store', $plan->url)}}" method="post">
                @csrf
                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" placeholder="Name:" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Confirm</button>
                     </div>
            </form>

@endsection
