@props([
    'type' => 'success',
    'colors' => [
        'success' => 'bg-green-400 border-green-500',
        'error' => 'bg-red-400 border-red-500',
        'warning' => 'bg-yellow-400 border-yellow-500',
    ]
])

<section {{ $attributes->merge(['class' => "{$colors[$type]} border-b p-4"]) }}>
    <div class="flex justify-between">
        <p>{{ $slot }}</p>
        <button>&times;</button>
    </div>
</section>