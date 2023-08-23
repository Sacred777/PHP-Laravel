<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Resume</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <h1 class="main-title">User's Resume</h1>
    <ul class="user-data__list">
        <li class="user-data__item">
            <h2 class="user-data__title">Name</h2>
            <p class="user-data__value">{{$data['name']}}</p>
        </li>
        <li class="user-data__item">
            <h2 class="user-data__title">Surname</h2>
            <p class="user-data__value">{{$data['surname']}}</p>
        </li>
        <li class="user-data__item">
            <h2 class="user-data__title">Email</h2>
            <p class="user-data__value">{{$data['email']}}</p>
        </li>
    </ul>
</div>
</body>
</html>
