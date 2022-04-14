@extends('adminlte::page')

@section('title', 'Plans')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('plans.index')}}"><b>Plans</b></a> </li>
    </ol>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">

                    <h1>Plans <a href="{{route('plans.create')}}" class="btn btn-dark">Create</a></h1>

                </div>
                <div class="input-group">
                    <div class="input-group-prepend">
                        <form action="{{route('plans.search')}}" method="POST" class="form form-inline">
                            @csrf
                            <input type="text" name="filter" placeholder="Search" class="form-control"
                                   value="{{$filters['filter'] ?? ''}}">
                            <button type="submit" class="btn btn-dark ">Filter</button>

                        </form>
                       </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-condensed">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($plans as $plan)
                    <tr>
                        <td>
                            {{ $plan->name }}
                        </td>
                        <td>
                            $ {{ number_format($plan->price, 2, ',', '.') }}
                        </td>
                        <td style="width: 300px">
                            <a href="{{route('details.plan.index', $plan->url)}}" class="btn btn-primary">Details</a>
                            <a href="{{route('plans.edit', $plan->url)}}" class="btn btn-info">Edit</a>
                            <a href="{{ route('plans.profiles', $plan->id) }}" class="btn btn-warning"><i class="fas fa-address-book"></i></a>
                            <a href="{{route('plans.show', $plan->url)}}" class="btn btn-warning"><i class="fas fa-eye"></i></a>

                        </td>

                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        <div class="card-footer">
            @if (isset($filters))
                {!! $plans->appends($filters)->links() !!}
            @else
                {!! $plans->links() !!}
            @endif
        </div>
    </div>
@stop
