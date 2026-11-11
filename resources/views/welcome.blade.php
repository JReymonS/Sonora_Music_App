@extends('layouts.app')
@section('titulo', 'Inicio - Sonora')

@section('contenido')
    <script>
        window.pistas = @json($pistas)
    </script>
    <div class="grid h-screen grid-cols-[200px_1fr] grid-rows-[1fr_80px]">

        <!-- Navegacion -->
        <nav class="flex flex-col gap-2 bg-surface-raised px-4 py-6" aria-label="Principal">
            <div class="mb-6 flex items-center gap-2 text-xl font-extrabold">
                <img src="{{ asset('logos/sonora-mark-dark.svg') }}" class="size-6 shrink-0" aria-hidden="true"
                    alt="Sonora" />
                Sonora
            </div>
            <a href="/" aria-current="page"
                class="flex items-center gap-3 rounded-md bg-surface-high p-3 text-sm font-bold"><x-icon
                    name="home" />Inicio</a>
            <a href="{{ route('buscar') }}"
                class="flex items-center gap-3 rounded-md p-3 text-sm font-bold text-ink-muted hover:bg-surface-high"><x-icon
                    name="search" />Buscar</a>
            <a href="{{ route('biblio') }}"
                class="flex items-center gap-3 rounded-md p-3 text-sm font-bold text-ink-muted hover:bg-surface-high"><x-icon
                    name="library" />Tu biblioteca</a>
        </nav>

        <!-- Contenido principal -->
        <main class="overflow-y-auto px-8 py-6">
            <div class="mb-6 flex gap-2">
                <x-chip :activo="true">Todo</x-chip>
                <x-chip>Música</x-chip>
                <x-chip>Podcast</x-chip>
            </div>

            <h1 class="mb-4 text-3xl font-extrabold tracking-tight">Buenas tardes</h1>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($playlists as $index => $p)
                    <a href="{{ route('repro') }}">
                        <x-media-card :titulo="$p['titulo']" :artista="$p['artista']" :duracion="$p['duracion']" :barras="$p['barras']" />
                    </a>
                @endforeach
            </div>

            <h2 class="mb-4 mt-8 text-xl font-bold">Recien escuchado</h2>
            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($pistas as $index => $p)
                    <x-media-card data-pista="{{ $index }}" :titulo="$p['titulo']" :artista="$p['artista']" :duracion="$p['duracion']" />
                @endforeach
            </div>
        </main>

        <!-- Barra de reproduccion -->
        <div class="col-span-2 grid grid-cols-[1fr_2fr_1fr] items-center border-t border-line bg-surface-raised px-4">
            <div class="flex items-center gap-4">
                <div id="portada-reproductor" class="flex size-12 items-end gap-[2px] rounded-md bg-surface-high p-2">
                    <i class="flex-1 rounded-pill bg-accent transition-all duration-300" style="height: 20%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all duration-300" style="height: 60%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all duration-300" style="height: 100%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all duration-300" style="height: 40%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all duration-300" style="height: 70%"></i>
                </div>
                <div class="w-fit">
                    <p id="titulo" class="text-sm font-bold w-fit">Sin Título</p>
                    <p id="artista" class="text-xs font-medium text-ink-muted w-fit">Sin Artista</p>
                </div>
                <button type="button" aria-label="Guardar en biblioteca"
                    class="text-ink-muted hover:text-ink focus-visible:outline-[3px] focus-visible:outline-focus rounded-full p-1">
                    <img src="{{ asset('icons_white/heart.svg') }}" class="size-6 shrink-0" aria-hidden="true"
                        alt="Guardar" /></button>
            </div>

            <div class="flex flex-col items-center gap-2">
                <div class="flex items-center gap-6">
                    <button type="button" data-accion="aleatorio" aria-label="Aleatorio"
                        class="rounded-pill focus-visible:outline-[3px] focus-visible:outline-focus"><x-icon
                            name="shuffle" /></button>
                    <button type="button" data-accion="anterior" aria-label="Anterior"
                        class="rounded-pill focus-visible:outline-[3px] focus-visible:outline-focus"><x-icon
                            name="prev" /></button>
                    <button type="button" data-accion="alternar" aria-label="Reproducir"
                        class="flex size-10 items-center justify-center rounded-pill bg-accent text-on-accent hover:bg-accent-hover focus-visible:outline-[3px] focus-visible:outline-offset-2 focus-visible:outline-focus">
                        <x-icon name="play" id="icono-play" />
                        <x-icon name="pause" id="icono-pausa" class="hidden" />
                    </button>
                    <button type="button" data-accion="siguiente" aria-label="Siguiente"
                        class="rounded-pill focus-visible:outline-[3px] focus-visible:outline-focus"><x-icon
                            name="next" /></button>
                </div>
                <x-progress-track />
            </div>
            <div class="flex justify-end">
                <x-volume-track />
            </div>
        </div>
    </div>
@endsection
