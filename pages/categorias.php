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