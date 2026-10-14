<?php
session_start();
include_once "config.php";
include_once "data.php";
include_once "controllers/funciones.php";
include_once "partials/header.php";
?>

    <main class="container_index">
        <section class="portada">
            <?php if (isset($_SESSION['username'])): ?>
                <h2>Bienvenido a <?= APP_NAME ?>  <?= $_SESSION['username'] ?></h2>
            <?php else: ?>
                <h2>Bienvenido a <?= APP_NAME ?></h2>
            <?php endif; ?>

            <p>Tu plataforma de confianza para descubrir los mejores animes del momento, explorar catálogos completos y disfrutar de tus series favoritas.</p>
        </section>
        <hr class="linea">

        <h2>Animes Destacados</h2>
        <section class="anime-grid">
            <?php foreach ($anime as $item): ?>
                <?php if ($item['destacado'] === true): ?>
                    <?php pintarTarjeta($item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>
    </main>

<?php include_once "partials/footer.php"; ?>