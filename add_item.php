<?php
session_start();
include_once "config.php";
include_once "controllers/funciones.php";


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

if ($_SESSION['role'] !== 'ADMIN') {
    header("Location: dashboard.php");
    exit();
}

$enviado = false;
$nuevo_item = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nuevo_item = [
            "titulo" => $_POST['titulo'] ?? '',
            "genero" => $_POST['genero'] ?? '',
            "creador" => $_POST['creador'] ?? '',
            "temporadas" => $_POST['temporadas'] ?? 0,
            "puntuacion" => $_POST['puntuacion'] ?? 0.0,
            "destacado" => isset($_POST['destacado']) ? true : false,
            "imagen" => $_POST['imagen'] ?? 'default.jpg'
    ];
    if (!isset($_SESSION['catalogo_anime'])) {
        $_SESSION['catalogo_anime'] = [];
    }
    array_push($_SESSION['catalogo_anime'], $nuevo_item);
    $enviado = true;


}

include_once "partials/header.php";
?>

    <main class="container_add_item">
        <h2>Añadir Nuevo Anime</h2>

        <?php if (!$enviado): ?>
            <form method="POST">
                <label>Título: <input type="text" name="titulo" required></label>
                <label>Género: <input type="text" name="genero" required></label>
                <label>Creador: <input type="text" name="creador" required></label>
                <label>Temporadas: <input type="number" name="temporadas" required></label>
                <label>Puntuación: <input type="number" step="0.1" name="puntuacion" required></label>
                <label><input type="checkbox" name="destacado"> Destacado</label>
                <label>Nombre de Imagen (ej: naruto.jpg): <input type="text" name="imagen" required></label>
                <button type="submit">Guardar Item</button>
            </form>
        <?php else: ?>
            <h3>¡Item creado con éxito!</h3>
            <p>Previsualización de la tarjeta generada:</p>
            <section class="anime-grid">
                <?php pintarTarjeta($nuevo_item); ?>
            </section>
            <p>
                <a href="add_item.php">Añadir otro item</a> |
                <a href="catalogo.php">Ir a ver el Catálogo</a>
            </p>
        <?php endif; ?>
    </main>

<?php include_once "partials/footer.php"; ?>