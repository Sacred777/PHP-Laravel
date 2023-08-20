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
            <form class="form" action="{{route('')}}" method="post">
                @csrf
                <label class="form__label">
                    Title
                    <input class="form__input" type="text" name="title" required>
                </label>
                <label class="form__label">
                    Author
                    <input class="form__input" type="text" name="author" required>
                </label>
                <label class="form__label">
                    Choose Genre
                    <select class="form__select">
                        <option class="form__option" value="fantasy">Fantasy</option>
                        <option class="form__option" value="sci-fi">Sci-Fi</option>
                        <option class="form__option" value="mystery">Mystery</option>
                        <option class="form__option" value="drama">Drama</option>
                    </select>
                    <button class="form__btn" type="submit">Submit</button>
                </label>
            </form>
        </div>
    </body>
</html>
