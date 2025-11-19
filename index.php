<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Portal de Notícias de Robótica e Tecnologia</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #2563eb;
            --secondary-color: #1e40af;
            --accent-color: #f59e0b;
            --dark: #1e293b;
            --light: #f8fafc;
            --gray: #64748b;
            --border: #e2e8f0;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--dark);
            overflow-x: hidden;
            background: #ffffff;
        }

        /* Top Bar */
        .top-bar {
            background: var(--dark);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.875rem;
        }

        .top-bar-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .top-bar-left {
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }

        .top-bar-right {
            display: flex;
            gap: 1rem;
        }

        .top-bar a {
            color: white;
            text-decoration: none;
            opacity: 0.9;
            transition: opacity 0.3s;
        }

        .top-bar a:hover {
            opacity: 1;
        }

        .social-icon {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
        }

        .social-icon:hover {
            background: var(--primary-color);
        }

        /* Navigation */
        nav {
            position: sticky;
            top: 0;
            width: 100%;
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            z-index: 1000;
            border-bottom: 1px solid var(--border);
        }

        .nav-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
        }

        .logo {
            font-family: 'Poppins', sans-serif;
            font-size: 1.75rem;
            font-weight: 800;
            color: var(--primary-color);
            display: flex;
            align-items: center;
            gap: 0.5rem;
            text-decoration: none;
        }

        .logo img {
            width: 45px;
            height: 45px;
            filter: drop-shadow(0 2px 4px rgba(37, 99, 235, 0.3));
        }

        .nav-links {
            display: flex;
            gap: 2.5rem;
            list-style: none;
            align-items: center;
        }

        .nav-links a {
            text-decoration: none;
            color: var(--dark);
            font-weight: 500;
            font-size: 0.95rem;
            transition: color 0.3s ease;
            position: relative;
            padding: 0.5rem 0;
        }

        .nav-links a:hover {
            color: var(--primary-color);
        }

        .nav-links a.active {
            color: var(--primary-color);
            font-weight: 600;
        }

        .nav-links a::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--primary-color);
            transition: width 0.3s ease;
        }

        .nav-links a:hover::after,
        .nav-links a.active::after {
            width: 100%;
        }

        .search-box {
            position: relative;
        }

        .search-box input {
            padding: 0.5rem 1rem 0.5rem 2.5rem;
            border: 1px solid var(--border);
            border-radius: 50px;
            font-size: 0.9rem;
            width: 200px;
            transition: all 0.3s;
        }

        .search-box input:focus {
            outline: none;
            border-color: var(--primary-color);
            width: 250px;
        }

        .search-box i {
            position: absolute;
            left: 1rem;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }

        /* Trending Topics Bar */
        .trending-bar {
            background: white;
            border-bottom: 1px solid var(--border);
            padding: 1rem 0;
        }

        .trending-container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .trending-label {
            background: var(--accent-color);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 4px;
            font-weight: 700;
            font-size: 0.85rem;
            text-transform: uppercase;
            white-space: nowrap;
        }

        .trending-topics {
            display: flex;
            gap: 1.5rem;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .trending-topics::-webkit-scrollbar {
            display: none;
        }

        .trending-topics a {
            color: var(--dark);
            text-decoration: none;
            white-space: nowrap;
            font-weight: 500;
            transition: color 0.3s;
        }

        .trending-topics a:hover {
            color: var(--primary-color);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            padding: 4rem 2rem 3rem;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="60" height="60" patternUnits="userSpaceOnUse"><path d="M 60 0 L 0 0 0 60" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        }

        .hero-container {
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .hero-content {
            text-align: center;
            color: white;
            padding: 2rem 0 3rem;
        }

        .breaking-badge {
            display: inline-block;
            background: var(--accent-color);
            color: white;
            padding: 0.4rem 1rem;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 1.5rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .hero h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3.25rem;
            font-weight: 800;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            opacity: 0.95;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.875rem 2rem;
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: white;
            color: var(--primary-color);
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border: 2px solid rgba(255, 255, 255, 0.3);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: rgba(255, 255, 255, 0.5);
            transform: translateY(-2px);
        }

        /* Mobile Menu */
        .mobile-menu-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: var(--dark);
            cursor: pointer;
            padding: 0.5rem;
        }

        .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        /* News Cards Enhancements */
        .news-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            padding: 0.35rem 0.75rem;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .news-badge.new {
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
        }

        .news-badge.trending {
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: white;
        }

        .news-badge.breaking {
            background: linear-gradient(135deg, #ef4444, #dc2626);
            color: white;
            animation: pulse 2s infinite;
        }

        .news-card {
            position: relative;
        }

        .news-category {
            display: inline-block;
            color: #2563eb;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .news-meta {
            display: flex;
            gap: 1.5rem;
            margin-top: 1rem;
            padding-top: 1rem;
            border-top: 1px solid #e2e8f0;
            font-size: 0.85rem;
            color: #64748b;
        }

        .news-meta span {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .news-meta i {
            color: #2563eb;
        }

        /* Testimonials Section */
        .testimonials-section {
            padding: 80px 20px;
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
        }

        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .testimonial-card {
            background: white;
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            position: relative;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .testimonial-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(37, 99, 235, 0.2);
            border-color: #2563eb;
        }

        .quote-icon {
            font-size: 4rem;
            color: #dbeafe;
            font-family: Georgia, serif;
            line-height: 1;
            margin-bottom: 1rem;
        }

        .testimonial-text {
            font-size: 1.05rem;
            line-height: 1.7;
            color: #334155;
            margin-bottom: 1.5rem;
            font-style: italic;
        }

        .testimonial-author {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .author-avatar {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            background: linear-gradient(135deg, #dbeafe, #bfdbfe);
            border-radius: 50%;
            flex-shrink: 0;
        }

        .author-info h4 {
            margin: 0;
            font-size: 1.1rem;
            color: #0f172a;
            font-weight: 700;
        }

        .author-info p {
            margin: 0.2rem 0 0 0;
            font-size: 0.9rem;
            color: #64748b;
        }

        .rating {
            display: flex;
            gap: 0.3rem;
            color: #fbbf24;
            font-size: 1rem;
        }

        /* Responsive Design */
        @media (max-width: 968px) {
            .nav-links {
                position: fixed;
                top: 73px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 73px);
                background: white;
                flex-direction: column;
                padding: 2rem;
                gap: 1.5rem;
                transition: left 0.3s ease;
                box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
                z-index: 999;
            }

            .nav-links.active {
                left: 0;
            }

            .mobile-menu-toggle {
                display: block;
            }

            .search-box {
                width: 100%;
            }

            .search-box input {
                width: 150px;
            }

            .trending-topics {
                gap: 1rem;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <span><i class="fas fa-clock"></i>
                    <?php date_default_timezone_set('Europe/Lisbon');
                    echo date('l, d F Y'); ?></span>
                <span><i class="fas fa-bolt"></i> Notícias em tempo real</span>
            </div>
            <div class="top-bar-right">
                <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                <a href="#" class="social-icon"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </div>

    <!-- Navigation -->
    <nav id="navbar">
        <div class="nav-container">
            <a href="index.php" class="logo">
                <img src="assets/images/logo-simple.svg" alt="RoboNews Logo">
                <span>RoboNews</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php" class="active">Início</a></li>
                <li><a href="pages/noticias.php">Notícias</a></li>
                <li><a href="pages/categorias.php">Categorias</a></li>
                <li><a href="pages/sobre.php">Sobre</a></li>
            </ul>
            <div class="nav-right">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Pesquisar notícias...">
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Trending Topics Bar -->
    <div class="trending-bar">
        <div class="trending-container">
            <div class="trending-label">
                <i class="fas fa-fire"></i> Em Alta
            </div>
            <div class="trending-topics">
                <a href="#">IA Generativa</a>
                <a href="#">Robôs Colaborativos</a>
                <a href="#">Veículos Autónomos</a>
                <a href="#">Automação Industrial</a>
                <a href="#">Drones Inteligentes</a>
            </div>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero" id="home">
        <div class="hero-container">
            <div class="hero-content">
                <span class="breaking-badge">
                    <i class="fas fa-bolt"></i> Breaking News
                </span>
                <h1>O Futuro da Robótica Começa Aqui</h1>
                <p>Cobertura completa sobre robótica, inteligência artificial e automação. Mantenha-se atualizado com as
                    últimas inovações tecnológicas.</p>
                <div class="cta-buttons">
                    <a href="pages/noticias.php" class="btn btn-primary">
                        <i class="fas fa-newspaper"></i> Explorar Notícias
                    </a>
                    <a href="#featured" class="btn btn-secondary">
                        <i class="fas fa-play-circle"></i> Ver Destaques
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
                <article class="news-card" data-aos="fade-up">
                    <span class="news-badge new">NOVO</span>
                    <div class="news-icon">🤖</div>
                    <span class="news-category">Inteligência Artificial</span>
                    <h3>Revolução na IA</h3>
                    <p>Novo modelo supera GPT-4 em testes de raciocínio científico avançado.</p>
                    <div class="news-meta">
                        <span><i class="fas fa-clock"></i> Há 2 horas</span>
                        <span><i class="fas fa-eye"></i> 1.2K</span>
                    </div>
                    <a href="pages/artigo.php?id=1" class="read-more">Leia mais →</a>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="100">
                    <span class="news-badge trending">EM ALTA</span>
                    <div class="news-icon">🏥</div>
                    <span class="news-category">Saúde & Robótica</span>
                    <h3>Robô Cirurgião</h3>
                    <p>Primeira operação totalmente autônoma realizada com sucesso no Brasil.</p>
                    <div class="news-meta">
                        <span><i class="fas fa-clock"></i> Há 5 horas</span>
                        <span><i class="fas fa-eye"></i> 3.4K</span>
                    </div>
                    <a href="pages/artigo.php?id=2" class="read-more">Leia mais →</a>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="news-badge breaking">EXCLUSIVO</span>
                    <div class="news-icon">🏭</div>
                    <span class="news-category">Indústria 4.0</span>
                    <h3>Tesla Gigafactory</h3>
                    <p>Anunciada primeira fábrica 100% robotizada da América Latina.</p>
                    <div class="news-meta">
                        <span><i class="fas fa-clock"></i> Há 1 dia</span>
                        <span><i class="fas fa-eye"></i> 5.7K</span>
                    </div>
                    <a href="pages/artigo.php?id=3" class="read-more">Leia mais →</a>
                </article>

                <article class="news-card" data-aos="fade-up">
                    <span class="news-badge new">NOVO</span>
                    <div class="news-icon">🧠</div>
                    <span class="news-category">Neurociência</span>
                    <h3>Chip Neural</h3>
                    <p>Tecnologia permite controle mental de próteses robóticas complexas.</p>
                    <div class="news-meta">
                        <span><i class="fas fa-clock"></i> Há 3 horas</span>
                        <span><i class="fas fa-eye"></i> 2.1K</span>
                    </div>
                    <a href="pages/artigo.php?id=4" class="read-more">Leia mais →</a>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="news-icon">🏠</div>
                    <span class="news-category">Consumidor</span>
                    <h3>Robôs Domésticos</h3>
                    <p>Chegam ao Brasil por preço acessível com IA integrada.</p>
                    <div class="news-meta">
                        <span><i class="fas fa-clock"></i> Há 1 dia</span>
                        <span><i class="fas fa-eye"></i> 4.3K</span>
                    </div>
                    <a href="pages/artigo.php?id=5" class="read-more">Leia mais →</a>
                </article>

                <article class="news-card" data-aos="fade-up" data-aos-delay="200">
                    <span class="news-badge trending">EM ALTA</span>
                    <div class="news-icon">🚀</div>
                    <span class="news-category">Espaço</span>
                    <h3>SpaceX Robôs</h3>
                    <p>Testes de robôs autônomos para missões em Marte avançam.</p>
                    <div class="news-meta">
                        <span><i class="fas fa-clock"></i> Há 2 dias</span>
                        <span><i class="fas fa-eye"></i> 6.8K</span>
                    </div>
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

    <!-- Testimonials Section -->
    <section class="testimonials-section">
        <div class="container">
            <h2 class="section-title">💬 O Que Dizem Nossos Leitores</h2>

            <div class="testimonials-grid">
                <div class="testimonial-card" data-aos="zoom-in">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                        O RoboNews é minha fonte principal para me manter atualizado sobre inovações em robótica.
                        Conteúdo de qualidade excepcional!
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">👨‍💼</div>
                        <div class="author-info">
                            <h4>Carlos Silva</h4>
                            <p>Engenheiro de Automação</p>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                        Excelente portal! Artigos bem escritos e sempre atualizados com as últimas tendências em IA e
                        robótica.
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">👩‍🔬</div>
                        <div class="author-info">
                            <h4>Ana Costa</h4>
                            <p>Pesquisadora em IA</p>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>

                <div class="testimonial-card" data-aos="zoom-in" data-aos-delay="200">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                        Conteúdo técnico acessível e bem explicado. Perfeito para quem trabalha ou estuda tecnologia!
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">👨‍🎓</div>
                        <div class="author-info">
                            <h4>Miguel Santos</h4>
                            <p>Estudante de Engenharia</p>
                        </div>
                    </div>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <div class="stats-header">
                <h2 class="section-title" style="color: white;">📊 RoboNews em Números</h2>
                <p class="stats-subtitle">Impactando a comunidade tecnológica com informação de qualidade</p>
            </div>

            <div class="stats-grid">
                <div class="stat-card" data-aos="fade-up">
                    <div class="stat-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number" data-count="1250">0</div>
                        <div class="stat-label">Artigos Publicados</div>
                        <div class="stat-growth">
                            <i class="fas fa-arrow-up"></i> +120 este mês
                        </div>
                    </div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number" data-count="87500">0</div>
                        <div class="stat-label">Leitores Mensais</div>
                        <div class="stat-growth">
                            <i class="fas fa-arrow-up"></i> +15% crescimento
                        </div>
                    </div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number" data-count="45">0</div>
                        <div class="stat-label">Especialistas</div>
                        <div class="stat-growth">
                            <i class="fas fa-check-circle"></i> Equipa certificada
                        </div>
                    </div>
                </div>

                <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="stat-content">
                        <div class="stat-number" data-count="8">0</div>
                        <div class="stat-label">Anos de Experiência</div>
                        <div class="stat-growth">
                            <i class="fas fa-star"></i> Referência em PT
                        </div>
                    </div>
                </div>
            </div>

            <div class="stats-extra">
                <div class="extra-stat">
                    <i class="fas fa-trophy"></i>
                    <span><strong>12</strong> Prémios de Jornalismo</span>
                </div>
                <div class="extra-stat">
                    <i class="fas fa-globe"></i>
                    <span><strong>50+</strong> Países Alcançados</span>
                </div>
                <div class="extra-stat">
                    <i class="fas fa-rocket"></i>
                    <span><strong>1M+</strong> Visualizações/Ano</span>
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

        .categories-section {
            padding: 80px 20px;
        }

        .stats-section {
            padding: 100px 20px;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 50%, #0f172a 100%);
            position: relative;
            overflow: hidden;
        }

        .stats-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 50%, rgba(37, 99, 235, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 50%, rgba(59, 130, 246, 0.1) 0%, transparent 50%);
            pointer-events: none;
        }

        .stats-section .container {
            position: relative;
            z-index: 1;
        }

        .stats-header {
            text-align: center;
            margin-bottom: 4rem;
        }

        .stats-subtitle {
            color: #94a3b8;
            font-size: 1.1rem;
            margin-top: 1rem;
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
            background: linear-gradient(145deg, rgba(30, 58, 138, 0.8) 0%, rgba(37, 99, 235, 0.6) 100%);
            backdrop-filter: blur(20px);
            color: white;
            padding: 2.5rem 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 8px 32px rgba(37, 99, 235, 0.3);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 1px solid rgba(255, 255, 255, 0.1);
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-card:hover {
            transform: translateY(-12px) scale(1.03);
            box-shadow: 0 20px 60px rgba(37, 99, 235, 0.5);
            border-color: rgba(255, 255, 255, 0.3);
            background: linear-gradient(145deg, rgba(37, 99, 235, 0.9) 0%, rgba(59, 130, 246, 0.8) 100%);
        }

        .stat-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.2), rgba(255, 255, 255, 0.05));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2.5rem;
            color: white;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.1) rotate(5deg);
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.3), rgba(255, 255, 255, 0.1));
        }

        .stat-content {
            position: relative;
            z-index: 1;
        }

        .stat-number {
            font-size: 3.5rem;
            font-weight: 900;
            margin-bottom: 0.75rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(180deg, #ffffff 0%, #e0f2fe 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .stat-label {
            font-size: 1.1rem;
            font-weight: 600;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.2);
            margin-bottom: 0.75rem;
            opacity: 0.95;
        }

        .stat-growth {
            font-size: 0.9rem;
            color: #bfdbfe;
            margin-top: 0.75rem;
            padding-top: 0.75rem;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            font-weight: 500;
        }

        .stat-growth i {
            color: #6ee7b7;
            margin-right: 0.25rem;
        }

        .stats-extra {
            display: flex;
            justify-content: center;
            gap: 3rem;
            flex-wrap: wrap;
            margin-top: 4rem;
            padding-top: 3rem;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .extra-stat {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            color: white;
            font-size: 1rem;
            padding: 1rem 2rem;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 12px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .extra-stat:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-3px);
        }

        .extra-stat i {
            font-size: 1.5rem;
            color: #60a5fa;
        }

        .extra-stat strong {
            color: #3b82f6;
            font-size: 1.2rem;
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
        // Mobile Menu Toggle
        const mobileMenuToggle = document.getElementById('mobileMenuToggle');
        const navLinks = document.getElementById('navLinks');

        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                const icon = mobileMenuToggle.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            });
        }

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
                    // Close mobile menu if open
                    if (navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        mobileMenuToggle.querySelector('i').classList.replace('fa-times', 'fa-bars');
                    }
                }
            });
        });

        // Scroll animations (simple fade-in effect)
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('[data-aos]').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });

        // Sticky navbar effect
        let lastScroll = 0;
        const navbar = document.getElementById('navbar');

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
            }

            lastScroll = currentScroll;
        });

        // Search functionality
        const searchInput = document.querySelector('.search-box input');
        if (searchInput) {
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && searchInput.value.trim()) {
                    window.location.href = `pages/noticias.php?search=${encodeURIComponent(searchInput.value)}`;
                }
            });
        }

        // Counter animation for stats
        function animateCounter(element, target, duration = 2000) {
            let start = 0;
            const increment = target / (duration / 16);
            const timer = setInterval(() => {
                start += increment;
                if (start >= target) {
                    clearInterval(timer);
                    if (target >= 1000) {
                        element.textContent = target >= 1000000 ? (target / 1000000).toFixed(1) + 'M' :
                            target >= 1000 ? (target / 1000).toFixed(1) + 'K' : target;
                    } else {
                        element.textContent = Math.ceil(target);
                    }
                } else {
                    if (target >= 1000) {
                        element.textContent = start >= 1000000 ? (start / 1000000).toFixed(1) + 'M' :
                            start >= 1000 ? (start / 1000).toFixed(1) + 'K' : Math.ceil(start);
                    } else {
                        element.textContent = Math.ceil(start);
                    }
                }
            }, 16);
        }

        // Trigger counter animation when stats section is visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const statNumbers = entry.target.querySelectorAll('.stat-number');
                    statNumbers.forEach(el => {
                        const target = parseInt(el.getAttribute('data-count'));
                        animateCounter(el, target);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.5
        });

        const statsSection = document.querySelector('.stats-section');
        if (statsSection) {
            statsObserver.observe(statsSection);
        }
    </script>

</body>

</html>