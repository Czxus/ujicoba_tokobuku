@props(['type' => 'info'])

@php
$classes = match($type) {
    'success' => 'bg-green-100 text-green-800 border-green-200',
    'warning' => 'bg-yellow-100 text-yellow-800 border-yellow-200',
    'danger' => 'bg-red-100 text-red-800 border-red-200',
    default => 'bg-blue-100 text-blue-800 border-blue-200',
};
@endphp

<span {{ $attributes->merge(['class' => 'px-2.5 py-0.5 text-xs font-semibold rounded-full border ' . $classes]) }}>
    {{ $slot }}
</span>