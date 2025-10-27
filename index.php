<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <title>RoboNews - Portal de Notícias sobre Robótica e Tecnologia</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <?php include 'includes/header.php'; ?>
    <?php include 'includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="hero-banner">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span class="gradient-text">RoboNews</span>
                    <br>O Futuro da Tecnologia
                </h1>
                <p class="hero-subtitle">
                    Mantenha-se atualizado com as últimas inovações em robótica, 
                    inteligência artificial e tecnologias emergentes
                </p>
                <div class="hero-buttons">
                    <a href="#featured" class="btn btn-primary">
                        <i class="fas fa-newspaper"></i> Ver Notícias
                    </a>
                    <a href="pages/newsletter.php" class="btn btn-outline">
                        <i class="fas fa-envelope"></i> Newsletter
                    </a>
                </div>
            </div>
            <div class="hero-image">
                <img src="assets/images/robot-hero.png" alt="Robô futurista" class="hero-img">
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">500+</div>
                    <div class="stat-label">Artigos Publicados</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">50K+</div>
                    <div class="stat-label">Leitores Mensais</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">20+</div>
                    <div class="stat-label">Especialistas</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5</div>
                    <div class="stat-label">Anos de Experiência</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured News -->
    <section class="featured-section" id="featured">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Notícias em Destaque</h2>
                <p class="section-subtitle">As últimas novidades do mundo da robótica</p>
            </div>

            <div class="featured-grid">
                <!-- Main Featured Article -->
                <article class="featured-main">
                    <div class="article-image">
                        <img src="assets/images/featured-1.jpg" alt="IA revolucionária">
                        <div class="article-category">IA</div>
                    </div>
                    <div class="article-content">
                        <h3 class="article-title">
                            Nova IA Consegue Aprender Tarefas Complexas em Minutos
                        </h3>
                        <p class="article-excerpt">
                            Pesquisadores desenvolvem sistema de inteligência artificial 
                            capaz de dominar atividades complexas com tempo de treinamento mínimo...
                        </p>
                        <div class="article-meta">
                            <span class="article-date">
                                <i class="fas fa-calendar"></i> 15 Nov 2024
                            </span>
                            <span class="article-read-time">
                                <i class="fas fa-clock"></i> 5 min
                            </span>
                        </div>
                        <a href="pages/artigo.php?id=1" class="read-more-btn">
                            Leia mais <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </article>

                <!-- Secondary Articles -->
                <div class="featured-secondary">
                    <article class="news-card">
                        <div class="card-image">
                            <img src="assets/images/news-2.jpg" alt="Robô médico">
                            <div class="card-category">Medicina</div>
                        </div>
                        <div class="card-content">
                            <h4>Robôs Cirurgiões Realizam Primeira Operação Autônoma</h4>
                            <p>Marco histórico na medicina robótica...</p>
                            <div class="card-meta">
                                <span><i class="fas fa-calendar"></i> 14 Nov</span>
                                <span><i class="fas fa-eye"></i> 2.1K</span>
                            </div>
                        </div>
                    </article>

                    <article class="news-card">
                        <div class="card-image">
                            <img src="assets/images/news-3.jpg" alt="Robô doméstico">
                            <div class="card-category">Casa</div>
                        </div>
                        <div class="card-content">
                            <h4>Robôs Domésticos Chegam ao Mercado Brasileiro</h4>
                            <p>Tecnologia acessível para o dia a dia...</p>
                            <div class="card-meta">
                                <span><i class="fas fa-calendar"></i> 13 Nov</span>
                                <span><i class="fas fa-eye"></i> 1.8K</span>
                            </div>
                        </div>
                    </article>

                    <article class="news-card">
                        <div class="card-image">
                            <img src="assets/images/news-4.jpg" alt="Robô industrial">
                            <div class="card-category">Indústria</div>
                        </div>
                        <div class="card-content">
                            <h4>Automação Industrial Cresce 40% no Brasil</h4>
                            <p>Setor industrial investe em tecnologia...</p>
                            <div class="card-meta">
                                <span><i class="fas fa-calendar"></i> 12 Nov</span>
                                <span><i class="fas fa-eye"></i> 3.2K</span>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <h2 class="section-title">Explore por Categoria</h2>
            <div class="categories-grid">
                <a href="pages/categoria.php?cat=ia" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-brain"></i>
                    </div>
                    <h3>Inteligência Artificial</h3>
                    <p>124 artigos</p>
                </a>
                <a href="pages/categoria.php?cat=robotica" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <h3>Robótica</h3>
                    <p>89 artigos</p>
                </a>
                <a href="pages/categoria.php?cat=iot" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-wifi"></i>
                    </div>
                    <h3>IoT</h3>
                    <p>67 artigos</p>
                </a>
                <a href="pages/categoria.php?cat=automacao" class="category-card">
                    <div class="category-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <h3>Automação</h3>
                    <p>156 artigos</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Newsletter Signup -->
    <section class="newsletter-section">
        <div class="container">
            <div class="newsletter-content">
                <div class="newsletter-text">
                    <h2>Não Perca Nenhuma Novidade</h2>
                    <p>Receba as últimas notícias sobre robótica e tecnologia diretamente no seu e-mail</p>
                </div>
                <form class="newsletter-form" action="includes/newsletter.php" method="POST">
                    <input type="email" name="email" placeholder="Seu melhor e-mail" required>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Inscrever-se
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/main.js"></script>
</body>

</html>