<?php

// Landing Page - RoboNews Portal de Notícias
include 'includes/header.php';
include 'includes/nav.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Portal de Notícias de Robótica e Tecnologia</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/landing.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>

    <main class="main-content">
        <!-- Hero Section -->
        <section class="hero-section">
            <div class="container">
                <div class="hero-content">
                    <h1 class="hero-title">
                        🤖 <span class="gradient-text">RoboNews</span>
                    </h1>
                    <p class="hero-subtitle">
                        Seu portal de notícias sobre <strong>robótica</strong>, <strong>inteligência artificial</strong>
                        e <strong>tecnologias emergentes</strong>
                    </p>
                    <div class="hero-buttons">
                        <a href="pages/noticias.php" class="btn btn-primary">
                            <i class="fas fa-newspaper"></i> Ver Notícias
                        </a>
                        <a href="pages/sobre.php" class="btn btn-outline">
                            <i class="fas fa-info-circle"></i> Sobre o Projeto
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Featured News Section -->
        <section class="featured-section">
            <div class="container">
                <h2 class="section-title">📰 Notícias em Destaque</h2>

                <div class="news-grid">
                    <article class="news-card">
                        <div class="news-icon">🤖</div>
                        <h3>Revolução na IA</h3>
                        <p>Novo modelo supera GPT-4 em testes de raciocínio científico avançado.</p>
                        <a href="pages/artigo.php?id=1" class="read-more">Leia mais →</a>
                    </article>

                    <article class="news-card">
                        <div class="news-icon">🏥</div>
                        <h3>Robô Cirurgião</h3>
                        <p>Primeira operação totalmente autônoma realizada com sucesso no Brasil.</p>
                        <a href="pages/artigo.php?id=2" class="read-more">Leia mais →</a>
                    </article>

                    <article class="news-card">
                        <div class="news-icon">🏭</div>
                        <h3>Tesla Gigafactory</h3>
                        <p>Anunciada primeira fábrica 100% robotizada da América Latina.</p>
                        <a href="pages/artigo.php?id=3" class="read-more">Leia mais →</a>
                    </article>

                    <article class="news-card">
                        <div class="news-icon">🧠</div>
                        <h3>Chip Neural</h3>
                        <p>Tecnologia permite controle mental de próteses robóticas complexas.</p>
                        <a href="pages/artigo.php?id=4" class="read-more">Leia mais →</a>
                    </article>

                    <article class="news-card">
                        <div class="news-icon">🏠</div>
                        <h3>Robôs Domésticos</h3>
                        <p>Chegam ao Brasil por preço acessível com IA integrada.</p>
                        <a href="pages/artigo.php?id=5" class="read-more">Leia mais →</a>
                    </article>

                    <article class="news-card">
                        <div class="news-icon">🚀</div>
                        <h3>SpaceX Robôs</h3>
                        <p>Testes de robôs autônomos para missões em Marte avançam.</p>
                        <a href="pages/artigo.php?id=6" class="read-more">Leia mais →</a>
                    </article>
                </div>

                <div class="view-all">
                    <a href="pages/noticias.php" class="btn btn-primary">
                        Ver Todas as Notícias
                    </a>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="categories-section">
            <div class="container">
                <h2 class="section-title">🔍 Explore por Categorias</h2>

                <div class="categories-grid">
                    <a href="pages/categoria.php?cat=ia" class="category-card">
                        <div class="category-icon">🧠</div>
                        <h3>Inteligência Artificial</h3>
                        <p>324 artigos</p>
                    </a>

                    <a href="pages/categoria.php?cat=robotica" class="category-card">
                        <div class="category-icon">🤖</div>
                        <h3>Robótica</h3>
                        <p>189 artigos</p>
                    </a>

                    <a href="pages/categoria.php?cat=iot" class="category-card">
                        <div class="category-icon">📡</div>
                        <h3>IoT & Conectividade</h3>
                        <p>156 artigos</p>
                    </a>

                    <a href="pages/categoria.php?cat=industria" class="category-card">
                        <div class="category-icon">🏭</div>
                        <h3>Indústria 4.0</h3>
                        <p>267 artigos</p>
                    </a>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section">
            <div class="container">
                <h2 class="section-title" style="color: white;">📊 RoboNews em Números</h2>

                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-number">1.250</div>
                        <div class="stat-label">Artigos Publicados</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-number">87.5K</div>
                        <div class="stat-label">Leitores Mensais</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-number">45</div>
                        <div class="stat-label">Especialistas</div>
                    </div>

                    <div class="stat-card">
                        <div class="stat-number">8</div>
                        <div class="stat-label">Anos de Experiência</div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include 'includes/footer.php'; ?>

    <style>
    /* Landing Page Specific Styles */
    .hero-section {
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
        color: white;
        padding: 100px 20px 80px;
        text-align: center;
        min-height: 60vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        overflow: hidden;
    }

    .hero-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
        z-index: 1;
    }

    .hero-content {
        position: relative;
        z-index: 2;
    }

    .hero-title {
        font-size: 3.5rem;
        margin-bottom: 1.5rem;
        font-weight: 800;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
    }

    .gradient-text {
        color: white;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
    }

    .hero-subtitle {
        font-size: 1.3rem;
        margin-bottom: 2.5rem;
        max-width: 700px;
        margin-left: auto;
        margin-right: auto;
        line-height: 1.8;
        color: rgba(255, 255, 255, 0.95);
        text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
    }

    .hero-buttons {
        display: flex;
        gap: 1rem;
        justify-content: center;
        flex-wrap: wrap;
    }

    .btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 14px 32px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }

    .btn-primary {
        background: white;
        color: #1e3a8a;
        font-weight: 700;
        box-shadow: 0 4px 15px rgba(255, 255, 255, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(255, 255, 255, 0.4);
        background: #f0f9ff;
        color: #1e40af;
    }

    .btn-outline {
        background: transparent;
        color: white;
        border: 2px solid white;
        backdrop-filter: blur(10px);
    }

    .btn-outline:hover {
        background: white;
        color: #1e3a8a;
        border-color: white;
    }

    .featured-section {
        padding: 80px 20px;
        background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
    }

    .featured-section .section-title {
        color: white;
    }

    .categories-section,
    .stats-section {
        padding: 80px 20px;
    }

    .section-title {
        text-align: center;
        font-size: 2.5rem;
        margin-bottom: 3rem;
        color: #0f172a;
        font-weight: 800;
    }

    .news-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 2rem;
        margin-bottom: 3rem;
    }

    .news-card {
        background: white;
        padding: 2rem;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
        border-left: 5px solid #2563eb;
        border-top: 1px solid #e2e8f0;
    }

    .news-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(37, 99, 235, 0.3);
        border-left-color: #1e40af;
    }

    .news-icon {
        font-size: 3rem;
        margin-bottom: 1rem;
        filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.1));
    }

    .news-card h3 {
        color: #0f172a;
        margin-bottom: 1rem;
        font-size: 1.5rem;
        font-weight: 700;
    }

    .news-card p {
        color: #334155;
        line-height: 1.6;
        margin-bottom: 1.5rem;
        font-weight: 500;
    }

    .read-more {
        color: #1e40af;
        text-decoration: none;
        font-weight: 700;
        transition: all 0.3s ease;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }

    .read-more:hover {
        color: #2563eb;
        gap: 10px;
    }

    .view-all {
        text-align: center;
    }

    .categories-section {
        background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
    }

    .categories-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 2rem;
    }

    .category-card {
        background: white;
        padding: 2.5rem;
        border-radius: 12px;
        text-align: center;
        text-decoration: none;
        color: #0f172a;
        transition: all 0.3s ease;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        border: 2px solid transparent;
    }

    .category-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 12px 35px rgba(37, 99, 235, 0.25);
        border-color: #2563eb;
        background: linear-gradient(135deg, #ffffff 0%, #dbeafe 100%);
    }

    .category-icon {
        font-size: 4rem;
        margin-bottom: 1rem;
        filter: drop-shadow(3px 3px 6px rgba(0, 0, 0, 0.15));
    }

    .category-card h3 {
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
        color: #0f172a;
        font-weight: 700;
    }

    .category-card p {
        color: #334155;
        font-size: 0.95rem;
        font-weight: 600;
    }

    .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 2rem;
    }

    .stat-card {
        background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
        color: white;
        padding: 2.5rem;
        border-radius: 12px;
        text-align: center;
        box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
        transition: all 0.3s ease;
        border: 2px solid rgba(255, 255, 255, 0.2);
    }

    .stat-card:hover {
        transform: translateY(-8px) scale(1.05);
        box-shadow: 0 15px 40px rgba(37, 99, 235, 0.5);
        border-color: rgba(255, 255, 255, 0.4);
    }

    .stat-number {
        font-size: 3.5rem;
        font-weight: 900;
        margin-bottom: 0.5rem;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
    }

    .stat-label {
        font-size: 1.1rem;
        font-weight: 600;
        text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
    }

    @media (max-width: 768px) {
        .hero-title {
            font-size: 2.5rem;
        }

        .hero-subtitle {
            font-size: 1.1rem;
        }

        .section-title {
            font-size: 2rem;
        }

        .news-grid,
        .categories-grid,
        .stats-grid {
            grid-template-columns: 1fr;
        }
    }
    </style>

    <script>
    // Smooth scroll for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    </script>

</body>

</html>