<?php
// Carregar notícias do JSON
$noticias_json = file_get_contents('../assets/database/noticias.json');
$dados = json_decode($noticias_json, true);
$noticias = $dados['noticias'];

// Filtrar apenas notícias publicadas
$noticias_publicadas = array_filter($noticias, function($noticia) {
    return $noticia['publicado'];
});

// Ordenar por data (mais recentes primeiro)
usort($noticias_publicadas, function($a, $b) {
    return strtotime($b['publicado_em']) - strtotime($a['publicado_em']);
});

// Separar notícias para diferentes seções
$noticia_principal = $noticias_publicadas[0] ?? null;
$noticias_laterais = array_slice($noticias_publicadas, 1, 3);
$noticias_destaque = array_slice($noticias_publicadas, 4, 8);

// Função para formatar data
function formatarData($data_string) {
    $data = new DateTime($data_string);
    $agora = new DateTime();
    $diferenca = $agora->diff($data);
    
    if ($diferenca->d == 0) {
        if ($diferenca->h == 0) {
            return 'Agora mesmo';
        }
        return 'Há ' . $diferenca->h . ' hora' . ($diferenca->h > 1 ? 's' : '');
    } elseif ($diferenca->d < 7) {
        return 'Há ' . $diferenca->d . ' dia' . ($diferenca->d > 1 ? 's' : '');
    } else {
        return $data->format('d/m/Y');
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notícias - RoboNews | Portal de Tecnologia e Robótica</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../assets/css/pages.css">
    <link rel="stylesheet" href="../assets/css/noticias.css">
    <link rel="stylesheet" href="../assets/css/footer.css">
</head>

<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="top-bar-container">
            <div class="top-bar-left">
                <span><i class="fas fa-clock"></i>
                    <?php date_default_timezone_set('Europe/Lisbon'); echo date('l, d F Y'); ?>
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

    <!-- Page Header -->
    <section class="page-header">
        <div class="page-header-content">
            <h1>📰 Todas as Notícias</h1>
            <p>Fique por dentro das últimas novidades em robótica, inteligência artificial e tecnologia</p>
            <div class="breadcrumb">
                <a href="../index.php"><i class="fas fa-home"></i> Início</a>
                <span>/</span>
                <span>Notícias</span>
            </div>
        </div>
    </section>

    <!-- Conteúdo Principal -->
    <main class="news-listing-section">
        <div class="container">

            <!-- Seção Principal: 1 notícia grande + 3 laterais -->
            <div class="news-main-grid">
                <!-- Notícia Principal -->
                <?php if ($noticia_principal): ?>
                <div class="news-featured-large">
                    <article class="news-card-large">
                        <img src="<?php echo $noticia_principal['imagem_url']; ?>" alt="<?php echo $noticia_principal['titulo']; ?>" class="news-image">
                        <div class="news-content">
                            <span class="news-category"><?php echo $noticia_principal['categoria']; ?></span>
                            <h2><?php echo $noticia_principal['titulo']; ?></h2>
                            <p><?php echo $noticia_principal['resumo']; ?></p>
                            <div class="news-meta">
                                <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia_principal['publicado_em']); ?></span>
                                <span><i class="fas fa-eye"></i> <?php echo $noticia_principal['visualizacoes']; ?></span>
                            </div>
                            <a href="artigo.php?id=<?php echo $noticia_principal['id']; ?>" class="read-more">
                                Ler notícia completa →
                            </a>
                        </div>
                    </article>
                </div>
                <?php endif; ?>

                <!-- Notícias Laterais -->
                <div class="news-sidebar">
                    <?php foreach ($noticias_laterais as $noticia): ?>
                    <article class="news-card-small">
                        <img src="<?php echo $noticia['imagem_url']; ?>" alt="<?php echo $noticia['titulo']; ?>" class="news-image">
                        <div class="news-content">
                            <span class="news-category"><?php echo $noticia['categoria']; ?></span>
                            <h3><?php echo $noticia['titulo']; ?></h3>
                            <div class="news-meta">
                                <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia['publicado_em']); ?></span>
                            </div>
                            <a href="artigo.php?id=<?php echo $noticia['id']; ?>" class="read-more">
                                Ler mais →
                            </a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Seção de Notícias em Destaque -->
            <section style="margin-top: 4rem;">
                <h2 class="section-title">🌟 Notícias em Destaque</h2>
                <div class="news-grid">
                    <?php foreach ($noticias_destaque as $noticia): ?>
                    <article class="news-card">
                        <img src="<?php echo $noticia['imagem_url']; ?>" alt="<?php echo $noticia['titulo']; ?>" class="news-image">
                        <div class="news-content">
                            <span class="news-category"><?php echo $noticia['categoria']; ?></span>
                            <h3><?php echo $noticia['titulo']; ?></h3>
                            <p><?php echo $noticia['resumo']; ?></p>
                            <div class="news-meta">
                                <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia['publicado_em']); ?></span>
                                <span><i class="fas fa-eye"></i> <?php echo $noticia['visualizacoes']; ?></span>
                            </div>
                            <a href="artigo.php?id=<?php echo $noticia['id']; ?>" class="read-more">
                                Ler mais →
                            </a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>
    </main>

    <!-- Footer -->
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

        // Funcionalidade de pesquisa
        const searchInput = document.getElementById('searchInput');
        if (searchInput) {
            searchInput.addEventListener('keypress', function(e) {
                if (e.key === 'Enter' && this.value.trim()) {
                    window.location.href = 'noticias.php?search=' + encodeURIComponent(this.value);
                }
            });
        }

        // Smooth scroll
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                }
            });
        });
    </script>
</body>
</html>