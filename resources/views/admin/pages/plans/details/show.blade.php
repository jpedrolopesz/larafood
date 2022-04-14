@extends('adminlte::page')

@section('title', "Detail Plan")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Plans</a> </li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}"><b>{{$plan->name}}</b></a> </li>
        <li class="breadcrumb-item"><a href="{{route('details.plan.index', $plan->url)}}" class="active">Details</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('details.plan.edit',  [$plan->url, $detail->id])}}" class="active"><b>Details</b></a> </li>
    </ol>

@stop

@section('content')

    <div class="card">

        <div class="card-body">
            <h2>Plan Details</h2>
            <ul>
                <li>
                    <strong>
                        Name:
                    </strong> {{$detail->name}}
                </li>

            </ul>

            <form action="{{route('details.plan.destroy', [$plan->url, $detail->id])}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>

        </div>
    </div>
@endsection
