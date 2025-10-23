<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Notícias de Robótica</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>
    
    <main class="main-content">
        <section class="hero">
            <h1>🤖 Bem-vindos ao RoboNews</h1>
            <p>Seu portal de notícias sobre robótica e tecnologia</p>
        </section>
        
        <section class="featured-news">
            <h2>Notícias em Destaque</h2>
            <div class="news-grid">
                <!-- Notícias serão adicionadas aqui -->
                <article class="news-card">
                    <h3>Primeira notícia sobre robótica</h3>
                    <p>Descrição da notícia...</p>
                    <a href="pages/artigo.php?id=1">Leia mais</a>
                </article>
            </div>
        </section>
    </main>
    
    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>
</html>