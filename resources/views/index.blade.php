@extends('layouts.base')
@section('title', 'Главная')
@section('main')
    <form action="{{ route('search') }}" method="get">
        <div class="input-group mb-3">
            <input type="text" name="q" class="form-control rounded" placeholder="Введите название объявления...">
            <div class="input-group-append px-3">
                <button class="btn btn-primary" type="button">Найти</button>
            </div>
        </div>
    </form>
    @if(count($bbs) > 0)
        <table class="table table-stripped">
            <thead>
            <tr>
                <th>Товар</th>
                <th>Цена, руб.</th>
                <th>&nbsp;</th>
            </tr>
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <td><h5>{{ $bb->title }}</h5></td>
                    <td>{{ $bb->price }}</td>
                    <td><a href="{{ route('detail', ['bb' => $bb->id]) }}">Подробнее...</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
