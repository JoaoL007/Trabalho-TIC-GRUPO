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
    <title>Notícias - RoboNews</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Estilos básicos para funcionalidade - sua equipe de estilo pode substituir */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: #1e293b;
            background: #ffffff;
        }
        
        .container {
            max-width: 1280px;
            margin: 0 auto;
            padding: 0 2rem;
        }
        
        .news-grid {
            display: grid;
            gap: 2rem;
        }
        
        .news-card {
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .news-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        
        .news-content {
            padding: 1.5rem;
        }
        
        .news-category {
            color: #2563eb;
            font-size: 0.85rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        
        .news-meta {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
            color: #64748b;
            font-size: 0.85rem;
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
                        <li><a href="noticias.php" class="active">Notícias</a></li>
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

    <!-- Conteúdo Principal -->
    <main class="container" style="padding: 2rem 0;">
        <h1 style="font-size: 2.5rem; margin-bottom: 2rem; color: #0f172a;">📰 Todas as Notícias</h1>

        <!-- Seção Principal: 1 notícia grande + 3 laterais -->
        <section style="margin-bottom: 4rem;">
            <div style="display: grid; grid-template-columns: 2fr 1fr; gap: 2rem;">
                <!-- Notícia Principal -->
                <?php if ($noticia_principal): ?>
                <article class="news-card">
                    <img src="<?php echo $noticia_principal['imagem_url']; ?>" alt="<?php echo $noticia_principal['titulo']; ?>" class="news-image">
                    <div class="news-content">
                        <span class="news-category"><?php echo $noticia_principal['categoria']; ?></span>
                        <h2 style="font-size: 1.8rem; margin: 1rem 0;"><?php echo $noticia_principal['titulo']; ?></h2>
                        <p style="color: #334155; margin-bottom: 1rem;"><?php echo $noticia_principal['resumo']; ?></p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia_principal['publicado_em']); ?></span>
                            <span><i class="fas fa-eye"></i> <?php echo $noticia_principal['visualizacoes']; ?></span>
                        </div>
                        <a href="artigo.php?id=<?php echo $noticia_principal['id']; ?>" style="color: #2563eb; text-decoration: none; font-weight: 600; display: inline-block; margin-top: 1rem;">
                            Ler notícia completa →
                        </a>
                    </div>
                </article>
                <?php endif; ?>

                <!-- Notícias Laterais -->
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <?php foreach ($noticias_laterais as $noticia): ?>
                    <article class="news-card">
                        <img src="<?php echo $noticia['imagem_url']; ?>" alt="<?php echo $noticia['titulo']; ?>" class="news-image" style="height: 120px;">
                        <div class="news-content">
                            <span class="news-category" style="font-size: 0.75rem;"><?php echo $noticia['categoria']; ?></span>
                            <h3 style="font-size: 1rem; margin: 0.5rem 0;"><?php echo $noticia['titulo']; ?></h3>
                            <div class="news-meta" style="font-size: 0.75rem;">
                                <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia['publicado_em']); ?></span>
                            </div>
                            <a href="artigo.php?id=<?php echo $noticia['id']; ?>" style="color: #2563eb; text-decoration: none; font-size: 0.85rem; font-weight: 600;">
                                Ler mais →
                            </a>
                        </div>
                    </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <!-- Seção de Notícias em Destaque -->
        <section>
            <h2 style="font-size: 2rem; margin-bottom: 2rem; color: #0f172a;">🌟 Notícias em Destaque</h2>
            <div class="news-grid" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
                <?php foreach ($noticias_destaque as $noticia): ?>
                <article class="news-card">
                    <img src="<?php echo $noticia['imagem_url']; ?>" alt="<?php echo $noticia['titulo']; ?>" class="news-image">
                    <div class="news-content">
                        <span class="news-category"><?php echo $noticia['categoria']; ?></span>
                        <h3 style="font-size: 1.25rem; margin: 0.75rem 0;"><?php echo $noticia['titulo']; ?></h3>
                        <p style="color: #334155; margin-bottom: 1rem; font-size: 0.9rem;"><?php echo $noticia['resumo']; ?></p>
                        <div class="news-meta">
                            <span><i class="fas fa-clock"></i> <?php echo formatarData($noticia['publicado_em']); ?></span>
                            <span><i class="fas fa-eye"></i> <?php echo $noticia['visualizacoes']; ?></span>
                        </div>
                        <a href="artigo.php?id=<?php echo $noticia['id']; ?>" style="color: #2563eb; text-decoration: none; font-weight: 600;">
                            Ler mais →
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer style="background: #1e293b; color: white; padding: 3rem 0; margin-top: 4rem;">
        <div class="container">
            <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
                <div>
                    <h3 style="color: #3b82f6; margin-bottom: 1rem;">RoboNews</h3>
                    <p style="color: #94a3b8;">Sua fonte confiável de notícias sobre robótica, IA e tecnologia.</p>
                </div>
                <div>
                    <h4 style="margin-bottom: 1rem;">Links Rápidos</h4>
                    <ul style="list-style: none; color: #94a3b8;">
                        <li><a href="../index.php" style="color: #94a3b8; text-decoration: none;">Início</a></li>
                        <li><a href="noticias.php" style="color: #94a3b8; text-decoration: none;">Notícias</a></li>
                        <li><a href="categorias.php" style="color: #94a3b8; text-decoration: none;">Categorias</a></li>
                        <li><a href="sobre.php" style="color: #94a3b8; text-decoration: none;">Sobre</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom: 1rem;">Categorias</h4>
                    <ul style="list-style: none; color: #94a3b8;">
                        <li><a href="categoria.php?cat=ia" style="color: #94a3b8; text-decoration: none;">IA</a></li>
                        <li><a href="categoria.php?cat=robotica" style="color: #94a3b8; text-decoration: none;">Robótica</a></li>
                        <li><a href="categoria.php?cat=iot" style="color: #94a3b8; text-decoration: none;">IoT</a></li>
                        <li><a href="categoria.php?cat=industria" style="color: #94a3b8; text-decoration: none;">Indústria 4.0</a></li>
                    </ul>
                </div>
                <div>
                    <h4 style="margin-bottom: 1rem;">Contactos</h4>
                    <p style="color: #94a3b8;">email@robonews.com</p>
                    <p style="color: #94a3b8;">+351 123 456 789</p>
                </div>
            </div>
            <div style="border-top: 1px solid #334155; margin-top: 2rem; padding-top: 2rem; text-align: center; color: #94a3b8;">
                <p>&copy; 2024 RoboNews. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Funcionalidade básica de pesquisa
        document.querySelector('.search-box input').addEventListener('keypress', function(e) {
            if (e.key === 'Enter' && this.value.trim()) {
                window.location.href = 'noticias.php?search=' + encodeURIComponent(this.value);
            }
        });
    </script>
</body>
</html>