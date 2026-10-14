<?php
session_start();
include_once "config.php";
include_once "data.php";
include_once "controllers/funciones.php";

$catalogo_completo = $anime;

if (!empty($_SESSION['catalogo_anime'])) {
    foreach ($_SESSION['catalogo_anime'] as $nuevo_item) {
        $catalogo_completo[] = $nuevo_item;
    }
}

include_once "partials/header.php";
?>

    <main class="container_catalogo">
        <h2>Catálogo Completo</h2>
        <section class="anime-grid">
            <?php foreach ($catalogo_completo as $item): ?>
                <?php pintarTarjeta($item); ?>
            <?php endforeach; ?>
        </section>

        <hr class="linea">

        <h2>Sección Filtrada: Acción y Aventura</h2>
        <section class="anime-grid">
            <?php foreach ($catalogo_completo as $item): ?>
                <?php if ($item['genero'] === 'Acción y Aventura'): ?>
                    <?php pintarTarjeta($item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>

        <hr class="linea">

        <h2>Sección Filtrada: Acción,Aventura y Fantasia</h2>
        <section class="anime-grid">
            <?php foreach ($catalogo_completo as $item): ?>
                <?php if ($item['genero'] === 'Acción,Aventura y Fantasia'): ?>
                    <?php pintarTarjeta($item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>

        <hr class="linea">

        <h2>Sección Filtrada: Acción y Ciencia Ficción</h2>
        <section class="anime-grid">
            <?php foreach ($catalogo_completo as $item): ?>
                <?php if ($item['genero'] === 'Acción y Ciencia Ficción'): ?>
                    <?php pintarTarjeta($item); ?>
                <?php endif; ?>
            <?php endforeach; ?>
        </section>
    </main>

<?php include_once "partials/footer.php"; ?>