@extends('layouts.app')
@section('titulo', 'Buscar - Sonora')

@section('contenido')
    <div class="grid h-screen grid-cols-[200px_1fr]">

        <!-- Navegacion -->
        <nav class="flex flex-col gap-2 bg-surface-raised px-4 py-6" aria-label="Principal">
            <div class="mb-6 flex items-center gap-2 text-xl font-extrabold">
                <img src="{{ asset('logos/sonora-mark-dark.svg') }}" class="size-6 shrink-0" aria-hidden="true"
                    alt="Sonora" />
                Sonora
            </div>
            <a href="/" aria-current="page"
                class="flex items-center gap-3 rounded-md p-3 text-sm font-bold text-ink-muted hover:bg-surface-high"><x-icon
                    name="home" />Inicio</a>
            <a href="{{ route('buscar') }}"
                class="flex items-center gap-3 rounded-md p-3 text-sm font-bold bg-surface-high"><x-icon
                    name="search" />Buscar</a>
            <a href="{{ route('biblio') }}"
                class="flex items-center gap-3 rounded-md p-3 text-sm font-bold text-ink-muted hover:bg-surface-high"><x-icon
                    name="library" />Tu biblioteca</a>
        </nav>

        <!-- Contenido principal -->
        <main>
            <!-- Busqueda -->
            <div class="w-full max-w-2xl px-4 py-6">
                <h1 class="mb-4 text-3xl font-extrabold tracking-tight">Buscar</h1>
                <p class="mb-6 text-sm text-ink-muted">Busca pistas, artistas, álbumes y más.</p>
                <x-search-field />
            </div>
        </main>
    @endsection
