<?php
function pintarTarjeta($item) { ?>
    <article class="anime-card <?= !empty($item['destacado']) ? 'destacado' : '' ?>">
        <div class="image-container">
            <img src="<?= RUTA_IMG ?>/<?= $item["imagen"] ?>" alt="<?= $item["titulo"] ?>">
            <?php if (!empty($item['destacado'])): ?>
                <span class="badge">Destacado</span>
            <?php endif; ?>
        </div>

        <div class="anime-info">
            <h2><?= $item["titulo"] ?></h2>
            <p class="genero"><strong>Género:</strong> <?= $item["genero"] ?></p>
            <p class="creador"><strong>Creador:</strong> <?= $item["creador"] ?></p>

            <div class="anime-meta">
                <span><strong>Temporadas</strong>: <?= $item["temporadas"] ?></span>
                <span class="puntuacion"><strong>Puntuación</strong> ⭐ <?= $item["puntuacion"] ?></span>
            </div>
        </div>
    </article>
<?php }