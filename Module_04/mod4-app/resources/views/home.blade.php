@extends('layouts.default')

@section('content')
    <p style="margin-right: 30px;">
        Name: {{$name}}
    </p>

    @if($age > 18)
        <p style="margin-right: 30px;">
            Age: {{$age}}
        </p>
    @else
        <p style="margin-right: 30px;">Age: The man is too young</p>
    @endif

    <p style="margin-right: 30px;">
        Position: {{$position}}
    </p>
    <p style="margin-right: 30px;">
        Address: {{$address}}
    </p>
@stop
