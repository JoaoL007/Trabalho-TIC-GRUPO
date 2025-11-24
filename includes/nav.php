<!DOCTYPE html>
<html lang="pt-PT">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Menu</title>
    
</head>
<body>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');

            function updateActiveStateBasedOnURL() {
                const currentPath = window.location.pathname;
                navLinks.forEach(link => {
                    const linkHref = link.getAttribute('href');
                    const normalizedLink = linkHref.replace('./', '').replace(/^\/+/, '');
                    if (currentPath.endsWith(normalizedLink) || 
                        (normalizedLink === 'index.php' && (currentPath.endsWith('/') || currentPath.endsWith('/index.php')))) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }

            updateActiveStateBasedOnURL();
        });
    </script>
</body>
</html>
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