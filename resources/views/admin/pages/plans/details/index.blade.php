@extends('adminlte::page')

@section('title', "Plan Details {$plan->name}")

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Dashboard</a> </li>
        <li class="breadcrumb-item active"><a href="{{route('details.plan.index', $plan->url)}}" class="active">Details</a> </li>
        <li class="breadcrumb-item"><a href="{{route('plans.show', $plan->url)}}"><b>{{$plan->name}}</b></a> </li>
    </ol>

@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group" role="group" aria-label="First group">

                    <h1>Details Plan {{$plan->name}}<a href="{{route('details.plan.create',$plan->url)}}" class="btn btn-dark">Add</a> </h1>

                </div>
            </div>
            <div class="card-body">
                @include('admin.includes.alerts')
                <table class="table table-condensed">
                    <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($details as $detail)
                        <tr>
                            <td>
                                {{ $detail->name }}
                            </td>

                            <td style="width: 300px">
                                <a href="{{ route('details.plan.edit', [$plan->url, $detail->id]) }}" class="btn btn-info">Edit</a>
                                <a href="{{ route('details.plan.show', [$plan->url, $detail->id]) }}" class="btn btn-warning">
                                    <i class="fas fa-eye"></i></a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <div class="card-footer">
                @if (isset($filters))
                    {!! $details->appends($filters)->links() !!}
                @else
                    {!! $details->links() !!}
                @endif
            </div>
        </div>
@stop
