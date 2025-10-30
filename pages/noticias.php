<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RoboNews - Notícias de Robótica e Tecnologia</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset e configurações gerais */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        :root {
            --primary: #1a237e;
            --secondary: #283593;
            --accent: #00b0ff;
            --dark: #121212;
            --light: #f5f5f5;
            --gray: #757575;
            --danger: #d32f2f;
            --success: #388e3c;
        }

        body {
            background-color: var(--light);
            color: var(--dark);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 8px 16px;
            background-color: var(--accent);
            color: white;
            border-radius: 4px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn:hover {
            background-color: var(--primary);
            transform: translateY(-2px);
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .top-bar {
            background-color: var(--dark);
            color: white;
            padding: 8px 0;
            font-size: 0.9rem;
        }

        .top-bar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .social-icons a {
            margin-left: 15px;
            font-size: 1.1rem;
        }

        .main-header {
            padding: 15px 0;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo h1 {
            font-size: 2.2rem;
            color: var(--primary);
            margin-left: 10px;
        }

        .logo i {
            font-size: 2.5rem;
            color: var(--accent);
        }

        .search-bar {
            display: flex;
            width: 40%;
        }

        .search-bar input {
            flex: 1;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px 0 0 4px;
            font-size: 1rem;
        }

        .search-bar button {
            background-color: var(--primary);
            color: white;
            border: none;
            padding: 0 15px;
            border-radius: 0 4px 4px 0;
            cursor: pointer;
        }

        .user-actions a {
            margin-left: 15px;
            font-weight: 500;
        }

        /* Navegação */
        nav {
            background-color: var(--primary);
            color: white;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
        }

        .main-nav ul {
            display: flex;
        }

        .main-nav li {
            position: relative;
        }

        .main-nav a {
            display: block;
            padding: 15px 20px;
            font-weight: 500;
            transition: background-color 0.3s;
        }

        .main-nav a:hover {
            background-color: var(--secondary);
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: white;
            min-width: 200px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            z-index: 1;
        }

        .dropdown-content a {
            color: var(--dark);
            padding: 12px 16px;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

        .main-nav li:hover .dropdown-content {
            display: block;
        }

        /* Destaque principal */
        .featured {
            margin: 30px 0;
        }

        .featured-container {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .main-featured {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .main-featured img {
            width: 100%;
            height: 400px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }

        .main-featured:hover img {
            transform: scale(1.05);
        }

        .featured-content {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 30px;
        }

        .featured-content h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        .featured-content p {
            margin-bottom: 15px;
            font-size: 1.1rem;
        }

        .side-featured {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .side-item {
            display: flex;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .side-item img {
            width: 120px;
            height: 100px;
            object-fit: cover;
        }

        .side-content {
            padding: 15px;
        }

        .side-content h3 {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        /* Seção de notícias */
        .news-section {
            margin: 40px 0;
        }

        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent);
        }

        .section-header h2 {
            font-size: 1.8rem;
            color: var(--primary);
        }

        .news-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .news-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-5px);
        }

        .news-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .news-content {
            padding: 20px;
        }

        .news-category {
            display: inline-block;
            background-color: var(--accent);
            color: white;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-bottom: 10px;
        }

        .news-content h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .news-meta {
            display: flex;
            justify-content: space-between;
            color: var(--gray);
            font-size: 0.9rem;
            margin-top: 15px;
        }

        /* Vídeos */
        .videos-section {
            margin: 40px 0;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .videos-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .video-card {
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .video-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }

        .video-content {
            padding: 15px;
        }

        .video-content h3 {
            font-size: 1rem;
            margin-bottom: 5px;
        }

        /* Newsletter */
        .newsletter {
            background-color: var(--primary);
            color: white;
            padding: 50px 0;
            margin: 40px 0;
            text-align: center;
        }

        .newsletter h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }

        .newsletter p {
            max-width: 600px;
            margin: 0 auto 25px;
        }

        .newsletter-form {
            display: flex;
            max-width: 500px;
            margin: 0 auto;
        }

        .newsletter-form input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 4px 0 0 4px;
            font-size: 1rem;
        }

        .newsletter-form button {
            background-color: var(--accent);
            color: white;
            border: none;
            padding: 0 25px;
            border-radius: 0 4px 4px 0;
            font-weight: 600;
            cursor: pointer;
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-column h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--accent);
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a:hover {
            color: var(--accent);
        }

        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsividade */
        @media (max-width: 992px) {
            .featured-container {
                grid-template-columns: 1fr;
            }
            
            .news-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .videos-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .header-content {
                flex-direction: column;
                gap: 15px;
            }
            
            .search-bar {
                width: 100%;
            }
            
            .main-nav ul {
                flex-wrap: wrap;
            }
            
            .news-grid, .videos-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="date">Sábado, 15 de Outubro de 2023</div>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header>
        <div class="container main-header">
            <div class="header-content">
                <div class="logo">
                    <i class="fas fa-robot"></i>
                    <h1>RoboNews</h1>
                </div>
                <div class="search-bar">
                    <input type="text" placeholder="Pesquisar notícias...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="user-actions">
                    <a href="#"><i class="fas fa-user"></i> Entrar</a>
                    <a href="#"><i class="fas fa-bell"></i> Alertas</a>
                </div>
            </div>
        </div>

        <!-- Navegação -->
        <nav>
            <div class="container nav-container">
                <div class="main-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li>
                            <a href="#">Robótica <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-content">
                                <a href="#">Robôs Industriais</a>
                                <a href="#">Robôs de Serviço</a>
                                <a href="#">Robótica Médica</a>
                                <a href="#">Drones</a>
                            </div>
                        </li>
                        <li>
                            <a href="#">Automação <i class="fas fa-chevron-down"></i></a>
                            <div class="dropdown-content">
                                <a href="#">Inteligência Artificial</a>
                                <a href="#">Machine Learning</a>
                                <a href="#">Visão Computacional</a>
                                <a href="#">Processamento de Linguagem</a>
                            </div>
                        </li>
                        <li><a href="#">Inovações</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Vídeos</a></li>
                        <li><a href="#">Podcasts</a></li>
                    </ul>
                </div>
                <div class="breaking-news">
                    <a href="#" class="btn" style="background-color: var(--danger);">ÚLTIMA HORA</a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Conteúdo Principal -->
    <main class="container">
        <!-- Destaque -->
        <section class="featured">
            <div class="featured-container">
                <div class="main-featured">
                    <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Robô humanoide avançado">
                    <div class="featured-content">
                        <h2>Novo robô humanoide da Tesla supera expectativas em testes</h2>
                        <p>O Optimus, robô humanoide da Tesla, demonstra habilidades avançadas de manipulação e navegação em ambiente não estruturado.</p>
                        <a href="#" class="btn">Ler Mais</a>
                    </div>
                </div>
                <div class="side-featured">
                    <div class="side-item">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80" alt="Drone de entrega">
                        <div class="side-content">
                            <h3>Drones de entrega começam operação em São Paulo</h3>
                            <div class="news-meta">
                                <span><i class="far fa-clock"></i> 2h atrás</span>
                            </div>
                        </div>
                    </div>
                    <div class="side-item">
                        <img src="https://images.unsplash.com/photo-1555255707-c07966088b7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Cirurgia robótica">
                        <div class="side-content">
                            <h3>Robô cirurgião realiza procedimento complexo com sucesso</h3>
                            <div class="news-meta">
                                <span><i class="far fa-clock"></i> 5h atrás</span>
                            </div>
                        </div>
                    </div>
                    <div class="side-item">
                        <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Fábrica automatizada">
                        <div class="side-content">
                            <h3>Indústria 4.0: fábricas inteligentes aumentam produtividade em 40%</h3>
                            <div class="news-meta">
                                <span><i class="far fa-clock"></i> 8h atrás</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Notícias em Destaque -->
        <section class="news-section">
            <div class="section-header">
                <h2>Notícias em Destaque</h2>
                <a href="#" class="btn">Ver Todas</a>
            </div>
            <div class="news-grid">
                <div class="news-card">
                    <img src="https://images.unsplash.com/photo-1591115765373-5207764f70e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Robô de companhia">
                    <div class="news-content">
                        <span class="news-category">Robótica Social</span>
                        <h3>Robôs de companhia ajudam idosos durante isolamento</h3>
                        <p>Estudo mostra que interação com robôs sociais reduz sentimentos de solidão em 65%.</p>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 1 dia atrás</span>
                            <span><i class="far fa-comment"></i> 42</span>
                        </div>
                    </div>
                </div>
                <div class="news-card">
                    <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Carro autônomo">
                    <div class="news-content">
                        <span class="news-category">Veículos Autônomos</span>
                        <h3>Waymo expande serviço de táxi autônomo para mais 3 cidades</h3>
                        <p>Empresa anuncia expansão após sucesso nas operações atuais.</p>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 1 dia atrás</span>
                            <span><i class="far fa-comment"></i> 28</span>
                        </div>
                    </div>
                </div>
                <div class="news-card">
                    <img src="https://images.unsplash.com/photo-1535378620166-273708d44e4c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Agricultura de precisão">
                    <div class="news-content">
                        <span class="news-category">AgroTech</span>
                        <h3>Robôs agrícolas aumentam produtividade em 30%</h3>
                        <p>Tecnologia permite monitoramento preciso e aplicação localizada de insumos.</p>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 2 dias atrás</span>
                            <span><i class="far fa-comment"></i> 35</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Vídeos -->
        <section class="videos-section">
            <div class="section-header">
                <h2>Vídeos em Destaque</h2>
                <a href="#" class="btn">Ver Todos</a>
            </div>
            <div class="videos-grid">
                <div class="video-card">
                    <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Vídeo 1">
                    <div class="video-content">
                        <h3>Demonstração do robô Atlas da Boston Dynamics</h3>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 5h atrás</span>
                        </div>
                    </div>
                </div>
                <div class="video-card">
                    <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80" alt="Vídeo 2">
                    <div class="video-content">
                        <h3>Como os drones estão revolucionando as entregas</h3>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 1 dia atrás</span>
                        </div>
                    </div>
                </div>
                <div class="video-card">
                    <img src="https://images.unsplash.com/photo-1555255707-c07966088b7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Vídeo 3">
                    <div class="video-content">
                        <h3>Robótica médica: o futuro da cirurgia</h3>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 2 dias atrás</span>
                        </div>
                    </div>
                </div>
                <div class="video-card">
                    <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Vídeo 4">
                    <div class="video-content">
                        <h3>Inside da fábrica totalmente automatizada</h3>
                        <div class="news-meta">
                            <span><i class="far fa-clock"></i> 3 dias atrás</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter -->
        <section class="newsletter">
            <h2>Fique por dentro das novidades</h2>
            <p>Receba as principais notícias sobre robótica e tecnologia diretamente no seu email.</p>
            <form class="newsletter-form">
                <input type="email" placeholder="Seu melhor email">
                <button type="submit">Inscrever</button>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-column">
                    <h3>RoboNews</h3>
                    <p>O portal líder em notícias sobre robótica, automação e tecnologia. Trazendo as últimas inovações e tendências do setor.</p>
                    <div class="social-icons" style="margin-top: 20px;">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-column">
                    <h3>Categorias</h3>
                    <ul>
                        <li><a href="#">Robótica Industrial</a></li>
                        <li><a href="#">Robótica de Serviço</a></li>
                        <li><a href="#">IA e Machine Learning</a></li>
                        <li><a href="#">Drones e Veículos Autônomos</a></li>
                        <li><a href="#">Robótica Médica</a></li>
                        <li><a href="#">AgroTech</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Links Úteis</h3>
                    <ul>
                        <li><a href="#">Sobre Nós</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="#">Anuncie</a></li>
                        <li><a href="#">Política de Privacidade</a></li>
                        <li><a href="#">Termos de Uso</a></li>
                        <li><a href="#">Trabalhe Conosco</a></li>
                    </ul>
                </div>
                <div class="footer-column">
                    <h3>Newsletter</h3>
                    <p>Inscreva-se para receber as últimas notícias sobre robótica.</p>
                    <form style="margin-top: 15px;">
                        <input type="email" placeholder="Seu email" style="width: 100%; padding: 10px; margin-bottom: 10px; border-radius: 4px; border: none;">
                        <button type="submit" class="btn" style="width: 100%;">Inscrever</button>
                    </form>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 RoboNews. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Simulação de notícias em tempo real
        const breakingNews = document.querySelector('.breaking-news');
        const breakingNewsBtn = breakingNews.querySelector('.btn');
        
        // Array de notícias de última hora
        const breakingNewsTitles = [
            "NOVO: Robô da Boston Dynamics realiza salto recorde",
            "URGENTE: Startup anuncia robô doméstico por menos de R$ 5.000",
            "BREAKING: IA supera humanos em teste de criatividade"
        ];
        
        let currentNewsIndex = 0;
        
        // Alternar notícias de última hora a cada 10 segundos
        setInterval(() => {
            currentNewsIndex = (currentNewsIndex + 1) % breakingNewsTitles.length;
            breakingNewsBtn.textContent = breakingNewsTitles[currentNewsIndex];
        }, 10000);
        
        // Adicionar interatividade aos cards de notícia
        document.querySelectorAll('.news-card').forEach(card => {
            card.addEventListener('click', function() {
                // Simulação de redirecionamento para a notícia completa
                alert('Redirecionando para a notícia completa...');
            });
        });
    </script>
</body>
</html>