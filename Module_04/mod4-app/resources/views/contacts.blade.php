@extends('layouts.default')

@section('content')
    @foreach($data as $key => $item)
        @if ($key === 'email' && $item === "")
            <p style="margin-right: 30px;">
                {{$key}}: The email address is not specified
            </p>
        @endif
        <p style="margin-right: 30px;">
            {{$key}}: {{$item}}
        </p>
    @endforeach
@stop
