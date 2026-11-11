<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $pistas = [
        ['titulo' => 'Noches de lluvia', 'artista' => 'Mar Abierto',   'dur' => 258, 'duracion' => '04:18'],
        ['titulo' => 'Hora azul',        'artista' => 'Luz de Norte',  'dur' => 232, 'duracion' => '03:52'],
        ['titulo' => 'Cuerdas',          'artista' => 'Estudio Cinco', 'dur' => 307, 'duracion' => '05:07'],
        ['titulo' => 'Caminos',          'artista' => 'Mar Abierto',   'dur' => 209, 'duracion' => '03:29'],
        ['titulo' => 'Sin prisa',        'artista' => 'Luz de Norte',  'dur' => 284, 'duracion' => '04:44'],
        ['titulo' => 'Ecos del ayer',       'artista' => 'Viento Lunar',    'dur' => 243, 'duracion' => '04:03'],
        ['titulo' => 'Bajo las estrellas', 'artista' => 'Nube Violeta',    'dur' => 196, 'duracion' => '03:16'],
        ['titulo' => 'Punto de partida',   'artista' => 'Los Días Raros',  'dur' => 275, 'duracion' => '04:35'],
        ['titulo' => 'Cartas al mar',      'artista' => 'Alma de Cristal', 'dur' => 221, 'duracion' => '03:41'],
        ['titulo' => 'Lejos de aquí',      'artista' => 'Viento Lunar',    'dur' => 312, 'duracion' => '05:12'],
        ['titulo' => 'Luces de neón',      'artista' => 'Frecuencia Sur',  'dur' => 187, 'duracion' => '03:07'],
        ['titulo' => 'Último recuerdo',    'artista' => 'Nube Violeta',    'dur' => 264, 'duracion' => '04:24'],
        ['titulo' => 'Donde nace el sol',  'artista' => 'Círculo Infinito', 'dur' => 238, 'duracion' => '03:58'],
    ];

    $playlists = [
        ['titulo' => 'Mezcla diaria 1', 'artista' => 'Para ti',   'duracion' => '1:12:40', 'barras' => [40, 70, 55, 90, 35]],
        ['titulo' => 'Noches de lluvia', 'artista' => 'Playlist', 'duracion' => '48:05',   'barras' => [80, 45, 65, 30, 75]],
        ['titulo' => 'Sin prisa',        'artista' => 'Mar Abierto', 'duracion' => '36:21', 'barras' => [50, 85, 40, 70, 60]],
        ['titulo' => 'Caminos',          'artista' => 'Playlist', 'duracion' => '1:03:12', 'barras' => [30, 60, 90, 50, 80]],
        ['titulo' => 'Atardeceres tranquilos', 'artista' => 'Playlist', 'duracion' => '52:34',   'barras' => [65, 40, 85, 55, 75]],
        ['titulo' => 'Viaje sin destino',      'artista' => 'Ruta Musical', 'duracion' => '1:08:25', 'barras' => [90, 60, 35, 80, 50]],
        ['titulo' => 'Recuerdos de verano',    'artista' => 'Playlist', 'duracion' => '43:17',   'barras' => [45, 75, 60, 95, 40]],
        ['titulo' => 'Frecuencia nocturna',    'artista' => 'Onda Sonora', 'duracion' => '1:15:48', 'barras' => [70, 50, 90, 65, 85]],

    ];
    return view('welcome', compact('pistas', 'playlists'));
});

Route::get('/reproduciendo', function () {
    $pistas = [
        ['titulo' => 'Noches de lluvia', 'artista' => 'Mar Abierto',   'dur' => 258, 'duracion' => '04:18'],
        ['titulo' => 'Hora azul',        'artista' => 'Luz de Norte',  'dur' => 232, 'duracion' => '03:52'],
        ['titulo' => 'Cuerdas',          'artista' => 'Estudio Cinco', 'dur' => 307, 'duracion' => '05:07'],
        ['titulo' => 'Caminos',          'artista' => 'Mar Abierto',   'dur' => 209, 'duracion' => '03:29'],
        ['titulo' => 'Sin prisa',        'artista' => 'Luz de Norte',  'dur' => 284, 'duracion' => '04:44'],
        ['titulo' => 'Ecos del ayer',       'artista' => 'Viento Lunar',    'dur' => 243, 'duracion' => '04:03'],
        ['titulo' => 'Bajo las estrellas', 'artista' => 'Nube Violeta',    'dur' => 196, 'duracion' => '03:16'],
        ['titulo' => 'Punto de partida',   'artista' => 'Los Días Raros',  'dur' => 275, 'duracion' => '04:35'],
        ['titulo' => 'Cartas al mar',      'artista' => 'Alma de Cristal', 'dur' => 221, 'duracion' => '03:41'],
        ['titulo' => 'Lejos de aquí',      'artista' => 'Viento Lunar',    'dur' => 312, 'duracion' => '05:12'],
        ['titulo' => 'Luces de neón',      'artista' => 'Frecuencia Sur',  'dur' => 187, 'duracion' => '03:07'],
        ['titulo' => 'Último recuerdo',    'artista' => 'Nube Violeta',    'dur' => 264, 'duracion' => '04:24'],
        ['titulo' => 'Donde nace el sol',  'artista' => 'Círculo Infinito', 'dur' => 238, 'duracion' => '03:58'],
    ];

    return view('reproduccion', compact('pistas'));
})->name('repro');

Route::get('/biblioteca', function () {
    $pistas = [
        ['titulo' => 'Noches de lluvia', 'artista' => 'Mar Abierto',   'dur' => 258, 'duracion' => '04:18'],
        ['titulo' => 'Hora azul',        'artista' => 'Luz de Norte',  'dur' => 232, 'duracion' => '03:52'],
        ['titulo' => 'Cuerdas',          'artista' => 'Estudio Cinco', 'dur' => 307, 'duracion' => '05:07'],
        ['titulo' => 'Caminos',          'artista' => 'Mar Abierto',   'dur' => 209, 'duracion' => '03:29'],
        ['titulo' => 'Sin prisa',        'artista' => 'Luz de Norte',  'dur' => 284, 'duracion' => '04:44'],
        ['titulo' => 'Ecos del ayer',       'artista' => 'Viento Lunar',    'dur' => 243, 'duracion' => '04:03'],
        ['titulo' => 'Bajo las estrellas', 'artista' => 'Nube Violeta',    'dur' => 196, 'duracion' => '03:16'],
        ['titulo' => 'Punto de partida',   'artista' => 'Los Días Raros',  'dur' => 275, 'duracion' => '04:35'],
        ['titulo' => 'Cartas al mar',      'artista' => 'Alma de Cristal', 'dur' => 221, 'duracion' => '03:41'],
        ['titulo' => 'Lejos de aquí',      'artista' => 'Viento Lunar',    'dur' => 312, 'duracion' => '05:12'],
        ['titulo' => 'Luces de neón',      'artista' => 'Frecuencia Sur',  'dur' => 187, 'duracion' => '03:07'],
        ['titulo' => 'Último recuerdo',    'artista' => 'Nube Violeta',    'dur' => 264, 'duracion' => '04:24'],
        ['titulo' => 'Donde nace el sol',  'artista' => 'Círculo Infinito', 'dur' => 238, 'duracion' => '03:58'],
    ];
    return view('biblioteca', compact('pistas'));
})->name('biblio');

Route::get('/buscar', function () {
    return view('search');
})->name('buscar');
