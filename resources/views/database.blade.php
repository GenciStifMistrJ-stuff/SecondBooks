@extends('layout')

@section('header')
    <title>Database</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
@stop

<!-- Fully functional iterating through whole the User model object.-->
{{--@section('container')
    <h2>Some Database stuff</h2>{{ count($databaseStuff) }}
    @foreach($databaseStuff as $row)
        <ul>
            @foreach($row->toArray() as $columnValue => $value)
                <li>{{ $value }}</li>
            @endforeach
        </ul>
    @endforeach
@stop--}}

@section('container')
    <h2>Some Database stuff</h2>{{ $test }}
    @foreach($parsedUsersTable as $row)
        <ul>
            @foreach($row as $columnName => $value)
                <li><strong>{{ $columnName }}</strong> -> {{ $value }}</li>
            @endforeach
        </ul>
    @endforeach
@stop