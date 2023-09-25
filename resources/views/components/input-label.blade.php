@props(['value'])

<label {{ $attributes->merge(['class' => 'text-white']) }}>
    <span class="material-symbols-outlined text-3xl">{{ $value }}</span>
</label>