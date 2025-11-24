<?php
// Footer do site
?>
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section">
                <div class="footer-logo">
                    <i class="fas fa-robot footer-logo-icon"></i>
                    <h3>RoboNews</h3>
                </div>
                <p class="footer-description">
                    Sua fonte confiável de notícias sobre robótica, IA e tecnologia.
                </p>
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4>Início</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? '../index.php' : 'index.php'; ?>">Início</a></li>
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'noticias.php' : 'pages/noticias.php'; ?>">Notícias</a></li>
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'categorias.php' : 'pages/categorias.php'; ?>">Categorias</a></li>
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'sobre.php' : 'pages/sobre.php'; ?>">Sobre</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="footer-section">
                <h4>Categorias</h4>
                <ul class="footer-links">
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'noticias.php?categoria=ia' : 'pages/noticias.php?categoria=ia'; ?>">Inteligência Artificial</a></li>
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'noticias.php?categoria=robotica' : 'pages/noticias.php?categoria=robotica'; ?>">Robótica</a></li>
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'noticias.php?categoria=saude' : 'pages/noticias.php?categoria=saude'; ?>">Indústria 4.0</a></li>
                    <li><a href="<?php echo strpos($_SERVER['PHP_SELF'], '/pages/') !== false ? 'noticias.php?categoria=iot' : 'pages/noticias.php?categoria=iot'; ?>">IoT & Conectividade</a></li>
                </ul>
            </div>

            <!-- Contact -->
            <div class="footer-section">
                <h4>Contacto</h4>
                <div class="footer-contact-item">
                    <i class="fas fa-envelope"></i>
                    <span>email@robonews.com</span>
                </div>
                <div class="footer-contact-item">
                    <i class="fas fa-phone"></i>
                    <span>+351 123 456 789</span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="footer-container">
            <p class="copyright">
                &copy; <?php echo date('Y'); ?> RoboNews. Todos os direitos reservados.
            </p>
            <p class="developer-credit">
                Desenvolvido por: <span class="team-names">João, Eduardo, Carlos, Santiago</span>
            </p>
        </div>
    </div>
</footer>

