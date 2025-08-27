<input type="text" placeholder="{{ $placeholder }}" name="{{ $name }}" id="{{ $name }}"
    value="{{ $value }}"
    {{ $attributes->merge(['class' => 'w-full rounded-md border-0 px-2.5 py-1.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2']) }}>
