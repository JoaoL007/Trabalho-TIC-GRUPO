<?php
// Dados das notícias
$noticias = [
    1 => [
        'titulo' => 'Novo robô humanoide da Tesla supera expectativas em testes',
        'imagem' => 'https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'categoria' => 'Robótica Industrial',
        'data' => '15 de Outubro de 2023',
        'autor' => 'Carlos Silva',
        'resumo' => 'O Optimus, robô humanoide da Tesla, demonstra habilidades avançadas de manipulação e navegação em ambiente não estruturado.',
        'conteudo' => '<p>O Optimus, robô humanoide desenvolvido pela Tesla, está superando todas as expectativas em testes recentes realizados nos laboratórios da empresa. De acordo com engenheiros envolvidos no projeto, o robô demonstrou capacidades impressionantes de manipulação de objetos e navegação em ambientes não estruturados.</p>
        
        <h2>Habilidades Demonstradas</h2>
        <p>Durante os testes, o Optimus foi capaz de:</p>
        <ul>
            <li>Reconhecer e manipular objetos de diferentes formas e tamanhos</li>
            <li>Navegar por espaços complexos com obstáculos</li>
            <li>Executar tarefas sequenciais de forma autônoma</li>
            <li>Adaptar-se a mudanças no ambiente em tempo real</li>
        </ul>
        
        <blockquote>"Estamos impressionados com o progresso do Optimus. Ele está demonstrando habilidades que antecipávamos para versões muito mais futuras" - Elon Musk, CEO da Tesla</blockquote>
        
        <h2>Próximos Passos</h2>
        <p>A Tesla planeja iniciar testes em ambientes de produção ainda este ano, com o objetivo de implementar os robôs em suas fábricas até o final de 2024.</p>',
        'tags' => ['Tesla', 'Optimus', 'Robótica', 'IA']
    ],
    2 => [
        'titulo' => 'Drones de entrega começam operação em São Paulo',
        'imagem' => 'https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80',
        'categoria' => 'Drones',
        'data' => '14 de Outubro de 2023',
        'autor' => 'Ana Rodrigues',
        'resumo' => 'Serviço pioneiro utiliza drones para entregas rápidas em regiões centrais da capital paulista.',
        'conteudo' => '<p>A cidade de São Paulo deu mais um passo em direção ao futuro com o início das operações de drones de entrega em regiões selecionadas. O serviço, pioneiro no Brasil, promete revolucionar a logística urbana.</p>
        
        <h2>Como Funciona</h2>
        <p>Os drones operam em rotas pré-definidas e podem transportar pacotes de até 2kg. As entregas são realizadas em pontos específicos de coleta, localizados em edifícios comerciais e residenciais.</p>
        
        <h2>Vantagens</h2>
        <ul>
            <li>Redução do tempo de entrega em até 70%</li>
            <li>Diminuição do tráfego urbano</li>
            <li>Menor impacto ambiental</li>
            <li>Entregas 24/7</li>
        </ul>
        
        <p>A expectativa é expandir o serviço para outras regiões da cidade nos próximos meses.</p>',
        'tags' => ['Drones', 'Entregas', 'São Paulo', 'Tecnologia']
    ],
    3 => [
        'titulo' => 'Robô cirurgião realiza procedimento complexo com sucesso',
        'imagem' => 'https://images.unsplash.com/photo-1555255707-c07966088b7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'categoria' => 'Robótica Médica',
        'data' => '13 de Outubro de 2023',
        'autor' => 'Dr. Roberto Almeida',
        'resumo' => 'Sistema robótico realiza cirurgia cardíaca minimamente invasiva com precisão milimétrica.',
        'conteudo' => '<p>Um avanço significativo na medicina robótica foi alcançado com a realização bem-sucedida de uma cirurgia cardíaca complexa utilizando um sistema robótico de última geração.</p>
        
        <h2>O Procedimento</h2>
        <p>A cirurgia, realizada no Hospital Albert Einstein, envolveu a correção de uma valvulopatia cardíaca utilizando o sistema robótico Da Vinci XI. O procedimento durou aproximadamente três horas e foi supervisionado por uma equipe médica especializada.</p>
        
        <h2>Benefícios da Cirurgia Robótica</h2>
        <ul>
            <li>Incisões menores e menos traumáticas</li>
            <li>Precisão milimétrica nos movimentos</li>
            <li>Recuperação mais rápida do paciente</li>
            <li>Menor risco de infecções</li>
        </ul>
        
        <blockquote>"A precisão do sistema robótico nos permite realizar procedimentos que antes eram considerados de altíssimo risco" - Dr. Carlos Silva, cirurgião cardíaco</blockquote>
        
        <p>Espera-se que esta tecnologia se torne mais acessível nos próximos anos, beneficiando um número maior de pacientes.</p>',
        'tags' => ['Medicina', 'Cirurgia', 'Robótica Médica', 'Saúde']
    ],
    4 => [
        'titulo' => 'Indústria 4.0: fábricas inteligentes aumentam produtividade em 40%',
        'imagem' => 'https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'categoria' => 'Indústria 4.0',
        'data' => '12 de Outubro de 2023',
        'autor' => 'Fernanda Costa',
        'resumo' => 'Implementação de tecnologias avançadas resulta em ganhos significativos de eficiência operacional.',
        'conteudo' => '<p>As fábricas inteligentes, baseadas nos princípios da Indústria 4.0, estão demonstrando ganhos de produtividade impressionantes, com algumas unidades reportando aumentos de até 40% na eficiência operacional.</p>
        
        <h2>Tecnologias Implementadas</h2>
        <p>As fábricas modernas estão integrando diversas tecnologias avançadas:</p>
        <ul>
            <li>Internet das Coisas (IoT) para monitoramento em tempo real</li>
            <li>Robôs colaborativos (cobots) trabalhando lado a lado com humanos</li>
            <li>Sistemas de visão computacional para controle de qualidade</li>
            <li>Inteligência Artificial para previsão de manutenção</li>
        </ul>
        
        <h2>Resultados Obtidos</h2>
        <p>Além do aumento de 40% na produtividade, as fábricas inteligentes reportam:</p>
        <ul>
            <li>Redução de 60% no tempo de inatividade</li>
            <li>Economia de 25% no consumo de energia</li>
            <li>Melhoria de 30% na qualidade dos produtos</li>
        </ul>',
        'tags' => ['Indústria 4.0', 'Automação', 'IoT', 'IA']
    ],
    5 => [
        'titulo' => 'Robôs de companhia ajudam idosos durante isolamento',
        'imagem' => 'https://images.unsplash.com/photo-1591115765373-5207764f70e0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'categoria' => 'Robótica Social',
        'data' => '11 de Outubro de 2023',
        'autor' => 'Mariana Lima',
        'resumo' => 'Estudo mostra que interação com robôs sociais reduz sentimentos de solidão em 65%.',
        'conteudo' => '<p>Estudo recente demonstra que a interação com robôs sociais pode reduzir significativamente os sentimentos de solidão em idosos, com resultados mostrando uma diminuição de 65% nos relatos de isolamento social.</p>
        
        <h2>Como os Robôs Ajudam</h2>
        <p>Os robôs de companhia são projetados para:</p>
        <ul>
            <li>Fornecer lembretes de medicamentos</li>
            <li>Estimular atividades físicas e mentais</li>
            <li>Facilitar videochamadas com familiares</li>
            <li>Oferecer companhia e entretenimento</li>
        </ul>
        
        <h2>Resultados do Estudo</h2>
        <p>A pesquisa, conduzida com 500 participantes durante 6 meses, revelou:</p>
        <ul>
            <li>65% de redução em sentimentos de solidão</li>
            <li>40% de aumento na socialização</li>
            <li>30% de melhoria na adesão a medicamentos</li>
        </ul>',
        'tags' => ['Robótica Social', 'Idosos', 'Saúde', 'Tecnologia']
    ],
    6 => [
        'titulo' => 'Waymo expande serviço de táxi autônomo para mais 3 cidades',
        'imagem' => 'https://images.unsplash.com/photo-1677442136019-21780ecad995?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'categoria' => 'Veículos Autônomos',
        'data' => '10 de Outubro de 2023',
        'autor' => 'Ricardo Torres',
        'resumo' => 'Empresa anuncia expansão após sucesso nas operações atuais.',
        'conteudo' => '<p>A Waymo, empresa líder em tecnologia de veículos autônomos, anunciou a expansão de seu serviço de táxi autônomo para mais três cidades americanas, marcando um importante passo na popularização desta tecnologia.</p>
        
        <h2>Novas Cidades</h2>
        <p>O serviço será disponibilizado em:</p>
        <ul>
            <li>Miami, Flórida</li>
            <li>Austin, Texas</li>
            <li>Seattle, Washington</li>
        </ul>
        
        <h2>Segurança e Desempenho</h2>
        <p>De acordo com relatórios da empresa:</p>
        <ul>
            <li>Mais de 1 milhão de milhas percorridas sem acidentes graves</li>
            <li>Taxa de aceitação de 94% pelos usuários</li>
            <li>Tempo médio de espera de menos de 5 minutos</li>
        </ul>',
        'tags' => ['Waymo', 'Veículos Autônomos', 'Táxi', 'Tecnologia']
    ]
];

