@props(['active'])

@php
$classes = ($active ?? false)
? 'inline-flex bg-red-300 items-center px-1 pt-1 text-sm font-medium leading-5 text-gray-900 transition'
: 'inline-flex items-center text-xs text-red-400 pt-1 ml-0 mr-5 border-transparent font-medium leading-5 text-gray-500 hover:text-red-500 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
