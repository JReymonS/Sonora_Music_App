@props(['placeholder' => '¿Qué quieres escuchar?'])
<input
    {{ $attributes->merge([
        'type' => 'search',
        'placeholder' => $placeholder,
        'class' =>
            'w-full rounded-pill border-2 border-line-strong bg-surface-high px-4 py-3 text-sm text-ink placeholder:text-ink-muted focus-visible:outline-[3px] focus-visible:outline-focus',
    ]) }}>
