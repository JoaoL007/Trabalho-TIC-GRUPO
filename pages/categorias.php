<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorias - RoboNews</title>
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

        /* Categories Section */
        .categories-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #f8fafc 0%, #e0f2fe 100%);
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
        }

        .section-intro {
            text-align: center;
            margin-bottom: 4rem;
        }

        .section-intro h2 {
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1rem;
        }

        .section-intro p {
            font-size: 1.1rem;
            color: var(--gray);
            max-width: 600px;
            margin: 0 auto;
        }

        .categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2.5rem;
        }

        .category-card {
            background: white;
            border-radius: 20px;
            padding: 3rem 2.5rem;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            border: 3px solid transparent;
            cursor: pointer;
            text-decoration: none;
            display: block;
            position: relative;
            overflow: hidden;
        }

        .category-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(37, 99, 235, 0.05) 0%, rgba(59, 130, 246, 0.05) 100%);
            opacity: 0;
            transition: opacity 0.4s;
        }

        .category-card:hover::before {
            opacity: 1;
        }

        .category-card:hover {
            transform: translateY(-12px) scale(1.02);
            box-shadow: 0 20px 60px rgba(37, 99, 235, 0.25);
            border-color: var(--primary-color);
        }

        .category-icon {
            font-size: 5rem;
            margin-bottom: 1.5rem;
            filter: drop-shadow(0 4px 8px rgba(0, 0, 0, 0.1));
            transition: transform 0.4s;
            position: relative;
            z-index: 1;
        }

        .category-card:hover .category-icon {
            transform: scale(1.1) rotate(-5deg);
        }

        .category-card h3 {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }

        .category-card p {
            color: var(--gray);
            font-size: 1rem;
            line-height: 1.6;
            margin-bottom: 1.5rem;
            position: relative;
            z-index: 1;
        }

        .category-stats {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 2px solid var(--border);
            position: relative;
            z-index: 1;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .stat-number {
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--primary-color);
            font-family: 'Poppins', sans-serif;
        }

        .stat-label {
            font-size: 0.85rem;
            color: var(--gray);
            margin-top: 0.25rem;
            font-weight: 600;
        }

        .view-category-btn {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            margin-top: 1rem;
            color: var(--primary-color);
            font-weight: 600;
            font-size: 1rem;
            transition: gap 0.3s;
            position: relative;
            z-index: 1;
        }

        .category-card:hover .view-category-btn {
            gap: 1rem;
        }

        /* Popular Topics */
        .popular-section {
            padding: 5rem 2rem;
            background: white;
        }

        .popular-section h2 {
            text-align: center;
            font-size: 2rem;
            font-weight: 700;
            color: var(--dark);
            margin-bottom: 3rem;
        }

        .topics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1.5rem;
        }

        .topic-tag {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            padding: 1.5rem;
            border-radius: 12px;
            text-align: center;
            text-decoration: none;
            color: var(--dark);
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid transparent;
        }

        .topic-tag:hover {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
        }

        /* CTA Section */
        .cta-section {
            padding: 5rem 2rem;
            background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
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

            .categories-grid {
                grid-template-columns: 1fr;
            }

            .topics-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .category-stats {
                gap: 1rem;
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
                <li><a href="categorias.php" class="active">Categorias</a></li>
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
            <h1><i class="fas fa-th-large"></i> Explorar por Categorias</h1>
            <p>Descubra notícias organizadas por temas tecnológicos</p>
            <div class="breadcrumb">
                <a href="../index.php"><i class="fas fa-home"></i> Início</a>
                <span>/</span>
                <span>Categorias</span>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories-section">
        <div class="container">
            <div class="section-intro">
                <h2>🔍 Escolha sua Área de Interesse</h2>
                <p>Navegue pelas principais categorias de tecnologia e encontre exatamente o que procura</p>
            </div>

            <div class="categories-grid">
                <!-- IA Category -->
                <a href="noticias.php?categoria=ia" class="category-card">
                    <div class="category-icon">🧠</div>
                    <h3>Inteligência Artificial</h3>
                    <p>Machine learning, deep learning, redes neurais e modelos de linguagem avançados</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">324</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">12K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Robotics Category -->
                <a href="noticias.php?categoria=robotica" class="category-card">
                    <div class="category-icon">🤖</div>
                    <h3>Robótica</h3>
                    <p>Robôs autônomos, colaborativos, drones e sistemas de automação inteligente</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">189</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">8.5K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Health Category -->
                <a href="noticias.php?categoria=saude" class="category-card">
                    <div class="category-icon">🏥</div>
                    <h3>Saúde & Medicina</h3>
                    <p>Robôs cirúrgicos, diagnóstico por IA, telemedicina e inovações médicas</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">156</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">9.2K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Industry Category -->
                <a href="noticias.php?categoria=industria" class="category-card">
                    <div class="category-icon">🏭</div>
                    <h3>Indústria 4.0</h3>
                    <p>Manufatura inteligente, IoT industrial, automação e transformação digital</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">267</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">11K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Space Category -->
                <a href="noticias.php?categoria=espaco" class="category-card">
                    <div class="category-icon">🚀</div>
                    <h3>Espaço & Aeronáutica</h3>
                    <p>Exploração espacial, satélites, rovers e tecnologia aeroespacial avançada</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">143</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">7.8K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- IoT Category -->
                <a href="noticias.php?categoria=iot" class="category-card">
                    <div class="category-icon">📡</div>
                    <h3>IoT & Conectividade</h3>
                    <p>Internet das coisas, smart cities, dispositivos conectados e 5G</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">198</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">6.9K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Automotive Category -->
                <a href="noticias.php?categoria=automotivo" class="category-card">
                    <div class="category-icon">🚗</div>
                    <h3>Automóveis Autônomos</h3>
                    <p>Veículos autônomos, carros elétricos, mobilidade inteligente e transporte</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">175</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">10K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Consumer Tech Category -->
                <a href="noticias.php?categoria=consumidor" class="category-card">
                    <div class="category-icon">🏠</div>
                    <h3>Tecnologia do Consumidor</h3>
                    <p>Gadgets, assistentes virtuais, smart home e dispositivos pessoais</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">221</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">13K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>

                <!-- Research Category -->
                <a href="noticias.php?categoria=pesquisa" class="category-card">
                    <div class="category-icon">🔬</div>
                    <h3>Pesquisa & Desenvolvimento</h3>
                    <p>Descobertas científicas, laboratórios, inovação e estudos tecnológicos</p>
                    <div class="category-stats">
                        <div class="stat-item">
                            <div class="stat-number">134</div>
                            <div class="stat-label">Artigos</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-number">5.4K</div>
                            <div class="stat-label">Leituras</div>
                        </div>
                    </div>
                    <span class="view-category-btn">
                        Ver notícias <i class="fas fa-arrow-right"></i>
                    </span>
                </a>
            </div>
        </div>
    </section>

    <!-- Popular Topics Section -->
    <section class="popular-section">
        <div class="container">
            <h2>🔥 Tópicos em Alta</h2>
            <div class="topics-grid">
                <a href="noticias.php?topico=chatgpt" class="topic-tag">ChatGPT</a>
                <a href="noticias.php?topico=tesla" class="topic-tag">Tesla</a>
                <a href="noticias.php?topico=boston-dynamics" class="topic-tag">Boston Dynamics</a>
                <a href="noticias.php?topico=spacex" class="topic-tag">SpaceX</a>
                <a href="noticias.php?topico=neuralink" class="topic-tag">Neuralink</a>
                <a href="noticias.php?topico=quantum" class="topic-tag">Computação Quântica</a>
                <a href="noticias.php?topico=5g" class="topic-tag">5G</a>
                <a href="noticias.php?topico=blockchain" class="topic-tag">Blockchain</a>
                <a href="noticias.php?topico=metaverso" class="topic-tag">Metaverso</a>
                <a href="noticias.php?topico=vr-ar" class="topic-tag">VR & AR</a>
                <a href="noticias.php?topico=edge-computing" class="topic-tag">Edge Computing</a>
                <a href="noticias.php?topico=cybersecurity" class="topic-tag">Cibersegurança</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <h2>Não Encontrou o Que Procura?</h2>
            <p>Use nossa busca avançada para encontrar notícias específicas</p>
            <a href="noticias.php" class="btn btn-primary">
                <i class="fas fa-search"></i> Explorar Todas as Notícias
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
        document.querySelectorAll('.category-card, .topic-tag').forEach(card => {
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