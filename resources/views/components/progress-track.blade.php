@props(['tiempo' => '0:00', 'duracion' => '0:00', 'porcentaje' => 0])
<div {{ $attributes->merge(['class' => 'flex w-full items-center gap-2 font-mono text-xs text-ink-muted']) }}>
    <span id="tiempo">{{ $tiempo }}</span>
    <div class="h-1 flex-1 rounded-pill bg-surface-high" role="slider" aria-label="Progreso" aria-valuemin="0"
        aria-valuemax="100" aria-valuenow="{{ $porcentaje }}" id="barra">
        <div id="relleno" class="h-1 rounded-pill bg-accent" style="width: {{ $porcentaje }}%"></div>
    </div>
    <span id="duracion">{{ $duracion }}</span>
</div>
