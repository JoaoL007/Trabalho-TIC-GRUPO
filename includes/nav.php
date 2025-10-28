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

    <div class="content">
        <div class="logo">RoboNews</div>
        <div class="subtitle">Portal de Notícias de Robótica</div>
        
        <div class="demo-text">
            <h2>Barra de Navegação Atualizada</h2>
            <p>Esta é uma demonstração da barra de navegação com o tema azul claro. Clique nos diferentes links para ver a funcionalidade de destaque da página ativa.</p>
            <p>A navegação agora possui cores mais suaves, tamanhos reduzidos e mantém todas as animações e funcionalidades dinâmicas.</p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const navLinks = document.querySelectorAll('.nav-link');
            
            function setActiveLink(clickedLink) {
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });
                
                clickedLink.classList.add('active');
            }
            
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // Para demonstração, vamos impedir a navegação real
                    e.preventDefault();
                    setActiveLink(this);
                });
            });
            
            function updateActiveStateBasedOnURL() {
                const currentPath = window.location.pathname;
                navLinks.forEach(link => {
                    if (link.getAttribute('href') === currentPath) {
                        link.classList.add('active');
                    } else {
                        link.classList.remove('active');
                    }
                });
            }
            
            // Chama a função para verificar a URL atual
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

        body {
            background-color: #f0f8ff;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .header {
            background: linear-gradient(135deg, #6ecbf5, #059ee3);
            padding: 15px 0;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: flex-end;
        }

        .main-nav {
            background: transparent;
            margin: 0;
            padding: 0;
        }

        .nav-menu {
            list-style: none;
            display: flex;
            gap: 15px;
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
            font-size: 15px;
            padding: 12px 24px;
            border-radius: 30px;
            transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            display: inline-block;
            text-align: center;
            min-width: 110px;
            background: linear-gradient(135deg, #6ecbf5, #059ee3);
            border: 2px solid rgba(255, 255, 255, 0.3);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .nav-menu a::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s;
        }

        .nav-menu a:hover {
            background: linear-gradient(135deg, #7ed4ff, #0aa8f0);
            transform: translateY(-3px) scale(1.05);
            border-color: rgba(255, 255, 255, 0.5);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        .nav-menu a:hover::before {
            left: 100%;
        }

        .nav-menu a:active {
            transform: translateY(-1px) scale(1.02);
        }

        /* Estilo para página ativa */
        .nav-menu a.active {
            background: linear-gradient(135deg, #4bb4e6, #0486c2);
            font-weight: 700;
            border: 2px solid rgba(255, 255, 255, 0.6);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
        }

        .nav-menu a.active::after {
            content: '';
            position: absolute;
            bottom: 5px;
            left: 50%;
            transform: translateX(-50%);
            width: 25px;
            height: 3px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 2px;
        }

        .content {
            text-align: center;
            padding: 40px 20px;
            max-width: 800px;
        }

        .logo {
            font-size: 3rem;
            font-weight: 700;
            color: #059ee3;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
        }

        .subtitle {
            font-size: 1.2rem;
            color: #666;
            margin-bottom: 30px;
        }

        .demo-text {
            background-color: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            margin-top: 30px;
        }

        .demo-text h2 {
            color: #059ee3;
            margin-bottom: 15px;
        }

        .demo-text p {
            line-height: 1.6;
            color: #555;
        }
    </style>