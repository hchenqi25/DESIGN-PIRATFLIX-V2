<?php
include_once "config.php";
include_once "partials/header.php";
?>

    <main class="container_login">
        <h2>Iniciar Sesión</h2>

        <?php if (isset($_GET["error"])): ?>
            <p class="error-msg">Usuario o contraseña incorrectos.</p>
        <?php endif; ?>

        <form action="controllers/middleware.php" method="POST">
            <div>
                <label for="username">Usuario:</label><br>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="password">Contraseña:</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <button class="boton" type="submit">Entrar</button>
        </form>
    </main>

<?php include_once "partials/footer.php"; ?>