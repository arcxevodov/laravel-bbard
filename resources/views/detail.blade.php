@extends('layouts.base')
@section('title', $bb->title)
@section('main')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>Создано: {{ $bb->user->name }}</p>
    <p>{{ $bb->price }}руб.</p>
    <p><a href="{{ route('index') }}">Вернуться назад</a></p>
@endsection
