<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/images/favicon.ico">
    <title>RoboNews - Portal de Notícias sobre Robótica e Tecnologia</title>
    <meta name="description"
        content="RoboNews é o principal portal de notícias sobre robótica, inteligência artificial e tecnologias emergentes. Mantenha-se atualizado com as últimas inovações.">
    <meta name="keywords" content="robótica, inteligência artificial, IA, tecnologia, automação, IoT, notícias tech">
    <meta name="author" content="Equipe RoboNews">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://localhost/Trabalho-TIC-GRUPO/">
    <meta property="og:title" content="RoboNews - Portal de Notícias sobre Robótica">
    <meta property="og:description" content="As últimas novidades em robótica, IA e tecnologia emergente.">
    <meta property="og:image" content="assets/images/og-image.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="http://localhost/Trabalho-TIC-GRUPO/">
    <meta property="twitter:title" content="RoboNews - Portal de Notícias sobre Robótica">
    <meta property="twitter:description" content="As últimas novidades em robótica, IA e tecnologia emergente.">

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Structured Data -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsMediaOrganization",
            "name": "RoboNews",
            "alternateName": "RoboNews Portal",
            "url": "http://localhost/Trabalho-TIC-GRUPO/",
            "logo": "assets/images/logo.png",
            "description": "Portal de notícias especializado em robótica e tecnologia",
            "foundingDate": "2025",
            "sameAs": [
                "https://facebook.com/robonews",
                "https://twitter.com/robonews",
                "https://linkedin.com/company/robonews"
            ]
        }
    </script>
</head>

