@props(['activo' => false])
<button type="button" aria-pressed="{{ $activo ? 'true' : 'false' }}"
    {{ $attributes->merge(['class' => 'rounded-pill bg-surface-high px-4 py-2 text-xs font-bold uppercase tracking-wider text-ink aria-pressed:bg-accent aria-pressed:text-on-accent focus-visible:outline-[3px] focus-visible:outline-offset-2 focus-visible:outline-focus']) }}>
    {{ $slot }}</button>
