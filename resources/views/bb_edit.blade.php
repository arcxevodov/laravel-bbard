@extends('layouts.base')

@section('title', 'Правка объявления')

@section('main')
    <form action="{{ route('bb.update', ['bb' => $bb->id]) }}" method="post">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input type="text" id="txtTitle" value="{{ old('title', $bb->title) }}" name="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtContent">Описание</label>
            <input type="text" id="txtContent" value="{{ old('content', $bb->content) }}" name="content" class="form-control @error('content') is-invalid @enderror">
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Цена</label>
            <input type="text" id="txtPrice" value="{{ old('price', $bb->price) }}" name="price" class="form-control @error('price') is-invalid @enderror">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" value="Сохранить" class="btn btn-primary">
    </form>
@endsection
