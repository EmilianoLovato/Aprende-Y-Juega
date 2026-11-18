<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto / Registro - Aprende y juega</title>
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
                    <li><a href="contacto.php" class="active">Contacto</a></li>
                    <li><a href="Ventana.php" style="color: #ffeb3b; font-weight: bold;">Iniciar Sesión</a></li>
                </ul>
            </nav>
        </header>

        <main class="site-main" style="display: block;">
            <div class="form-container-formal">
                
                <div class="form-header">
                    <h2>Crear una Cuenta</h2>
                    <p>Completa el formulario para registrarte en la plataforma</p>
                </div>

                <form action="procesar_registro.php" method="post">
                    <div class="form-grid">
                        
                        <div class="form-group">
                            <label for="nombre">Nombre de Usuario</label>
                            <input type="text" id="nombre" name="nombre" placeholder="Ej. JuanPerez" required>
                        </div>

                        <div class="form-group">
                            <label for="telefono">Teléfono</label>
                            <input type="tel" id="telefono" name="telefono" placeholder="Ej. 5512345678" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="correo">Correo Electrónico</label>
                            <input type="email" id="correo" name="correo" placeholder="correo@ejemplo.com" required>
                        </div>

                        <div class="form-group full-width">
                            <label for="contrasena">Contraseña</label>
                            <input type="password" id="contrasena" name="contrasena" placeholder="••••••••" required>
                        </div>

                    </div>

                    <input type="submit" value="Registrarme" class="btn-submit">
                </form>

                <div class="divider">
                    <span>O REGÍSTRATE CON</span>
                </div>

                <div class="social-buttons">
                    <button type="button" class="btn-social google">
                        <span>Google</span>
                    </button>
                    <button type="button" class="btn-social apple">
                        <span>Apple</span>
                    </button>
                </div>

                <div class="form-footer-link">
                    <a href="Ventana.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
                </div>

            </div>
        </main>

        <footer class="site-footer">
            <p>&copy; 2026 Aprende y juega. Todos los derechos reservados.</p>
        </footer>
    </div>

</body>
</html>