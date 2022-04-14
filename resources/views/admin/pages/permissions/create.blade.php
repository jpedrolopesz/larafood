@extends('adminlte::page')

@section('title', 'Cadastrar Nova Permissão')

@section('content_header')
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
        <li class="breadcrumb-item "><a href="{{ route('permissions.index') }}" >Permissions</a></li>
        <li class="breadcrumb-item active"><a href="{{ route('permissions.index') }}" class="active"><b>Add Permission</b></a></li>
    </ol>
    <h1>Register New Permission</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <form action="{{ route('permissions.store') }}" class="form" method="POST">
                @include('admin.includes.alerts')

                @csrf

                <div class="form-group">
                    <label>* Nome:</label>
                    <input type="text" name="name" class="form-control" placeholder="Nome:" value="{{ $permission->name ?? old('name') }}">
                </div>
                <div class="form-group">
                    <label>Descrição:</label>
                    <input type="text" name="description" class="form-control" placeholder="Descrição:" value="{{ $permission->description ?? old('description') }}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection
