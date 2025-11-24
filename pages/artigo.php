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
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/pages.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
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