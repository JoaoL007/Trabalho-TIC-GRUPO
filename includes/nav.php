<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barra de Navegação Incrível</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        :root {
            --primary-color: #6c63ff;
            --secondary-color: #4a44c9;
            --accent-color: #ff6584;
            --text-color: #333;
            --light-text: #fff;
            --bg-color: #fff;
            --shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            --transition: all 0.3s ease;
        }
        
        body {
            background-color: #f9f9f9;
            color: var(--text-color);
            line-height: 1.6;
        }
        
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: var(--bg-color);
            box-shadow: var(--shadow);
            z-index: 1000;
            padding: 0 5%;
            transition: var(--transition);
        }
        
        .navbar.scrolled {
            padding: 5px 5%;
            background-color: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
        }
        
        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            height: 70px;
        }
        
        .logo {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--primary-color);
            font-weight: 700;
            font-size: 1.5rem;
        }
        
        .logo-icon {
            margin-right: 8px;
            font-size: 1.8rem;
        }
        
        .nav-menu {
            display: flex;
            list-style: none;
        }
        
        .nav-item {
            margin: 0 15px;
            position: relative;
        }
        
        .nav-link {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            padding: 10px 0;
            position: relative;
            transition: var(--transition);
        }
        
        .nav-link:hover {
            color: var(--primary-color);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--primary-color);
            transition: var(--transition);
        }
        
        .nav-link:hover::after {
            width: 100%;
        }
        
        .nav-cta {
            background-color: var(--primary-color);
            color: var(--light-text);
            padding: 10px 20px;
            border-radius: 30px;
            transition: var(--transition);
        }
        
        .nav-cta:hover {
            background-color: var(--secondary-color);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(108, 99, 255, 0.4);
        }
        
        .nav-cta:hover::after {
            width: 0;
        }
        
        .hamburger {
            display: none;
            cursor: pointer;
            flex-direction: column;
            justify-content: space-between;
            width: 30px;
            height: 21px;
        }
        
        .hamburger span {
            display: block;
            height: 3px;
            width: 100%;
            background-color: var(--text-color);
            border-radius: 10px;
            transition: var(--transition);
        }
        
        .hamburger.active span:nth-child(1) {
            transform: translateY(9px) rotate(45deg);
        }
        
        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }
        
        .hamburger.active span:nth-child(3) {
            transform: translateY(-9px) rotate(-45deg);
        }
        
        .dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            background-color: var(--bg-color);
            box-shadow: var(--shadow);
            border-radius: 8px;
            padding: 15px 0;
            min-width: 200px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: var(--transition);
            z-index: 100;
        }
        
        .nav-item:hover .dropdown {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        .dropdown-item {
            display: block;
            padding: 10px 20px;
            text-decoration: none;
            color: var(--text-color);
            transition: var(--transition);
        }
        
        .dropdown-item:hover {
            background-color: rgba(108, 99, 255, 0.1);
            color: var(--primary-color);
        }
        
        /* Conteúdo de exemplo */
        .content {
            margin-top: 100px;
            padding: 40px 5%;
        }
        
        .hero {
            text-align: center;
            padding: 80px 0;
            background: linear-gradient(135deg, #6c63ff, #4a44c9);
            color: white;
            border-radius: 15px;
            margin-bottom: 50px;
        }
        
        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        section {
            margin-bottom: 60px;
        }
        
        section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        /* Responsividade */
        @media screen and (max-width: 968px) {
            .hamburger {
                display: flex;
            }
            
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                height: calc(100vh - 70px);
                background-color: var(--bg-color);
                flex-direction: column;
                align-items: center;
                justify-content: flex-start;
                padding-top: 50px;
                transition: var(--transition);
                box-shadow: var(--shadow);
            }
            
            .nav-menu.active {
                left: 0;
            }
            
            .nav-item {
                margin: 15px 0;
            }
            
            .dropdown {
                position: static;
                opacity: 1;
                visibility: visible;
                transform: none;
                box-shadow: none;
                background-color: transparent;
                padding: 10px 0 0 20px;
                display: none;
            }
            
            .nav-item:hover .dropdown {
                display: block;
            }
            
            .hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <div class="nav-container">
            <a href="#" class="logo">
                <span class="logo-icon">🚀</span>
                MeuSite
            </a>
            
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="#" class="nav-link">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Sobre</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Serviços</a>
                    <div class="dropdown">
                        <a href="#" class="dropdown-item">Web Design</a>
                        <a href="#" class="dropdown-item">Desenvolvimento</a>
                        <a href="#" class="dropdown-item">Marketing Digital</a>
                        <a href="#" class="dropdown-item">SEO</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Portfólio</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link nav-cta">Contato</a>
                </li>
            </ul>
        </div>
    </nav>
    
    <div class="content">
        <div class="hero">
            <h1>Barra de Navegação Incrível</h1>
            <p>Uma barra de navegação moderna, responsiva e visualmente impressionante</p>
        </div>
        
        <section>
            <h2>Recursos da Barra de Navegação</h2>
            <p>Esta barra de navegação inclui:</p>
            <ul>
                <li>Design moderno e limpo</li>
                <li>Totalmente responsiva</li>
                <li>Efeitos de hover suaves</li>
                <li>Menu dropdown elegante</li>
                <li>Efeito de blur ao rolar a página</li>
                <li>Animações CSS fluidas</li>
                <li>Menu mobile com ícone hamburger</li>
            </ul>
        </section>
        
        <section>
            <h2>Como Usar</h2>
            <p>Role a página para ver o efeito de blur na barra de navegação. Em dispositivos móveis, clique no ícone hamburger para abrir o menu.</p>
        </section>
        
        <section>
            <h2>Personalização</h2>
            <p>Você pode facilmente personalizar as cores, tamanhos e animações alterando as variáveis CSS na seção :root.</p>
        </section>
    </div>

    <script>
        // Menu mobile toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');
        
        hamburger.addEventListener('click', () => {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
        
        // Fechar menu ao clicar em um link
        document.querySelectorAll('.nav-link').forEach(n => n.addEventListener('click', () => {
            hamburger.classList.remove('active');
            navMenu.classList.remove('active');
        }));
        
        // Efeito de blur ao rolar
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    </script>
</body>
</html>