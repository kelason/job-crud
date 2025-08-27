<nav {{ $attributes }}>
    <ul class="flex items-center space-x-4 text-sm text-slate-500">
        <li>
            <a href="{{ route('jobs.index') }}" class="text-blue-500 hover:underline">Home</a>
        </li>

        @foreach ($links as $label => $url) 
            <li>
                &rarr;
            </li>
            <li>
                @if ($url === '#')
                    {{ $label }}
                @else
                    <a href="{{ $url }}" class="text-blue-500 hover:underline">{{ $label }}</a>
                @endif
            </li>
        @endforeach
    </ul>
</nav>