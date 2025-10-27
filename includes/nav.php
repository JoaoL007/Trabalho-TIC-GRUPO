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
                    <li><a href="../index.php" class="active">Início</a></li>
                    <li><a href="pages/noticias.php">Notícias</a></li>
                    <li><a href="pages/sobre.php">Sobre</a></li>
                </ul>
            </nav>
        </div>
    </header>
</body>
</html>

<style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            padding: 15px 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: flex-end;
        }

        .nav-menu {
            list-style: none;
            display: flex;
            gap: 15px;
        }

        .nav-menu li {
            margin: 0;
        }

        .nav-menu a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            padding: 12px 24px;
            border-radius: 30px;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.1);
            display: inline-block;
            text-align: center;
            min-width: 120px;
        }

        .nav-menu a:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilo para página ativa */
        .nav-menu a.active {
            background-color: rgba(255, 255, 255, 0.25);
            font-weight: 700;
        }
    </style>