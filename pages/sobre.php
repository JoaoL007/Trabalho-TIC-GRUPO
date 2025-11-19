<?php
// Página sobre - Será desenvolvida pelo Santiago
include '../includes/header.php';
include '../includes/nav.php';
?>

<main class="main-content">
    <div class="container">
        <h1>Sobre o RoboNews</h1>

        <section class="about-content">
            <p>Página sobre o projeto será desenvolvida pelo Santiago...</p>
        </section>
    </div>
</main>
<nav class="main-nav">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php" class="nav-logo">
                <img src="assets/images/logo-simple.svg" alt="RoboNews Logo" class="logo-img">
                <span class="logo-text">RoboNews</span>
            </a>
            <ul class="nav-menu">
                <li><a href="index.php">Início</a></li>
                <li><a href="pages/noticias.php">Notícias</a></li>
                <li><a href="pages/sobre.php">Sobre</a></li>
            </ul>
        </div>
    </div>
</nav>
<?php include '../includes/footer.php'; ?>