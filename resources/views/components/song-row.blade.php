@props(['indice', 'pista', 'actual' => false])
<button type="button" data-pista="{{ $indice }}" @if ($actual) aria-current="true" @endif
    class="group grid w-full grid-cols-[24px_1fr_auto] items-center gap-3 rounded-md px-2 py-3 text-left hover:bg-surface-high aria-[current=true]:bg-surface-high focus-visible:outline-[3px] focus-visible:outline-focus">
    <span
        class="font-mono text-xs text-ink-muted group-aria-[current=true]:text-accent">{{ str_pad($indice + 1, 2, '0', STR_PAD_LEFT) }}</span>
    <span>
        <span class="block text-sm font-bold">{{ $pista['titulo'] }}</span>
        <span class="block text-xs font-medium text-ink-muted">{{ $pista['artista'] }}</span>
    </span>
    <span
        class="font-mono text-xs text-ink-muted">{{ sprintf('%02d:%02d', intdiv($pista['dur'], 60), $pista['dur'] % 60) }}</span>
</button>
