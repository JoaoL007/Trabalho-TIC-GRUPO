<?php
// Obter o ID da notícia da URL
$noticia_id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Carregar notícias do JSON
$noticias_json = file_get_contents('../assets/database/noticias.json');
$dados = json_decode($noticias_json, true);
$noticias = $dados['noticias'];

// Encontrar a notícia pelo ID
$noticia_atual = null;
foreach ($noticias as $noticia) {
    if ($noticia['id'] == $noticia_id && $noticia['publicado']) {
        $noticia_atual = $noticia;
        break;
    }
}

// Se não encontrar a notícia, redirecionar para a página de notícias
if (!$noticia_atual) {
    header('Location: noticias.php');
    exit();
}

// Função para formatar data
function formatarData($data_string) {
    $data = new DateTime($data_string);
    return $data->format('d/m/Y \à\s H:i');
}

// Incrementar visualizações (simulação)
// Na prática, você salvaria isso no JSON ou banco de dados
$noticia_atual['visualizacoes']++;
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $noticia_atual['titulo']; ?> - RoboNews</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
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
            background: #ffffff;
        }

        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        /* Top Bar */
        .top-bar {
            background: var(--dark);
            color: white;
            padding: 0.5rem 0;
            font-size: 0.875rem;
        }

        .top-bar .container {
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

        .social-icon {
            width: 28px;
            height: 28px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            background: rgba(255, 255, 255, 0.1);
            transition: all 0.3s;
            color: white;
            text-decoration: none;
        }

        .social-icon:hover {
            background: var(--primary-color);
        }

        /* Navigation */
        nav {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            border-bottom: 1px solid var(--border);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 0;
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

        .nav-right {
            display: flex;
            align-items: center;
            gap: 1rem;
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

        /* Article Content */
        .article-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 3rem 0;
        }

        .article-header {
            margin-bottom: 2rem;
        }

        .article-category {
            display: inline-block;
            color: var(--primary-color);
            font-size: 0.9rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 1rem;
        }

        .article-title {
            font-family: 'Poppins', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 1.5rem;
            color: var(--dark);
        }

        .article-meta {
            display: flex;
            gap: 2rem;
            color: var(--gray);
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }

        .article-meta span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .article-meta i {
            color: var(--primary-color);
        }

        .article-image {
            width: 100%;
            height: 400px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 2rem;
        }

        .article-content {
            font-size: 1.1rem;
            line-height: 1.8;
            color: var(--dark);
        }

        .article-content p {
            margin-bottom: 1.5rem;
        }

        .article-content h2, .article-content h3 {
            font-family: 'Poppins', sans-serif;
            margin: 2rem 0 1rem 0;
            color: var(--dark);
        }

        .article-content h2 {
            font-size: 1.8rem;
        }

        .article-content h3 {
            font-size: 1.5rem;
        }

        .article-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 3rem;
            padding-top: 2rem;
            border-top: 1px solid var(--border);
        }

        .back-button {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .back-button:hover {
            gap: 0.75rem;
        }

        .share-buttons {
            display: flex;
            gap: 1rem;
        }

        .share-button {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background: var(--light);
            color: var(--dark);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .share-button:hover {
            background: var(--primary-color);
            color: white;
            transform: translateY(-2px);
        }

        /* Footer */
        footer {
            background: var(--dark);
            color: white;
            padding: 3rem 0;
            margin-top: 4rem;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 2rem;
        }

        .footer-section h3 {
            color: var(--primary-color);
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }

        .footer-section h4 {
            margin-bottom: 1rem;
            font-size: 1.1rem;
        }

        .footer-section p {
            color: #94a3b8;
            line-height: 1.6;
        }

        .footer-links {
            list-style: none;
            color: #94a3b8;
        }

        .footer-links li {
            margin-bottom: 0.5rem;
        }

        .footer-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--primary-color);
        }

        .footer-bottom {
            border-top: 1px solid #334155;
            margin-top: 2rem;
            padding-top: 2rem;
            text-align: center;
            color: #94a3b8;
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
                background: none;
                border: none;
                font-size: 1.5rem;
                color: var(--dark);
                cursor: pointer;
                padding: 0.5rem;
            }

            .search-box input {
                width: 150px;
            }

            .article-title {
                font-size: 2rem;
            }

            .article-image {
                height: 300px;
            }

            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }

            .article-container {
                padding: 2rem 0;
            }

            .article-meta {
                flex-direction: column;
                gap: 1rem;
            }

            .article-actions {
                flex-direction: column;
                gap: 1.5rem;
                align-items: flex-start;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 1rem;
            }

            .top-bar .container {
                flex-direction: column;
                gap: 0.5rem;
            }

            .top-bar-left {
                flex-direction: column;
                gap: 0.5rem;
            }

            .article-title {
                font-size: 1.75rem;
            }

            .article-image {
                height: 250px;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-left">
                    <span><i class="fas fa-clock"></i>
                        <?php echo date('d/m/Y'); ?>
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

        <nav>
            <div class="container">
                <div class="nav-container">
                    <a href="../index.php" class="logo">
                        <img src="../assets/images/logo-simple.svg" alt="RoboNews Logo">
                        <span>RoboNews</span>
                    </a>
                    <ul class="nav-links">
                        <li><a href="../index.php">Início</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                    <div class="nav-right">
                        <div class="search-box">
                            <i class="fas fa-search"></i>
                            <input type="text" placeholder="Pesquisar notícias...">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo do Artigo -->
    <main>
        <div class="container">
            <div class="article-container">
                <header class="article-header">
                    <span class="article-category"><?php echo $noticia_atual['categoria']; ?></span>
                    <h1 class="article-title"><?php echo $noticia_atual['titulo']; ?></h1>
                    <div class="article-meta">
                        <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia_atual['publicado_em']); ?></span>
                        <span><i class="fas fa-eye"></i> <?php echo $noticia_atual['visualizacoes']; ?> visualizações</span>
                        <span><i class="fas fa-user"></i> Por Redação RoboNews</span>
                    </div>
                </header>

                <?php if ($noticia_atual['imagem_url']): ?>
                <img src="<?php echo $noticia_atual['imagem_url']; ?>" alt="<?php echo $noticia_atual['titulo']; ?>" class="article-image">
                <?php endif; ?>

                <div class="article-content">
                    <?php
                    // Converter o conteúdo em parágrafos
                    $paragrafos = explode("\n", $noticia_atual['conteudo']);
                    foreach ($paragrafos as $paragrafo) {
                        if (trim($paragrafo) !== '') {
                            echo '<p>' . $paragrafo . '</p>';
                        }
                    }
                    ?>
                </div>

                <div class="article-actions">
                    <a href="noticias.php" class="back-button">
                        <i class="fas fa-arrow-left"></i> Voltar para Notícias
                    </a>
                    <div class="share-buttons">
                        <a href="#" class="share-button" title="Partilhar no Facebook">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="share-button" title="Partilhar no Twitter">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="share-button" title="Partilhar no LinkedIn">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>RoboNews</h3>
                    <p>Sua fonte confiável de notícias sobre robótica, IA e tecnologia.</p>
                </div>
                <div class="footer-section">
                    <h4>Links Rápidos</h4>
                    <ul class="footer-links">
                        <li><a href="../index.php">Início</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="categorias.php">Categorias</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Categorias</h4>
                    <ul class="footer-links">
                        <li><a href="categoria.php?cat=ia">Inteligência Artificial</a></li>
                        <li><a href="categoria.php?cat=robotica">Robótica</a></li>
                        <li><a href="categoria.php?cat=iot">IoT & Conectividade</a></li>
                        <li><a href="categoria.php?cat=industria">Indústria 4.0</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h4>Contactos</h4>
                    <p>email@robonews.com</p>
                    <p>+351 123 456 789</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 RoboNews. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Funcionalidade de pesquisa
        document.querySelector('.search-box input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && this.value.trim()) {
                window.location.href = 'noticias.php?search=' + encodeURIComponent(this.value);
            }
        });

        // Menu mobile (se necessário)
        const mobileMenuToggle = document.createElement('button');
        mobileMenuToggle.className = 'mobile-menu-toggle';
        mobileMenuToggle.innerHTML = '<i class="fas fa-bars"></i>';
        mobileMenuToggle.setAttribute('aria-label', 'Menu');
        
        const navLinks = document.querySelector('.nav-links');
        const navRight = document.querySelector('.nav-right');
        
        if (window.innerWidth <= 968) {
            navRight.appendChild(mobileMenuToggle);
            
            mobileMenuToggle.addEventListener('click', () => {
                navLinks.classList.toggle('active');
                const icon = mobileMenuToggle.querySelector('i');
                icon.classList.toggle('fa-bars');
                icon.classList.toggle('fa-times');
            });
        }

        // Compartilhar nas redes sociais
        document.querySelectorAll('.share-button').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const url = window.location.href;
                const title = document.querySelector('.article-title').textContent;
                
                if (this.querySelector('.fa-facebook-f')) {
                    window.open(`https://www.facebook.com/sharer/sharer.php?u=${encodeURIComponent(url)}`, '_blank');
                } else if (this.querySelector('.fa-twitter')) {
                    window.open(`https://twitter.com/intent/tweet?text=${encodeURIComponent(title)}&url=${encodeURIComponent(url)}`, '_blank');
                } else if (this.querySelector('.fa-linkedin-in')) {
                    window.open(`https://www.linkedin.com/sharing/share-offsite/?url=${encodeURIComponent(url)}`, '_blank');
                }
            });
        });
    </script>
</body>
</html>