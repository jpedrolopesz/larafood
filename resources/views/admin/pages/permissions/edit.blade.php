@extends('adminlte::page')

@section('title', "Permission Edit")

@section('content_header')
    <h1>Permission Edit {{ $permission->name }}</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.update', $permission->id) }}" class="form" method="POST">
                @method('PUT')

                @csrf

                <div class="form-group">
                    <label>Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $permission->name ?? old('name') }}">
                </div>
                <div class="form-group">
                    <label>Description:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{ $permission->description ?? old('description') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Confirm</button>
                </div>
            </form>
        </div>
    </div>
@endsection
