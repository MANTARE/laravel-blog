@extends('layouts.default')

@section('title', 'GET form')

@section('content')
    <form action="/query-strings" method="GET">
        <label>keyword: <input type="text" name="keywords"> </label>
        <button type="submit">送信</button>
    </form>
@endsection