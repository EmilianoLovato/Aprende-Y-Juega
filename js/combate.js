document.addEventListener("DOMContentLoaded", () => {
    const spritePersonaje = document.getElementById("sprite-personaje");
    const spriteEnemigo = document.getElementById("sprite-enemigo");
    const spanMonedas = document.getElementById("contador-monedas");

    let monedas = 0;

    function iniciarCicloCombate() {
        // 1. Estado inicial
        spritePersonaje.src = "imagenes/esperando.gif";
        spriteEnemigo.src = "imagenes/caminandoenemigo.gif";
        
        // Reiniciamos la animación CSS del enemigo
        spriteEnemigo.classList.remove("enemigo-animado");
        void spriteEnemigo.offsetWidth; 
        spriteEnemigo.classList.add("enemigo-animado");

        // 2. A los 1 segundo, empiezan a golpearse
        setTimeout(() => {
            spritePersonaje.src = "imagenes/golpear.gif";
            spriteEnemigo.src = "imagenes/golpeenemigo.gif";
        }, 1000);

        // 3. A los 10 segundos, el enemigo muestra su animación de daño y sumamos moneda
        setTimeout(() => {
            spriteEnemigo.src = "imagenes/dañoenemigo.gif";
            
            monedas++;
            if (spanMonedas) {
                spanMonedas.textContent = monedas;
            }
        }, 3000);

        // 4. A los 12 segundos, reiniciamos el ciclo
        setTimeout(() => {
            iniciarCicloCombate(); 
        }, 5500); 
    }

    iniciarCicloCombate();
});
document.addEventListener("DOMContentLoaded", () => {
    // Estado del jugador y sus mejoras
    let datosJugador = {
        monedas: 0,
        ataque: { nivel: 1, costoBase: 50 },
        pasivo: { nivel: 1, costoBase: 30 }
    };

    // Referencias del DOM
    const spanMonedasArena = document.getElementById("contador-monedas");
    const spanMonedasTienda = document.getElementById("monedas-tienda");
    
    const nivelAtaqueEl = document.getElementById("nivel-ataque");
    const costoAtaqueEl = document.getElementById("costo-ataque");
    const btnComprarAtaque = document.getElementById("btn-comprar-ataque");

    const nivelPasivoEl = document.getElementById("nivel-pasivo");
    const costoPasivoEl = document.getElementById("costo-pasivo");
    const btnComprarPasivo = document.getElementById("btn-comprar-pasivo");

    // Función para actualizar la interfaz visual de la tienda
    function actualizarTienda() {
        // Sincronizar monedas (puedes conectar esto con tu variable global de combate)
        spanMonedasTienda.textContent = datosJugador.monedas;
        if(spanMonedasArena) spanMonedasArena.textContent = datosJugador.monedas;

        // Actualizar Ataque
        nivelAtaqueEl.textContent = datosJugador.ataque.nivel;
        let costoAtaqueActual = datosJugador.ataque.costoBase * datosJugador.ataque.nivel;
        costoAtaqueEl.textContent = costoAtaqueActual;

        // Actualizar Pasivo
        nivelPasivoEl.textContent = datosJugador.pasivo.nivel;
        let costoPasivoActual = datosJugador.pasivo.costoBase * datosJugador.pasivo.nivel;
        costoPasivoEl.textContent = costoPasivoActual;
    }

    // Botón Comprar Mejora de Ataque
    btnComprarAtaque.addEventListener("click", () => {
        let costoActual = datosJugador.ataque.costoBase * datosJugador.ataque.nivel;
        if (datosJugador.monedas >= costoActual) {
            datosJugador.monedas -= costoActual;
            datosJugador.ataque.nivel++;
            actualizarTienda();
            alert("¡Has mejorado tu Poder de Ataque!");
        } else {
            alert("No tienes suficientes monedas.");
        }
    });

    // Botón Comprar Generador Pasivo
    btnComprarPasivo.addEventListener("click", () => {
        let costoActual = datosJugador.pasivo.costoBase * datosJugador.pasivo.nivel;
        if (datosJugador.monedas >= costoActual) {
            datosJugador.monedas -= costoActual;
            datosJugador.pasivo.nivel++;
            actualizarTienda();
            alert("¡Has mejorado el Generador Pasivo!");
        } else {
            alert("No tienes suficientes monedas.");
        }
    });

    // Inicializamos valores en pantalla
    actualizarTienda();
});
// Agrega esto dentro de tu DOMContentLoaded en js/combate.js

    // --- CONTROL DEL MODAL DE MEJORAS ---
    const btnAbrirMejoras = document.getElementById("btn-abrir-mejoras");
    const modalMejoras = document.getElementById("modal-mejoras");
    const btnCerrarModal = document.getElementById("btn-cerrar-modal");
    const spanMonedasArbol = document.getElementById("monedas-arbol");

    // Abrir modal con animación
    if (btnAbrirMejoras) {
        btnAbrirMejoras.addEventListener("click", () => {
            modalMejoras.classList.add("activo");
            // Sincronizamos las monedas actuales al abrir
            if(spanMonedasArbol) spanMonedasArbol.textContent = monedas;
        });
    }

    // Cerrar modal
    if (btnCerrarModal) {
        btnCerrarModal.addEventListener("click", () => {
            modalMejoras.classList.remove("activo");
        });
    }

    // Cerrar si hacen clic fuera de la cajita
    window.addEventListener("click", (e) => {
        if (e.target === modalMejoras) {
            modalMejoras.classList.remove("activo");
        }
    });