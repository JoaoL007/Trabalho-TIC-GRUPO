<?php
// Footer do site
?>
<footer class="site-footer">
    <div class="footer-main">
        <div class="footer-container">
            <!-- About Section -->
            <div class="footer-section">
                <div class="footer-logo">
                    <img src="assets/images/logo-simple.svg" alt="RoboNews Logo">
                    <h3>RoboNews</h3>
                </div>
                <p class="footer-description">
                    Seu portal de notícias sobre robótica, inteligência artificial e as mais recentes inovações tecnológicas.
                </p>
                <div class="footer-social">
                    <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="social-link" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="footer-section">
                <h4 class="footer-title">Links Rápidos</h4>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-chevron-right"></i> Início</a></li>
                    <li><a href="pages/noticias.php"><i class="fas fa-chevron-right"></i> Notícias</a></li>
                    <li><a href="pages/sobre.php"><i class="fas fa-chevron-right"></i> Sobre Nós</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Contato</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Política de Privacidade</a></li>
                </ul>
            </div>

            <!-- Categories -->
            <div class="footer-section">
                <h4 class="footer-title">Categorias</h4>
                <ul class="footer-links">
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Robótica Médica</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Inteligência Artificial</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Automação Industrial</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Robótica Doméstica</a></li>
                    <li><a href="#"><i class="fas fa-chevron-right"></i> Exploração Espacial</a></li>
                </ul>
            </div>

            <!-- Newsletter -->
            <div class="footer-section">
                <h4 class="footer-title">Newsletter</h4>
                <p class="newsletter-text">Receba as últimas notícias diretamente no seu email.</p>
                <form class="newsletter-form" onsubmit="event.preventDefault(); alert('Obrigado por se inscrever!');">
                    <input type="email" placeholder="Seu email" required>
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </form>
                <div class="footer-contact">
                    <p><i class="fas fa-envelope"></i> contato@robonews.pt</p>
                    <p><i class="fas fa-phone"></i> +351 123 456 789</p>
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

