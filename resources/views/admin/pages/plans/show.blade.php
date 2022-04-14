@extends('adminlte::page')

@section('title', "Plan Details {$plan->name}")

@section('content_header')

    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('plans.index')}}">Plans</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('plans.index')}}"><b>{{$plan->name}}</b></a> </li>
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
                    </strong> {{$plan->name}}
                </li>
                <li>
                    <strong>
                        Name:
                    </strong> {{$plan->url}}
                </li>
                <li>
                    <strong>
                        Price:
                    </strong> ${{number_format($plan->price, 2, ',','.')}}
                </li>
                <li>
                    <strong>
                        Description:
                    </strong> {{$plan->description}}
                </li>
            </ul>

            <form action="{{route('plans.destroy', $plan->url)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete Plan</button>
            </form>

        </div>
    </div>
@endsection
