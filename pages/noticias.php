<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - RoboNews</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/noticias.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>
<php>
<?php include '../includes/header.php'; ?>
<?php include '../includes/nav.php'; ?>
</php>
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
<body>
    <main class="news-main">
        <!-- Hero Section com Slider -->
        <section class="news-hero">
            <div class="swiper news-hero-slider">
                <div class="swiper-wrapper">
                    <!-- Slide 1 -->
                    <div class="swiper-slide hero-slide">
                        <div class="hero-background">
                            <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=1200&h=600&fit=crop"
                                alt="IA revolucionária" class="hero-bg-image">
                            <div class="hero-gradient-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="hero-content" data-aos="fade-up">
                                <div class="hero-badge">
                                    <i class="fas fa-fire"></i>
                                    <span>Destaque da Semana</span>
                                </div>
                                <h1 class="hero-title">Revolução na IA: Novo Modelo Supera GPT-4</h1>
                                <p class="hero-excerpt">Pesquisadores desenvolvem sistema de IA capaz de conduzir
                                    experimentos científicos independentemente com precisão superior a 94%.</p>
                                <div class="hero-meta">
                                    <div class="author-info">
                                        <div class="author-avatar">
                                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=40&h=40&fit=crop&crop=face"
                                                alt="Dr. Carlos Silva">
                                        </div>
                                        <div class="author-details">
                                            <span class="author-name">Dr. Carlos Silva</span>
                                            <span class="article-date">27 Out 2025 • 7 min de leitura</span>
                                        </div>
                                    </div>
                                    <a href="../pages/artigo.php?id=1" class="btn btn-primary">
                                        <span>Ler Artigo Completo</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="swiper-slide hero-slide">
                        <div class="hero-background">
                            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=1200&h=600&fit=crop"
                                alt="Robô cirurgião" class="hero-bg-image">
                            <div class="hero-gradient-overlay"></div>
                        </div>
                        <div class="container">
                            <div class="hero-content" data-aos="fade-up">
                                <div class="hero-badge">
                                    <i class="fas fa-heartbeat"></i>
                                    <span>Inovação Médica</span>
                                </div>
                                <h1 class="hero-title">Robô Cirurgião Realiza Primeira Operação Autônoma no Brasil</h1>
                                <p class="hero-excerpt">Hospital Albert Einstein marca história com cirurgia cardíaca
                                    realizada integralmente por IA, com precisão 300% superior aos métodos tradicionais.
                                </p>
                                <div class="hero-meta">
                                    <div class="author-info">
                                        <div class="author-avatar">
                                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b643?w=40&h=40&fit=crop&crop=face"
                                                alt="Dra. Ana Costa">
                                        </div>
                                        <div class="author-details">
                                            <span class="author-name">Dra. Ana Costa</span>
                                            <span class="article-date">26 Out 2025 • 4 min de leitura</span>
                                        </div>
                                    </div>
                                    <a href="../pages/artigo.php?id=2" class="btn btn-primary">
                                        <span>Ler Artigo Completo</span>
                                        <i class="fas fa-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Navigation -->
                <div class="swiper-button-next hero-next"></div>
                <div class="swiper-button-prev hero-prev"></div>

                <!-- Pagination -->
                <div class="swiper-pagination hero-pagination"></div>
            </div>
        </section>

        <!-- Breaking News Ticker -->
        <section class="breaking-news">
            <div class="container">
                <div class="breaking-news-content">
                    <div class="breaking-label">
                        <i class="fas fa-bolt"></i>
                        <span>ÚLTIMAS</span>
                    </div>
                    <div class="breaking-ticker">
                        <div class="ticker-content" id="tickerContent">
                            <span>🤖 Nova IA da Google supera GPT-4 em testes de raciocínio • </span>
                            <span>🏭 Tesla anuncia fábrica totalmente robotizada no Brasil • </span>
                            <span>🧠 Chip neural permite controle mental de próteses robóticas • </span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Area -->
        <section class="news-content-section">
            <div class="container">
                <div class="content-layout">
                    <!-- Main Articles Column -->
                    <div class="main-column">
                        <!-- Section Header -->
                        <div class="section-header" data-aos="fade-up">
                            <h2 class="section-title">Últimas Notícias</h2>
                            <p class="section-subtitle">As descobertas mais recentes em robótica e inteligência
                                artificial</p>

                            <!-- Filter Tabs -->
                            <div class="news-filters">
                                <button class="filter-btn active" data-filter="all">
                                    <i class="fas fa-globe"></i> Todas
                                </button>
                                <button class="filter-btn" data-filter="ia">
                                    <i class="fas fa-brain"></i> IA
                                </button>
                                <button class="filter-btn" data-filter="robotica">
                                    <i class="fas fa-robot"></i> Robótica
                                </button>
                            </div>
                        </div>

                        <!-- News Grid -->
                        <div class="news-grid" id="newsGrid">
                            <!-- Article 1 -->
                            <article class="news-card" data-category="ia" data-aos="fade-up">
                                <div class="card-header">
                                    <div class="card-image">
                                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&h=400&fit=crop"
                                            alt="Cérebro artificial">
                                        <div class="card-overlay">
                                            <div class="card-category">Neurociência</div>
                                            <div class="exclusive-badge">
                                                <i class="fas fa-star"></i> Exclusivo
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <span class="category-tag neuro">Neurociência</span>
                                        <span class="read-time">
                                            <i class="fas fa-clock"></i> 8 min
                                        </span>
                                    </div>

                                    <h3 class="card-title">Chip Neural Permite Controle Mental de Próteses Robóticas
                                        Complexas</h3>

                                    <p class="card-excerpt">
                                        Breakthrough da Neuralink permite que pacientes controlem braços robóticos com
                                        precisão de movimentos nunca vista, revolucionando tratamentos neurológicos.
                                    </p>

                                    <div class="card-stats">
                                        <span class="stat-item">
                                            <i class="fas fa-eye"></i> 15.7K views
                                        </span>
                                        <span class="stat-item">
                                            <i class="fas fa-bookmark"></i> 1.1K
                                        </span>
                                        <span class="card-date">
                                            <i class="fas fa-calendar"></i> 24 Out
                                        </span>
                                    </div>

                                    <div class="author-info-mini">
                                        <div class="author-avatar">
                                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=30&h=30&fit=crop&crop=face"
                                                alt="Dr. Carlos Silva">
                                        </div>
                                        <span class="author-name">Dr. Carlos Silva</span>
                                    </div>

                                    <a href="../pages/artigo.php?id=4" class="card-link">
                                        <span>Leia mais</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </article>

                            <!-- Article 2 -->
                            <article class="news-card" data-category="robotica" data-aos="fade-up" data-aos-delay="100">
                                <div class="card-header">
                                    <div class="card-image">
                                        <img src="https://images.unsplash.com/photo-1518624612206-dc516529044e?w=600&h=400&fit=crop"
                                            alt="Robôs domésticos">
                                        <div class="card-overlay">
                                            <div class="card-category">Casa Inteligente</div>
                                            <div class="trending-badge">
                                                <i class="fas fa-trending-up"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-meta">
                                        <span class="category-tag home">Smart Home</span>
                                        <span class="read-time">
                                            <i class="fas fa-clock"></i> 3 min
                                        </span>
                                    </div>

                                    <h3 class="card-title">Robôs Domésticos Inteligentes Chegam às Casas Brasileiras por
                                        R$ 2.999</h3>

                                    <p class="card-excerpt">
                                        Xiaomi lança no Brasil robô multifuncional capaz de limpeza, segurança e
                                        assistência pessoal com IA integrada e preço acessível.
                                    </p>

                                    <div class="card-stats">
                                        <span class="stat-item">
                                            <i class="fas fa-eye"></i> 22.1K views
                                        </span>
                                        <span class="stat-item">
                                            <i class="fas fa-shopping-cart"></i> 450
                                        </span>
                                        <span class="card-date">
                                            <i class="fas fa-calendar"></i> 23 Out
                                        </span>
                                    </div>

                                    <div class="author-info-mini">
                                        <div class="author-avatar">
                                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=30&h=30&fit=crop&crop=face"
                                                alt="Eng. Roberto Lima">
                                        </div>
                                        <span class="author-name">Eng. Roberto Lima</span>
                                    </div>

                                    <a href="../pages/artigo.php?id=5" class="card-link">
                                        <span>Leia mais</span>
                                        <i class="fas fa-chevron-right"></i>
                                    </a>
                                </div>
                            </article>
                        </div>

                        <!-- Load More Button -->
                        <div class="load-more-container" data-aos="fade-up">
                            <button class="load-more-btn" id="loadMoreBtn">
                                <i class="fas fa-plus"></i>
                                <span>Carregar Mais Notícias</span>
                            </button>
                            <p class="load-more-info">Mostrando 2 de <strong>1.250</strong> artigos</p>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <div class="sidebar-column">
                        <!-- Trending News -->
                        <div class="sidebar-widget trending-widget" data-aos="fade-left">
                            <div class="widget-header">
                                <h3 class="widget-title">
                                    <i class="fas fa-fire"></i> Trending
                                </h3>
                                <span class="widget-subtitle">Mais populares esta semana</span>
                            </div>

                            <div class="trending-list">
                                <div class="trending-item">
                                    <span class="trending-rank">1</span>
                                    <div class="trending-content">
                                        <h4 class="trending-title">IA Supera Humanos em Criatividade</h4>
                                        <div class="trending-meta">
                                            <span class="trending-category">IA</span>
                                            <span class="trending-views">45.2K views</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="trending-item">
                                    <span class="trending-rank">2</span>
                                    <div class="trending-content">
                                        <h4 class="trending-title">Robôs Humanoides Chegam ao Varejo</h4>
                                        <div class="trending-meta">
                                            <span class="trending-category">Robótica</span>
                                            <span class="trending-views">38.7K views</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="sidebar-widget newsletter-widget" data-aos="fade-left" data-aos-delay="100">
                            <div class="widget-header">
                                <h3 class="widget-title">
                                    <i class="fas fa-newspaper"></i> Newsletter
                                </h3>
                                <span class="widget-subtitle">Receba as principais notícias</span>
                            </div>

                            <div class="newsletter-sidebar">
                                <p class="newsletter-text">Inscreva-se para receber um resumo semanal com as notícias
                                    mais importantes de robótica e IA.</p>

                                <form class="sidebar-newsletter-form">
                                    <div class="form-group">
                                        <input type="email" placeholder="Seu e-mail" class="sidebar-input" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-full">
                                        <i class="fas fa-paper-plane"></i>
                                        <span>Inscrever</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer temporário -->
    <footer class="site-footer">
        <div class="container">
            <p>&copy; 2025 RoboNews. Todos os direitos reservados.</p>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50
        });

        // Initialize Hero Slider
        const heroSlider = new Swiper('.news-hero-slider', {
            loop: true,
            effect: 'fade',
            speed: 1000,
            autoplay: {
                delay: 5000,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.hero-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.hero-next',
                prevEl: '.hero-prev',
            },
        });

        // News Filtering
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const newsCards = document.querySelectorAll('.news-card');

            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filter = this.getAttribute('data-filter');
                    
                    // Filter news cards
                    newsCards.forEach(card => {
                        if (filter === 'all' || card.getAttribute('data-category') === filter) {
                            card.style.display = 'block';
                            setTimeout(() => {
                                card.style.opacity = '1';
                                card.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            card.style.opacity = '0';
                            card.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                card.style.display = 'none';
                            }, 300);
                        }
                    });
                });
            });

            // Load More functionality
            const loadMoreBtn = document.getElementById('loadMoreBtn');
            let currentItems = 2;
            
            loadMoreBtn.addEventListener('click', function() {
                // Simulate loading more articles
                const startIndex = currentItems;
                const endIndex = startIndex + 2;
                
                alert(`Carregando mais artigos... (${startIndex + 1} a ${endIndex})`);
                
                // Update counter
                currentItems = endIndex;
                document.querySelector('.load-more-info').innerHTML = 
                    `Mostrando ${currentItems} de <strong>1.250</strong> artigos`;
            });
        });
    </script>
</body>
</html>