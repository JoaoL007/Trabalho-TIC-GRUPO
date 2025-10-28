<!-- Navigation -->
<header class="header">
    <div class="container">
        <nav class="main-nav">
            <div class="nav-brand">
                <h1>🤖 RoboNews</h1>
            </div>
            <ul class="nav-menu">
                <li><a href="index.php" class="nav-link active">Início</a></li>
                <li><a href="pages/noticias.php" class="nav-link">Notícias</a></li>
                <li><a href="pages/sobre.php" class="nav-link">Sobre</a></li>
            </ul>
            <div class="nav-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>
</header>

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

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .header {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        padding: 20px 0;
    }

    .container {
        width: 90%;
        max-width: 1200px;
        margin: 0 auto;
        display: flex;
        justify-content: flex-end;
    }

    /* CORREÇÃO: Remove qualquer fundo do main-nav */
    .main-nav {
        background: transparent;
        margin: 0;
        padding: 0;
    }

    .nav-menu {
        list-style: none;
        display: flex;
        gap: 20px;
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
        font-size: 16px;
        padding: 14px 28px;
        border-radius: 35px;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        display: inline-block;
        text-align: center;
        min-width: 130px;
        /* Cor igual ao header - azul escuro */
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        border: 2px solid rgba(255, 255, 255, 0.2);
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
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        transform: translateY(-3px) scale(1.05);
        border-color: rgba(255, 255, 255, 0.4);
    }

    .nav-menu a:hover::before {
        left: 100%;
    }

    .nav-menu a:active {
        transform: translateY(-1px) scale(1.02);
    }

    /* Estilo para página ativa */
    .nav-menu a.active {
        background: linear-gradient(135deg, #1e3c72, #2a5298);
        font-weight: 700;
        border: 2px solid rgba(255, 255, 255, 0.5);
    }

    .nav-menu a.active::after {
        content: '';
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
        width: 30px;
        height: 3px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 2px;
    }
</style>

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

        updateActiveStateBasedOnURL();
    });
</script>
</style>