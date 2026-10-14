<?php
session_start();
include_once "config.php";
include_once "data.php";


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

include_once "partials/header.php";
$total_items = count($anime);
?>

    <main class="container_dashboard">
        <h2>Dashboard Privado</h2>
        <p>¡Bienvenido, <strong><?= $_SESSION['username'] ?></strong>!</p>
        <p>Tu rol en el sistema es: <strong><?= $_SESSION['role'] ?></strong></p>
        <p>Número total de items en el catálogo: <strong><?= $total_items ?></strong></p>

        <?php if ($_SESSION['role'] === 'ADMIN'): ?>
            <div>
                <a class="añadir" href="add_item.php">Añadir Nuevo Item</a>
            </div>
        <?php endif; ?>
    </main>

<?php include_once "partials/footer.php"; ?>