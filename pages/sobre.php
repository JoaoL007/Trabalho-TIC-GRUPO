<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre o Projeto - RoboNews</title>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/pages.css">
    
    <link rel="stylesheet" href="../assets/css/footer.css">
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
                <li><a href="noticias.php">Notícias</a></li>
                <li><a href="categorias.php">Categorias</a></li>
                <li><a href="sobre.php" class="active">Sobre</a></li>
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
            <h1><i class="fas fa-info-circle"></i> Sobre o RoboNews</h1>
            <p>Conheça nossa missão de trazer as melhores notícias de tecnologia</p>
            <div class="breadcrumb">
                <a href="../index.php"><i class="fas fa-home"></i> Início</a>
                <span>/</span>
                <span>Sobre</span>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <div class="about-content">
                <div class="about-image">
                    🤖
                </div>
                <div class="about-text">
                    <h2>Bem-vindo ao RoboNews</h2>
                    <p>
                        O <strong>RoboNews</strong> é um portal de notícias especializado em robótica, inteligência
                        artificial e tecnologias emergentes. Desenvolvido como projeto académico de TIC, nosso objetivo
                        é fornecer informação de qualidade sobre o futuro da tecnologia.
                    </p>
                    <p>
                        Combinamos design moderno, funcionalidade responsiva e conteúdo relevante para criar uma
                        experiência única de leitura. Acompanhamos as últimas tendências e inovações que estão
                        moldando o mundo da robótica e automação.
                    </p>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Notícias atualizadas diariamente</li>
                        <li><i class="fas fa-check-circle"></i> Conteúdo especializado e confiável</li>
                        <li><i class="fas fa-check-circle"></i> Interface moderna e intuitiva</li>
                        <li><i class="fas fa-check-circle"></i> 100% responsivo para todos os dispositivos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">👥 Nossa Equipa</h2>
            <p class="section-subtitle">
                Conheça os estudantes por trás do projeto RoboNews
            </p>

            <div class="team-grid">
                <div class="team-card">
                    <div class="team-avatar">👨‍💼</div>
                    <h3>João</h3>
                    <div class="team-role">Coordenador</div>
                    <p class="team-description">
                        Responsável pela coordenação geral do projeto, desenvolvimento da página inicial e integração
                        de todos os componentes.
                    </p>
                    <div class="team-skills">
                        <span class="skill-badge">Gestão</span>
                        <span class="skill-badge">PHP</span>
                        <span class="skill-badge">Integração</span>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-avatar">👨‍💻</div>
                    <h3>Eduardo</h3>
                    <div class="team-role">Desenvolvedor Front-end</div>
                    <p class="team-description">
                        Especialista em navegação e responsividade, responsável pelo desenvolvimento do menu móvel e
                        sistema de navegação.
                    </p>
                    <div class="team-skills">
                        <span class="skill-badge">HTML/CSS</span>
                        <span class="skill-badge">JavaScript</span>
                        <span class="skill-badge">Responsive</span>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-avatar">📝</div>
                    <h3>Carlos</h3>
                    <div class="team-role">Gestor de Conteúdo</div>
                    <p class="team-description">
                        Curador de conteúdo e desenvolvedor do sistema de notícias, responsável pelas páginas de
                        artigos e busca.
                    </p>
                    <div class="team-skills">
                        <span class="skill-badge">Conteúdo</span>
                        <span class="skill-badge">PHP</span>
                        <span class="skill-badge">SEO</span>
                    </div>
                </div>

                <div class="team-card">
                    <div class="team-avatar">🎨</div>
                    <h3>Santiago</h3>
                    <div class="team-role">Designer & UX</div>
                    <p class="team-description">
                        Designer principal do projeto, responsável por animações, interações visuais e experiência
                        do utilizador.
                    </p>
                    <div class="team-skills">
                        <span class="skill-badge">UI/UX</span>
                        <span class="skill-badge">CSS</span>
                        <span class="skill-badge">Animações</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="tech-section">
        <div class="container">
            <h2 class="section-title">💻 Tecnologias Utilizadas</h2>
            <p class="section-subtitle">
                Ferramentas e tecnologias que tornam o RoboNews possível
            </p>

            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-icon">🌐</div>
                    <h3>HTML5 & CSS3</h3>
                    <p>Estrutura semântica moderna e estilização responsiva para uma experiência impecável.</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">⚡</div>
                    <h3>JavaScript</h3>
                    <p>Interatividade e funcionalidades dinâmicas para uma navegação fluida e envolvente.</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">🐘</div>
                    <h3>PHP</h3>
                    <p>Lógica do servidor e processamento backend para gestão de conteúdo dinâmico.</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">🗄️</div>
                    <h3>MySQL</h3>
                    <p>Banco de dados robusto para armazenamento seguro de notícias e informações.</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">🚀</div>
                    <h3>XAMPP</h3>
                    <p>Ambiente de desenvolvimento local completo para testes e desenvolvimento ágil.</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">📦</div>
                    <h3>Git & GitHub</h3>
                    <p>Controle de versão e colaboração eficiente entre toda a equipa de desenvolvimento.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <h2 class="section-title">✨ Funcionalidades Principais</h2>
            <p class="section-subtitle">
                Recursos que fazem do RoboNews uma experiência única
            </p>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Notícias Atualizadas</h3>
                    <p>
                        Cobertura completa e atualizada das últimas novidades em robótica, IA e tecnologias emergentes
                        do mundo inteiro.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <h3>Sistema de Busca</h3>
                    <p>
                        Encontre rapidamente as notícias que procura com nosso sistema de busca inteligente e filtros
                        por categoria.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Design Responsivo</h3>
                    <p>
                        Interface adaptativa que funciona perfeitamente em qualquer dispositivo - desktop, tablet ou
                        smartphone.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tag"></i>
                    </div>
                    <h3>Categorias Organizadas</h3>
                    <p>
                        Notícias organizadas por categorias temáticas para facilitar a navegação e descoberta de
                        conteúdo relevante.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-bolt"></i>
                    </div>
                    <h3>Performance Otimizada</h3>
                    <p>
                        Carregamento rápido e navegação fluida com código otimizado e boas práticas de desenvolvimento.
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-palette"></i>
                    </div>
                    <h3>Interface Moderna</h3>
                    <p>
                        Design contemporâneo e intuitivo com foco na experiência do utilizador e facilidade de
                        navegação.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title">📊 RoboNews em Números</h2>
            <p class="section-subtitle">
                Dados que refletem nosso compromisso com qualidade e inovação
            </p>

            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">1250+</div>
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

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Pronto para Explorar o Futuro?</h2>
            <p>Junte-se a milhares de leitores e fique por dentro das últimas inovações tecnológicas</p>
            <a href="noticias.php" class="btn btn-primary">
                <i class="fas fa-newspaper"></i> Explorar Notícias
            </a>
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

        // Search Functionality
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter' && searchInput.value.trim()) {
                    window.location.href = `noticias.php?search=${encodeURIComponent(searchInput.value)}`;
                }
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

        // Apply animation to cards
        document.querySelectorAll('.team-card, .tech-card, .feature-card, .stat-card').forEach(card => {
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