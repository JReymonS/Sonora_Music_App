@props(['titulo', 'artista', 'duracion', 'indice', 'barras' => [50, 80, 60, 90, 40]])
<div
    {{ $attributes->merge(['class' => 'rounded-md bg-surface-raised p-4 transition hover:bg-surface-high hover:shadow-raise']) }}>
    <div class="mb-4 flex aspect-square items-end gap-1 rounded-md bg-surface-high p-4">
        @foreach ($barras as $h)
            <i class="flex-1 rounded-pill bg-accent" style="height: {{ $h }}%"></i>
        @endforeach
    </div>
    <p class="text-xl font-bold">{{ $titulo }}</p>
    <p class="mt-1 text-sm font-medium text-ink-muted">{{ $artista }}</p>
    <p class="mt-2 text-xs font-mono text-ink-muted">{{ $duracion }}</p>
</div>
