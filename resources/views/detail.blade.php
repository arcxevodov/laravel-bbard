@extends('layouts.base')
@section('title', $bb->title)
@section('main')
    <h2>{{ $bb->title }}</h2>
    <p>{{ $bb->content }}</p>
    <p>Создано: {{ $bb->user->name }}</p>
    <p>{{ $bb->price }}руб.</p>
    <p><a href="{{ route('index') }}">Вернуться назад</a></p>
    <div class="comments">
        <h2>Комментарии</h2>
        <form action="{{ route('comment.store', ['bb' => $bb]) }}" method="post" class="w-25 py-3">
            @csrf
            <div class="form-group">
                <label for="txtTitle">Заголовок</label>
                <input type="text" id="txtTitle" value="{{ old('title') }}" name="title" class="form-control">
            </div>
            <div class="form-group">
                <label for="txtContent">Описание</label>
                <input type="text" id="txtContent" value="{{ old('content') }}" name="content" class="form-control">
            </div>
            <input type="submit" value="Добавить" class="btn btn-primary">
        </form>
        <div class="comments-list w-25 py-3">
            @foreach($bb->comments as $comment)
                <b>{{ $comment->title }}</b>
                <p>{{ $comment->content }}</p>
            @endforeach
        </div>
    </div>

@endsection
