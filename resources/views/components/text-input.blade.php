<div class="relative">
    @if($formId)
        <button type="button" class="absolute top-0 right-0 flex h-full items-center pr-2"
        onclick="document.getElementById('{{ $name }}').value = ''; document.getElementById('{{ $formId }}').submit();">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h4 w-6 text-slate-400">
                <path stroke-linecap="round" stroke-linejoin="round" d="m9.75 9.75 4.5 4.5m0-4.5-4.5 4.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
            </svg>
        </button>
    @endif
    <input type="text" placeholder="{{ $placeholder }}" name="{{ $name }}" id="{{ $name }}"
        value="{{ $value }}"
        {{ $attributes->merge(['class' => 'w-full rounded-md border-0 px-2.5 py-1.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2 pr-8']) }}>
</div>
