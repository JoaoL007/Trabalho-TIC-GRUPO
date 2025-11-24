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
            max-width: 700px;
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

        /* About Section */
        .about-section {
            padding: 5rem 2rem;
            background: white;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1rem;
            color: var(--dark);
            font-family: 'Poppins', sans-serif;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            color: var(--gray);
            margin-bottom: 4rem;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 4rem;
            align-items: center;
            margin-bottom: 5rem;
        }

        .about-image {
            width: 100%;
            height: 400px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 8rem;
            box-shadow: 0 20px 60px rgba(37, 99, 235, 0.2);
        }

        .about-text h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .about-text p {
            font-size: 1.1rem;
            line-height: 1.8;
            color: #475569;
            margin-bottom: 1.5rem;
        }

        .about-text ul {
            list-style: none;
            padding: 0;
            margin: 2rem 0;
        }

        .about-text ul li {
            padding: 0.75rem 0;
            font-size: 1.05rem;
            color: #475569;
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .about-text ul li i {
            color: var(--primary-color);
            font-size: 1.2rem;
        }

        /* Team Section */
        .team-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2.5rem;
            margin-top: 3rem;
        }

        .team-card {
            background: white;
            padding: 2.5rem 2rem;
            border-radius: 20px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 50px rgba(37, 99, 235, 0.2);
            border-color: var(--primary-color);
        }

        .team-avatar {
            width: 120px;
            height: 120px;
            margin: 0 auto 1.5rem;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3.5rem;
            color: white;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
        }

        .team-card h3 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .team-role {
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .team-description {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .team-skills {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            justify-content: center;
            margin-top: 1rem;
        }

        .skill-badge {
            background: #dbeafe;
            color: var(--primary-color);
            padding: 0.4rem 0.9rem;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
        }

        /* Technologies Section */
        .tech-section {
            padding: 5rem 2rem;
            background: white;
        }

        .tech-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .tech-card {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            padding: 2.5rem;
            border-radius: 16px;
            text-align: center;
            border: 2px solid var(--border);
            transition: all 0.3s ease;
        }

        .tech-card:hover {
            border-color: var(--primary-color);
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(37, 99, 235, 0.15);
        }

        .tech-icon {
            font-size: 4rem;
            margin-bottom: 1.5rem;
        }

        .tech-card h3 {
            font-size: 1.3rem;
            font-weight: 700;
            margin-bottom: 0.75rem;
            color: var(--dark);
        }

        .tech-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
        }

        /* Features Section */
        .features-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
            color: white;
        }

        .features-section .section-title,
        .features-section .section-subtitle {
            color: white;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            padding: 2.5rem;
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .feature-card:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-5px);
            border-color: rgba(59, 130, 246, 0.5);
        }

        .feature-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.4);
        }

        .feature-card h3 {
            font-size: 1.4rem;
            font-weight: 700;
            margin-bottom: 1rem;
        }

        .feature-card p {
            color: rgba(255, 255, 255, 0.8);
            line-height: 1.7;
        }

        /* Stats Section */
        .stats-section {
            padding: 5rem 2rem;
            background: white;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 3rem;
            margin-top: 3rem;
        }

        .stat-card {
            text-align: center;
            padding: 2rem;
        }

        .stat-number {
            font-size: 4rem;
            font-weight: 900;
            color: var(--primary-color);
            font-family: 'Poppins', sans-serif;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 1.1rem;
            color: var(--gray);
            font-weight: 600;
        }

        /* CTA Section */
        .cta-section {
            padding: 6rem 2rem;
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            text-align: center;
            color: white;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 1.5rem;
            font-family: 'Poppins', sans-serif;
        }

        .cta-section p {
            font-size: 1.2rem;
            margin-bottom: 2.5rem;
            opacity: 0.95;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding: 1rem 2.5rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: all 0.3s ease;
        }

        .btn-primary {
            background: white;
            color: var(--primary-color);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
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

            .about-content {
                grid-template-columns: 1fr;
                gap: 2rem;
            }

            .about-image {
                height: 300px;
                font-size: 5rem;
            }

            .section-title {
                font-size: 2rem;
            }

            .team-grid,
            .tech-grid,
            .features-grid {
                grid-template-columns: 1fr;
            }

            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
                gap: 2rem;
            }

            .stat-number {
                font-size: 3rem;
            }

            .cta-section h2 {
                font-size: 2rem;
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