@extends('layouts.default')

@section('title', 'file upload')
@section('content')
    @if (session()->has('success'))
        <p>{{ session('success') }}</p>
    @endif
    <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <label>image: <input type="file" name="image"></label>
        <button type="submit">Send</button>
    </form>
@endsection
