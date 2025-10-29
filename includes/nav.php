<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Menu</title>
</head>
<body>
    <header class="header">
        <div class="container">
            <nav class="main-nav">
                <ul class="nav-menu">
                    <li><a href="index.php" class="nav-link active">Início</a></li>
                    <li><a href="pages/noticias.php" class="nav-link">Notícias</a></li>
                    <li><a href="pages/sobre.php" class="nav-link">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            function setActiveLink(clickedLink) {
                navLinks.forEach(link => link.classList.remove('active'));
                clickedLink.classList.add('active');
            }

            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    const linkHref = this.getAttribute('href');
                    const currentPath = window.location.pathname;
                    
                    // Verifica se já está na mesma página - se sim, não faz nada
                    // Deixa o navegador seguir o link normalmente
                    if (currentPath.endsWith(linkHref) || 
                        (linkHref === 'index.php' && (currentPath.endsWith('/') || currentPath.endsWith('/index.php')))) {
                        // Não faz nada - deixa o navegador recarregar a página normalmente
                        return;
                    }
                    
                    setActiveLink(this);
                });
            });

            function updateActiveStateBasedOnURL() {
                const currentPath = window.location.pathname;
                
                navLinks.forEach(link => {
                    const linkHref = link.getAttribute('href');
                    
                    // Verifica se o caminho atual corresponde ao link
                    if (currentPath.endsWith(linkHref) || 
                        (linkHref === 'index.php' && (currentPath.endsWith('/') || currentPath.endsWith('/index.php')))) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
            
            updateActiveStateBasedOnURL();
        });
    </script>
</body>
</html>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    /* Barra de navegação */
    .header {
        background: linear-gradient(135deg, #2365b1, #3a84d9); /* azul médio + mais claro */
        padding: 10px 0; /* igual em cima e em baixo */
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    .main-nav {
        background: transparent;
        margin: 0;
        padding: 0;
    }

    .nav-menu {
        list-style: none;
        display: flex;
        gap: 10px;
        margin: 0;
        padding: 0;
        background: transparent;
    }

    .nav-menu li {
        margin: 0;
        background: transparent;
    }

    .nav-menu a {
        color: #fff;
        text-decoration: none;
        font-weight: 600;
        font-size: 13px;
        padding: 6px 14px;
        border-radius: 20px;
        transition: all 0.3s ease;
        display: inline-block;
        text-align: center;
        min-width: 85px;
        background: linear-gradient(135deg, #8c8c8c, #6e6e6e); /* cinzento */
        border: 1.5px solid rgba(255, 255, 255, 0.3);
        position: relative;
        overflow: hidden;
        cursor: pointer;
    }

    .nav-menu a::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: left 0.5s;
    }

    .nav-menu a:hover {
        background: linear-gradient(135deg, #a0a0a0, #7d7d7d);
        transform: translateY(-2px) scale(1.02);
        border-color: rgba(255, 255, 255, 0.5);
    }

    .nav-menu a:hover::before {
        left: 100%;
    }

    .nav-menu a:active {
        transform: translateY(-1px) scale(1.01);
    }

    .nav-menu a.active {
        background: linear-gradient(135deg, #bfbfbf, #9c9c9c);
        font-weight: 700;
        border: 1.5px solid rgba(255, 255, 255, 0.6);
    }

    .nav-menu a.active::after {
        content: '';
        position: absolute;
        bottom: 3px;
        left: 50%;
        transform: translateX(-50%);
        width: 16px;
        height: 2px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 2px;
    }
</style>