<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Create user</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <h1 class="main-title">Create User</h1>
    <form class="form" action="{{route('storeUser')}}" method="post">
        @csrf
        <label class="form__label">
            Name
            <input class="form__input" type="text" name="name" required value="{{ old('name') }}">
        </label>
        <label class="form__label">
            Surname
            <input class="form__input" type="text" name="surname" required value="{{ old('surname') }}">
        </label>
        <label class="form__label">
            Email
            <input class="form__input" type="email" name="email" required value="{{ old('email') }}">
        </label>
        <button class="form__btn" type="submit">Create</button>
    </form>

    @if($errors->any())
        <div class="alert">
            <ul class="alert__list">
                @foreach($errors->all() as $error)
                    <li class="alert__item">
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
</body>
</html>