// Verifica se foi solicitado um artigo específico
$artigo_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$artigo = null;

if ($artigo_id > 0 && isset($noticias[$artigo_id])) {
    $artigo = $noticias[$artigo_id];
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $artigo ? $artigo['titulo'] . ' - RoboNews' : 'RoboNews - Notícias de Robótica e Tecnologia'; ?></title>
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

        /* Página de Artigo */
        .article-page {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
            margin: 30px 0;
            padding: 0;
            overflow: hidden;
        }

        .article-header {
            position: relative;
            margin-bottom: 0;
        }

        .article-header img {
            width: 100%;
            height: 500px;
            object-fit: cover;
        }

        .article-title {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
            color: white;
            padding: 40px;
        }

        .article-title h1 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .article-meta {
            display: flex;
            gap: 20px;
            color: #ddd;
            font-size: 0.9rem;
        }

        .article-content {
            padding: 40px;
        }

        .article-body {
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 40px;
        }

        .article-body p {
            margin-bottom: 20px;
        }

        .article-body h2 {
            color: var(--primary);
            margin: 30px 0 15px;
        }

        .article-body ul, .article-body ol {
            margin: 20px 0;
            padding-left: 30px;
        }

        .article-body li {
            margin-bottom: 10px;
        }

        .article-body blockquote {
            border-left: 4px solid var(--accent);
            padding-left: 20px;
            margin: 25px 0;
            font-style: italic;
            color: var(--gray);
        }

        .article-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 30px 0;
        }

        .tag {
            background-color: var(--light);
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: var(--gray);
        }

        .article-navigation {
            display: flex;
            justify-content: space-between;
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 30px;
        }

        .social-share a {
            margin-left: 10px;
            color: var(--gray);
            font-size: 1.2rem;
        }

        .social-share a:hover {
            color: var(--accent);
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
            cursor: pointer;
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
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .side-item:hover {
            transform: translateY(-3px);
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
            cursor: pointer;
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
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .video-card:hover {
            transform: translateY(-3px);
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
            
            .article-title h1 {
                font-size: 1.8rem;
            }
            
            .article-header img {
                height: 300px;
            }
        }
    </style>
</head>
<body>
    <!-- Top Bar -->
    <div class="top-bar">
        <div class="container top-bar-content">
            <div class="date"><?php echo date('l, d \d\e F \d\e Y'); ?></div>
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
                <a href="noticias.php" class="logo">
                    <i class="fas fa-robot"></i>
                    <h1>RoboNews</h1>
                </a>
                <div class="search-bar">
                    <input type="text" placeholder="Pesquisar notícias...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="user-actions">
                    <a href="#"><i class="fas fa-bell"></i> Alertas</a>
                </div>
            </div>
        </div>

        <!-- Navegação -->
        <nav>
            <div class="container nav-container">
                <div class="main-nav">
                    <ul>
                        <li><a href="index.php">Index</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="sobre.php">Sobre</a></li>
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
        <?php if ($artigo): ?>
            <!-- Página de Artigo Individual -->
            <article class="article-page">
                <div class="article-header">
                    <img src="<?php echo $artigo['imagem']; ?>" alt="<?php echo $artigo['titulo']; ?>">
                    <div class="article-title">
                        <h1><?php echo $artigo['titulo']; ?></h1>
                        <div class="article-meta">
                            <span><i class="far fa-calendar"></i> <?php echo $artigo['data']; ?></span>
                            <span><i class="far fa-user"></i> <?php echo $artigo['autor']; ?></span>
                            <span><i class="far fa-folder"></i> <?php echo $artigo['categoria']; ?></span>
                            <span><i class="far fa-clock"></i> 5 min de leitura</span>
                        </div>
                    </div>
                </div>
                <div class="article-content">
                    <div class="article-body">
                        <?php echo $artigo['conteudo']; ?>
                    </div>
                    
                    <div class="article-tags">
                        <?php foreach ($artigo['tags'] as $tag): ?>
                            <span class="tag">#<?php echo $tag; ?></span>
                        <?php endforeach; ?>
                    </div>
                    
                    <div class="article-navigation">
                        <a href="noticias.php" class="btn"><i class="fas fa-arrow-left"></i> Voltar para Notícias</a>
                        <div class="social-share">
                            <span>Compartilhar: </span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
            </article>
        <?php else: ?>
            <!-- Lista de Notícias -->
            <!-- Destaque -->
            <section class="featured">
                <div class="featured-container">
                    <div class="main-featured" onclick="window.location.href='noticias.php?id=1'">
                        <img src="/assets/images/kaicenat.png" alt="Robô humanoide avançado">
                        <div class="featured-content">
                            <h2>Novo robô humanoide da Tesla supera expectativas em testes</h2>
                            <p>O Optimus, robô humanoide da Tesla, demonstra habilidades avançadas de manipulação e navegação em ambiente não estruturado.</p>
                            <a href="noticias.php?id=1" class="btn">Ler Mais</a>
                        </div>
                    </div>
                    <div class="side-featured">
                        <div class="side-item" onclick="window.location.href='noticias.php?id=2'">
                            <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80" alt="Drone de entrega">
                            <div class="side-content">
                                <h3>Drones de entrega começam operação em São Paulo</h3>
                                <div class="news-meta">
                                    <span><i class="far fa-clock"></i> 2h atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="side-item" onclick="window.location.href='noticias.php?id=3'">
                            <img src="https://images.unsplash.com/photo-1555255707-c07966088b7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Cirurgia robótica">
                            <div class="side-content">
                                <h3>Robô cirurgião realiza procedimento complexo com sucesso</h3>
                                <div class="news-meta">
                                    <span><i class="far fa-clock"></i> 5h atrás</span>
                                </div>
                            </div>
                        </div>
                        <div class="side-item" onclick="window.location.href='noticias.php?id=4'">
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
                    <span><?php echo count($noticias); ?> artigos</span>
                </div>
                <div class="news-grid">
                    <?php foreach ($noticias as $id => $noticia): ?>
                    <div class="news-card" onclick="window.location.href='noticias.php?id=<?php echo $id; ?>'">
                        <img src="<?php echo $noticia['imagem']; ?>" alt="<?php echo $noticia['titulo']; ?>">
                        <div class="news-content">
                            <span class="news-category"><?php echo $noticia['categoria']; ?></span>
                            <h3><?php echo $noticia['titulo']; ?></h3>
                            <p><?php echo $noticia['resumo']; ?></p>
                            <div class="news-meta">
                                <span><i class="far fa-calendar"></i> <?php echo $noticia['data']; ?></span>
                                <span><i class="far fa-comment"></i> 12</span>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </section>

            <!-- Vídeos -->
            <section class="videos-section">
                <div class="section-header">
                    <h2>Vídeos em Destaque</h2>
                    <a href="#" class="btn">Ver Todos</a>
                </div>
                <div class="videos-grid">
                    <div class="video-card" onclick="window.location.href='video.php?id=1'">
                        <img src="https://images.unsplash.com/photo-1485827404703-89b55fcc595e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Vídeo 1">
                        <div class="video-content">
                            <h3>Demonstração do robô Atlas da Boston Dynamics</h3>
                            <div class="news-meta">
                                <span><i class="far fa-clock"></i> 5h atrás</span>
                            </div>
                        </div>
                    </div>
                    <div class="video-card" onclick="window.location.href='video.php?id=2'">
                        <img src="https://images.unsplash.com/photo-1593508512255-86ab42a8e620?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1478&q=80" alt="Vídeo 2">
                        <div class="video-content">
                            <h3>Como os drones estão revolucionando as entregas</h3>
                            <div class="news-meta">
                                <span><i class="far fa-clock"></i> 1 dia atrás</span>
                            </div>
                        </div>
                    </div>
                    <div class="video-card" onclick="window.location.href='video.php?id=3'">
                        <img src="https://images.unsplash.com/photo-1555255707-c07966088b7b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Vídeo 3">
                        <div class="video-content">
                            <h3>Robótica médica: o futuro da cirurgia</h3>
                            <div class="news-meta">
                                <span><i class="far fa-clock"></i> 2 dias atrás</span>
                            </div>
                        </div>
                    </div>
                    <div class="video-card" onclick="window.location.href='video.php?id=4'">
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
        <?php endif; ?>
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
                        <li><a href="sobre.php">Sobre Nós</a></li>
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
    </script>
</body>
</html>