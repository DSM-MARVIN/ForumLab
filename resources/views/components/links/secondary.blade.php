@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition'
: 'inline-flex items-center text-xs text-purple-500 pt-1 border-b-2 border-transparent font-medium leading-5 text-gray-500 transition hover:text-purple-600';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
