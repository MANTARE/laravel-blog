@extends('layouts.default')

@section('title', 'show uploaded files')
@section('content')
    @if (session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <img src="{{ asset('storage/photos/' . $filename) }}" alt="">

    <form action="{{ route('photos.destroy', ['photo' => $filename]) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">delete</button>
    </form>
    <a href="{{ route('photos.download', ['photo' => $filename]) }}">DOWNLOAD</a>
@endsection
