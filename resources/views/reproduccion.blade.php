@extends('layouts.app')
@section('titulo', 'Reproduciendo - Sonora')

@section('contenido')
    <script>
        window.pistas = @json($pistas)
    </script>
    <div class="grid h-screen sm:grid-cols-1  md:grid-cols-[200px_1fr]">

        <!-- Navegacion -->
        <nav class="hidden md:flex flex-col gap-2 bg-surface-raised px-4 py-6" aria-label="Principal">
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
        <main class="grid sm:grid-cols-1  lg:grid-cols-[1fr_500px] gap-8 overflow-y-auto">
            <div class="flex flex-col items-center justify-center pt-4">
                <div
                    class="flex aspect-square w-full max-w-xs items-end gap-2 rounded-lg bg-surface-high p-6 shadow-raise md:max-w-sm lg:max-w-md lg:p-8">
                    <i class="flex-1 rounded-pill bg-accent transition-all" style="height: 40%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all" style="height: 70%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all" style="height: 100%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all" style="height: 50%"></i>
                    <i class="flex-1 rounded-pill bg-accent transition-all" style="height: 80%"></i>
                </div>

                <h1 id="titulo" class="mt-8 text-3xl font-extrabold">Sin Titulo</h1>
                <p id="artista" class="mt-2 text-lg font-medium text-ink-muted">Sin Artista</p>

                <div class="mt-8 w-full max-w-md flex-col items-center gap-4">
                    <x-progress-track />

                    <div class="mt-6 flex items-center justify-center gap-6">
                        <button type="button" data-accion="aleatorio" aria-label="Aleatorio"
                            class="rounded-pill focus-visible:outline-[3px] focus-visible:outline-focus"><x-icon
                                name="shuffle" /></button>

                        <button type="button" data-accion="anterior" class="text-ink-muted hover:text-ink"><x-icon
                                name="prev" class="size-8" /></button>

                        <button type="button" data-accion="alternar"
                            class="flex size-14 items-center justify-center rounded-pill bg-accent text-on-accent hover:bg-accent-hover">
                            <x-icon name="play" id="icono-play" class="size-8" />
                            <x-icon name="pause" id="icono-pausa" class="hidden size-8" />
                        </button>

                        <button type="button" data-accion="siguiente" class="text-ink-muted hover:text-ink"><x-icon
                                name="next" class="size-8" /></button>
                        <button type="button" class="ml-4 text-ink-muted hover:text-ink"><x-icon name="heart" /></button>
                    </div>
                </div>
            </div>

            <!-- Cola de reproduccion -->
            <div class="flex flex-col bg-surface-raised">
                <h1 class="mb-4 mt-8 text-3xl font-extrabold px-4">En cola</h1>
                <div class="max-w-full rounded-md bg-surface-raised px-4 py-2">
                    @foreach ($pistas as $i => $pista)
                        <x-song-row :indice="$i" :pista="$pista" :actual="$i === 0" />
                    @endforeach
                </div>
            </div>
        </main>
    </div>
@endsection
