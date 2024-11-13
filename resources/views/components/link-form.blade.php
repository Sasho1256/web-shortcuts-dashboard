@extends('layouts.app')

@section('content')
    <h1>{{ isset($link->id) ? 'Edit Link' : 'Create Link' }}</h1>

    <form action="{{ isset($link->id) ? route('links.update', $link->id) : route('links.create', $position->id) }}" method="POST">
        @csrf
        @if(isset($link->id))
            @method('PUT')
        @endif

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $link->title ?? '') }}" required>
        </div>

        <div>
            <label for="url">URL</label>
            <input type="url" name="url" id="url" value="{{ old('url', $link->url ?? '') }}" required>
        </div>

        <div>
            <label for="color">Color</label>
            <input type="text" name="color" id="color" value="{{ old('color', $link->color ?? '') }}" required>
        </div>

        <button type="submit">{{ isset($link->id) ? 'Update Link' : 'Create Link' }}</button>
    </form>

    <a href="{{ route('dashboard') }}">Back to Dashboard</a>
@endsection
