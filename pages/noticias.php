<?php
// Página de Notícias - RoboNews Portal de Notícias
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - RoboNews</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Reset e estilos gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: #f8fafc;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header da página */
        .page-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 50%, #3b82f6 100%);
            color: white;
            padding: 140px 20px 50px;
            text-align: center;
            margin-top: 70px;
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
            background: url('data:image/svg+xml,<svg width="100" height="100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="2" fill="rgba(255,255,255,0.1)"/></svg>');
            z-index: 1;
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        .page-title {
            font-size: 2.8rem;
            margin-bottom: 1rem;
            font-weight: 800;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
        }

        .gradient-text {
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3);
        }

        .page-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.95);
            text-shadow: 1px 1px 4px rgba(0, 0, 0, 0.2);
        }

        /* Controles de notícias */
        .news-controls {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
            max-width: 800px;
            margin: 0 auto;
        }

        .search-box {
            position: relative;
            flex: 1;
            min-width: 250px;
        }

        .search-box i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #64748b;
        }

        .search-box input {
            width: 100%;
            padding: 12px 15px 12px 45px;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .filter-dropdown, .sort-dropdown {
            min-width: 180px;
        }

        .filter-dropdown select, .sort-dropdown select {
            width: 100%;
            padding: 12px 15px;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        /* Seção de listagem de notícias */
        .news-listing-section {
            padding: 60px 20px;
            background: #f8fafc;
        }

        .news-layout {
            display: grid;
            grid-template-columns: 1fr 350px;
            gap: 3rem;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Artigo em destaque */
        .featured-article {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
            margin-bottom: 3rem;
            transition: transform 0.3s ease;
            border-left: 5px solid #2563eb;
            border-top: 1px solid #e2e8f0;
        }

        .featured-article:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(37, 99, 235, 0.3);
            border-left-color: #1e40af;
        }

        .article-image {
            position: relative;
            height: 300px;
            overflow: hidden;
            background: #1e3a8a;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .featured-article:hover .article-image img {
            transform: scale(1.05);
        }

        .article-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: #ef4444;
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .article-content {
            padding: 2rem;
        }

        .article-meta {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .category-tag {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 700;
            color: white;
        }

        .ia-tag { background: #8b5cf6; }
        .robotica-tag { background: #06b6d4; }
        .iot-tag { background: #10b981; }
        .industria-tag { background: #f59e0b; }

        .article-date {
            color: #64748b;
            font-size: 0.9rem;
        }

        .article-title {
            font-size: 1.8rem;
            margin-bottom: 1rem;
            line-height: 1.3;
            color: #0f172a;
        }

        .article-title a {
            color: #0f172a;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .article-title a:hover {
            color: #2563eb;
        }

        .article-excerpt {
            color: #475569;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            font-size: 1.05rem;
            font-weight: 500;
        }

        .article-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 1rem;
            border-top: 1px solid #e2e8f0;
        }

        .author-info {
            display: flex;
            align-items: center;
            gap: 0.8rem;
        }

        .author-avatar {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: #e2e8f0;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #64748b;
        }

        .author-name {
            font-weight: 600;
            color: #334155;
        }

        .article-stats {
            display: flex;
            gap: 1rem;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 5px;
            color: #64748b;
            font-size: 0.9rem;
        }

        /* Lista de notícias */
        .news-list {
            display: flex;
            flex-direction: column;
            gap: 2rem;
            margin-bottom: 3rem;
        }

        .news-item {
            display: grid;
            grid-template-columns: 250px 1fr;
            gap: 1.5rem;
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border-left: 5px solid #2563eb;
            border-top: 1px solid #e2e8f0;
        }

        .news-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 35px rgba(37, 99, 235, 0.3);
            border-left-color: #1e40af;
        }

        .news-image {
            height: 180px;
            overflow: hidden;
            background: #1e3a8a;
        }

        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .news-item:hover .news-image img {
            transform: scale(1.05);
        }

        .news-content {
            padding: 1.5rem 1.5rem 1.5rem 0;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .news-title {
            font-size: 1.3rem;
            margin-bottom: 0.8rem;
            line-height: 1.4;
            color: #0f172a;
        }

        .news-title a {
            color: #0f172a;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .news-title a:hover {
            color: #2563eb;
        }

        .news-excerpt {
            color: #475569;
            line-height: 1.5;
            margin-bottom: 1rem;
            font-weight: 500;
        }

        .news-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Botões - Igual ao index */
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

        /* Paginação */
        .pagination {
            display: flex;
            justify-content: center;
            gap: 0.5rem;
            margin-top: 2rem;
        }

        .page-link {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 45px;
            border-radius: 8px;
            background: white;
            color: #334155;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .page-link:hover, .page-link.active {
            background: #2563eb;
            color: white;
        }

        .page-link.next {
            width: auto;
            padding: 0 20px;
        }

        /* Sidebar */
        .news-sidebar {
            display: flex;
            flex-direction: column;
            gap: 2rem;
        }

        .sidebar-widget {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            border-left: 5px solid #2563eb;
            border-top: 1px solid #e2e8f0;
        }

        .widget-title {
            font-size: 1.3rem;
            margin-bottom: 1.5rem;
            color: #0f172a;
            font-weight: 700;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 0.8rem;
        }

        .popular-news {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .popular-item {
            display: flex;
            gap: 1rem;
            padding-bottom: 1.2rem;
            border-bottom: 1px solid #f1f5f9;
        }

        .popular-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .popular-rank {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 30px;
            height: 30px;
            background: #2563eb;
            color: white;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.9rem;
            flex-shrink: 0;
        }

        .popular-item:nth-child(2) .popular-rank {
            background: #64748b;
        }

        .popular-item:nth-child(3) .popular-rank {
            background: #f59e0b;
        }

        .popular-content h4 {
            margin-bottom: 0.5rem;
            line-height: 1.4;
        }

        .popular-content a {
            color: #0f172a;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 600;
            transition: color 0.3s ease;
        }

        .popular-content a:hover {
            color: #2563eb;
        }

        .popular-meta {
            font-size: 0.8rem;
            color: #64748b;
        }

        .categories-list {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .category-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.8rem 0;
            border-bottom: 1px solid #f1f5f9;
            text-decoration: none;
            color: #334155;
            transition: all 0.3s ease;
        }

        .category-item:last-child {
            border-bottom: none;
        }

        .category-item:hover {
            color: #2563eb;
        }

        .category-name {
            font-weight: 600;
        }

        .category-count {
            background: #e2e8f0;
            padding: 3px 8px;
            border-radius: 12px;
            font-size: 0.8rem;
            font-weight: 700;
        }

        .newsletter-widget {
            background: linear-gradient(135deg, #1e3a8a 0%, #2563eb 100%);
            color: white;
        }

        .newsletter-widget .widget-title {
            color: white;
            border-bottom-color: rgba(255, 255, 255, 0.2);
        }

        .newsletter-widget p {
            margin-bottom: 1.5rem;
            opacity: 0.9;
        }

        .newsletter-form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .newsletter-form input {
            padding: 12px 15px;
            border-radius: 8px;
            border: none;
            font-size: 1rem;
        }

        /* Responsividade */
        @media (max-width: 1024px) {
            .news-layout {
                grid-template-columns: 1fr;
                gap: 2rem;
            }
        }

        @media (max-width: 768px) {
            .page-title {
                font-size: 2.2rem;
            }
            
            .page-subtitle {
                font-size: 1.1rem;
            }
            
            .news-controls {
                flex-direction: column;
            }
            
            .search-box, .filter-dropdown, .sort-dropdown {
                min-width: 100%;
            }
            
            .news-item {
                grid-template-columns: 1fr;
            }
            
            .news-image {
                height: 200px;
            }
            
            .news-content {
                padding: 1.5rem;
            }
            
            .article-footer, .news-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 1rem;
            }

            .footer-links {
                flex-direction: column;
                gap: 1rem;
            }
        }
    </style>
</head>

<body>

    <!-- Header - Copiado do index -->
    <header class="site-header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <h1>🤖 RoboNews</h1>
                </div>
                <button class="mobile-menu-btn">
                    <i class="fas fa-bars"></i>
                </button>
                <nav class="main-nav">
                    <ul class="nav-menu">
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="noticias.php" class="active">Notícias</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="main-content">
        <!-- Page Header -->
        <section class="page-header">
            <div class="container">
                <div class="header-content">
                    <h1 class="page-title">
                        📰 <span class="gradient-text">Todas as Notícias</span>
                    </h1>
                    <p class="page-subtitle">
                        Fique por dentro das últimas novidades sobre <strong>robótica</strong>, <strong>inteligência artificial</strong> e <strong>tecnologias emergentes</strong>
                    </p>
                    
                    <!-- Search and Filter Section -->
                    <div class="news-controls">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" id="news-search" placeholder="Pesquisar notícias...">
                        </div>
                        
                        <div class="filter-dropdown">
                            <select id="category-filter">
                                <option value="all">Todas as Categorias</option>
                                <option value="ia">Inteligência Artificial</option>
                                <option value="iot">IoT & Conectividade</option>
                            </select>
                        </div>
                        
                        <div class="sort-dropdown">
                            <select id="sort-news">
                                <option value="newest">Mais Recentes</option>
                                <option value="oldest">Mais Antigas</option>
                                <option value="popular">Mais Populares</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- News Listing Section -->
        <section class="news-listing-section">
            <div class="container">
                <div class="news-layout">
                    <!-- Main News Column -->
                    <div class="main-news-column">
                        <!-- Featured Article -->
                        <article class="featured-article">
                            <div class="article-image">
                                <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Revolução na IA">
                                <div class="article-badge">Destaque</div>
                            </div>
                            <div class="article-content">
                                <div class="article-meta">
                                    <span class="category-tag ia-tag">Inteligência Artificial</span>
                                    <span class="article-date"><i class="far fa-clock"></i> 2 horas atrás</span>
                                </div>
                                <h2 class="article-title">
                                    <a href="artigo.php?id=1">Google DeepMind anuncia novo modelo de IA que supera humanos em raciocínio lógico</a>
                                </h2>
                                <p class="article-excerpt">
                                    O Gemini Ultra, novo modelo de IA do Google, demonstra capacidades avançadas de raciocínio lógico e resolução de problemas complexos, superando especialistas humanos em testes padronizados. A tecnologia promete revolucionar pesquisas científicas e diagnósticos médicos.
                                </p>
                                <div class="article-footer">
                                    <div class="author-info">
                                        <div class="author-avatar"><i class="fas fa-user"></i></div>
                                        <span class="author-name">Dr. Carlos Silva</span>
                                    </div>
                                    <div class="article-stats">
                                        <span class="stat"><i class="far fa-eye"></i> 2.4K</span>
                                        <span class="stat"><i class="far fa-comment"></i> 156</span>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- News Grid - Apenas 6 notícias -->
                        <div class="news-list">
                            <!-- Notícia 1 -->
                            <article class="news-item">
                                <div class="news-image">
                                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Robô Cirurgião">
                                </div>
                                <div class="news-content">
                                    <div class="article-meta">
                                        <span class="category-tag robotica-tag">Robótica</span>
                                        <span class="article-date"><i class="far fa-clock"></i> 5 horas atrás</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="artigo.php?id=2">Robô cirurgião realiza primeira operação cardíaca autônoma no Brasil</a>
                                    </h3>
                                    <p class="news-excerpt">
                                        Hospital Albert Einstein em São Paulo realizou com sucesso a primeira cirurgia cardíaca totalmente autônoma utilizando o robô cirurgião Da Vinci XI. O procedimento durou 3 horas e o paciente recebeu alta em 48 horas.
                                    </p>
                                    <div class="news-footer">
                                        <div class="author-info">
                                            <div class="author-avatar"><i class="fas fa-user"></i></div>
                                            <span class="author-name">Dra. Ana Costa</span>
                                        </div>
                                        <div class="article-stats">
                                            <span class="stat"><i class="far fa-eye"></i> 1.8K</span>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Notícia 2 -->
                            <article class="news-item">
                                <div class="news-image">
                                    <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Fábrica Robotizada">
                                </div>
                                <div class="news-content">
                                    <div class="article-meta">
                                        <span class="category-tag industria-tag">Indústria 4.0</span>
                                        <span class="article-date"><i class="far fa-clock"></i> 1 dia atrás</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="artigo.php?id=3">Foxconn inaugura fábrica 100% robotizada no Brasil com investimento de R$ 1 bilhão</a>
                                    </h3>
                                    <p class="news-excerpt">
                                        A Foxconn anunciou a primeira fábrica totalmente automatizada da América Latina em Manaus. A unidade emprega 200 robôs industriais e apenas 50 supervisores humanos, produzindo 50.000 smartphones por dia.
                                    </p>
                                    <div class="news-footer">
                                        <div class="author-info">
                                            <div class="author-avatar"><i class="fas fa-user"></i></div>
                                            <span class="author-name">Roberto Santos</span>
                                        </div>
                                        <div class="article-stats">
                                            <span class="stat"><i class="far fa-eye"></i> 3.2K</span>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Notícia 3 -->
                            <article class="news-item">
                                <div class="news-image">
                                    <img src="https://images.unsplash.com/photo-1555252333-9b6e68d8c5dc?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Chip Neural">
                                </div>
                                <div class="news-content">
                                    <div class="article-meta">
                                        <span class="category-tag ia-tag">Inteligência Artificial</span>
                                        <span class="article-date"><i class="far fa-clock"></i> 2 dias atrás</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="artigo.php?id=4">Neuralink inicia testes em humanos com chip cerebral para controle de próteses</a>
                                    </h3>
                                    <p class="news-excerpt">
                                        A Neuralink, empresa de Elon Musk, recebeu aprovação da FDA para iniciar testes em humanos. O chip permite que pacientes com paralisia controlem dispositivos robóticos apenas com o pensamento.
                                    </p>
                                    <div class="news-footer">
                                        <div class="author-info">
                                            <div class="author-avatar"><i class="fas fa-user"></i></div>
                                            <span class="author-name">Prof. Miguel Oliveira</span>
                                        </div>
                                        <div class="article-stats">
                                            <span class="stat"><i class="far fa-eye"></i> 2.1K</span>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Notícia 4 -->
                            <article class="news-item">
                                <div class="news-image">
                                    <img src="https://images.unsplash.com/photo-1541971875076-8f705f9cde5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Robô Doméstico">
                                </div>
                                <div class="news-content">
                                    <div class="article-meta">
                                        <span class="category-tag robotica-tag">Robótica</span>
                                        <span class="article-date"><i class="far fa-clock"></i> 3 dias atrás</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="artigo.php?id=5">Amazon lança Astro 2.0: robô doméstico com IA que reconhece rostos e emoções</a>
                                    </h3>
                                    <p class="news-excerpt">
                                        O novo Astro da Amazon chega ao mercado brasileiro com capacidades avançadas de IA. O robô reconhece membros da família, detecta emoções e pode alertar sobre situações incomuns em casa.
                                    </p>
                                    <div class="news-footer">
                                        <div class="author-info">
                                            <div class="author-avatar"><i class="fas fa-user"></i></div>
                                            <span class="author-name">Camila Fernandes</span>
                                        </div>
                                        <div class="article-stats">
                                            <span class="stat"><i class="far fa-eye"></i> 4.5K</span>
                                        </div>
                                    </div>
                                </div>
                            </article>

                            <!-- Notícia 5 -->
                            <article class="news-item">
                                <div class="news-image">
                                    <img src="https://images.unsplash.com/photo-1446776653964-20c1d3a81b06?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Robô Espacial">
                                </div>
                                <div class="news-content">
                                    <div class="article-meta">
                                        <span class="category-tag iot-tag">IoT & Conectividade</span>
                                        <span class="article-date"><i class="far fa-clock"></i> 4 dias atrás</span>
                                    </div>
                                    <h3 class="news-title">
                                        <a href="artigo.php?id=6">NASA testa robôs autônomos para construção de base lunar permanente</a>
                                    </h3>
                                    <p class="news-excerpt">
                                        A NASA anunciou testes bem-sucedidos de robôs autônomos que podem construir estruturas na Lua usando regolito lunar. A tecnologia será crucial para estabelecer uma base permanente no satélite.
                                    </p>
                                    <div class="news-footer">
                                        <div class="author-info">
                                            <div class="author-avatar"><i class="fas fa-user"></i></div>
                                            <span class="author-name">Lucas Mendes</span>
                                        </div>
                                        <div class="article-stats">
                                            <span class="stat"><i class="far fa-eye"></i> 3.7K</span>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <!-- Paginação -->
                        <div class="pagination">
                            <a href="#" class="page-link active">1</a>
                            <a href="#" class="page-link">2</a>
                            <a href="#" class="page-link">3</a>
                            <a href="#" class="page-link next">Próxima <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>

                    <!-- Sidebar -->
                    <aside class="news-sidebar">
                        <!-- Popular News -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">🔥 Populares</h3>
                            <div class="popular-news">
                                <article class="popular-item">
                                    <div class="popular-rank">1</div>
                                    <div class="popular-content">
                                        <h4><a href="#">IA brasileira detecta câncer com 99% de precisão</a></h4>
                                        <div class="popular-meta">
                                            <span class="popular-views">5.2K visualizações</span>
                                        </div>
                                    </div>
                                </article>
                                
                                <article class="popular-item">
                                    <div class="popular-rank">2</div>
                                    <div class="popular-content">
                                        <h4><a href="#">Robôs substituem 40% da força de trabalho em fábrica</a></h4>
                                        <div class="popular-meta">
                                            <span class="popular-views">4.8K visualizações</span>
                                        </div>
                                    </div>
                                </article>
                                
                                <article class="popular-item">
                                    <div class="popular-rank">3</div>
                                    <div class="popular-content">
                                        <h4><a href="#">Novo algoritmo de IA resolve problemas matemáticos complexos</a></h4>
                                        <div class="popular-meta">
                                            <span class="popular-views">4.3K visualizações</span>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>

                        <!-- Categories Widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">📂 Categorias</h3>
                            <div class="categories-list">
                                <a href="#" class="category-item">
                                    <span class="category-name">Inteligência Artificial</span>
                                    <span class="category-count">324</span>
                                </a>
                                <a href="#" class="category-item">
                                    <span class="category-name">Robótica</span>
                                    <span class="category-count">189</span>
                                </a>
                                <a href="#" class="category-item">
                                    <span class="category-name">IoT & Conectividade</span>
                                    <span class="category-count">156</span>
                                </a>
                                <a href="#" class="category-item">
                                    <span class="category-name">Indústria 4.0</span>
                                    <span class="category-count">267</span>
                                </a>
                            </div>
                        </div>

                        <!-- Newsletter Widget -->
                        <div class="sidebar-widget newsletter-widget">
                            <h3 class="widget-title">📧 Newsletter</h3>
                            <p>Receba as últimas notícias sobre robótica e IA diretamente no seu email.</p>
                            <form class="newsletter-form">
                                <input type="email" placeholder="Seu melhor email" required>
                                <button type="submit" class="btn btn-primary">Inscrever-se</button>
                            </form>
                        </div>
                    </aside>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer - Igual ao index -->
    <footer class="site-footer">
        <div class="container">
            <div class="footer-content">
                <p>&copy; 2024 RoboNews - Portal de Notícias de Robótica e Tecnologia. Todos os direitos reservados.</p>
                <p>
                    <a href="../index.php">Home</a> | 
                    <a href="noticias.php">Notícias</a> | 
                    <a href="categorias.php">Categorias</a> | 
                    <a href="sobre.php">Sobre</a> | 
                    <a href="contato.php">Contato</a>
                </p>
            </div>
        </div>
    </footer>

    <script>
        // Search functionality
        document.getElementById('news-search').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const newsItems = document.querySelectorAll('.news-item, .featured-article');
            
            newsItems.forEach(item => {
                const title = item.querySelector('h2, h3').textContent.toLowerCase();
                const excerpt = item.querySelector('p').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || excerpt.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Category filter
        document.getElementById('category-filter').addEventListener('change', function() {
            const selectedCategory = this.value;
            const newsItems = document.querySelectorAll('.news-item, .featured-article');
            
            if (selectedCategory === 'all') {
                newsItems.forEach(item => {
                    item.style.display = 'block';
                });
            } else {
                newsItems.forEach(item => {
                    const categoryTag = item.querySelector('.category-tag');
                    if (categoryTag && categoryTag.textContent.toLowerCase().includes(selectedCategory)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        });

        // Newsletter form submission
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input[type="email"]').value;
            alert(`Obrigado por se inscrever com o email: ${email}`);
            this.reset();
        });

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

        // Mobile menu functionality
        const mobileMenuBtn = document.querySelector('.mobile-menu-btn');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close mobile menu when clicking on a link
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });
    </script>
</body>
</html>