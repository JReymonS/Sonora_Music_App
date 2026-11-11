const pistas = window.pistas ?? [];
let i = 0; // pista actual
let t = 0; // segundos transcurridos
let temporizador = null;

const $ = (sel) => document.querySelector(sel);
const $$ = (sel) => document.querySelectorAll(sel);
const fmt = (s) =>
    `${String(Math.floor(s / 60)).padStart(2, "0")}:${String(s % 60).padStart(2, "0")}`;

//Dibuja las barras de la portada
function actualizarBarras(selectorContenedor, altura) {
    const contenedor = $(selectorContenedor);
    if (!contenedor) return;

    const barras = contenedor.querySelector("i");
    altura.forEach((altura, index) => {
        if (barras[index]) {
            barras[index].style.height = `${altura}`;
        }
    });
}

function pintar() {
    const p = pistas[i];
    if (!p) return;
    $("#titulo").textContent = p.titulo;
    $("#artista").textContent = p.artista;
    $("#tiempo").textContent = fmt(t);
    $("#duracion").textContent = fmt(p.dur);
    const pct = Math.round((t / p.dur) * 100);
    $("#relleno").style.width = `${pct}%`;
    $("#barra").setAttribute("aria-valuenow", pct);

    if (p.barras) {
        actualizarBarras("#portada-reproductor", p.barras);
    }

    //Elemento activo en la lista de tarjetas
    $$("[data-pista").forEach((elemento) => {
        if (Number(elemento.dataset.pista) === i) {
            elemento.setAttribute("aria-current", "true");
        } else {
            elemento.removeAttribute("aria-current");
        }
    });
}

function reproduciendo() {
    return temporizador !== null;
}

function pintarBoton() {
    const activo = reproduciendo();
    $("#icono-play").classList.toggle("hidden", activo);
    $("#icono-pausa").classList.toggle("hidden", !activo);
    $('[data-accion="alternar"]').setAttribute(
        "aria-label",
        activo ? "Pausar" : "Reproducir",
    );
}

function reproducir() {
    clearInterval(temporizador);
    temporizador = setInterval(() => {
        t++;
        if (t >= pistas[i].dur) {
            cambiar(i + 1);
            return;
        }
        pintar();
    }, 1000);
    pintarBoton();
}

function pausar() {
    clearInterval(temporizador);
    temporizador = null;
    pintarBoton();
}

function cambiar(nueva) {
    i = (nueva + pistas.length) % pistas.length;
    t = 0;
    pintar();
}

//Simulacion de volumen
function configurarVolumen() {
    const barraVol = $('[aria-label="Volumen"]');
    if (!barraVol) return;

    let pos = false;
    const actualizarVolumen = (e) => {
        const rect = barraVol.getBoundingClientRect();
        let x = e.clientX - rect.left;
        let pct = Math.max(
            0,
            Math.min(100, Math.round((x / rect.width) * 100)),
        );
        barraVol.setAttribute("aria-valuenow", pct);
        barraVol.querySelector(
            ".bg-accent, .group-hover\\:bg-accent",
        ).style.width = `${pct}%`;
    };

    barraVol.addEventListener("mousedown", (e) => {
        pos = true;
        actualizarVolumen(e);
    });

    document.addEventListener("mousemove", (e) => {
        if (pos) actualizarVolumen(e);
    });

    document.addEventListener("mouseup", () => {
        pos = false;
    });
}

document.addEventListener("click", (e) => {
    const accion = e.target.closest("[data-accion]")?.dataset.accion;
    if (accion === "alternar") reproduciendo() ? pausar() : reproducir();
    if (accion === "siguiente") cambiar(i + 1);
    if (accion === "anterior") cambiar(i - 1);
    const elementoPista = e.target.closest("[data-pista]");
    if (elementoPista) {
        cambiar(Number(elementoPista.dataset.pista));
        reproducir();
    }
});

document.addEventListener("DOMContentLoaded", () => {
    configurarVolumen();
});