<body>
    <?php include 'includes/nav.php'; ?>

    <!-- Hero Section -->
    <section class="hero-banner" id="home">
        <div class="hero-background">
            <div class="hero-particles"></div>
            <div class="hero-gradient-overlay"></div>
        </div>

        <div class="hero-content">
            <div class="hero-text" data-aos="fade-right">
                <div class="hero-badge">
                    <i class="fas fa-rocket"></i>
                    <span>Portal #1 em Robótica no Brasil</span>
                </div>

                <h1 class="hero-title">
                    <span class="gradient-text">RoboNews</span>
                    <br><span class="typing-effect">O Futuro da Tecnologia</span>
                </h1>

                <p class="hero-subtitle">
                    Descubra as últimas inovações em <strong>robótica</strong>,
                    <strong>inteligência artificial</strong> e <strong>tecnologias emergentes</strong>.
                    Conecte-se com o futuro através de conteúdo exclusivo e análises especializadas.
                </p>

                <div class="hero-features">
                    <div class="feature-item">
                        <i class="fas fa-clock"></i>
                        <span>Atualizações Diárias</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-users"></i>
                        <span>Comunidade Ativa</span>
                    </div>
                    <div class="feature-item">
                        <i class="fas fa-award"></i>
                        <span>Conteúdo Especializado</span>
                    </div>
                </div>

                <div class="hero-buttons">
                    <a href="#featured" class="btn btn-primary btn-large smooth-scroll">
                        <i class="fas fa-newspaper"></i>
                        <span>Explorar Notícias</span>
                    </a>
                    <a href="#newsletter" class="btn btn-outline btn-large smooth-scroll">
                        <i class="fas fa-bell"></i>
                        <span>Receber Atualizações</span>
                    </a>
                </div>

                <div class="hero-social-proof">
                    <p class="social-proof-text">Mais de <strong>50.000</strong> profissionais já confiam no RoboNews
                    </p>
                    <div class="social-proof-avatars">
                        <div class="avatar-group">
                            <div class="avatar avatar-1"></div>
                            <div class="avatar avatar-2"></div>
                            <div class="avatar avatar-3"></div>
                            <div class="avatar avatar-4"></div>
                            <div class="avatar avatar-more">+50K</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-visual" data-aos="fade-left">
                <div class="hero-image-container">
                    <div class="floating-elements">
                        <div class="floating-card card-ai">
                            <i class="fas fa-brain"></i>
                            <span>IA Avançada</span>
                        </div>
                        <div class="floating-card card-robot">
                            <i class="fas fa-robot"></i>
                            <span>Robótica</span>
                        </div>
                        <div class="floating-card card-iot">
                            <i class="fas fa-wifi"></i>
                            <span>IoT</span>
                        </div>
                    </div>

                    <div class="hero-main-image">
                        <div class="image-glow"></div>
                        <div class="hero-img-placeholder">
                            <i class="fas fa-robot"></i>
                            <span>RoboNews</span>
                        </div>
                    </div>

                    <div class="tech-stats">
                        <div class="stat-bubble stat-1">
                            <div class="stat-value">98%</div>
                            <div class="stat-label">Precisão IA</div>
                        </div>
                        <div class="stat-bubble stat-2">
                            <div class="stat-value">24/7</div>
                            <div class="stat-label">Monitoramento</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll indicator -->
        <div class="scroll-indicator">
            <div class="scroll-text">Role para explorar</div>
            <div class="scroll-arrow">
                <i class="fas fa-chevron-down"></i>
            </div>
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
                        <span>🚀 SpaceX testa robôs autônomos para missões em Marte • </span>
                        <span>🔬 MIT desenvolve robô que aprende como uma criança • </span>
                        <span>💡 IA resolve problemas matemáticos complexos em segundos • </span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section" id="stats">
        <div class="container">
            <div class="stats-header" data-aos="fade-up">
                <h2 class="section-title">RoboNews em Números</h2>
                <p class="section-subtitle">Nossa comunidade cresce a cada dia, conectando profissionais e entusiastas
                    da tecnologia</p>
            </div>

            <div class="stats-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="stat-item" data-counter="1250">
                    <div class="stat-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="stat-number" data-target="1250">0</div>
                    <div class="stat-label">Artigos Publicados</div>
                    <div class="stat-growth">
                        <i class="fas fa-arrow-up"></i> +15% este mês
                    </div>
                </div>

                <div class="stat-item" data-counter="87500">
                    <div class="stat-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stat-number" data-target="87500">0</div>
                    <div class="stat-label">Leitores Mensais</div>
                    <div class="stat-growth">
                        <i class="fas fa-arrow-up"></i> +28% este mês
                    </div>
                </div>

                <div class="stat-item" data-counter="45">
                    <div class="stat-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <div class="stat-number" data-target="45">0</div>
                    <div class="stat-label">Especialistas</div>
                    <div class="stat-growth">
                        <i class="fas fa-arrow-up"></i> +5 novos
                    </div>
                </div>

                <div class="stat-item" data-counter="8">
                    <div class="stat-icon">
                        <i class="fas fa-trophy"></i>
                    </div>
                    <div class="stat-number" data-target="8">0</div>
                    <div class="stat-label">Anos de Experiência</div>
                    <div class="stat-growth">
                        <i class="fas fa-star"></i> Líder no setor
                    </div>
                </div>
            </div>

            <!-- Achievement Badges -->
            <div class="achievements-section" data-aos="fade-up" data-aos-delay="400">
                <div class="achievements-grid">
                    <div class="achievement-badge">
                        <i class="fas fa-medal"></i>
                        <span>Portal #1 em Robótica</span>
                    </div>
                    <div class="achievement-badge">
                        <i class="fas fa-shield-alt"></i>
                        <span>Conteúdo Verificado</span>
                    </div>
                    <div class="achievement-badge">
                        <i class="fas fa-globe-americas"></i>
                        <span>Alcance Internacional</span>
                    </div>
                    <div class="achievement-badge">
                        <i class="fas fa-clock"></i>
                        <span>Atualizações 24/7</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured News -->
    <section class="featured-section" id="featured">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <div class="section-badge">
                    <i class="fas fa-fire"></i>
                    <span>Em Destaque</span>
                </div>
                <h2 class="section-title">Notícias Mais Relevantes</h2>
                <p class="section-subtitle">Descobertas revolucionárias e tendências que estão moldando o futuro da
                    tecnologia</p>

                <div class="section-filters">
                    <button class="filter-btn active" data-filter="all">
                        <i class="fas fa-globe"></i> Todas
                    </button>
                    <button class="filter-btn" data-filter="ia">
                        <i class="fas fa-brain"></i> IA
                    </button>
                    <button class="filter-btn" data-filter="robotica">
                        <i class="fas fa-robot"></i> Robótica
                    </button>
                    <button class="filter-btn" data-filter="industria">
                        <i class="fas fa-industry"></i> Indústria
                    </button>
                </div>
            </div>

            <!-- Featured Article Hero -->
            <div class="featured-hero" data-aos="fade-up" data-aos-delay="200">
                <article class="hero-article">
                    <div class="article-image-container">
                        <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?w=800&h=600&fit=crop"
                            alt="IA revolucionária em laboratório" class="article-image">
                        <div class="article-overlay">
                            <div class="article-category-badge trending">
                                <i class="fas fa-trending-up"></i> Trending
                            </div>
                            <div class="reading-time">
                                <i class="fas fa-clock"></i> 7 min
                            </div>
                        </div>
                    </div>

                    <div class="article-content">
                        <div class="article-meta-top">
                            <span class="category-tag ai">Inteligência Artificial</span>
                            <span class="article-date">
                                <i class="fas fa-calendar-alt"></i> 27 Out 2025
                            </span>
                        </div>

                        <h2 class="article-title">
                            Revolução na IA: Novo Modelo Supera GPT-4 e Consegue Raciocínio Científico Avançado
                        </h2>

                        <p class="article-excerpt">
                            Pesquisadores da MIT e Stanford desenvolvem sistema de inteligência artificial capaz de
                            conduzir
                            experimentos científicos independentemente, descobrir novos compostos químicos e formular
                            hipóteses
                            complexas com precisão superior a 94% em testes laboratoriais.
                        </p>

                        <div class="article-highlights">
                            <div class="highlight-item">
                                <i class="fas fa-check-circle"></i>
                                <span>94% de precisão em testes</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-flask"></i>
                                <span>Experimentos autônomos</span>
                            </div>
                            <div class="highlight-item">
                                <i class="fas fa-rocket"></i>
                                <span>Descobertas em tempo real</span>
                            </div>
                        </div>

                        <div class="article-actions">
                            <a href="pages/artigo.php?id=1" class="read-more-btn primary">
                                <span>Leia a Análise Completa</span>
                                <i class="fas fa-arrow-right"></i>
                            </a>

                            <div class="article-engagement">
                                <button class="engagement-btn like-btn">
                                    <i class="far fa-heart"></i>
                                    <span>1.2K</span>
                                </button>
                                <button class="engagement-btn comment-btn">
                                    <i class="far fa-comment"></i>
                                    <span>89</span>
                                </button>
                                <button class="engagement-btn share-btn">
                                    <i class="fas fa-share"></i>
                                    <span>Share</span>
                                </button>
                            </div>
                        </div>

                        <div class="author-info">
                            <div class="author-avatar">
                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=50&h=50&fit=crop&crop=face"
                                    alt="Dr. Carlos Silva">
                            </div>
                            <div class="author-details">
                                <span class="author-name">Dr. Carlos Silva</span>
                                <span class="author-title">Especialista em IA • PhD MIT</span>
                            </div>
                            <button class="follow-btn">
                                <i class="fas fa-plus"></i> Seguir
                            </button>
                        </div>
                    </div>
                </article>
            </div>

            <!-- Secondary Articles Grid -->
            <div class="featured-grid" data-aos="fade-up" data-aos-delay="400">
                <article class="news-card featured" data-category="robotica">
                    <div class="card-header">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1559757148-5c350d0d3c56?w=400&h=250&fit=crop"
                                alt="Robô cirurgião em operação">
                            <div class="card-overlay">
                                <div class="card-category">Medicina</div>
                                <div class="popularity-indicator">
                                    <i class="fas fa-fire"></i> Popular
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="category-tag medical">Robótica Médica</span>
                            <span class="read-time">
                                <i class="fas fa-clock"></i> 4 min
                            </span>
                        </div>

                        <h3 class="card-title">Robô Cirurgião Realiza Primeira Operação Totalmente Autônoma no Brasil
                        </h3>

                        <p class="card-excerpt">
                            Hospital Albert Einstein marca história com cirurgia cardíaca realizada integralmente por
                            IA,
                            com precisão 300% superior aos métodos tradicionais.
                        </p>

                        <div class="card-stats">
                            <span class="stat-item">
                                <i class="fas fa-eye"></i> 12.5K views
                            </span>
                            <span class="stat-item">
                                <i class="fas fa-heart"></i> 890
                            </span>
                            <span class="card-date">
                                <i class="fas fa-calendar"></i> 26 Out
                            </span>
                        </div>

                        <a href="pages/artigo.php?id=2" class="card-link">
                            <span>Leia mais</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-category="industria">
                    <div class="card-header">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1565514020179-026b92b84bb6?w=400&h=250&fit=crop"
                                alt="Fábrica automatizada">
                            <div class="card-overlay">
                                <div class="card-category">Indústria</div>
                                <div class="live-indicator">
                                    <div class="live-dot"></div> Ao vivo
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <div class="card-meta">
                            <span class="category-tag industry">Automação Industrial</span>
                            <span class="read-time">
                                <i class="fas fa-clock"></i> 6 min
                            </span>
                        </div>

                        <h3 class="card-title">Tesla Anuncia Primeira Gigafactory 100% Robotizada da América Latina</h3>

                        <p class="card-excerpt">
                            Investimento de US$ 2 bilhões criará 15 mil empregos indiretos e revolucionará a produção
                            automotiva na região com zero intervenção humana.
                        </p>

                        <div class="card-stats">
                            <span class="stat-item">
                                <i class="fas fa-eye"></i> 8.2K views
                            </span>
                            <span class="stat-item">
                                <i class="fas fa-comment"></i> 234
                            </span>
                            <span class="card-date">
                                <i class="fas fa-calendar"></i> 25 Out
                            </span>
                        </div>

                        <a href="pages/artigo.php?id=3" class="card-link">
                            <span>Leia mais</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-category="ia">
                    <div class="card-header">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=400&h=250&fit=crop"
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

                        <h3 class="card-title">Chip Neural Permite Controle Mental de Próteses Robóticas Complexas</h3>

                        <p class="card-excerpt">
                            Breakthrough da Neuralink permite que pacientes controlem braços robóticos com precisão
                            de movimentos nunca vista, revolucionando tratamentos neurológicos.
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

                        <a href="pages/artigo.php?id=4" class="card-link">
                            <span>Leia mais</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </article>

                <article class="news-card" data-category="robotica">
                    <div class="card-header">
                        <div class="card-image">
                            <img src="https://images.unsplash.com/photo-1518624612206-dc516529044e?w=400&h=250&fit=crop"
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

                        <h3 class="card-title">Robôs Domésticos Inteligentes Chegam às Casas Brasileiras por R$ 2.999
                        </h3>

                        <p class="card-excerpt">
                            Xiaomi lança no Brasil robô multifuncional capaz de limpeza, segurança e assistência
                            pessoal com IA integrada e preço acessível.
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

                        <a href="pages/artigo.php?id=5" class="card-link">
                            <span>Leia mais</span>
                            <i class="fas fa-chevron-right"></i>
                        </a>
                    </div>
                </article>
            </div>

            <!-- Load More -->
            <div class="load-more-container" data-aos="fade-up" data-aos-delay="600">
                <button class="load-more-btn">
                    <i class="fas fa-plus"></i>
                    <span>Carregar Mais Notícias</span>
                </button>
                <p class="load-more-info">Descubra mais de <strong>1.250</strong> artigos em nosso arquivo</p>
            </div>
        </div>
    </section>

    <!-- Categories & Topics Section -->
    <section class="topics-section" id="topics">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Explore por Tópicos</h2>
                <p class="section-subtitle">Mergulhe profundamente nos temas que definem o futuro da tecnologia</p>
            </div>

            <!-- Main Categories -->
            <div class="categories-showcase" data-aos="fade-up" data-aos-delay="200">
                <div class="category-card-large ai-category">
                    <div class="category-background">
                        <div class="category-pattern"></div>
                        <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&h=400&fit=crop"
                            alt="Inteligência Artificial">
                    </div>
                    <div class="category-content">
                        <div class="category-icon">
                            <i class="fas fa-brain"></i>
                        </div>
                        <div class="category-info">
                            <h3 class="category-title">Inteligência Artificial</h3>
                            <p class="category-description">
                                Descobertas em machine learning, redes neurais e aplicações revolucionárias da IA
                            </p>
                            <div class="category-stats">
                                <span class="stat">
                                    <i class="fas fa-newspaper"></i> 324 artigos
                                </span>
                                <span class="stat">
                                    <i class="fas fa-users"></i> 12.5K seguidores
                                </span>
                                <span class="stat trending">
                                    <i class="fas fa-trending-up"></i> +18% esta semana
                                </span>
                            </div>
                            <div class="category-topics">
                                <span class="topic-tag">GPT & LLMs</span>
                                <span class="topic-tag">Computer Vision</span>
                                <span class="topic-tag">AutoML</span>
                                <span class="topic-tag">Ethics in AI</span>
                            </div>
                        </div>
                        <a href="pages/categoria.php?cat=ia" class="category-link">
                            <span>Explorar IA</span>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>

                <div class="category-grid-secondary">
                    <div class="category-card robotics-category">
                        <div class="card-header">
                            <div class="category-icon">
                                <i class="fas fa-robot"></i>
                            </div>
                            <div class="category-badge hot">
                                <i class="fas fa-fire"></i> Hot
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="category-title">Robótica Avançada</h4>
                            <p class="category-description">
                                Humanoides, robôs industriais, drones autônomos e automação inteligente
                            </p>
                            <div class="category-highlights">
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Boston Dynamics</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Robôs Colaborativos</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Automação Industrial</span>
                                </div>
                            </div>
                            <div class="category-stats-mini">
                                <span>189 artigos</span> • <span class="trending">+12% views</span>
                            </div>
                            <a href="pages/categoria.php?cat=robotica" class="btn-explore">
                                Explorar <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="category-card iot-category">
                        <div class="card-header">
                            <div class="category-icon">
                                <i class="fas fa-network-wired"></i>
                            </div>
                            <div class="category-badge new">
                                <i class="fas fa-sparkles"></i> Novo
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="category-title">IoT & Conectividade</h4>
                            <p class="category-description">
                                Internet das Coisas, sensores inteligentes, edge computing e cidades conectadas
                            </p>
                            <div class="category-highlights">
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Smart Cities</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Edge Computing</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>5G & Beyond</span>
                                </div>
                            </div>
                            <div class="category-stats-mini">
                                <span>156 artigos</span> • <span class="growing">+25% interesse</span>
                            </div>
                            <a href="pages/categoria.php?cat=iot" class="btn-explore">
                                Explorar <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="category-card industry-category">
                        <div class="card-header">
                            <div class="category-icon">
                                <i class="fas fa-industry"></i>
                            </div>
                            <div class="category-badge premium">
                                <i class="fas fa-crown"></i> Premium
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="category-title">Indústria 4.0</h4>
                            <p class="category-description">
                                Manufatura inteligente, digital twins, blockchain industrial e sustentabilidade
                            </p>
                            <div class="category-highlights">
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Digital Twins</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Sustentabilidade</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Blockchain</span>
                                </div>
                            </div>
                            <div class="category-stats-mini">
                                <span>267 artigos</span> • <span class="premium">Premium content</span>
                            </div>
                            <a href="pages/categoria.php?cat=industria" class="btn-explore">
                                Explorar <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>

                    <div class="category-card healthcare-category">
                        <div class="card-header">
                            <div class="category-icon">
                                <i class="fas fa-heartbeat"></i>
                            </div>
                            <div class="category-badge breakthrough">
                                <i class="fas fa-rocket"></i> Breakthrough
                            </div>
                        </div>
                        <div class="card-content">
                            <h4 class="category-title">HealthTech & BioRobótica</h4>
                            <p class="category-description">
                                Robôs cirúrgicos, diagnóstico por IA, telemedicina e biotecnologia avançada
                            </p>
                            <div class="category-highlights">
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Cirurgia Robótica</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Diagnóstico IA</span>
                                </div>
                                <div class="highlight">
                                    <i class="fas fa-check-circle"></i>
                                    <span>Próteses Inteligentes</span>
                                </div>
                            </div>
                            <div class="category-stats-mini">
                                <span>142 artigos</span> • <span class="breakthrough">Breakthrough tech</span>
                            </div>
                            <a href="pages/categoria.php?cat=saude" class="btn-explore">
                                Explorar <i class="fas fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Trending Topics -->
            <div class="trending-topics" data-aos="fade-up" data-aos-delay="400">
                <h3 class="trending-title">
                    <i class="fas fa-fire"></i> Trending Topics
                </h3>
                <div class="trending-tags">
                    <a href="pages/tag.php?tag=chatgpt" class="trending-tag">
                        <span class="tag-name">ChatGPT Evolution</span>
                        <span class="tag-count">+2.3K</span>
                    </a>
                    <a href="pages/tag.php?tag=tesla-bot" class="trending-tag">
                        <span class="tag-name">Tesla Optimus</span>
                        <span class="tag-count">+1.8K</span>
                    </a>
                    <a href="pages/tag.php?tag=quantum-computing" class="trending-tag">
                        <span class="tag-name">Quantum Computing</span>
                        <span class="tag-count">+1.5K</span>
                    </a>
                    <a href="pages/tag.php?tag=autonomous-vehicles" class="trending-tag">
                        <span class="tag-name">Veículos Autônomos</span>
                        <span class="tag-count">+1.2K</span>
                    </a>
                    <a href="pages/tag.php?tag=metaverse" class="trending-tag">
                        <span class="tag-name">Metaverse & VR</span>
                        <span class="tag-count">+987</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Expert Insights Section -->
    <section class="experts-section" id="experts">
        <div class="container">
            <div class="section-header" data-aos="fade-up">
                <h2 class="section-title">Insights de Especialistas</h2>
                <p class="section-subtitle">Análises exclusivas dos maiores experts em tecnologia do Brasil e do mundo
                </p>
            </div>

            <div class="experts-grid" data-aos="fade-up" data-aos-delay="200">
                <div class="expert-card featured-expert">
                    <div class="expert-background">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=600&h=400&fit=crop&crop=face"
                            alt="Dr. Ricardo Santos">
                    </div>
                    <div class="expert-content">
                        <div class="expert-badge">
                            <i class="fas fa-star"></i> Expert Featured
                        </div>
                        <div class="expert-info">
                            <h3 class="expert-name">Dr. Ricardo Santos</h3>
                            <p class="expert-title">PhD em IA • Ex-Google Brain • Fundador TechAI</p>
                            <div class="expert-credentials">
                                <span class="credential"><i class="fas fa-graduation-cap"></i> MIT</span>
                                <span class="credential"><i class="fas fa-trophy"></i> 15 prêmios</span>
                                <span class="credential"><i class="fas fa-book"></i> 50+ papers</span>
                            </div>
                        </div>
                        <div class="expert-latest">
                            <h4 class="latest-title">Última Análise:</h4>
                            <p class="latest-content">
                                "A convergência entre IA generativa e robótica autônoma criará um novo paradigma
                                industrial nos próximos 18 meses, especialmente no Brasil."
                            </p>
                            <a href="pages/expert.php?id=1" class="expert-link">
                                Ler análise completa <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                        <div class="expert-stats">
                            <div class="stat-item">
                                <span class="stat-number">2.5M</span>
                                <span class="stat-label">Seguidores</span>
                            </div>
                            <div class="stat-item">
                                <span class="stat-number">127</span>
                                <span class="stat-label">Artigos</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="experts-list">
                    <div class="expert-mini-card">
                        <div class="expert-avatar">
                            <img src="https://images.unsplash.com/photo-1494790108755-2616b612b643?w=80&h=80&fit=crop&crop=face"
                                alt="Dra. Ana Costa">
                        </div>
                        <div class="expert-details">
                            <h4 class="expert-name">Dra. Ana Costa</h4>
                            <p class="expert-role">Robótica Médica • USP</p>
                            <p class="expert-insight">"Robôs cirúrgicos vão reduzir em 70% o tempo de recuperação até
                                2026"</p>
                        </div>
                        <button class="follow-expert-btn">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                    <div class="expert-mini-card">
                        <div class="expert-avatar">
                            <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?w=80&h=80&fit=crop&crop=face"
                                alt="Prof. João Silva">
                        </div>
                        <div class="expert-details">
                            <h4 class="expert-name">Prof. João Silva</h4>
                            <p class="expert-role">IoT & Edge Computing • UNICAMP</p>
                            <p class="expert-insight">"Edge AI será fundamental para a próxima geração de smart cities"
                            </p>
                        </div>
                        <button class="follow-expert-btn">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                    <div class="expert-mini-card">
                        <div class="expert-avatar">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?w=80&h=80&fit=crop&crop=face"
                                alt="Dra. Maria Oliveira">
                        </div>
                        <div class="expert-details">
                            <h4 class="expert-name">Dra. Maria Oliveira</h4>
                            <p class="expert-role">Indústria 4.0 • Siemens Brasil</p>
                            <p class="expert-insight">"Digital twins revolucionarão a manufatura brasileira nos próximos
                                2 anos"</p>
                        </div>
                        <button class="follow-expert-btn">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter & Community Section -->
    <section class="newsletter-section" id="newsletter">
        <div class="container">
            <div class="newsletter-wrapper">
                <!-- Left Side - Newsletter -->
                <div class="newsletter-content" data-aos="fade-right">
                    <div class="newsletter-header">
                        <div class="newsletter-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <div class="newsletter-badge">
                            <span>🚀 Gratuito</span>
                        </div>
                    </div>

                    <div class="newsletter-main">
                        <h2 class="newsletter-title">
                            Fique Sempre <span class="gradient-text">Atualizado</span>
                        </h2>
                        <p class="newsletter-subtitle">
                            Receba <strong>semanalmente</strong> as descobertas mais importantes em
                            robótica, IA e tecnologia. Mais de <strong>50.000</strong> profissionais
                            já confiam em nosso conteúdo.
                        </p>

                        <div class="newsletter-benefits">
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Resumos exclusivos das principais novidades</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Análises de especialistas renomados</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Alertas de descobertas revolucionárias</span>
                            </div>
                            <div class="benefit-item">
                                <i class="fas fa-check-circle"></i>
                                <span>Acesso antecipado a webinars e eventos</span>
                            </div>
                        </div>
                    </div>

                    <form class="newsletter-form" id="newsletterForm" action="includes/newsletter.php" method="POST">
                        <div class="form-group">
                            <div class="input-wrapper">
                                <i class="fas fa-envelope input-icon"></i>
                                <input type="email" name="email" id="newsletterEmail"
                                    placeholder="Seu melhor e-mail profissional" required class="newsletter-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="input-wrapper">
                                <i class="fas fa-user input-icon"></i>
                                <input type="text" name="name" id="newsletterName" placeholder="Seu nome completo"
                                    required class="newsletter-input">
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="interest" id="newsletterInterest" class="newsletter-select" required>
                                <option value="">Área de maior interesse</option>
                                <option value="ia">Inteligência Artificial</option>
                                <option value="robotica">Robótica</option>
                                <option value="iot">IoT & Conectividade</option>
                                <option value="industria">Indústria 4.0</option>
                                <option value="saude">HealthTech</option>
                                <option value="geral">Tecnologia em Geral</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary btn-newsletter">
                            <span class="btn-text">
                                <i class="fas fa-paper-plane"></i>
                                Inscrever-se Gratuitamente
                            </span>
                            <div class="btn-loading">
                                <i class="fas fa-spinner fa-spin"></i>
                                Processando...
                            </div>
                        </button>

                        <div class="newsletter-privacy">
                            <p>
                                <i class="fas fa-shield-alt"></i>
                                Seus dados estão seguros. Enviamos apenas 1 email por semana e você pode cancelar a
                                qualquer momento.
                            </p>
                        </div>
                    </form>

                    <div class="newsletter-success" id="newsletterSuccess" style="display: none;">
                        <div class="success-icon">
                            <i class="fas fa-check-circle"></i>
                        </div>
                        <h3>Bem-vindo(a) à comunidade RoboNews!</h3>
                        <p>Você receberá nossa primeira newsletter em breve. Verifique sua caixa de entrada.</p>
                    </div>
                </div>

                <!-- Right Side - Community Stats -->
                <div class="community-stats" data-aos="fade-left" data-aos-delay="200">
                    <div class="stats-header">
                        <h3>Nossa Comunidade</h3>
                        <p>Junte-se a milhares de profissionais</p>
                    </div>

                    <div class="community-numbers">
                        <div class="number-item">
                            <div class="number-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="number-content">
                                <span class="number" data-target="52847">0</span>
                                <span class="label">Subscribers Ativos</span>
                            </div>
                        </div>

                        <div class="number-item">
                            <div class="number-icon">
                                <i class="fas fa-envelope-open-text"></i>
                            </div>
                            <div class="number-content">
                                <span class="number">97%</span>
                                <span class="label">Taxa de Abertura</span>
                            </div>
                        </div>

                        <div class="number-item">
                            <div class="number-icon">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="number-content">
                                <span class="number">4.9</span>
                                <span class="label">Avaliação Média</span>
                            </div>
                        </div>
                    </div>

                    <div class="testimonials-preview">
                        <h4>O que dizem sobre nós:</h4>
                        <div class="testimonial-item">
                            <div class="testimonial-avatar">
                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=50&h=50&fit=crop&crop=face"
                                    alt="Carlos Silva">
                            </div>
                            <div class="testimonial-content">
                                <p>"Conteúdo de altíssima qualidade. Mudou minha visão sobre IA."</p>
                                <span>Carlos Silva, CTO Startup</span>
                            </div>
                        </div>

                        <div class="testimonial-item">
                            <div class="testimonial-avatar">
                                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b643?w=50&h=50&fit=crop&crop=face"
                                    alt="Ana Santos">
                            </div>
                            <div class="testimonial-content">
                                <p>"Essencial para quem trabalha com tecnologia emergente."</p>
                                <span>Ana Santos, Eng. Robótica</span>
                            </div>
                        </div>
                    </div>

                    <div class="social-proof-companies">
                        <h4>Profissionais dessas empresas já assinam:</h4>
                        <div class="companies-logos">
                            <div class="company-logo">Google</div>
                            <div class="company-logo">Microsoft</div>
                            <div class="company-logo">Tesla</div>
                            <div class="company-logo">Petrobras</div>
                            <div class="company-logo">USP</div>
                            <div class="company-logo">+200 outras</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call-to-Action Final -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content" data-aos="zoom-in">
                <div class="cta-background">
                    <div class="cta-particles"></div>
                </div>

                <div class="cta-text">
                    <h2 class="cta-title">
                        Pronto para <span class="gradient-text">Revolucionar</span> sua Visão Tecnológica?
                    </h2>
                    <p class="cta-subtitle">
                        Junte-se à maior comunidade de profissionais de tecnologia do Brasil.
                        Transforme conhecimento em inovação.
                    </p>
                </div>

                <div class="cta-actions">
                    <a href="pages/noticias.php" class="btn btn-primary btn-large">
                        <i class="fas fa-rocket"></i>
                        <span>Começar Agora</span>
                    </a>
                    <a href="pages/sobre.php" class="btn btn-outline btn-large">
                        <i class="fas fa-info-circle"></i>
                        <span>Saiba Mais</span>
                    </a>
                </div>

                <div class="cta-guarantee">
                    <p>
                        <i class="fas fa-shield-check"></i>
                        <strong>100% Gratuito</strong> • Sem spam • Cancele quando quiser
                    </p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'includes/footer.php'; ?>



    <!-- Back to Top Button -->
    <button class="back-to-top" id="backToTop" aria-label="Voltar ao topo">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-content">
            <div class="loading-logo">
                <i class="fas fa-robot"></i>
                <span class="gradient-text">RoboNews</span>
            </div>
            <div class="loading-spinner">
                <div class="spinner"></div>
            </div>
            <p class="loading-text">Carregando o futuro da tecnologia...</p>
        </div>
    </div>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- Initialize AOS -->
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            offset: 50
        });
    </script>

    <!-- Newsletter Form Handler -->
    <script>
        document.getElementById('newsletterForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const form = this;
            const submitBtn = form.querySelector('.btn-newsletter');
            const successDiv = document.getElementById('newsletterSuccess');

            // Show loading state
            submitBtn.classList.add('loading');

            try {
                // Simulate API call (replace with actual implementation)
                await new Promise(resolve => setTimeout(resolve, 2000));

                // Hide form and show success message
                form.style.display = 'none';
                successDiv.style.display = 'block';

                // Track conversion (Google Analytics, Facebook Pixel, etc.)
                if (typeof gtag !== 'undefined') {
                    gtag('event', 'newsletter_signup', {
                        event_category: 'engagement',
                        event_label: 'homepage_newsletter'
                    });
                }

            } catch (error) {
                alert('Erro ao processar inscrição. Tente novamente.');
            } finally {
                submitBtn.classList.remove('loading');
            }
        });
    </script>

    <!-- Performance and SEO Scripts -->
    <script>
        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Preload critical resources
        const preloadLink = document.createElement('link');
        preloadLink.rel = 'preload';
        preloadLink.href = 'assets/css/index.css';
        preloadLink.as = 'style';
        document.head.appendChild(preloadLink);
    </script>

    <!-- Schema.org Structured Data for Articles -->
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "ItemList",
            "itemListElement": [{
                    "@type": "Article",
                    "position": 1,
                    "name": "Revolução na IA: Novo Modelo Supera GPT-4",
                    "headline": "Revolução na IA: Novo Modelo Supera GPT-4 e Consegue Raciocínio Científico Avançado",
                    "author": {
                        "@type": "Person",
                        "name": "Dr. Carlos Silva"
                    },
                    "datePublished": "2025-10-27",
                    "image": "https://images.unsplash.com/photo-1485827404703-89b55fcc595e",
                    "publisher": {
                        "@type": "Organization",
                        "name": "RoboNews",
                        "logo": {
                            "@type": "ImageObject",
                            "url": "assets/images/logo.png"
                        }
                    }
                },
                {
                    "@type": "Article",
                    "position": 2,
                    "name": "Robô Cirurgião Realiza Primeira Operação Totalmente Autônoma no Brasil",
                    "author": {
                        "@type": "Person",
                        "name": "Equipe RoboNews"
                    },
                    "datePublished": "2025-10-26",
                    "image": "https://images.unsplash.com/photo-1559757148-5c350d0d3c56"
                }
            ]
        }
    </script>

</body>

</html>