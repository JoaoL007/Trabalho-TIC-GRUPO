<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - RoboNews - Portal de Notícias de Robótica e Tecnologia</title>
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

        /* Page Header */
        .page-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            padding: 4rem 2rem 3rem;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .page-header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg width="60" height="60" xmlns="http://www.w3.org/2000/svg"><defs><pattern id="grid" width="60" height="60" patternUnits="userSpaceOnUse"><path d="M 60 0 L 0 0 0 60" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
        }

        .page-header-content {
            max-width: 1280px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        .page-header h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 1rem;
        }

        .page-header p {
            font-size: 1.2rem;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
        }

        .breadcrumb {
            display: flex;
            gap: 0.5rem;
            justify-content: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: rgba(255, 255, 255, 0.9);
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb a:hover {
            color: white;
        }

        .breadcrumb span {
            color: rgba(255, 255, 255, 0.6);
        }

        /* Filter Section */
        .filter-section {
            background: white;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 73px;
            z-index: 100;
            border-bottom: 1px solid var(--border);
        }

        .filter-container {
            max-width: 1280px;
            margin: 0 auto;
            display: flex;
            gap: 1.5rem;
            align-items: center;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .filter-group {
            display: flex;
            gap: 1rem;
            align-items: center;
            flex-wrap: wrap;
        }

        .filter-label {
            font-weight: 600;
            color: var(--dark);
        }

        .filter-btn {
            padding: 0.5rem 1.25rem;
            border: 2px solid var(--border);
            background: white;
            color: var(--dark);
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 500;
            font-size: 0.9rem;
        }

        .filter-btn:hover,
        .filter-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .sort-select {
            padding: 0.5rem 1rem;
            border: 2px solid var(--border);
            border-radius: 50px;
            font-size: 0.9rem;
            cursor: pointer;
            background: white;
            color: var(--dark);
            font-weight: 500;
        }

        .sort-select:focus {
            outline: none;
            border-color: var(--primary-color);
        }

        /* News Grid */
        .news-section {
            padding: 4rem 2rem;
            background: var(--light);
        }

        .news-container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .results-info {
            margin-bottom: 2rem;
            color: var(--gray);
            font-size: 0.95rem;
        }

        .results-info strong {
            color: var(--dark);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .news-card {
            background: white;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            position: relative;
        }

        .news-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(37, 99, 235, 0.2);
            border-color: var(--primary-color);
        }

        .news-image {
            width: 100%;
            height: 220px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            position: relative;
            overflow: hidden;
        }

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
            z-index: 10;
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

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.8;
            }
        }

        .news-content {
            padding: 1.75rem;
        }

        .news-category {
            display: inline-block;
            color: var(--primary-color);
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .news-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--dark);
            line-height: 1.3;
        }

        .news-card p {
            color: #475569;
            line-height: 1.6;
            margin-bottom: 1.25rem;
            font-size: 0.95rem;
        }

        .news-meta {
            display: flex;
            gap: 1.5rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border);
            font-size: 0.85rem;
            color: var(--gray);
        }

        .news-meta span {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }

        .news-meta i {
            color: var(--primary-color);
        }

        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            margin-top: 1rem;
            transition: gap 0.3s;
        }

        .read-more:hover {
            gap: 0.75rem;
        }

        /* Pagination */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 3rem;
        }

        .pagination-btn {
            padding: 0.75rem 1.25rem;
            border: 2px solid var(--border);
            background: white;
            color: var(--dark);
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .pagination-btn:hover {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .pagination-btn.active {
            background: var(--primary-color);
            color: white;
            border-color: var(--primary-color);
        }

        .pagination-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        /* Responsive */
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

            .page-header h1 {
                font-size: 2rem;
            }

            .page-header p {
                font-size: 1rem;
            }

            .filter-container {
                flex-direction: column;
                align-items: flex-start;
            }

            .news-grid {
                grid-template-columns: 1fr;
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
            <a href="../index.php" class="logo">
                <img src="../assets/images/logo-simple.svg" alt="RoboNews Logo">
                <span>RoboNews</span>
            </a>
            <ul class="nav-links" id="navLinks">
                <li><a href="../index.php">Início</a></li>
                <li><a href="noticias.php" class="active">Notícias</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="sobre.php">Sobre</a></li>
            </ul>
            <div class="nav-right">
                <div class="search-box">
                    <i class="fas fa-search"></i>
                    <input type="text" placeholder="Pesquisar notícias..." id="searchInput">
                </div>
                <button class="mobile-menu-toggle" id="mobileMenuToggle" aria-label="Menu">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>
    </nav>

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1><i class="fas fa-newspaper"></i> Todas as Notícias</h1>
            <p>Acompanhe as últimas novidades sobre robótica, IA e tecnologia</p>
            <div class="breadcrumb">
                <a href="../index.php"><i class="fas fa-home"></i> Início</a>
                <span>/</span>
                <span>Notícias</span>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="filter-section">
        <div class="filter-container">
            <div class="filter-group">
                <span class="filter-label">Filtrar:</span>
                <button class="filter-btn active" data-filter="all">Todas</button>
                <button class="filter-btn" data-filter="ia">IA</button>
                <button class="filter-btn" data-filter="robotica">Robótica</button>
                <button class="filter-btn" data-filter="saude">Saúde</button>
                <button class="filter-btn" data-filter="industria">Indústria</button>
                <button class="filter-btn" data-filter="espaco">Espaço</button>
            </div>
            <div class="filter-group">
                <span class="filter-label">Ordenar:</span>
                <select class="sort-select" id="sortSelect">
                    <option value="recent">Mais Recentes</option>
                    <option value="popular">Mais Populares</option>
                    <option value="views">Mais Vistas</option>
                </select>
            </div>
        </div>
    </section>

    <!-- News Section -->
    <section class="news-section">
        <div class="news-container">
            <div class="results-info">
                <p>Mostrando <strong>24 notícias</strong> de <strong>120 artigos</strong> disponíveis</p>
            </div>

            <div class="news-grid" id="newsGrid">
                <!-- News Card 1 -->
                <article class="news-card" data-category="ia">
                    <div class="news-image">
                        <span class="news-badge new">NOVO</span>
                        🤖
                    </div>
                    <div class="news-content">
                        <span class="news-category">Inteligência Artificial</span>
                        <h3>Revolução na IA: Novo Modelo Supera GPT-4</h3>
                        <p>Pesquisadores desenvolvem modelo de linguagem que supera o GPT-4 em testes de raciocínio científico avançado e compreensão contextual.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 2 horas</span>
                            <span><i class="fas fa-eye"></i> 1.2K</span>
                            <span><i class="fas fa-comments"></i> 45</span>
                        </div>
                        <a href="artigo.php?id=1" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 2 -->
                <article class="news-card" data-category="saude">
                    <div class="news-image">
                        <span class="news-badge trending">EM ALTA</span>
                        🏥
                    </div>
                    <div class="news-content">
                        <span class="news-category">Saúde & Robótica</span>
                        <h3>Robô Cirurgião Realiza Primeira Operação Autônoma</h3>
                        <p>Hospital brasileiro realiza com sucesso a primeira cirurgia totalmente autônoma com assistência robótica de última geração.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 5 horas</span>
                            <span><i class="fas fa-eye"></i> 3.4K</span>
                            <span><i class="fas fa-comments"></i> 89</span>
                        </div>
                        <a href="artigo.php?id=2" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 3 -->
                <article class="news-card" data-category="industria">
                    <div class="news-image">
                        <span class="news-badge breaking">EXCLUSIVO</span>
                        🏭
                    </div>
                    <div class="news-content">
                        <span class="news-category">Indústria 4.0</span>
                        <h3>Tesla Anuncia Gigafactory 100% Robotizada</h3>
                        <p>Primeira fábrica totalmente automatizada da América Latina será inaugurada pela Tesla, revolucionando a produção industrial.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 1 dia</span>
                            <span><i class="fas fa-eye"></i> 5.7K</span>
                            <span><i class="fas fa-comments"></i> 156</span>
                        </div>
                        <a href="artigo.php?id=3" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 4 -->
                <article class="news-card" data-category="ia">
                    <div class="news-image">
                        <span class="news-badge new">NOVO</span>
                        🧠
                    </div>
                    <div class="news-content">
                        <span class="news-category">Neurociência</span>
                        <h3>Chip Neural Permite Controle Mental de Próteses</h3>
                        <p>Tecnologia inovadora permite que pacientes controlem próteses robóticas complexas apenas com o pensamento, revolucionando a medicina.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 3 horas</span>
                            <span><i class="fas fa-eye"></i> 2.1K</span>
                            <span><i class="fas fa-comments"></i> 67</span>
                        </div>
                        <a href="artigo.php?id=4" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 5 -->
                <article class="news-card" data-category="robotica">
                    <div class="news-image">🏠</div>
                    <div class="news-content">
                        <span class="news-category">Consumidor</span>
                        <h3>Robôs Domésticos Chegam ao Brasil</h3>
                        <p>Assistentes robóticos com IA integrada chegam ao mercado brasileiro por preços acessíveis, prometendo revolucionar tarefas domésticas.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 1 dia</span>
                            <span><i class="fas fa-eye"></i> 4.3K</span>
                            <span><i class="fas fa-comments"></i> 98</span>
                        </div>
                        <a href="artigo.php?id=5" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 6 -->
                <article class="news-card" data-category="espaco">
                    <div class="news-image">
                        <span class="news-badge trending">EM ALTA</span>
                        🚀
                    </div>
                    <div class="news-content">
                        <span class="news-category">Espaço</span>
                        <h3>SpaceX Testa Robôs para Missões em Marte</h3>
                        <p>Testes avançados de robôs autônomos da SpaceX mostram progresso significativo para futuras missões de exploração marciana.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 2 dias</span>
                            <span><i class="fas fa-eye"></i> 6.8K</span>
                            <span><i class="fas fa-comments"></i> 203</span>
                        </div>
                        <a href="artigo.php?id=6" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 7 -->
                <article class="news-card" data-category="ia">
                    <div class="news-image">💼</div>
                    <div class="news-content">
                        <span class="news-category">Negócios</span>
                        <h3>IA Generativa Transforma Mercado de Trabalho</h3>
                        <p>Estudo revela como a inteligência artificial generativa está criando novas profissões e transformando o mercado de trabalho global.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 3 dias</span>
                            <span><i class="fas fa-eye"></i> 3.9K</span>
                            <span><i class="fas fa-comments"></i> 112</span>
                        </div>
                        <a href="artigo.php?id=7" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 8 -->
                <article class="news-card" data-category="robotica">
                    <div class="news-image">🚗</div>
                    <div class="news-content">
                        <span class="news-category">Automóveis</span>
                        <h3>Veículos Autônomos Aprovados em São Paulo</h3>
                        <p>Prefeitura de São Paulo aprova regulamentação para testes de veículos totalmente autônomos em vias públicas da cidade.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 4 dias</span>
                            <span><i class="fas fa-eye"></i> 5.2K</span>
                            <span><i class="fas fa-comments"></i> 178</span>
                        </div>
                        <a href="artigo.php?id=8" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 9 -->
                <article class="news-card" data-category="industria">
                    <div class="news-image">⚙️</div>
                    <div class="news-content">
                        <span class="news-category">Manufatura</span>
                        <h3>Impressão 3D Atinge Nível de Produção em Massa</h3>
                        <p>Nova tecnologia de impressão 3D industrial permite produção em escala, competindo com métodos tradicionais de manufatura.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 5 dias</span>
                            <span><i class="fas fa-eye"></i> 2.8K</span>
                            <span><i class="fas fa-comments"></i> 54</span>
                        </div>
                        <a href="artigo.php?id=9" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 10 -->
                <article class="news-card" data-category="ia">
                    <div class="news-image">🎨</div>
                    <div class="news-content">
                        <span class="news-category">Arte & Cultura</span>
                        <h3>IA Cria Obras de Arte Expostas em Museu</h3>
                        <p>Primeira exposição dedicada exclusivamente a arte criada por inteligência artificial abre em museu de arte moderna.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 6 dias</span>
                            <span><i class="fas fa-eye"></i> 4.1K</span>
                            <span><i class="fas fa-comments"></i> 87</span>
                        </div>
                        <a href="artigo.php?id=10" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 11 -->
                <article class="news-card" data-category="saude">
                    <div class="news-image">💊</div>
                    <div class="news-content">
                        <span class="news-category">Medicina</span>
                        <h3>IA Descobre Novo Antibiótico em 48 Horas</h3>
                        <p>Sistema de inteligência artificial identifica composto antibiótico revolucionário em tempo recorde, surpreendendo comunidade científica.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 1 semana</span>
                            <span><i class="fas fa-eye"></i> 7.3K</span>
                            <span><i class="fas fa-comments"></i> 234</span>
                        </div>
                        <a href="artigo.php?id=11" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

                <!-- News Card 12 -->
                <article class="news-card" data-category="espaco">
                    <div class="news-image">🛰️</div>
                    <div class="news-content">
                        <span class="news-category">Satélites</span>
                        <h3>Rede de Satélites com IA Monitora Clima Global</h3>
                        <p>Nova constelação de satélites equipados com IA promete previsões climáticas mais precisas e alertas antecipados de desastres naturais.</p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> Há 1 semana</span>
                            <span><i class="fas fa-eye"></i> 3.5K</span>
                            <span><i class="fas fa-comments"></i> 76</span>
                        </div>
                        <a href="artigo.php?id=12" class="read-more">Leia mais <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>

            <!-- Pagination -->
            <div class="pagination">
                <button class="pagination-btn" disabled>
                    <i class="fas fa-chevron-left"></i> Anterior
                </button>
                <a href="#" class="pagination-btn active">1</a>
                <a href="#" class="pagination-btn">2</a>
                <a href="#" class="pagination-btn">3</a>
                <a href="#" class="pagination-btn">4</a>
                <a href="#" class="pagination-btn">5</a>
                <button class="pagination-btn">
                    Próximo <i class="fas fa-chevron-right"></i>
                </button>
            </div>
        </div>
    </section>

    <?php include '../includes/footer.php'; ?>

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

        // Filter Functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const newsCards = document.querySelectorAll('.news-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Update active button
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                // Filter news cards
                newsCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'block';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Search Functionality
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && searchInput.value.trim()) {
                    window.location.href = `noticias.php?search=${encodeURIComponent(searchInput.value)}`;
                }
            });
        }

        // Sort Functionality
        const sortSelect = document.getElementById('sortSelect');
        if (sortSelect) {
            sortSelect.addEventListener('change', () => {
                // Implement sorting logic here
                console.log('Sort by:', sortSelect.value);
            });
        }

        // Smooth scroll
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

        // Scroll animations
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

        newsCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(30px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });

        // Sticky navbar effect
        const navbar = document.getElementById('navbar');
        let lastScroll = 0;

        window.addEventListener('scroll', () => {
            const currentScroll = window.pageYOffset;

            if (currentScroll > 100) {
                navbar.style.boxShadow = '0 4px 20px rgba(0, 0, 0, 0.1)';
            } else {
                navbar.style.boxShadow = '0 2px 10px rgba(0, 0, 0, 0.05)';
            }

            lastScroll = currentScroll;
        });
    </script>

</body>

</html>