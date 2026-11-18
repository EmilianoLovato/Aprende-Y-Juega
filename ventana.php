<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Aprende y juega</title>
    <link rel="stylesheet" href="estilos/estil.css">
    <link rel="stylesheet" href="estilos/estilos_registro.css">
</head>
<body>

    <div class="browser-frame">
        <header class="site-header">
            <div class="logo-container">
                <span class="logo-icon">&#127918;</span>
                <h1 class="site-title">Aprende y juega</h1>
            </div>
            <nav class="main-nav">
                <ul>
                    <li><a href="PROYECTO1.php">Inicio</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    <li><a href="Ventana.php" class="active">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>

        <main class="site-main" style="display: block;">
            <div class="form-container-formal">
                
                <div class="form-header">
                    <h2>Iniciar Sesión</h2>
                    <p>Ingresa tu nombre de usuario y contraseña para reentrar al sistema.</p>
                </div>

                <form action="procesar_login.php" method="post">
                    <div class="form-group full-width" style="margin-bottom: 15px;">
                        <label for="nombre">Nombre</label>
                        <input type="text" id="nombre" name="nombre" placeholder="Ingresa tu nombre de usuario" required>
                    </div>

                    <div class="form-group full-width" style="margin-bottom: 20px;">
                        <label for="contrasena">Contraseña</label>
                        <input type="password" id="contrasena" name="contrasena" placeholder="••••••••" required>
                    </div>

                    <input type="submit" value="Iniciar Sesión" class="btn-submit">
                </form>

                <div class="form-footer-link">
                    <a href="contacto.php">¿Aún no tienes cuenta? Regístrate en la sección de Contacto</a>
                </div>

            </div>
        </main>

        <footer class="site-footer">
            <p>&copy; 2026 Aprende y juega. Todos los derechos reservados.</p>
        </footer>
    </div>

</body>
</html>