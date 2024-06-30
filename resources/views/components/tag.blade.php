@props(['size' => 'base'])

@php

    $classes = 'bg-white/10  rounded-xl  font-bold hover:bg-white/25 transion-colors duration-300';
    if ($size === 'base') {
        $classes .= ' px-6 py-1 text-2xs ';
    }

    if ($size === 'small') {
        $classes .= ' px-2 py-2 text-xs ';
    }
@endphp
<a href="" class="{{ $classes }}">{{ $slot }}
</a>
