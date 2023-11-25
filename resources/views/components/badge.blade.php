@props([
    'text' => '',
])

<span {{ $attributes->class(['badge']) }}>{{ $text }}</span>
