<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Form</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->

    </head>
    <body class="">
        <form class="form" action={{route('storeForm')}} method="post">
            @csrf
            <label class="label">
                <input class="" type="text" name="name" placeholder="Enter your name">
            </label>
            <label class="label">
                <input class="" type="text" name="last_name" placeholder="Enter your last name">
            </label>
            <label class="label">
                <input class="" type="email" name="email" placeholder="Enter your email">
            </label>
            <input class="" type="submit" value="Send">
        </form>
    </body>
</html>
