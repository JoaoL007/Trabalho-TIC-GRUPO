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
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/index.css">

    <link rel="stylesheet" href="assets/css/footer.css">
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <span><i class="fas fa-clock"></i>
                    <script>
                    document.write(new Date().toLocaleDateString('pt-BR', {
                        weekday: 'long',
                        year: 'numeric',
                        month: 'long',
                        day: 'numeric'
                    }));
                    </script>
                </span>
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
    <section class="featured-section" id="featured">
        <div class="container">
            <h2 class="section-title">📰 Notícias em Destaque</h2>

            <div class="news-grid" id="news-grid-container">
                <div class="loading loading-state">
                    <i class="fas fa-spinner fa-spin"></i> Carregando notícias...
                </div>
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

    // Função para carregar e exibir as notícias do JSON
    async function carregarNoticias() {
        try {
            // Carrega o arquivo JSON
            const response = await fetch('assets/database/noticias.json');
            const data = await response.json();

            // Filtra apenas notícias publicadas e ordena por data (mais recentes primeiro)
            const noticiasPublicadas = data.noticias
                .filter(noticia => noticia.publicado)
                .sort((a, b) => new Date(b.publicado_em) - new Date(a.publicado_em))
                .slice(0, 4); // MUDADO: Pega apenas 4 notícias

            // Container onde as notícias serão inseridas
            const newsGrid = document.querySelector('.news-grid');

            if (newsGrid && noticiasPublicadas.length > 0) {
                newsGrid.innerHTML = ''; // Limpa as notícias de exemplo

                // Cria os cards de notícias dinamicamente
                noticiasPublicadas.forEach((noticia, index) => {
                    const newsCard = criarCardNoticia(noticia, index);
                    newsGrid.appendChild(newsCard);
                });
            }
        } catch (error) {
            console.error('Erro ao carregar notícias:', error);
            const newsGrid = document.querySelector('.news-grid');
            if (newsGrid) {
                newsGrid.innerHTML =
                    '<div class="error-message">Erro ao carregar notícias. Verifique o arquivo noticias.json</div>';
            }
        }
    }

    // Função para criar o HTML de cada card de notícia - CORRIGIDA
    function criarCardNoticia(noticia, index) {
        const article = document.createElement('article');
        article.className = 'news-card';
        article.setAttribute('data-aos', 'fade-up');

        if (index === 1) {
            article.setAttribute('data-aos-delay', '100');
        } else if (index === 2) {
            article.setAttribute('data-aos-delay', '200');
        } else if (index === 3) {
            article.setAttribute('data-aos-delay', '300');
        }

        const badge = determinarBadge(noticia.publicado_em);
        const badgeHTML = badge ? `<span class="news-badge ${badge.class}">${badge.text}</span>` : '';
        const tempoDecorrido = formatarTempoDecorrido(noticia.publicado_em);

        // CORREÇÃO: Usar APENAS as imagens do JSON - SEM FALLBACK DE ÍCONE
        let imagemHTML = '';
        if (noticia.imagem_url) {
            imagemHTML = `
                    <div class="news-image-container">
                        <img src="${noticia.imagem_url}" alt="${noticia.titulo}" class="news-image">
                    </div>
                `;
        }

        article.innerHTML = `
                ${badgeHTML}
                ${imagemHTML}
                <span class="news-category">${noticia.categoria || 'Geral'}</span>
                <h3>${noticia.titulo}</h3>
                <p>${noticia.resumo || (noticia.conteudo ? noticia.conteudo.substring(0, 100) + '...' : '')}</p>
                <div class="news-meta">
                    <span><i class="fas fa-clock"></i> ${tempoDecorrido}</span>
                    <span><i class="fas fa-eye"></i> ${noticia.visualizacoes || 0}</span>
                </div>
                <a href="pages/artigo.php?id=${noticia.id}" class="read-more">Leia mais →</a>
            `;

        return article;
    }

    // Função para determinar o badge da notícia
    function determinarBadge(dataPublicacao) {
        const dataPub = new Date(dataPublicacao);
        const agora = new Date();
        const diferencaHoras = (agora - dataPub) / (1000 * 60 * 60);

        if (diferencaHoras < 24) {
            return {
                class: 'new',
                text: 'NOVO'
            };
        } else if (diferencaHoras < 72) {
            return {
                class: 'trending',
                text: 'EM ALTA'
            };
        } else if (Math.random() > 0.7) {
            return {
                class: 'breaking',
                text: 'EXCLUSIVO'
            };
        }

        return null;
    }

    // Função para formatar o tempo decorrido
    function formatarTempoDecorrido(dataString) {
        const data = new Date(dataString);
        const agora = new Date();
        const diferencaMs = agora - data;
        const diferencaHoras = Math.floor(diferencaMs / (1000 * 60 * 60));
        const diferencaDias = Math.floor(diferencaHoras / 24);

        if (diferencaHoras < 1) {
            return 'Agora mesmo';
        } else if (diferencaHoras < 24) {
            return `Há ${diferencaHoras} hora${diferencaHoras > 1 ? 's' : ''}`;
        } else if (diferencaDias < 7) {
            return `Há ${diferencaDias} dia${diferencaDias > 1 ? 's' : ''}`;
        } else {
            return data.toLocaleDateString('pt-BR');
        }
    }

    // Carrega as notícias quando a página carregar
    document.addEventListener('DOMContentLoaded', function() {
        carregarNoticias();

        // Navegação ativa
        const navLinks = document.querySelectorAll('.nav-links a');
        const currentPath = window.location.pathname;
        navLinks.forEach(link => {
            const linkHref = link.getAttribute('href');
            if (currentPath.includes(linkHref) || (linkHref === 'index.php' && currentPath.endsWith(
                    '/'))) {
                link.classList.add('active');
            }
        });
    });
    </script>

    <?php include 'includes/footer.php'; ?>

</body>

</html>