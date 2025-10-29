<?php
// Detecta se o arquivo atual está dentro da pasta /pages/
$isInsidePages = strpos($_SERVER['PHP_SELF'], '/pages/') !== false;

// Define o caminho base dinamicamente
$basePath = $isInsidePages ? '../' : '';
?>

<nav class="main-nav">
    <div class="container">
        <ul class="nav-menu">
            <li><a href="<?= $basePath ?>index.php">Início</a></li>
            <li><a href="<?= $basePath ?>pages/noticias.php">Notícias</a></li>
            <li><a href="<?= $basePath ?>pages/sobre.php">Sobre</a></li>
        </ul>
    </div>
</nav>