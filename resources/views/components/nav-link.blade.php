@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-xs uppercase py-3 font-bold block text-cyan-500 hover:text-cyan-600'
            : 'text-xs uppercase py-3 font-bold block text-cyan-700 hover:text-cyan-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon ?? '' }}
    {{ $slot }}
</a>
