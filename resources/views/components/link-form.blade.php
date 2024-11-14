@extends('layouts.app')

@section('content')
    <div class="link-form-container">
        <form class="link-form"
            action="{{ isset($link->id) ? route('links.update', $link->id) : route('links.create', $position->id) }}"
            method="POST">
            @csrf
            @if(isset($link->id))
                @method('PUT')
            @endif
            <h1>{{ isset($link->id) ? 'Edit Link' : 'Create Link' }}</h1>

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
                <select name="color" id="color" required>
                    <option value="" disabled {{ !isset($link->color) ? 'selected' : '' }}>Select a color</option>
                    <option value="red" {{ (old('color', $link->color ?? '') == 'red') ? 'selected' : '' }}>Red</option>
                    <option value="orange" {{ (old('color', $link->color ?? '') == 'orange') ? 'selected' : '' }}>Orange
                    </option>
                    <option value="yellow" {{ (old('color', $link->color ?? '') == 'yellow') ? 'selected' : '' }}>Yellow
                    </option>
                    <option value="green" {{ (old('color', $link->color ?? '') == 'green') ? 'selected' : '' }}>Green
                    </option>
                    <option value="blue" {{ (old('color', $link->color ?? '') == 'blue') ? 'selected' : '' }}>Blue
                    </option>
                    <option value="indigo" {{ (old('color', $link->color ?? '') == 'indigo') ? 'selected' : '' }}>Indigo
                    </option>
                    <option value="violet" {{ (old('color', $link->color ?? '') == 'violet') ? 'selected' : '' }}>Violet
                    </option>
                    <option value="gray" {{ (old('color', $link->color ?? '') == 'gray') ? 'selected' : '' }}>Gray
                    </option>
                    <option value="black" {{ (old('color', $link->color ?? '') == 'black') ? 'selected' : '' }}>Black
                    </option>
                </select>
            </div>

            <button type="submit">{{ isset($link->id) ? 'Update' : 'Create' }}</button>
            <a href="{{ route('dashboard') }}">Back to Dashboard</a>
        </form>

    </div>
@endsection
