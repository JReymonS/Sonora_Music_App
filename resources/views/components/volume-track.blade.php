@props(['nivel' => 50])
<div {{ $attributes->merge(['class' => 'flex w-32 items-center gap-2']) }}>
    <img src="{{ asset('icons_white/volume.svg') }}" class="size-6 shrink-0" aria-hidden="true" alt="volume" />
    <div class="group flex-h4 flex-1 cursor-pointer items-center" role="slider" aria-label="Volumen" aria-valuemin="0"
        aria-valuemax="100" aria-valuenow="{{ $nivel }}">
        <div class="h-1 w-full rounded-pill bg-surface-high">
            <div class="h-1 rounded-pill bg-accent transition-colors group-hover:bg-ink-muted"
                style="width: {{ $nivel }}%"></div>
        </div>
    </div>
</div>
