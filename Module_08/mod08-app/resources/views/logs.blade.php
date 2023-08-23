<!DOCTYPE html>
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Логи</title>
    <style>
        td:nth-child(5),
        td:nth-child(6) {
            text-align: center;
        }

        table {
            position: absolute;
            border-spacing: 0;
            border-collapse: collapse;
            width: 70%;
            box-shadow: 0px 4px 100px rgb(255 255 255 / 25%);
        }

        td,
        th {
            padding: 10px;
            border: 1px solid #282828;
        }

        th:nth-child(odd) {
            background-color: #c1b7b7;
        }
    </style>
</head>

<body>


<table>
    <tr>
        <th>id</th>
        <th>time</th>
        <th>duration</th>
        <th>ip</th>
        <th>url</th>
        <th>method</th>
        <th>input</th>
    </tr>
    @foreach($records as $record)
        <tr>
            <td align="center">
                {{$record->id}}
            </td>
            <td align="center">
                {{$record->time}}
            </td>
            <td align="center">
                {{$record->duration}}
            </td>
            <td align="center">
                {{$record->ip}}
            </td>
            <td align="center">
                {{$record->url}}
            </td>
            <td align="center">
                {{$record->method}}
            </td>
            <td align="center">
                {{$record->input}}
            </td>
        </tr>
    @endforeach
</table>
</body>
</html>
