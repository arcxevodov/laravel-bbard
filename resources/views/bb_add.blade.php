@extends('layouts.base')

@section('title', 'Добавление объявления')

@section('main')
    <form action="{{ route('bb.store') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input type="text" id="txtTitle" value="{{ old('title') }}" name="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <input type="text" id="txtContent" value="{{ old('content') }}" name="content" class="form-control @error('content') is-invalid @enderror">
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <input type="text" id="txtPrice" value="{{ old('price') }}" name="price" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" value="Добавить" class="btn btn-primary">
    </form>
@endsection
