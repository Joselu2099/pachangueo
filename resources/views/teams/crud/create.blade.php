@extends('layouts.app')
@section('title', $viewData['title'])
@section('stylesheet')
    <link href="{{ asset('/css/crud.css') }}" rel="stylesheet"/>
@endsection
@section('content')
    <div class="subheader">
        <h1>Crear Equipo</h1>
    </div>
    <div class="container">
        <form action="{{ route('teams.crud.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" id="name" required>
            </div>
            <div class="form-group">
                <label for="color">Color</label>
                <input type="color" class="form-control" name="color" id="color" required>
            </div>
            <div class="form-group">
                <label for="image">Escudo</label>
                <input type="file" class="form-control" name="image" id="image">
            </div>
            <input type="hidden" name="game_id" id="game_id" value="{{ $viewData["game_id"] }}">
            <button type="submit" class="btn btn-primary">Crear Equipo</button>
            <a href="{{ route('games.show', $viewData['game_id']) }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection
