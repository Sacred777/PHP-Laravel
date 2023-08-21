<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <h1 class="main-title">The book</h1>
    <form class="form" action="{{route('storeBook')}}" method="post">
        @csrf
        <label class="form__label">
            Title
            <input class="form__input" type="text" name="title" required value="{{ old('title') }}">
        </label>
        <label class="form__label">
            Author
            <input class="form__input" type="text" name="author" required value="{{ old('author') }}">
        </label>
        <label class="form__label">
            Choose Genre
            <select class="form__select" name="genre">
                <option class="form__option" value="fantasy">Fantasy</option>
                <option class="form__option" value="sci-fi">Sci-Fi</option>
                <option class="form__option" value="mystery">Mystery</option>
                <option class="form__option" value="drama">Drama</option>
            </select>
        </label>
        <button class="form__btn" type="submit">Submit</button>
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
