<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aprende y juega - Inicio</title>
    <link rel="stylesheet" href="estilos/estil.css">
    <link rel="stylesheet" href="estilos/arena.css">
    <script src="js/combate.js" defer></script>
</head>
<body>

    <div class="browser-frame">
        <header class="site-header">
            <div class="logo-container">
                <span class="logo-icon">🎮</span>
                <h1 class="site-title">Aprende y juega</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="PROYECTO1.php" class="active">Inicio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Ventana.php" style="color: #ffeb3b; font-weight: bold;">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>

        <main class="site-main">
            <section class="content-section">
                <h2>Bienvenido a Aprende y juega</h2>
                <p>Explora nuestras herramientas y recursos interactivos diseñados para optimizar tu aprendizaje de manera sencilla y práctica.</p>
                
                <p>AQUI VA EL EJERCICIO.</p>
                <div class="media-container">
                    <img src="imagenes/problema.jpe" alt="Problema educativo" class="main-image-small">
                </div>

                <p>Al responderlo correctamente, se recompensará con puntos de experiencia los cuales podrán ser utilizados para mejorar al personaje y obtener habilidades especiales.</p>
                
                <h3>Área de Combate</h3>
                <div class="arena-combate">
                    
                    <!-- CONTADOR DE MONEDAS EN LA ESQUINA -->
                    <div class="contador-monedas-container">
                        <span class="icono-moneda">🪙</span>
                        <span id="contador-monedas">0</span>
                    </div>

                    <div class="personaje-container">
                        <img id="sprite-personaje" src="imagenes/esperando.gif" alt="Mi Personaje" class="pixel-art">
                    </div>
                    <div class="enemigo-container">
                        <img id="sprite-enemigo" src="imagenes/caminandoenemigo.gif" alt="Enemigo" class="pixel-art enemigo-animado">
                    </div>
                </div>
            </section>

            <aside class="sidebar">
                <h3>Secciones</h3>
                <ul>
                    <li><a href="#">Mejoras</a></li>
                    <li><a href="#">Divagar más en el tema</a></li>
                </ul>
                
                <div class="info-box">
                    <span class="globe-icon">🌐</span>
                    <p>Plataforma Activa</p>
                </div>
            </aside>
        </main>

        <footer class="site-footer">
            <p>© 2026 Aprende y juega. Todos los derechos reservados.</p>
        </footer>
    </div>

</body>
</html>