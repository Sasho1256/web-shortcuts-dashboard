<div class="dashboard">
    @foreach ($positions as $position)
        @if ($position->link)
            <div class="tile-container">
                <a href="{{ $position->link->url }}" class="tile" style="background-color: {{ $position->link->color }};" target="_blank">
                    {{ $position->link->title }}
                </a>
                <div class="button-container">
                    <button onclick="window.location.href='{{ route('links.edit', $position->link->id) }}'">✏️</button>

                    <form action="{{ route('links.delete', $position->link->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">🗑️</button>
                    </form>
                </div>
            </div>
        @else
            <a href="{{ route('links.add', $position->id) }}" class="tile tile-empty" title="Add shortcut">
                +
            </a>
        @endif
    @endforeach
</div>
