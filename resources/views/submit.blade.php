@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <h1>Добавить задачу</h1>
        </div>
        <div class="row">
            <form action="/submit" method="post">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger" role="alert">
                        Please fix the following errors
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Задача:</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Что вы хотите сделать" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Описание:</label>
                    <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="подробности" value="{{ old('description') }}">
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-flex justify-content-between">
                    <button type="submit" class="btn btn-outline-primary">Добавить</button>
                    <a class="btn btn-outline-success" href="/">Отменить</a>

                </div>
            </form>
        </div>
    </div>
@endsection