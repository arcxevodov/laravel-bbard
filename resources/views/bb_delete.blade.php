@extends('layouts.base')
@section('title', 'Удаление объявления')
@section('main')
    <p>Создано: {{ $bb->user->name }}</p>
    <form action="{{ route('bb.destroy', ['bb' => $bb->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Удалить" class="btn btn-danger">
    </form>
@endsection
