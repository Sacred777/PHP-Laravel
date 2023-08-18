<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Data</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
<div class="container">
    <form class="form" action={{route('storeForm')}} method="post">
        @csrf
        <label class="form__label">
            Name:
            <input class="form__input" type="text" name="name" required>
        </label>
        <label class="form__label">
            Last Name:
            <input class="form__input" type="text" name="last-name" required>
        </label>
        <label class="form__label">
            E-mail:
            <input class="form__input" type="email" name="email" required>
        </label>
        <label class="form__label">
            Position:
            <input class="form__input" type="text" name="position" required>
        </label>
        <label class="form__label">
            Address:
            <input class="form__input" type="text" name="address" required>
        </label>
        <label class="form__label">
            Work Data:
            <textarea class="form__textarea" name="work-data" required></textarea>
        </label>
        <label class="form__label">
            JSON data:
            <textarea class="form__textarea" name="json-data" required></textarea>
        </label>
        <button class="btn" type="submit">Submit</button>
    </form>
</div>
</body>
</html>

