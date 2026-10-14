<hr class="linea">
<nav class="nav-menu">

    <?php if (!isset($_SESSION['username'])): ?>
        <a href="index.php">Inicio</a> |
        <a href="catalogo.php">Catálogo</a> |
        <a href="login.php">Login</a>



    <?php elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'ADMIN'): ?>
        <a href="index.php">Inicio</a> |
        <a href="catalogo.php">Cátalogo</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="add_item.php">Añadir item</a> |
        <a href="controllers/logout.php">Logout</a>
    <?php else: ?>




        <a href="index.php">Inicio</a> |
        <a href="catalogo.php">Catálogo</a> |
        <a href="dashboard.php">Dashboard</a> |
        <a href="controllers/logout.php">Logout</a>
    <?php endif; ?>
</nav>