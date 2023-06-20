<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/styles/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <title>@yield('title') :: Объявления</title>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light px-5 rounded mt-3">
        <a href="{{ route('index') }}" class="navbar-brand mr-auto">Главная</a>
        <a href="{{ route('register') }}" class="nav-item nav-link">Регистрация</a>
        <a href="{{ route('login') }}" class="nav-item nav-link">Вход</a>
        <a href="{{ route('home') }}" class="nav-item nav-link">Мои объявления</a>
        <form action="{{ route('logout') }}" method="post" class="form-inline">
            @csrf
            <input type="submit" class="btn btn-danger" value="Выход">
        </form>
    </nav>
    <h1 class="my-3 text-center">Объявления</h1>
    @yield('main')
</div>
</body>
</html>
